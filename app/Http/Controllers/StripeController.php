<?php

namespace App\Http\Controllers;
use App\Models\User;
use Stripe;
use Session;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet()
    {
        return view('top');
    }
  
    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {
        /*
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Stripe\Charge::create ([
                "amount" => 100 * 150,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);

        var_dump($charge);
        */
           $user = User::factory()->withSubscription(getenv( 'STRIPE_PROD'),)->create();
        // $user = User::factory()->withSubscription('prod_IeVaIiQY1SXMx7')->create();
        // $user = User::factory()->withSubscription($ENV['STRIPE_PROD'])->create();

        $result = $user->subscribed(); // true

        var_dump($result);

        exit("----");
  
        Session::flash('success', 'Payment has been successfully processed.');
          
        return back();
    }
}
