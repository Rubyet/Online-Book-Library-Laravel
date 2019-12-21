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
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/registration', 'RegistrationController@index')->name('reg.index');
Route::post('/registration', 'RegistrationController@save');



Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/book', 'BookController@index')->name('book.index');
Route::post('/book/comment/{id}', 'BookController@comment');
Route::get('/book/{id}', 'BookController@show')->name('book.show');

Route::post('/book/search/post', 'BookController@searchResult');
Route::get('/book/search/{id}', 'BookController@search')->name('book.search');


Route::group(['middleware'=>['sess']], function(){

    Route::get('/user', 'UserController@index')->name('user.index');
    Route::get('/user/profile/{id}', 'UserController@profile')->name('user.profile');
    Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('/user/edit/{id}', 'UserController@update');

    Route::get('/logout', 'LogoutController@index')->name('logout.index');

});