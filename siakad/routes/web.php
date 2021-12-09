<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/auth/login', function() {
    return view('auth/login');
});

Route::get('/jadwal', function() {
    return view('jadwal-pelajaran', [
        'label' => 'jadwal',
        'sidebar' => 'jadwal',
        'role' => 'admin',
        'dir' => '1'
    ]);
});

Route::get('/pengumuman', function(){
    return view('pengumuman', [
        'label' => 'pengumuman',
        'sidebar' => 'pengumuman',
        'role' => 'murid',
        'dir' => '1'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'label' => 'profile',
        'sidebar' => 'profile',
        'role' => 'murid',
        'dir' => '1'
    ]);
});

Route::get('/tugas', function () {
    return view('tugas', [
        'label' => 'tugas',
        'sidebar' => 'tugas',
        'role' => 'murid',
        'dir' => '1'
    ]);
});

Route::get('/profile-sekolah', function () {
    return view('profile-sekolah', [
        'label' => 'sekolah',
        'sidebar' => 'sekolah',
        'role' => 'admin',
        'dir' => '1'
    ]);
});

Route::get('/auth/registrasi-murid', function () {
    return view('auth.register' , [
        'tipe' => 'murid',
        'dir' => '2'
    ]);
});

Route::get('/auth/registrasi-guru', function () {
    return view('auth.register', [
        'role' => 'guru',
        'dir' => '2'
    ]);
});

Route::get('/profile/edit', function () {
    return view('profile.edit', [
        'label' => 'Profile Admin',
        'sidebar' => 'admin',
        'role' => 'admin',
        'dir' => '2'
    ]);
});
