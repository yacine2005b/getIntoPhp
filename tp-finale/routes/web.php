<?php

use App\Http\Controllers\affichageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;




//home page
Route::get('/',[DashbordController::class,'index'] )->name('dashboard');

Route::post('/affichages',[affichageController::class,'store'] )->name('affichages.store');

Route::get('/affichages/{affichage}',[affichageController::class,'show'] )->name('affichages.show');

Route::delete('/affichages/{id}',[affichageController::class,'destroy'] )->name('affichages.destroy')->middleware('auth');

Route::get('/news',[newsController::class,'index'] )->name('news');


Route::post('/affichages/{affichage}/comments',[CommentController::class,'store'] )->name('affichages.comments.store')->middleware('auth');

Route::get('/register',[AuthController::class,'register'] )->name('register');
Route::post('/register',[AuthController::class,'store'] );

Route::get('/login',[AuthController::class,'login'] )->name('login');
Route::post('/login',[AuthController::class,'authenticate'] );

Route::post('/logout',[AuthController::class,'logout'] )->name('logout');


Route::get('/parents',[AuthController::class,'showParents'] )->name('parents');
Route::get('/teachers',[AuthController::class,'showTeachers'] )->name('teachers');