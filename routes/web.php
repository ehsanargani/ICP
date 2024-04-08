<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*public*/
Route::get('/profile_index', 'HomeController@profile_index')->name('profile_index');
Route::post('/edit_profile', 'HomeController@edit_profile');
Route::get('/password_index', 'HomeController@password_index')->name('password_index');
Route::post('/edit_password', 'HomeController@edit_password');
/*admin*/
Route::get('/user','admin@user_index')->name('user_index');
Route::get('/add_user','admin@add_user');
Route::post('/insert_user','admin@insert_user');
Route::post('/edit_user','admin@edit_user');
Route::post('/update_user','admin@update_user');
Route::post('/del_user','admin@del_user');
/*notification*/
Route::get('/notification','admin@notification')->name('notification');
Route::get('/add_notification','admin@add_notification');
Route::post('/insert_notification','admin@insert_notification');
Route::post('/edit_notification','admin@edit_notification');
Route::post('/update_notification','admin@update_notification');
Route::post('/del_notification','admin@del_notification');
/*requlation*/
Route::get('/requlation','admin@requlation')->name('requlation');
Route::get('/add_regulation','admin@add_regulation');
Route::post('/insert_regulation','admin@insert_regulation');
Route::post('/edit_regulation','admin@edit_regulation');
Route::post('/update_requlation','admin@update_requlation');
Route::post('/del_regulation','admin@del_regulation');
Route::get('/regulation_home','admin@regulation_home');
/*message*/
Route::get('/message','admin@message')->name('message');
Route::get('/add_message','admin@add_message');
Route::post('/insert_message','admin@insert_message');
Route::post('/del_message','admin@del_message');
Route::post('/see_message','admin@see_message');
/*co_user_index*/
Route::get('/co_user_index','admin@co_user_index')->name('co_user_index');
Route::get('/add_co','admin@add_co');
Route::post('/insert_co','admin@insert_co');
Route::post('/show_co','admin@show_co');
Route::post('/co_pass','admin@co_pass');
Route::post('/edit_co','admin@edit_co');
Route::post('/update_co','admin@update_co');
Route::post('/del_co','admin@del_co');
/*Certification*/
Route::get('/add_Certification','CertificationController@add_Certification');
Route::post('/insert_cer','CertificationController@insert_cer');
Route::get('/see_Certification','admin@see_Certification')->name('see_Certification');
Route::post('/detile_cer','admin@detile_cer');
Route::post('/del_cer','admin@del_cer');
/*report*/
Route::get('/cer_report','report@cer_report');
Route::post('/result_report','report@result_report');
Route::post('/result_report_2','report@result_report_2');
Route::get('/cer_report_search','report@cer_report_search');