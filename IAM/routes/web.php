<?php

use Illuminate\Support\Facades\Route;
use Modules\IAM\Livewire\Auth\Login;
use Modules\IAM\Livewire\Auth\Registration;
use Modules\IAM\Livewire\User\User;
use Modules\IAM\Livewire\Users\Show;
use Modules\IAM\Livewire\Users\ChangePassword;
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

Route::group(['prefix' => 'iam'], function() {
    Route::get('login', Login::class)->name('iam.login');
    // Route::middleware('auth')->group(function () {
        Route::get('registration', Registration::class)->name('iam.registration');
        Route::get('users', User::class)->name('iam.users');
        // Route::get('users', Show::class)->name('iam.users');
        Route::get('user/edit/password', ChangePassword::class)->name('iam.change_password');
    // )};
});
