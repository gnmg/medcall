<?php

namespace Spark\Actions;

use Illuminate\Validation\ValidationException;
use Spark\Contracts\Actions\UpdatesSubscriptions;
use Spark\Spark;
use Stripe\Exception\CardException;

class UpdateSubscription implements UpdatesSubscriptions
{
    /**
     * @inheritDoc
     */
    public function update($subscription, $plan)
    {
        $subscription->errorIfPaymentFails();

        if (($payment = $subscription->latestPayment()) && ! $payment->isSucceeded()) {
            $subscription->noProrate();

            $subscription->latestInvoice()->void();
        } else {
            $subscription->setProrationBehavior(Spark::prorationBehavior());
        }

        try {
            $subscription->swapAndInvoice($plan);
        } catch (CardException $e) {
            throw ValidationException::withMessages([
                '*' => __('Your card was declined. Please contact your card issuer for more information.')
            ]);
        } catch (\Throwable $e) {
            report($e);

            throw ValidationException::withMessages([
                '*' => __('We are unable to process your payment. Please contact customer support.')
            ]);
        }
    }
}
