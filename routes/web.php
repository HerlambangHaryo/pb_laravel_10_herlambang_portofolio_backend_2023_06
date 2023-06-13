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
            Route::get('AcademicBackground/{AcademicBackground}/deletedata', 'AcademicBackgroundController@deletedata')
                ->name('AcademicBackground.deletedata');  
        Route::resource('AcademicBackground', AcademicBackgroundController::class);  
    // --------------------------------------------------------------------
            Route::get('Languages/{Languages}/deletedata', 'LanguagesController@deletedata')
                ->name('Languages.deletedata');  
        Route::resource('Languages', LanguagesController::class);  
    // --------------------------------------------------------------------
            Route::get('Organizations/{Organizations}/deletedata', 'OrganizationsController@deletedata')
                ->name('Organizations.deletedata');  
        Route::resource('Organizations', OrganizationsController::class);  
    // --------------------------------------------------------------------
            Route::get('SkillsSpecialization/{SkillsSpecialization}/deletedata', 'SkillsSpecializationController@deletedata')
                ->name('SkillsSpecialization.deletedata');  
        Route::resource('SkillsSpecialization', SkillsSpecializationController::class);  
    // --------------------------------------------------------------------
            Route::get('TechStacks/{TechStacks}/deletedata', 'TechStacksController@deletedata')
                ->name('TechStacks.deletedata');  
        Route::resource('TechStacks', TechStacksController::class);  
    // --------------------------------------------------------------------
            Route::get('WorkExperiences/{WorkExperiences}/deletedata', 'WorkExperiencesController@deletedata')
                ->name('WorkExperiences.deletedata');  
        Route::resource('WorkExperiences', WorkExperiencesController::class);  
    // --------------------------------------------------------------------





    // --------------------------------------------------------------------
        Route::resource('AboutApp', AboutAppController::class);   
    // -------------------------------------------------------------------- 


Route::get('/', function () {
    return view('welcome');
});
