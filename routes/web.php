    <?php

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
        return view('home');
    });

    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

    Route::match(['get', 'post'], '/customers', 'App\Http\Controllers\CustomerListController@index')->name('customer.list');

    // create
    Route::get('/customer/create', 'App\Http\Controllers\CustomerListController@create')->name('customer.create');
    Route::post('/customer/store', 'App\Http\Controllers\CustomerListController@store')->name('customer.store');


    // delete
    Route::delete('/customer/{id}', 'App\Http\Controllers\CustomerListController@destroy')->name('customer.destroy');

    // update
    Route::get('/customer/{id}/edit', 'App\Http\Controllers\CustomerListController@edit')->name('customer.edit');
    Route::put('/customer/{id}/update', 'App\Http\Controllers\CustomerListController@update')->name('customer.update');








