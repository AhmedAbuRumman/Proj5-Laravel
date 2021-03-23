<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkillController;


/*
|--------------------------------------------------------------------------
|                              Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


// *************************** dashboard
// Route::get('/Category', function () {
//     return view('Category');
// });

Route::get('/Users', function () {
    return view('Manage_Users');
});

Route::resource('Categories' , CategoryController::class);
// Route::post('/Category/create', [CategoryController::class,'store']);
// Route::get('/Category/{category}/delete', [CategoryController::class,'delete']);
// Route::get('/Category', [CategoryController::class,'create'])->name('Category');
// Route::get('/Category/{category}/edit', [CategoryController::class,'edit']);
// Route::post('/category/{category}/update', [CategoryController::class,'update']);

Route::resource('Major' , MajorController::class);
// Route::post('/Major/create', [MajorController::class,'store']);
// Route::get('/Major/{Major}/delete', [MajorController::class,'delete']);
// Route::get('/Major', [MajorController::class,'create'])->name('Major');
// Route::get('/Major/{Major}/edit', [MajorController::class,'edit']);
// Route::post('/Major/{Major}/update', [MajorController::class,'update']);

Route::resource('Skill' , SkillController::class);

// Route::post('/Skill/create', [SkillController::class,'store']);
// Route::get('/Skill/{Skill}/delete', [SkillController::class,'delete']);
// Route::get('/Skill', [SkillController::class,'create'])->name('Skill');
// Route::get('/Skill/{Skill}/edit', [SkillController::class,'edit']);
// Route::post('/Skill/{Skill}/update', [SkillController::class,'update']);

///  Mange Admin ////

Route::resource('Admin' , AdminController::class);

// Route::post('/Admin/create', [AdminController::class,'store'])->name('admin.create');
// Route::get('/Admin/{admin}/delete', [AdminController::class,'delete']);
// Route::get('/Admin', [AdminController::class, 'create'])->name('Manage_Admins');
// Route::get('/Admin/{admin}/edit', [AdminController::class,'edit']);
// Route::post('/Admin/{admin}/update', [AdminController::class,'update']);

// ****welcome admin*********************************************************
Route::get('/welcome_admin', function () {
    return view('welcome_admin');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/Users', [UserController::class, 'show']);
Route::get('/Users/{id}/delete', [UserController::class,'delete']);

Route::get('/Jobs', [RecruiterController::class,'getJobsList']);
Route::get('/Jobs/{id}/delete', [RecruiterController::class,'delete']);









