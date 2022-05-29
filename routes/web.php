<?php

use App\Http\Controllers\Admin\ChatsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\QrCodeController;
use App\Http\Controllers\Admin\User\UserSettingController;
use App\Http\Controllers\FriendsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['role:super admin|guest|writer|admin']], function () {
    Route::resource('friends', FriendsController::class);
    Route::get('addfriends/{id}', [FriendsController::class, 'add'])->name('addfriends');

    Route::resource('chats', ChatsController::class);
    Route::resource('userssetting', UserSettingController::class);
    Route::post('changepassword', [UserSettingController::class, 'changePassword'])->name('changepassword');
    // Route::get('qrcodes', [QrCodeController::class, 'index']);
});

Route::group(['middleware' => ['role:super admin']], function () {
    Route::resource('users', UserController::class);
    Route::get('/user/trashed', [UserController::class, 'showTrashed'])->name('usershowTrashed');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::get('phpinfo', fn () => phpinfo());
