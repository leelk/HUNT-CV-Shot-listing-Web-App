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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[
    'uses'=>'WelcomeController@index',
    'as' =>'show.index',

]);

Route::get('send','mailController@send');





Route::get('/sign',function (){
return view('tione/uasignup');
});

//Route::get('/job',function (){
// return view('job/createJob');
//});

Route::get('admin/job',[
    'uses'=>'VacancyController@create',
    'as' =>'create.vacancy',
   'middleware'=>'auth:admin',
]);

Route::get('/allj',[
    'uses'=>'VacancyController@index',
    'as' =>'show.vacancy',
    'middleware'=>'auth:admin',
]);

Route::get('/applyJo/{id?}',[
    'uses'=>'UserVacancyController@index',
    'as'=>'applyJob',
    'middleware'=>'auth:web',
]);


//
//Route::get('/allj','VacancyController@index')->name('all.vacancies');




Route::post('/job','VacancyController@store')->name('vacancy.create');

Route::post('/scores','ScoreController@store')->name('score.save');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/signup','Auth\RegisterController@showRegistrationForm')->name('users.signup.submit');



Route::prefix('admin')->group(function (){

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/register','Auth\AdminRegisterController@register')->name('admin.register');
    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');


//  Password reset routes

    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get ('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route:: post('/password/reset','Auth\AdminForgotPasswordController@reset');
    Route::get ('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


});