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

Route::get('/', function () {
    return redirect('/ummar');
});


Route::controller(\App\Http\Controllers\WebUmmarController::class)->group(function () {
   Route::get('/ummar', 'indexWeb');
   Route::get('/ummar/product', 'productView');
   Route::get('/ummar/about', 'aboutView');
   Route::get('/ummar/faq', 'faqView');
   Route::get('/ummar/contact', 'contactView');
});



Route::group(['middleware' => ['auth', 'level:admin']], function () {
    Route::get('/ummar/admin', function () {
        return view('components.mainadmin', [
            'level' => 'admin',
            'title' => 'Dashboard Admin'
        ]);
    });
});

Route::group(['middleware' => ['auth', 'level:user']], function () {
    Route::controller(\App\Http\Controllers\OfferController::class)->group(function () {
        Route::get('/ummar/offer', 'offerView');
        Route::post('/ummar/saveoffer', 'saveOfferView');
        Route::get('/ummar/saveoffer', function () {
            return view('layouts.offersubmit', [
                'title' => 'Form Offer Submit',
                'level' => 'user'
            ]);
        });
    });
    Route::get('/ummar/user', function () {
       return view('components.userdashboard', [
           'title' => 'Dashboard User',
           'level' => 'user'
       ]);
    });
});

Route::controller(\App\Http\Controllers\LoginController::class)->group(function () {
    Route::get('/ummar/login', 'indexFormLogin')->name('login')->middleware('guest');
    Route::post('/ummar/login', 'authenticate');
    Route::post('/ummar/logout', 'logout');
});

Route::controller(\App\Http\Controllers\RegisterController::class)->group(function () {
    Route::get('/ummar/register', 'indexRegister')->middleware('guest');
    Route::post('/ummar/register', 'store');
});

Route::controller(\App\Http\Controllers\AccUsersUmmarController::class)->group(function () {
    Route::get('/ummar/accusers', 'indexAccUsers');
    Route::get('/ummar/accusers/add', 'addAccUsers');
    Route::post('/ummar/accusers/save', 'saveAccUsers');
    Route::get('/ummar/accusers/edit/{id}', 'editAccUsers');
    Route::put('/ummar/accusers/update', 'updateAccUsers');
    Route::delete('/ummar/accusers/delete/{id}', 'deleteAccUsers');
});

Route::controller(\App\Http\Controllers\CustUmmarController::class)->group(function () {
    Route::get('/ummar/custummar', 'indexCustUmmar');
    Route::get('/ummar/custummar/add', 'addCustUmmar');
    Route::post('ummar/custummar/save', 'saveCustUmmar');
    Route::get('/ummar/custummar/edit/{id}', 'editCustUmmar');
    Route::put('/ummar/custummar/update', 'updateCustUmmar');
    Route::delete('/ummar/custummar/delete/{id}', 'deleteCustUmmar');
});


