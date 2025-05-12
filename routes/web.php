<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PartyMasterController;
use App\Http\Controllers\Admin\ComapaniesController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth:web')->group(function() {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('admin');
    // Route::resource('/admin/user',UserController::class);
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');

    //PARTY MASTER
    Route::get('/admin/party', [PartyMasterController::class,'index'])->name('party.index'); 

    // Company Create
    Route::get('/admin/company',[ComapaniesController::class,'index'])->name('company.index');
    Route::post('/admin/company',[ComapaniesController::class,'store'])->name('companies.store');
    Route::get('/admin/company-create',[ComapaniesController::class,'create'])->name('companies.create');
    Route::get('/admin/company-edit/{id}',[ComapaniesController::class,'edit'])->name('companies.edit');
    Route::put('/admin/company/{id}',[ComapaniesController::class,'update'])->name('companies.update');
    Route::delete('/companies/{id}', [ComapaniesController::class, 'destroy'])->name('companies.destroy');
});