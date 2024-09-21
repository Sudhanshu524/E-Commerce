<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\MemberController;


use App\Http\Controllers\RiderController;

use App\Http\Controllers\DonorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayController;
  
use App\Http\Controllers\PaymentController;

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

Route::get('/', function () {
    return view('welcome');
})->name('main'); 

//Auth::routes();

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('home', [HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if(Auth::check()){

        if(Auth::user()->role == 'admin')
        {
            return redirect()->route('admin#index');
        }
        else if(Auth::user()->role == 'rider')
        {
            return redirect()->route('rider#index');
        }
        else if(Auth::user()->role == 'member')
        {
            return redirect()->route('member#index');
        }
        else if(Auth::user()->role == 'donor')
        {
            return redirect()->route('initiate.payment');
        }
    }
})->name('dashboard');

//admin
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin#index'); //admin dashboard // view meal
    Route::get('/details/{id}', [AdminController::class, 'detailsProduct'])->name('admin#detailsProduct'); //admin dashboard // view meal
    Route::get('addProduct', [AdminController::class, 'addProduct'])->name('admin#addProduct'); //admin create meal
    Route::post('createProduct', [AdminController::class, 'createProduct'])->name('admin#createProduct'); //creating Meal
    Route::get('editProduct/{id}', [AdminController::class, 'editProduct'])->name('admin#editProduct'); //edit Meal
    Route::post('updateProduct/{id}', [AdminController::class, 'updateProduct'])->name('admin#updateProduct'); //update Meal
    Route::get('deleteProduct/{id}', [AdminController::class, 'deleteProduct'])->name('admin#deleteProduct'); // delete Meal
    Route::get('updateAdmin', [AdminController::class, 'editAdmin'])->name('admin#update'); //edit Meal
});

//rider
Route::group(['prefix' => 'rider'], function(){
    Route::get('/', [RiderController::class, 'index'])->name('rider#index'); //rider dashboard
    Route::get('riderDetails/{id}', [RiderController::class, 'riderDetails'])->name('rider#riderDetails'); // rider Details
    Route::post('riderMember', [RiderController::class, 'riderMember'])->name('rider#riderMember'); //rider chosen member
    Route::get('deleteOrder/{id}', [RiderController::class, 'deleteOrder'])->name('rider#deleteOrder'); // delete Meal
});

Route::group(['prefix' => 'member'], function(){

    Route::get('/', [MemberController::class, 'index'])->name('member#index'); //rider dashboard
    Route::get('memberDetails/{id}', [MemberController::class, 'memberDetails'])->name('member#memberDetails'); // rider Details
    // Route::post('riderMember', [riderController::class, 'riderMember'])->name('rider#riderMember'); //rider chosen member
    Route::get('addOrder', [MemberController::class, 'addOrder'])->name('member#addOrder'); //partner create meal
    Route::post('createOrder', [MemberController::class, 'createOrder'])->name('member#createOrder'); //creating Meal
    Route::post('createPayment', [RazorpayController::class, 'createPayment'])->name('member#createPayment'); //creating Meal
});

// Route::get('/initiate','App\Http\Controllers\PaytmController@initiate')->name('initiate.payment');
// Route::post('/payment','App\Http\Controllers\PaytmController@pay')->name('make.payment');
// Route::post('/payment/status', 'App\Http\Controllers\PaytmController@paymentCallback')->name('status');

Route::group(['prefix' => 'donor'], function(){

    Route::get('/initiate', [DonorController::class, 'initiate'])->name('initiate.payment'); //rider dashboard
    Route::post('/payment', [DonorController::class, 'pay'])->name('make.payment'); // rider Details
    // Route::post('riderMember', [riderController::class, 'riderMember'])->name('rider#riderMember'); //rider chosen member
    Route::post('/payment/status', [DonorController::class, 'paymentCallback'])->name('status'); //partner create meal
    // Route::post('createOrder', [DonorController::class, 'createOrder'])->name('status'); //creating Meal
});

Route::get('razorpay-payment', [PaymentController::class, 'index'])->name('razorpay.payment.index');
Route::post('razorpay-payment', [PaymentController::class, 'store'])->name('razorpay.payment.store');