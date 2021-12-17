<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\NewsLetterController;
use App\Http\Controllers\Api\GradeController;
use App\Http\Controllers\Api\NotController;
use App\Http\Controllers\Api\StudentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {

    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout']);
    Route::post('refresh', [LoginController::class, 'refresh']);
    Route::get('/user', [LoginController::class, 'me']);
    Route::get('/grade', [GradeController::class, 'grade']);
    Route::get('/student', [StudentController::class, 'student']);
    Route::get('/not', [NotController::class, 'not']);
    Route::post('sendfiertoken', [LoginController::class, 'setFierToken']);
    
    
});

Route::get('/newsletter', [NewsLetterController::class, 'newsletter']);
