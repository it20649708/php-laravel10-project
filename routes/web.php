<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\ProfileController;
use App\Models\Dog;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])
    ->name('admin.dashboard');
    Route::get('/admin/dashboard/all', [AdminController::class, 'allAction'])
    ->name('admin.all');
    Route::get('/admin/login', [AdminController::class, 'adminlogin'])
    ->name('admin.login');
    Route::get('/admin/dashboard/single', [AdminController::class, 'singleAction'])
    ->name('admin.single');





});//Admin middleware

Route::middleware(['auth','role:agent'])->group(function(){
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])
    ->name('agent.dashboard');



});//Agent middleware



Route::get('/user/dashboard', [AgentController::class, 'UserDashboard'])
->name('user.dashboard');


Route::get('send-mail', [MyController::class, 'index']);





