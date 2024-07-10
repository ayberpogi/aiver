<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/services', function () {
    return view('services');
});

Router::get('users',[UserController::class, 'index']);
Router::get('users/create',[UserController::class, 'index']);
Router::post('users',[UserController::class, 'store']);
Router::get('users/{id}',[UserController::class, 'show']);
Router::get('users/{id}/',[UserController::class, 'edit']);
Router::get('users/{id}/edit',[UserController::class, 'update']);
Router::put('users/{id}',[UserController::class, 'update']);
Router::delete('users/{id}',[UserController::class, 'destroy']);


