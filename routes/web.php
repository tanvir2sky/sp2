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
    return view('user.home');
});
Route::get('/contact', function () {
    return view('user.contact');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/gallery', function () {
    return view('user.gallery');
});





/*
 *
 *
 *
 * Admin routes starts here
 *
 *
 *
 */


Route::prefix('admin/')->group(function () {
    Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'Admindashboard@index',]);
    Route::get('login', ['as' => 'admin.login', 'uses' => 'Admindashboard@login',]);
    Route::resource('room_type', 'RoomTypeController');
    Route::resource('room', 'RoomController');
});



/*
 *
 *
 *
 * Admin routes ends here
 *
 *
 *
 */

/*
 *
 * Resource routes starts here
 *
 */



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
