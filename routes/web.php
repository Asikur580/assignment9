<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;


Route::get('/home',[homeController::class,'index'])->name('home');
Route::get('/aboutme',[homeController::class,'aboutme'])->name('aboutme');
Route::get('/service',[homeController::class,'service'])->name('service');
Route::get('/skill',[homeController::class,'skill'])->name('skill');
Route::get('/blog',[homeController::class,'blog'])->name('blog');
Route::get('/contact',[homeController::class,'contact'])->name('contact');

