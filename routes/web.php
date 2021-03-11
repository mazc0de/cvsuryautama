<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\{UserController,HelpController,LaporanController,PermissionController,RoleController};
use Illuminate\Support\Facades\Route;
use App\Models\{User, Laporan};
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
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

        Route::prefix('users')->group(function(){
            Route::get('/', [UserController::class, 'index'])->name('users.index');
            Route::get('create', [UserController::class, 'create'])->name('users.create');
            Route::post('create', [UserController::class, 'store']);
            Route::get('edit/{user:id}', [UserController::class, 'edit'])->name('users.edit');
            Route::put('edit/{user:id}', [UserController::class, 'update']);
            Route::get('delete/{user:id}', [UserController::class, 'destroy'])->name('users.delete');
        });

        Route::prefix('roles')->group(function(){
            Route::get('/', [RoleController::class, 'index'])->name('roles.index');
            Route::get('create', [RoleController::class, 'create'])->name('roles.create');
            Route::post('create', [RoleController::class, 'store']);
            Route::get('edit/{role:id}', [RoleController::class, 'edit'])->name('roles.edit');
            Route::put('edit/{role:id}', [RoleController::class, 'update']);
            Route::get('delete/{role:id}', [RoleController::class, 'destroy'])->name('roles.delete');
        });

        Route::prefix('permission')->group(function(){
            Route::get('/', [PermissionController::class, 'index'])->name('permission.index');
            Route::get('create', [PermissionController::class, 'create'])->name('permission.create');
            Route::post('create', [PermissionController::class, 'store']);
            Route::get('edit/{permission:id}', [PermissionController::class, 'edit'])->name('permission.edit');
            Route::put('edit/{permission:id}', [PermissionController::class, 'update']);
            Route::get('delete/{permission:id}', [PermissionController::class, 'destroy'])->name('permission.delete');
        });

        Route::prefix('laporan')->group(function(){
            Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');
            Route::get('create', [LaporanController::class, 'create'])->name('laporan.create');
            Route::post('create', [LaporanController::class, 'store']);
            Route::get('download/{item:title}', [LaporanController::class, 'download'])->name('laporan.download');
            Route::get('edit/{laporan:id}', [LaporanController::class, 'edit'])->name('laporan.edit');
            Route::put('edit/{laporan:id}', [LaporanController::class, 'update']);
        });

        Route::prefix('help')->group(function(){
            Route::get('index', [HelpController::class, 'index'])->name('help.index');
            Route::get('submit', [HelpController::class, 'submit'])->name('help.submit');
            Route::post('submit', [HelpController::class, 'store']);
        });
    });
});