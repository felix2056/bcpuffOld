<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact-us', 'HomeController@contact')->name('contact');

Route::group(['prefix' => 'products'], function () {
    Route::get('/', 'ProductsController@index')->name('products.index');
    Route::get('/{slug}', 'ProductsController@show')->name('products.single');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::post('/{id}/add', 'CartController@add')->name('cart.add');
    Route::patch('update', 'CartController@update')->name('cart.update');
    Route::delete('remove', 'CartController@remove')->name('cart.remove');
});


//social logins
Route::group(['prefix' => 'social'], function () {
    //Social auth routes
    Route::get('/login/{provider}', 'SocialController@redirect')->name('social.login');
    Route::get('/{provider}/callback','SocialController@callback')->where('provider', '.*')->name('social.callback');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//profile pages

Route::group(['middleware' => ['auth', 'is_admin']], function () {
    Route::group(['prefix' => 'administration'], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');

        //Products
        Route::get('/products', 'AdminController@products')->name('admin.products.index');
        Route::get('/products/{slug}', 'AdminController@productSingle')->name('admin.products.single');
        Route::any('/product/add', 'AdminController@productCreate')->name('admin.products.create');
        Route::post('/products/{id}/delete', 'AdminController@productDestroy')->name('admin.products.destroy');

        //Users
        Route::get('/users', 'AdminController@users')->name('admin.users.index');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', 'UsersController@index')->name('account.index');

        //Orders
        Route::get('/orders', 'UsersController@orders')->name('account.orders');

        //Checkout
        Route::get('/checkout', 'UsersController@checkout')->name('account.checkout');
    });

    Route::group(['prefix' => 'payment'], function () {
        //Braintree
        Route::post('/braintree', 'PaymentController@braintree')->name('payment.braintree');

        //Paypal
        Route::post('/paypal', 'PaymentController@paypal')->name('payment.paypal');
    });
});