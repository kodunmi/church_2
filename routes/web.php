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

/*
|--------------------------------------------------------------------------
| Front End Pages Route
|--------------------------------------------------------------------------
*/
Route::get('/', 'PagesController@index')->name('home');
Route::get('about', 'PagesController@about')->name('about');
Route::get('ministries', 'PagesController@ministries')->name('ministries');
Route::get('sermons', 'PagesController@sermons')->name('sermons');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('blogs', 'PagesController@blogs')->name('blogs');
Route::get('blog/{blog}', 'PagesController@singleBlog')->name('blog.show');
Route::post('comment/{post}', 'PostController@comment')->name('post.comment');

Route::get('upcoming-event', 'PagesController@upcomingEvent')->name('upcomingevent');
Route::get('upcoming-event/{id}', 'PagesController@showEvent')->name('upcomingevent.show');
Route::post('register/{event}', 'EventController@register')->name('attendee.create');

/*
|--------------------------------------------------------------------------
| Admin Pages Route
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard' , 'AdminController@index')->name('admin.dashboard');
    Route::post('/add-admin' , 'AdminController@addAdmin')->name('admin.create');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login' , 'SessionController@showAdminForm')->name('admin.login');
    Route::post('/login' , 'SessionController@adminLogin')->name('admin.login.submit');
    Route::get('/logout' , 'SessionController@adminLogout')->name('admin.logout');
});

Route::get('/dashboard', 'PagesController@dashboard')->middleware('auth')->name('dashboard');
Route::get('logout', 'SessionController@logout')->middleware('auth')->name('logout');

Route::group(['prefix' => 'admin/dashboard', 'middleware' => 'auth:admin'], function () {
    Route::resource('event', 'EventController', ['except' => ['create', 'show','edit']]);
    Route::get('event-feature/{id}', 'EventController@feature')->name('event.feature');
});

Route::group(['prefix' => 'admin/dashboard', 'middleware' => 'auth:admin'], function () {
    Route::resource('post', 'PostController');
    Route::get('post-feature/{id}', 'PostController@feature')->name('post.feature');
});
