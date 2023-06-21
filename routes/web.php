<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\InstrukturDashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostTestController;
use App\Http\Controllers\PreTestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubCurriculumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// User
Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('loginProcess');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Group Middleware
Route::prefix('admin')->middleware(['auth:admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::resource('/course-categories', CourseCategoryController::class);
    Route::resource('/instructors', InstructorController::class);
});

// Instruktur Routes
Route::prefix('instruktur')->middleware(['auth:instruktur'])->name('instruktur.')->group(function () {
    Route::get('/dashboard', [InstrukturDashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'courses' => CourseController::class,
        'courses.curriculum' => CurriculumController::class,
        'courses.curriculum.subcurriculum' => SubCurriculumController::class,

        'pre-test' => PreTestController::class,
        'post-test' => PostTestController::class,
    ]);

    Route::post('question', [QuestionController::class, 'store'])->name('question.store');
});
