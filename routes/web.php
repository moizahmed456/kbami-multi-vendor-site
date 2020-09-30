<?php
// Common
include('Common.php');

// Front End routes
include('Frontend.php');

// Backoffice routes
include('Backoffice.php');

// Language change
Route::get('locale/{locale?}', 'LocaleController@change')->name('locale.change');

// Contact Us
Route::post('/contact_us', 'ContactUsController@send')->name('contact_us');
//Route::get('/joinus', 'Selling/SellingController@joinus')->name('join_us');
Route::get('foo', function () {
    return view('index');
});

// Webhooks
Route::post('webhook/stripe', 'WebhookController@handleStripeCallback'); 		// Stripe

// AJAX routes for get images
// Route::get('order/ajax/taxrate', 'OrderController@ajaxTaxRate')->name('ajax.taxrate');

