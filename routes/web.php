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
//meluncurkan landing page
Route::get('/',function(){
    return view('landingpage');
});

//lansia

//mengalihkan ke halaman daftar untuk mengisi form
Route::get('/daftar/lansia', function () {
    return view('daftarLansia');
});
//login
Route::get('/login/lansia', function () {
    return view('loginlansia');
});

//mengalihkan ke controller LansiaController function register untuk
//pengecekan data dan memasukkan data kedalam database.
Route::POST('/register/lansia','LansiaController@register');

//mengalihkan ke controller login lansia
//untuk memeriksa username dan password didalam database
//masuk ke dalam dasboard
Route::get('/dasboard/lansia','LansiaController@Login');


//memasukkan catatan ke dalam database
Route::POST('/catatan','LansiaController@tambahcatatan');


//masuk ke menu check up
Route::get('/dasboard/lansia/checkupsekarang','LansiaController@checkupnow');

Route::get('/dasboard/lansia/riwayatcheckup','LansiaController@lihatriwayat');
//=========================================================

//perawat
//daftar
Route::get('/login/perawat', function () {
    return view('loginperawat');
});

Route::get('/daftar/perawat', function () {
    return view('daftarPerawat');
});
//mengalihkan ke controller PerawatController function register untuk
//pengecekan data dan memasukkan data kedalam database.
Route::POST('/register/perawat','PerawatController@register');

//mengalihkan ke controller login Perawat
//untuk memeriksa username dan password didalam database
//masuk ke dalam dasboard
Route::get('/dasboard/perawat','PerawatController@Login');
Route::POST('/dasboard/perawat/tambahriwayat','PerawatController@tambahRiwayat');
Route::POST('/tambahriwayat','PerawatController@insertRiwayat');
Route::POST('/dasboard/perawat/tambahobat','PerawatController@tambahObat');
Route::get('/dasboard/perawat/lihatriwayatpasien','PerawatController@tampilriwayat');
Route::POST('/tambahobat','PerawatController@insertObat');
Route::get('/dasboard/perawat/daftarobat','PerawatController@tampilobat');



