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

Route::get('/', 'MainController@index');

//Auth::routes();
// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');

//Needed Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Main Page Routes
Route::get('/about', 'MainController@index');

//Blog Get Routes
Route::get('/blog', 'blogpostController@index');
Route::get('/post/{blogpost}', 'blogpostController@show');
Route::get('/tag/{tag}/posts', 'tagController@getByTag');
Route::get('/category/{category}/posts/', 'categoryController@getByCategory');
Route::get('/contact', 'MainController@contact');
Route::post('/sendEmail', 'MainController@sendEmail');
Route::get('/projects', 'MainController@projects');
Route::get('/code', function(){
  return view('codeView');
});


//Blog Admin Routes
Route::get('/dashboard', 'blogpostController@showDashboard')->middleware('auth');
Route::get('/addpost', 'blogpostController@addpost')->middleware('auth');
Route::get('/editpost/{blogpost}', 'blogpostController@editpost')->middleware('auth');
Route::get('/deletepost/{blogpost}', 'blogpostController@deletepost')->middleware('auth');

Route::post('/storeNewPost', 'blogpostController@store')->middleware('auth');
Route::post('/updatePost', 'blogpostController@update')->middleware('auth');;
Route::post('/post/{blogpost}/comment', 'CommentController@store')->middleware('auth');
Route::post('/burn', 'blogpostController@consumePostInFire')->middleware('auth');;
