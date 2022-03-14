<?php

namespace Spark;

use Illuminate\Support\Arr;

class Features
{
    /**
     * Determine if the given feature is enabled.
     *
     * @param  string  $feature
     * @return bool
     */
    public static function enabled(string $feature)
    {
        return in_array($feature, config('spark.features', []));
    }

    /**
     * Determine if the feature is enabled and has a given option enabled.
     *
     * @param  string  $feature
     * @param  string  $option
     * @return bool
     */
    public static function optionEnabled(string $feature, string $option)
    {
        return static::enabled($feature) &&
               config("spark-options.{$feature}.{$option}") === true;
    }

    /**
     * Get the value of the given option.
     *
     * @param  string  $feature
     * @param  string  $option
     * @return mixed
     */
    public static function option(string $feature, string $option)
    {
        return config("spark-options.{$feature}.{$option}");
    }

    /**
     * Determine if the application is using the EU VAT collection feature.
     *
     * @return bool
     */
    public static function collectsEuVat()
    {
        if (config('spark.collects_eu_vat')) {
            return config('spark.collects_eu_vat');
        }

        return static::enabled('eu-vat-collection');
    }

    /**
     * Determine if the application is using the receipt emails sending feature.
     *
     * @return bool
     */
    public static function sendsReceiptEmails()
    {
        return static::enabled('receipt-emails-sending');
    }

    /**
     * Determine if the application is using the payment notifications sending feature.
     *
     * @return bool
     */
    public static function sendsPaymentNotificationEmails()
    {
        return static::enabled('sends-payment-notification-emails');
    }

    /**
     * Enable the VAT collection feature.
     *
     * @param  array  $options
     * @return string
     */
    public static function euVatCollection(array $options = [])
    {
        config(['spark-options.eu-vat-collection' => $options]);

        return 'eu-vat-collection';
    }

    /**
     * Enable the receipt emails sending feature.
     *
     * @param  array  $options
     * @return string
     */
    public static function receiptEmails(array $options = [])
    {
        config(['spark-options.receipt-emails-sending' => $options]);

        return 'receipt-emails-sending';
    }

    /**
     * Enable the receipt emails sending feature.
     *
     * @return string
     */
    public static function paymentNotificationEmails()
    {
        return 'sends-payment-notification-emails';
    }
}
