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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('landing-page');
}); //landing page (ariq)

Route::get('/daftar/lansia', function () {
    return view('DaftarLansia');
});
Route::get('/daftar/perawat', function () {
    return view('DaftarPerawat');
});

Route::get('/login/perawat', function () {
    return view('login-perawat');
});

Route::get('/home/lansia', function () {
    return view('lansia');
});

Route::get('/home/perawat', function () {
    return view('perawat');
});

Route::get('/home/checkupssekarang', function () {
    return view('checkupSekarang-lansia');
});

Route::get('/home/lihatriwayat', function () {
    return view('LihatRiwayat');
});

Route::get('/home/riwayatpasien', function () {
    return view('riwayatpasien');
});

Route::get('/home/daftarobat', function () {
    return view('daftarobat');
});



//Route::get('/checkupsekarang','CheckUpSekarangController@index');
Route :: get ('/daftarakun',[DaftarAkun::class, 'index']);