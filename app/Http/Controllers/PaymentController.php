<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\User;

class PaymentController extends Controller
{
    public function braintree(Request $request)
    {
        $gateway = new \Braintree\Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env("BRAINTREE_MERCHANT_ID"),
            'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
            'privateKey' => env("BRAINTREE_PRIVATE_KEY")
        ]);

        $user = User::find(Auth::user()->id);

        if($request->input('nonce') != null){
            var_dump($request->input('nonce'));

            $cart = session()->get('cart');

            // if cart is empty then this the first product
            if(!$cart) {
                return session()->flash('error', 'Your cart is empty!');
            }

            $nonceFromTheClient = $request->input('nonce');
            $total = $request->input('total');
        
            $paid = $gateway->transaction()->sale([
                'amount' => $total . '.00',
                'paymentMethodNonce' => $nonceFromTheClient,
                'options' => [
                    'submitForSettlement' => True
                ]
            ]);

            if ($paid) {
                foreach($cart as $product) {
                    $order = new Order();
                    $order->user_id = $user->id;
                    $order->product = $product['name'];
                    $order->photo = $product['photo'];
                    $order->qty = $product['quantity'];
                    $order->status = 'paid';

                    $order->save();
                }

                session()->forget('cart');
                return session()->flash('success', 'Payment has been made successfully');
            }
        }
    }

    public function paypal(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            return session()->flash('error', 'Your cart is empty!');
        }

        foreach($cart as $product) {
            $order = new Order();
            $order->user_id = $user->id;
            $order->product = $product['name'];
            $order->photo = $product['photo'];
            $order->qty = $product['quantity'];
            $order->status = 'paid';

            $order->save();
        }

        session()->forget('cart');
        return session()->flash('success', 'Payment has been made successfully');   
    }
}
