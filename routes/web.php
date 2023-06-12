<?php

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
    // --------------------------------------------------------------------
        Route::resource('Dashboard', DashboardController::class);    
    // --------------------------------------------------------------------
        Route::resource('AcademicBackground', AcademicBackgroundController::class);  
    // --------------------------------------------------------------------
        Route::resource('Languages', LanguagesController::class);  
    // --------------------------------------------------------------------
        Route::resource('Organizations', OrganizationsController::class);  
    // --------------------------------------------------------------------
        Route::resource('SkillsSpecialization', SkillsSpecializationController::class);  
    // --------------------------------------------------------------------
        Route::resource('TechStacks', TechStacksController::class);  
    // --------------------------------------------------------------------
        Route::resource('WorkExperiences', WorkExperiencesController::class);  
    // --------------------------------------------------------------------





    // --------------------------------------------------------------------
        Route::resource('AboutApp', AboutAppController::class);   
    // --------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});
