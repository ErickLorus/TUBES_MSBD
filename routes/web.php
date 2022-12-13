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

Route::get('/login', function () {
    return view('student.login');
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

Route::get('/transaksi', function () {
    return view('admin.transaksi');
});
