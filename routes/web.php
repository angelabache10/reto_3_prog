<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\ItemStockController;
use App\Http\Controllers\PDFController;
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

Route::middleware('guest')->group(function () {
    Route::redirect('/', 'login');

    // Auth routes
    Route::controller(AuthController::class)->group(function () {
        Route::get('login', 'create')
            ->name('login')
            ->middleware('prevent-back');
        
        Route::post('auth', 'store')
            ->name('auth');

        Route::get('logout', 'destroy')
            ->name('logout')
            ->withoutMiddleware('guest');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('home', HomeController::class)
        ->middleware('prevent-back')
        ->name('home');

    Route::get('courses', [CourseController::class, 'index'])
        ->name('courses.index');
    Route::get('enrollments', [CourseController::class, 'enrollments'])
        ->name('courses.enrollments');


    Route::get('clubs', [ClubController::class, 'index'])
        ->name('clubs.index');
    Route::get('memberships', [ClubController::class, 'memberships'])
        ->name('clubs.memberships');


    Route::get('items/stock', [ItemStockController::class, 'index'])
        ->name('items.stock.index');

    // PDF routes
    Route::group([
        'controller' => PDFController::class,
        'as' => 'pdf.',
        'prefix' => 'pdf'
    ], function () {
        Route::get('enrollments', 'enrollments')
            ->name('enrollments');

        Route::get('memberships', 'memberships')
            ->name('memberships');

        Route::get('items', 'items')
            ->name('items');
    });
});
