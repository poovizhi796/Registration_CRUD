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
    return view('Welcome');
});
// Route::get('registration/list', function () {  // normal view based redirection
//     return view('Registration/list');
// });
// Route::get('registration/create', function () {
//     return view('Registration/create');
// });
Route::resource('registration', 'RController');  //using controller based redirection
Route::get('followup', 'FollowupController@index');
Route::post('followup/update_row', 'FollowupController@status');
Route::get('regular', 'RegularController@index');
Route::get('completed/{id}', 'RegularController@completed');
Route::post('regular/block', 'RegularController@block');
Route::get('completed', 'FollowupController@completedList');
