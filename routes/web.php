<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/guest', function () {
    return view('guest');
})->middleware("guest");



Route::get('/todos',
 [ToDoController::class, 'index']
 )->middleware("auth");

 Route::post('/todos',
  [ToDoController::class, 'store']
  )->middleware("auth");

 Route::get('/todos/create',
 [ToDoController::class, 'create']
 )->middleware("auth");

 Route::get('/todos/{todo}',
[ToDoController::class, 'show']
)->middleware("auth");

Route::get('/todos/{todo}/edit',
[ToDoController:: class, 'edit']
)->middleware("auth");

Route::put('/todos/{todo}',
[ToDoController::class, 'update']
)->middleware("auth");

Route::delete('/todos/{todo}/destroy',
[ToDoController:: class, 'destroy']
)->middleware("auth");






Route::get('/diaries',
 [DiaryController::class, 'index']
 )->middleware("auth");

 Route::get('/diaries/create',
 [DiaryController::class, 'create']
 )->middleware("auth");

  Route::post('/diaries',
  [DiaryController::class, 'store']
  )->middleware("auth");

Route::get('/diaries/{diary}',
 [DiaryController::class, 'show']
 )->middleware("auth");
Route::get('/diaries/{diary}/edit',
[DiaryController:: class, 'edit']
)->middleware("auth");


Route::put('/diaries/{diary}', [DiaryController::class, 'update'])->middleware("auth");

Route::delete('/diaries/{diary}/destroy',
[DiaryController:: class, 'destroy']
)->middleware("auth");

 



Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, "create"])->middleware("guest")->name('register');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('/logout', fn () => redirect('/'));


Route::post('/login', [SessionController::class, 'store'])->name('login');
Route::get('/login', [SessionController::class, 'create'])->middleware("guest")->name('login');





