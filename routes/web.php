<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::prefix('users')->controller(\App\Http\Controllers\UserController::class)->name('users.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{user}', 'show')->name('show');
        Route::put('/{user}', 'update')->name('update');
        Route::delete('/{user}', 'destroy')->name('delete');
    });
    Route::prefix('admins')->controller(\App\Http\Controllers\AdminController::class)->name('admins.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{admin}', 'show')->name('show');
        Route::put('/{admin}', 'update')->name('update');
        Route::delete('/{admin}', 'destroy')->name('delete');
    });
    Route::prefix('roles')->controller(\App\Http\Controllers\RoleController::class)->name('roles.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{role}', 'show')->name('show');
        Route::put('/{role}', 'update')->name('update');
        Route::delete('/{role}', 'destroy')->name('delete');
    });
    Route::prefix('areas')->controller(\App\Http\Controllers\AreaController::class)->name('areas.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{area}', 'show')->name('show');
        Route::put('/{area}', 'update')->name('update');
        Route::delete('/{area}', 'destroy')->name('delete');
    });
    Route::prefix('events')->controller(\App\Http\Controllers\EventController::class)->name('events.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{event}', 'show')->name('show');
        Route::put('/{event}', 'update')->name('update');
        Route::delete('/{event}', 'destroy')->name('delete');
    });
    Route::prefix('editions')->controller(\App\Http\Controllers\EditionController::class)->name('editions.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{edition}', 'show')->name('show');
        Route::put('/{edition}', 'update')->name('update');
        Route::delete('/{edition}', 'destroy')->name('delete');
    });
    Route::prefix('posts')->controller(\App\Http\Controllers\PostController::class)->name('posts.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{post}', 'show')->name('show');
        Route::put('/{post}', 'update')->name('update');
        Route::delete('/{post}', 'destroy')->name('delete');
    });
    Route::prefix('publications')->controller(\App\Http\Controllers\PublicationController::class)->name('publications.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{publication}', 'show')->name('show');
        Route::put('/{publication}', 'update')->name('update');
        Route::delete('/{publication}', 'destroy')->name('delete');
    });

});
