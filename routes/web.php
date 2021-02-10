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
//     return view('landingpages.landingpages');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/postlogin', 'Auth\LoginController@login')->name('postlogin');
Route::get('/dasboardadmin', 'Admin\AdminController@index')->name('dasboardadmin');
Route::get('/dasboardmember', 'Member\MemberController@index')->name('dasboardmember');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::get('/allmembers', 'Admin\AllmembersController@show')->name('all_members');