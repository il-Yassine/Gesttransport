<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\ColiController;

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
Route::get('/deconnexion', function () {
    Session::flush();
    return view('auth.login');
});
Auth::routes();
Route::group( ['middleware' => 'auth'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('admin.profile');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::get('/reservation', [App\Http\Controllers\VoyageController::class, 'index'])->name('reservation');
Route::get('/coli', [App\Http\Controllers\ColiController::class, 'index'])->name('coli');
Route::resources([
    'users' => UserController::class,
    'trajets' => TrajetController::class,
    'buses' => BusController::class,
    'colis' => ColiController::class,
    'chauffeurs' => ChauffeurController::class,
    'voyages' => VoyageController::class,
]);

});
