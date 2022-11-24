<?php

use App\Http\Controllers\Admin\AdminformsController;
use App\Http\Controllers\Admin\AdminGetController;
use App\Http\Controllers\Admin\AdminspagesController;
use App\Http\Controllers\Forms\LoginController;
use App\Http\Controllers\Forms\LogoutController;
use App\Http\Controllers\Forms\RegisterController;
use App\Http\Controllers\Forms\SociallinksController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Users\UserspagesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [PagesController::class, 'home']);
Route::get('/tailor-benefits', [PagesController::class, 'tailorbenefits'])->name('tailorbenefits');
Route::get('/users-benefits', [PagesController::class, 'usersbenefits'])->name('usersbenefits');
Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/email', [PagesController::class, 'email'])->name('email');

/// for guest


Route::middleware(['guest'])->group(function () {
    Route::get('/register',[PagesController::class, 'register'])->name('register');
    Route::get('/login', [PagesController::class, 'login'])->name('login');
    Route::post('/loginusers', [LoginController::class, 'login']);
});


// for users
Route::middleware(['auth'])->group(function (){
    Route::get('/usersdashboard', [UserspagesController::class, 'index'])->name('usersdashboard');
    Route::post('/logoutuser', [LogoutController::class, 'logout']);
    // for admin
    Route::get('/sociallinks', [AdminspagesController::class, 'sociallinks'])->name('sociallinks');
    Route::get('/admin/users_booking', [AdminspagesController::class, 'adminbooking'])->name('adminbooking');
    Route::post('/sociallinkstore', [AdminformsController::class, 'sociallinks']);
    Route::post('/register-user', [RegisterController::class, 'register']);
    Route::get('/admin/people', [AdminspagesController::class, 'people'])->name('allpeople');
    Route::get('/getsociallinks',[AdminGetController::class, 'getsociallinks']);
    Route::post('/secondusers', [AdminformsController::class, 'email']);
    Route::get('/admindashboard', [AdminspagesController::class, 'admindashboard'])->name('admindashboard');
    Route::post('/subcribers', [AdminformsController::class, 'subcribers']);
    Route::get('/subcribers', [AdminspagesController::class, 'viewsub'])->name('subcribers');
});




