<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\RecruiterRegisterController;
use App\Http\Controllers\RecruiterLoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;





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


Route::get('job_post', [JobPostController::class,'create11']);
Route::post('search_post', [JobPostController::class,'search']);
Route::post('view_post', [JobPostController::class,'create']);
Route::get('view_post', [JobPostController::class,'index']);
Route::get('edit_post/{id}', [JobPostController::class, 'edit']);
Route::post('edit_post/view_post/{id}',[JobPostController::class,'update']);
Route::get('view_post/{id}', [JobPostController::class,'destroy']);
Route::get('jobs/{id}/delete', [JobPostController::class,'destroy']);
Route::get('single/{id}', [JobPostController::class,'show1']);
Route::get('/PostsCategories/{id}', [CategoryController::class,'show']);  //1
Route::get('recruiter_profile/{id}', [JobPostController::class,'show2']);


Route::get('/listcat', [CategoryController::class,'index']);

// Route::get('/index', function () {
//     return view('user.index');
// });
// Route::get('/user_profile', function () {
//     return view('user.user_profile');
// });
// Route::get('/user_public', function () {
//     return view('user.user_public');
// });
// Route::get('/edit', function () {
//     return view('user.edit');
// });
// Route::get('/applied_job', function () {
//     return view('user.applied_job');
// });

Route::get('/user_profile/{id}', [ProfileController::class,'show2']);
Route::get('/edit/{user}', [ProfileController::class,'edit']);
Route::post('/update/{id}', [ProfileController::class,'update']);
Route::get('/apply/{id}', [ProfileController::class,'apply']);
Route::post('/jobuser/{id}', [ProfileController::class,'store']);
Route::get('applied_job/{id}', [ProfileController::class,'show3']);

Route::get('/recruiters', [UserController::class,'index']);
Route::get('/recruiters/{id}/delete', [UserController::class,'delete']);






Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/login',[AdminLoginController::class, 'showLoginForm']);
Route::post('/admin/login',[AdminLoginController::class, 'login']);

Route::prefix('recruiter')->group(function(){
    Route::get('/login', [RecruiterLoginController::class,'showLoginForm'])->name('recruiter.login');
    Route::post('/login', [RecruiterLoginController::class,'login'])->name('recruiter.login.submit');
    Route::get('/', [RecruiterController::class,'index'])->name('recruiter.dashboard');
    Route::get('/register', [RecruiterRegisterController::class,'index'])->name('recruiter.register');
    Route::post('/register', [RecruiterRegisterController::class,'store'])->name('recruiter.register.submit');
});



Route::get('/welcome_register', function () {
    return view('welcome_register');
});

Route::get('/welcome_login', function () {
    return view('welcome_login');
});


Route::get('showMajor/{id}' , [MajorController::class, 'showMajor']);

Route::get('showSkill/{id}' , [SkillController::class, 'showSkill']);

Route::get('allcategories' , [CategoryController::class, 'index1']);

Route::get('/', [JobPostController::class, 'indexhome']);
