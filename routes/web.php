<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teachers_controller;
use App\Http\Controllers\operatorController;
use App\Http\Controllers\fileUpload_controller;
use App\Http\Controllers\countriesController;
use App\Http\Controllers\sabyConfig_Controller;
use App\Http\Controllers\HelloController;

require __DIR__ . '/auth.php';
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

Route::middleware('auth')->group(
    function () {
        Route::get('/', [teachers_controller::class, 'index']);
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::get('/addOperator', [operatorController::class, 'index'])->name('addOperator');
        Route::get('/fileuploader', [fileUpload_controller::class, 'index']);
        Route::get('/test', [HelloController::class, 'index']);
        Route::get('/getOperator', [operatorController::class, 'getOperator'])->name('getOperators');
        Route::get('/addTeacher', [teachers_controller::class, 'addTeachersForm'])->name('addTeacher');
        Route::get('/updateTeacher/{id}', [teachers_controller::class, 'updateTeacher'])->name('updateTeacherData');
        Route::get('/apiManager/deletePrefix/{id}', [operatorController::class, 'destroy'])->name('deletePrefix');
        Route::get('/douwloadCountryFile', [countriesController::class, 'create'])->name('douwloadCountryFile');
        Route::get('/apiManager/getCurrentCalls', [countriesController::class, 'getCurrentCalls']);
        Route::get('/getSabyConfig', [sabyConfig_Controller::class, 'index']);
        Route::get('/getSabyTable', [countriesController::class, 'show']);
        Route::post('/addOperator', [operatorController::class, 'store']);
        Route::post('/fileuploader', [fileUpload_controller::class, 'store']);
        Route::post('/addTeacher', [teachers_controller::class, 'saveTeacherData'])->name('saveTeacher');
        Route::post('/updateTeacher/{id}', [teachers_controller::class, 'saveUpdateTeacher'])->name('updateTeacher');
        Route::post('/updatePrefix', [operatorController::class, 'update'])->name('updatePrefix');
        Route::fallback(function () {
            return view('noRoute');
        });
    }
);
