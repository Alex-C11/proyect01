<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Activity;
use App\Http\Livewire\Admin\Permissions\CreatePermission;
use App\Http\Livewire\Admin\Permissions\ViewPermissions;
use App\Http\Livewire\Admin\Roles\CreateRoles;
use App\Http\Livewire\Admin\Roles\EditRole;
use App\Http\Livewire\Admin\Roles\ViewRoles;
use App\Http\Livewire\Admin\Users\CreateUser;
use App\Http\Livewire\Admin\Users\EditUser;
use App\Http\Livewire\Admin\Users\ViewUsers;
use App\Http\Livewire\Assistence;
use App\Http\Livewire\Associate;
use App\Http\Livewire\Association;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('associations',Association::class)->name('associations');
Route::get('activities',Activity::class)->name('activities');
Route::get('assistences',Assistence::class)->name('assistences');
Route::get('associates',Associate::class)->name('associates');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::prefix('admin')->group(function (){
        Route::get('/users',ViewUsers::class)->name('admin.users.index');
        Route::get('/user/create',CreateUser::class)->name('admin.users.create');
        Route::get('/user/{user}/edit',EditUser::class)->name('admin.users.edit');
        // Roles
        Route::get('/role/create',CreateRoles::class)->name('admin.roles.create');
        Route::get('/rolesy',ViewRoles::class)->name('admin.roles.index');
        Route::get('/role/{role}/edit',EditRole::class)->name('admin.roles.edit');
        // Permissions
        Route::get('/permissions',ViewPermissions::class)->name('admin.permissions.index');
        Route::get('/permission/create',CreatePermission::class)->name('admin.permissions.create');
    });
});
