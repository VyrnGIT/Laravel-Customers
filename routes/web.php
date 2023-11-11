<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Author;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/authors', function () {
    $authors = Author::with('books')->get();

    return view('authors.index', compact('authors'));
});

Route::middleware('auth')->group(function () {

    // home
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

    // customer list
    Route::match(['get', 'post'], '/customers', 'App\Http\Controllers\CustomerListController@index')->name('customer.list');

    // create
    Route::get('/customer/create', 'App\Http\Controllers\CustomerListController@create')->name('customer.create');
    Route::post('/customer/store', 'App\Http\Controllers\CustomerListController@store')->name('customer.store');


    // delete
    Route::delete('/customer/{id}', 'App\Http\Controllers\CustomerListController@destroy')->name('customer.destroy');

    // update
    Route::get('/customer/{id}/edit', 'App\Http\Controllers\CustomerListController@edit')->name('customer.edit');
    Route::put('/customer/{id}/update', 'App\Http\Controllers\CustomerListController@update')->name('customer.update');

    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
