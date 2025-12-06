<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\InstructorController;
use App\Http\Controllers\backend\InstructorProfileController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\frontend\FrontendDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Admin Login

Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');

// Admin Pages
Route::middleware(['auth','verified','role:admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::post('/logout',[AdminController::class,'destroy'])->name('logout');

    // Admin Profile
    Route::get('/profile',[AdminProfileController::class,'index'])->name('profile');
    Route::post('/profile/store',[AdminProfileController::class,'store'])->name('profile.store');
    Route::get('/setting',[AdminProfileController::class,'setting'])->name('setting');
    Route::post('/password/setting',[AdminProfileController::class,'passwordSetting'])->name('passwordSetting');
    Route::resource('category',CategoryController::class);
    Route::resource('subCategory',SubCategoryController::class);

    // Manage Slider controller
    Route::resource('slider',SliderController::class);

});

// Instructor Login
Route::get('/instructor/login',[InstructorController::class,'login'])->name('instructor.login');

// Instructor pages
Route::middleware(['auth','verified','role:instructor'])->prefix('instructor')->name('instructor.')->group(function(){
    Route::get('/dashboard',[InstructorController::class,'dashboard'])->name('dashboard');
    Route::post('/logout',[InstructorController::class,'destroy'])->name('logout');
    // Profile Route

    Route::get('/profile',[InstructorProfileController::class,'index'])->name('profile');
    Route::post('/profile/store',[InstructorProfileController::class,'store'])->name('profile.store');
    Route::get('/setting',[InstructorProfileController::class,'setting'])->name('setting');
    Route::post('/password/setting',[InstructorProfileController::class,'passwordSetting'])->name('passwordSetting');

   
    
});


// frontend route

Route::get('/',[FrontendDashboardController::class,'home'])->name('frontend.home');



require __DIR__.'/auth.php';
