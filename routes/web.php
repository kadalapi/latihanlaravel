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
    //return view('welcome');
   // return 'Selamat Datang di PLN Corporate University <br>
    //latihan framework laravel 8.6.3';
    return view('pages.homepage');
});

route::get('about', function () {
    return view('about');
})->name('halamanabout');

Route::get('/student/{id}/{name}', function ($id,$name) {
    return 'Hi, I am Student with id = '.$id.', Name = '.$name;
});

// ---Named Route--
Route::get('master/halaman-pegawai',function () {
    return 'Hi, Employee Page';
})->name('employee');

route::get('emp', function() {
    return redirect()->route('employee');
});
//---end name route--