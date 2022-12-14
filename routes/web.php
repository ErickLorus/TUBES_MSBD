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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('student.index');
});

Route::get('/listbuku', function () {
    return view('student.listbuku');
});

Route::get('/checkout', function () {
    return view('student.checkout');
});

Route::get('/login', function () {
    return view('student.login');
});

Route::get('/validasi', function () {
    return view('student.validasi');
});

Route::get('/contact', function () {
    return view('student.contactus');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/test', function () {
    return view('admin.contoh');
});

Route::get('/bukusmp', function () {
    return view('admin.bukusmp');
});

Route::get('/bukusma', function () {
    return view('admin.bukusma');
});

Route::get('/bukusmk', function () {
    return view('admin.bukusmk');
});

Route::get('/smp', function () {
    return view('admin.smp');
});

Route::get('/sma', function () {
    return view('admin.sma');
});

Route::get('/smk', function () {
    return view('admin.smk');
});

Route::get('/editbuku', function () {
    return view('admin.editbuku');
});

Route::get('/transaksi', function () {
    return view('admin.transaksi');
});

Route::get('/logstudent', function () {
    return view('admin.logstudent');
});

Route::get('/logtransaksi', function () {
    return view('admin.logtransaksi');
});

Route::get('/logvalidasi', function () {
    return view('admin.logvalidasi');
});

Route::get('/logbuku', function () {
    return view('admin.logbuku');
});

Route::get('/kasir', function () {
    return view('kasir.index');
});

Route::get('/stoksmp', function () {
    return view('kasir.stoksmp');
});

Route::get('/stoksma', function () {
    return view('kasir.stoksma');
});

Route::get('/stoksmk', function () {
    return view('kasir.stoksmk');
});

Route::get('/transaksikasir', function () {
    return view('kasir.transaksikasir');
});

Route::get('/bukti', function () {
    return view('kasir.bukti');
});

Route::get('/dataexport', function () {
    return view('kasir.dataexport');
});