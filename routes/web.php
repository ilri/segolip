<?php

use App\Http\Controllers\WebsiteController;
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

Route::get('/', 'WebsiteController@index')->name('welcome');
Route::get('/faqs', 'WebsiteController@faqs')->name('faqs');
Route::get('/sanger_sequencing', 'WebsiteController@sanger')->name('sanger');
Route::get('/fragment_analysis', 'WebsiteController@fragment')->name('fragment');
Route::get('/kasp_genotyping', 'WebsiteController@kasp')->name('kasp');
Route::get('/dna_rna_extraction', 'WebsiteController@dnarna')->name('dnarna');
Route::get('/oligonucleotide_procurement', 'WebsiteController@oligo')->name('oligo');
Route::post('/inquiry', 'WebsiteController@submitInquiry')->name('submit-inquiry');

Route::get('/ordering', 'ServiceController@ordering')->name('ordering');

Route::group(['middleware' => 'auth'], function () {
    Route::patch('uploadPhoto/{product}', 'ProductController@uploadPhoto')->name('products.uploadPhoto');
    Route::patch('uploadDetails/{product}', 'ProductController@uploadDetails')->name('products.uploadDetails');
    Route::patch('uploadReport/{product}', 'ProductController@uploadReport')->name('products.uploadReport');
    Route::get('goToReport/{product}', 'ProductController@goToReport')->name('products.goToReport');

    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
    Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

    Route::get('/thankyou', 'CheckoutController@thankyou')->name('confirmation.thankyou');

    Route::resource('todos', TodoController::class);
    Route::resource('products', ProductController::class);
    Route::resource('services', ServiceController::class);

    Route::get('/myorders', 'OrderController@getClientOrders')->name('myorders');
    Route::get('/my-orders/show/{id}', 'OrderController@clientViewSingleOrder')->name('my-orders.show');
    
    Route::get('/form/download/{order}/{form}', 'OrderController@downloadForm');

    // Signed service specification
    Route::get('/my-orders/signed/{order}', 'OrderController@getSigned')->name('my-orders.get-signed');
    Route::patch('/my-orders/signed/{order}', 'OrderController@uploadSigned')->name('my-orders.upload-signed');
    Route::get('/signed/download/{order}/{signed}', 'OrderController@downloadSigned');

    // Payment
    Route::get('/my-orders/payment/{order}', 'OrderController@getPayment')->name('my-orders.get-payment');
    Route::patch('/my-orders/payment/{order}', 'OrderController@uploadPayment')->name('my-orders.upload-payment');
    Route::get('/payment/download/{order}/{payment}', 'OrderController@downloadPayment'); 

    // Downloads
    Route::get('/service_speci/download/{order}/{service_speci}', 'OrderController@downloadService');
    Route::get('/invoice/download/{order}/{invoice}', 'OrderController@downloadInvoice');
    Route::get('/receipt/download/{order}/{receipt}', 'OrderController@downloadReceipt');
    Route::get('/image/download/{order}/{image}', 'OrderController@downloadImage');
    // Route::get('/data/download/{order}/{data}', 'OrderController@downloadData');

    // Account
    Route::get('/useraccount', 'AccountController@index')->name('useraccount');
    Route::get('/useraccount/edit', 'AccountController@edit')->name('useraccount-edit');
    Route::post('/useraccount/{id}/edit', 'AccountController@update')->name('editProfile');
    Route::get('/change/password', 'AccountController@changePassword')->name('change-password');
    Route::post('/change/password', 'AccountController@postChangePassword')->name('changePassword');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/allorders', 'OrderController@index')->name('allorders');

    // Service specification
    Route::get('/all-orders/service/{order}', 'OrderController@getService')->name('all-orders.get-service');
    Route::patch('/all-orders/service/{order}', 'OrderController@uploadService')->name('all-orders.upload-service');
    
    // Invoice
    Route::get('/all-orders/invoice/{order}', 'OrderController@getInvoice')->name('all-orders.get-invoice');
    Route::patch('/all-orders/invoice/{order}', 'OrderController@uploadInvoice')->name('all-orders.upload-invoice');
    
    // Receipt
    Route::get('/all-orders/receipt/{order}', 'OrderController@getReceipt')->name('all-orders.get-receipt');
    Route::patch('/all-orders/receipt/{order}', 'OrderController@uploadReceipt')->name('all-orders.upload-receipt');
    
    // Data
    Route::get('/all-orders/data/{order}', 'OrderController@getData')->name('all-orders.get-data');
    Route::patch('/all-orders/data/{order}', 'OrderController@uploadData')->name('all-orders.upload-data');

    // Status
    Route::get('/all-orders/status/{order}', 'OrderController@getStatus')->name('all-orders.get-status');
    Route::patch('/all-orders/status/{order}', 'OrderController@updateStatus')->name('all-orders.update-status');

    Route::get('/all-orders/show/{id}', 'OrderController@staffViewSingleOrder')->name('all-orders.show');

    // User Roles
    Route::get('/users', 'UserController@index')->name('all-users');
    Route::post('/search_users', 'UserController@searchUser')->name('search-users');
    Route::get('/assign/role/{user_id}', 'UserController@getAssignRole');
    Route::post('/assign/role/{user_id}', 'UserController@assignRole')->name('assignRole');
    Route::get('/remove/role/{user_id}', 'UserController@getRemoveRole');
    Route::post('/remove/role/{user_id}', 'UserController@removeRole')->name('removeRole');

    // Orders count
    Route::get('/counters', 'CounterController@allCounters')->name('all-counters');
    
    // Reports
    Route::get('/charts', 'ChartController@allCharts')->name('all-charts');
    Route::get('/reports', 'ReportController@allReports')->name('all-reports');
    Route::get('/orders_report_export', 'ReportController@exportOrdersReport')->name('orders-report-export');
});

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/{service}', 'CartController@store')->name('cart.store');
Route::patch('/cart/{id}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

