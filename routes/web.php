<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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

Auth::routes();

Route::get('/signup', function () {
	return view('auth.register');
});

Route::group(['middleware' => 'auth'], function () {

	Route::get('/dashboard', function () {
		return view('dashboard');
	})->middleware('role:admin')-> name('dashboard');
	

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    // Route::get('/register', [RegisterController::class, 'create']);
    // Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

Route::get('/', [App\Http\Controllers\PublicController::class, 'awal'])->name('awal');
Route::get('/about', [App\Http\Controllers\PublicController::class, 'about'])->name('about');
Route::middleware('auth')->get('/menu', [App\Http\Controllers\PublicController::class, 'menu'])->name('menu');
Route::get('/tips', [App\Http\Controllers\PublicController::class, 'tips'])->name('tips');
Route::get('/detail', [App\Http\Controllers\PublicController::class, 'detail'])->name('detail');
Route::get('/motivasi', [App\Http\Controllers\PublicController::class, 'motivasi'])->name('motivasi');
Route::get('/s1', [App\Http\Controllers\PublicController::class, 's1'])->name('s1');
Route::get('/s2', [App\Http\Controllers\PublicController::class, 's2'])->name('s2');
Route::get('/s3', [App\Http\Controllers\PublicController::class, 's3'])->name('s3');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
