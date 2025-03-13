<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Session;

Route::get('/',[MainController::class,'index'])->name('home');

Route::get('/post/{id}', [PostController::class,'show'])->name('post.show');

Route::get('/set-locale/{locale}', [LocaleController::class,'setLocale'])->name('setLocale');



Route::get('api', [ApiController::class,'data']);