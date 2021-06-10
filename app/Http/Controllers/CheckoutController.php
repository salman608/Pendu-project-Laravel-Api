<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Stripe;
use Exception;

class CheckoutController extends Controller
{

    public function stripe33()
    {
        return view('stripe33');
    }
    public function stripe3()
    {
        return view('stripe3');
    }

    public function stripePost3(Request $request)
    {   

        $amount     = 1 * 100;
        $currency   = 'usd';

        try {

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            // $charge = Stripe\Charge::create ([
            //         "amount" => $amount,
            //         "currency" => $currency,
            //         "source" => $request->stripeToken,
            //         "description" => "This payment is testing purpose of Pendu Service",
            // ]);

            
                
            // Create a Customer:
            $customer = \Stripe\Customer::create([
                'source' => $request->stripeToken,
                'email' => 'paying.user@example.com',
            ]);

            // Charge the Customer instead of the card:
            $charge = \Stripe\Charge::create([
                'amount' => 1000,
                'currency' => 'usd',
                'customer' => $customer->id,
            ]);


            Session::flash('success', 'Payment Successful !'); 

            // return back();

        } catch (Exception $e) {
            session()->flash('error', 'Invalid card details: ' . $e->getMessage());
            // return back()->withInput();
        }
    }
    
}
