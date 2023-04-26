<?php

use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\Ayarlar;
use App\Http\Controllers\Back\Experience;
use App\Http\Controllers\Back\Education;
use App\Http\Controllers\Back\Skills;
use App\Http\Controllers\Back\Project;
use App\Http\Controllers\Front\FrontControl;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('postlogin');
});

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function () {
    Route::name('dashboard')->get('/', function () {
    return view('back.dashboard');
    });
    Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
    //ayarlar
    Route::resource('/ayarlar',Ayarlar::class);
    //Experience
    Route::resource('/experience',Experience::class);
    Route::get('/deleteexperience/{id}', [Experience::class, 'delete'])->name('delete.experience');
     //Tehsil
     Route::resource('/education',Education::class);
     Route::get('/deleteeducation/{id}', [Education::class, 'delete'])->name('delete.education');
      //Skills
      Route::resource('/skills',Skills::class);
      Route::get('/deleteskills/{id}', [Skills::class, 'delete'])->name('delete.skills');
      //Project
      Route::resource('/project',Project::class);
      Route::get('/deleteproject/{id}', [Project::class, 'delete'])->name('delete.project');
   
});

    Route::get('/',[FrontControl::class,'index'])->name('dashboard');
    Route::get('/error',function(){
        return view('error');
    });
