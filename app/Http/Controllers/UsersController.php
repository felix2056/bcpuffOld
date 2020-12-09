<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $data = [];

        $data['top_sellers'] = Product::orderby('sales', 'DESC')->get();

        return view('account.index', compact('data'));
    }

    public function orders()
    {
        $user = User::find(Auth::user()->id);
        $orders = $user->orders()->with('user')->get();

        return view('account.orders', compact('orders'));
    }

    public function faqs()
    {
        return view('account.faqs');
    }

    public function checkout()
    {
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            return redirect()->back()->with('error', 'Your cart is empty!');
        }

        $gateway = new \Braintree\Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env("BRAINTREE_MERCHANT_ID"),
            'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
            'privateKey' => env("BRAINTREE_PRIVATE_KEY")
        ]);
        
        $clientToken = $gateway->clientToken()->generate();
        return view('account.checkout', ['token' => $clientToken]);
    }
}
