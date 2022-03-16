<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\PrelaunchemailController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\AffiliateController;
require __DIR__.'/auth.php';

Route::group([
    'namespace' => 'Spark\Http\Controllers',
    'prefix' => config('spark.path'),
], function () {
    // Stripe Webhook Controller...
    Route::post('webhook', 'WebhookController@handleWebhook');

    Route::group(['middleware' => config('spark.middleware', ['web', 'auth'])], function () {
        // Subscription...
        Route::post('/subscription', 'NewSubscriptionController');
        Route::put('/subscription', 'UpdateSubscriptionController');
        Route::put('/subscription/cancel', 'CancelSubscriptionController');
        Route::put('/subscription/resume', 'ResumeSubscriptionController');

        // Payment Method...
        Route::put('/subscription/payment-method', 'UpdatePaymentMethodController');

        // Billing Information...
        Route::put('/billing-information', 'UpdateBillingInformationController');

        // Receipt Emails...
        Route::put('/receipt-emails', 'UpdateReceiptEmailsController');

        // Stripe Setup Intent Tokens...
        Route::get('/token', 'StripeTokenController');

        // Vat Rate Controller...
        Route::post('tax-rate', 'TaxController');

        // Billing Information...
        Route::get('/{type}/{id}/receipts/{receiptId}/download', 'DownloadReceiptController')->name('receipts.download');
    });
});

Route::group([
    'middleware' => config('spark.middleware', ['web', 'auth']),
    'namespace' => 'Spark\Http\Controllers',
    'prefix' => config('spark.path'),
], function () {
    Route::get('/{type?}/{id?}', 'BillingPortalController')->name('spark.portal');
});



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

Route::get('/stripe-payment', [StripeController::class, 'handleGet']);
Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');
 


Route::post('/telnyxwebhook', [\App\Http\Controllers\TelnyxWebHook::class, 'index'])->name('telnyxwebhook');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['subscribed'])->name('dashboard');



Route::resource('call', CallController::class)->middleware('auth');


Route::get('/dashboard', [\App\Http\Controllers\CallController::class, 'index'])->name('dashboard')->middleware(['subscribed']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/makecall', [\App\Http\Controllers\MakeCallController::class, 'index'])->name('makecall');




//Contact
Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact');
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

//Prelaunch Email
Route::get('/', [PrelaunchemailController::class, 'createmailForm']);
Route::post('/', [PrelaunchemailController::class, 'PrelaunchemailForm'])->name('Prelaunchemail.store');

Route::get('/top', function () {
    return view('top');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('lp1', function () {
    return view('lp1');
});

Route::get('trade', function () {
    return view('trade');
});

Route::get('/', function () {
    return view('index');
});

Route::get('affiliate', function () {
    return view('affiliate');
});

Route::get('affiliate-terms', function () {
    return view('affiliate-terms');
});

Route::get('dairiten', function () {
    return view('dairiten');
});

Route::get('dairiten-reg', function () {
    return view('dairiten-reg');
});

Route::get('test', function () {
    return view('test');
});

Route::get('/send_reminder', [\App\Http\Controllers\MakeCallController::class, 'send_reminder'])->name('send_reminder');


Route::get('/affiliate', [AffiliateController::class, 'createForm']);
Route::get('/dairiten-terms', function () {
    return view('dairiten-terms');
});


Route::post('/affiliate', [AffiliateController::class, 'Affiliate'])->name('affiliate.store');