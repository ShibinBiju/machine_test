<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\ProductEnquirieController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/dashboard', [Controller::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //admin routes
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('products', ProductController::class);
    Route::resource('customers', CustomersController::class);
    Route::resource('enquiries', ProductEnquirieController::class);
    


});
Route::prefix('web')->name('web.')->middleware('auth')->group(function () {
    Route::resource('/', AdminController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/product/details/{id}', [HomeController::class, 'details'])->name('product.details');
    Route::get('/product/enquiry/{id}', [HomeController::class, 'enquiry'])->name('product.enquiry');
    Route::post('/product/enquiry/store', [HomeController::class, 'enquiryStore'])->name('product.enquiry.store');

});


});

require __DIR__.'/auth.php';
