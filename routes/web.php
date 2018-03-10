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

/*Route::get('/', function () {


 $data=['firstname' => 'nazim','lastname' => 'messous'];
    return view('welcome',$data) ;

});*/
/*Route::get('/', function () {



     $view= view('welcome') ;
     $view->firstname ='nazim';
     $view->lastname = 'messous';
     return $view;

});*/
/*Route::get('/', function () {

 $firstname ='nazim';
     $lastname = 'messous';

    return view('welcome',compact('firstname','lastname'));


});*/
Route::get('/', function () {

$date= date('N') >= 6 ;


 $firstname ='<h1>nazim messous </h1>';
    

    return view('welcome',compact('firstname','date'));


});
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/login2', function () {
    return view('page.login2');
});
Route::get('/help', function () {
    return view('page.help');
});
Route::get('/reg', function () {
    return view('page.register');
});
Route::get('/event', function () {
	$event=
	[
'make php great again',
'php>phython',
'teacher du net'
	];
    return view('event.index',compact('event'));
});
Route::get('/register2', function () {
    return view('page.register2');
});


Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('sendmail', 'SendMailController@sendMail');

/*Route::prefix('admin')->group(function() {

   

Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
 Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset','Auth\AdminForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});*/


