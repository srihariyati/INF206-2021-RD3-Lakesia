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

/*
Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/daftar', 'App\Http\Controllers\PagesController@daftar');
Route::get('/daftar/lansia', 'App\Http\Controllers\PagesController@daftarLansia');
Route::get('/daftar/perawat', 'App\Http\Controllers\PagesController@daftarPerawat');

Route::get('/lansia', 'App\Http\Controllers\PagesController@postlogin');
*/
Route::get('/', function () {
    return view('landing-page');
}); 

Route::get('/masuklansia', function () {
    return view('login-lansia');
}); 

Route::get('/masukperawat', function () {
    return view('login-perawat');
}); 

Route::get('/daftar/lansia', function () {
    return view('DaftarLansia');
});

Route::get('/daftar/perawat', function () {
    return view('DaftarPerawat');
});

//Route::post('/daftar/lansia',RegisterController::class,'daftarlansia']);


/*
Route::get('/registerlansia', 'AuthController@getRegisterLansia');
Route::get('/registerlansia', 'AuthController@postRegisterLansia')--> name('registerlansia');
Route::get('/loginlansia', 'AuthController@getLoginLansia');
Route::get('/loginlansia', 'AuthController@postLoginLansia')--> name('loginlansia');

// Route::get('/daftar', function () {
//     return view('daftar');
// }); 

// Route::get('/daftar/lansia', function () {
//     return view('DaftarLansia');
// });
// Route::get('/daftar/perawat', function () {
//     return view('DaftarPerawat');
// });

// Route::get('/login/perawat', function () {
//     return view('login-perawat');
// });

// Route::get('/home/lansia', function () {
//     return view('lansia');
// });

// Route::get('/home/perawat', function () {
//     return view('perawat');
// });

// Route::get('/home/lansia/checkupsekarang', function(){
//     return view('checkupSekarang-lansia');
// });


