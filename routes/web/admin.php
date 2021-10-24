<?php

use App\Http\Controllers\Admin\AdminController;
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

Route::get('/',[AdminController::class, 'index']);

Route::resource('/users',User\UserController::class);
Route::get('/users/{user}/permissions','User\PermissionController@create')->name('users.permissions')->middleware('can:staff_user_permissions');
Route::post('/users/{user}/permissions','User\PermissionController@store')->name('users.permissions.store')->middleware('can:staff_user_permissions');


Route::resource('/permissions',PermissionController::class);
Route::resource('/roles',RoleController::class);

Route::resource('/courses','CourseController');
Route::resource('/episodes','EpisodeController');

Route::post('/panel/upload-image' , 'AdminController@uploadImageSubject');

Route::resource('/teachers','TeacherController');
