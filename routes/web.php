<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllerp;
use App\Http\Controllers\Registrationcontroller;
use App\Http\Controllers\routecontroller;
use App\Http\Middleware\registrationform;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/register', function () {
//     return view('Register');
// });
// Route::get('/signin', function () {
//     return view('signin');
// });
// Route::get('/rough', function () {
//     return view('roughPage');
// });
// Route::get('signin', [AuthController::class,'signin'])->name('signin');
// Route::post('signin', [AuthController::class,'signin'])->name('signin');
// Route::get('register', [RegistrationForm::class,'register'])->name('register');
// route::prefix('/admin')->namespace('App\Http\Controllers\Registrationcontroller')->group(function(){
    // route::group(['middleware'=>['registrationform']],function()
    Route::get('/register', [Registrationcontroller::class,'register'])->name('register');
    Route::post('/register', [Registrationcontroller::class,'store']);
    Route::post('/authenticate', [Registrationcontroller::class, 'authenticate']);
    Route::middleware('Registrationform')->group(function(){
        Route::get('/index', [Registrationcontroller::class,'index'])->name('index');
    });
    Route::middleware('Registrationform')->group(function(){
        Route::get('/dashboard', [Registrationcontroller::class,'dashboard'])->name('dashboard');
    });
    Route::middleware('Loginrestriction')->group(function(){
        Route::get('/login',[Registrationcontroller::class, 'login'])->name('login');
        // Route::get('/dashboard', [Registrationcontroller::class,'dashboard'])->name('dashboard');
    });
Route::post("/logout",[Registrationcontroller::class,'logout'])->name("logout");
// });1
// Route::get('/dashboard', [Registrationcontroller::class, 'dashboard'])->name('dashboard');
// Route::post('/logout',  [Registrationcontroller::class,'logout'])->name('logout');
// Route::get('/nav-bar', function () {
//     return view('nav');
// });
                // ajax routes
//  Route::get('/message', [routecontroller::class,'message'])->name('message');
//  Route::get('/settings', [routecontroller::class,'settings'])->name('settings');
//  Route::get('/orders', [routecontroller::class,'orders'])->name('orders');
//  Route::get('/mystore', [routecontroller::class,'mystore'])->name('mystore');
