<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;

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


Route::group(['middleware' => 'auth:sanctum' ], function() {

    Route::get('/', [MainController::class, 'index'])->name('index');

    // Route::group(['prefix' => 'admin' , 'middleware' => 'admin' ], function() {
        
        Route::view('/student', 'pages.student')->name('student');
        Route::view('/eaxm', 'pages.eaxm')->name('eaxm');
        Route::view('/stage', 'pages.stage')->name('stage');
        Route::view('/subject', 'pages.subject')->name('subject');
        Route::view('/timesheet', 'pages.timesheet')->name('timesheet');
        Route::view('/grade', 'pages.grade')->name('grade');
        Route::view('/student-add', 'pages.student-add')->name('student-add');
        Route::view('/newsletter', 'pages.newsletter')->name('newsletter');
    // });

    // Route::group([ 'prefix' => 'teacher' ,'middleware' => 'teacher' ], function() {
        
    // });
});

