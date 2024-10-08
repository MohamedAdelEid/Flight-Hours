<?php

use App\Http\Controllers\AircraftController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontHomecontroller;
use App\Http\Controllers\back\backHomecontroller;
use App\Http\Controllers\front\Jobs_categoriesController;
use App\Http\Controllers\front\Types_categoriecontroller;
use App\Http\Controllers\Captin\CaptinHomecontroller;
use App\Http\Controllers\front\Airports_categoriecontroller;
use App\Http\Controllers\front\Employeecontroller;
use App\Http\Controllers\front\jobs_categoriecontroller;
use App\Models\Admin;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Livewire\JobTable;

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


Route::prefix('front')->name('front')->group(function () {
  Route::get('/', FrontHomecontroller::class)->Middleware('auth')->name('index');
  //----------*/ types ----
  Route::get('/types', [Types_categoriecontroller::class, 'view_types'])->Middleware('auth')->name('view_types');
  Route::get('/types/add', [Types_categoriecontroller::class, 'create'])->Middleware('auth')->name('types.create');
  Route::post('/types/add', [Types_categoriecontroller::class, 'store'])->Middleware('auth')->name('types.store');
  Route::get('/types/edit', [Types_categoriecontroller::class, 'edit'])->Middleware('auth')->name('types.edit');


  //----------*/ employees ----
  Route::get('/Employee', [Employeecontroller::class, 'Employee_index'])->Middleware('auth')->name('Employee.index');
  Route::get('/Employee/view', [Employeecontroller::class, 'Employee_search'])->Middleware('auth')->name('Employee_search');

  //----------*/ login  ---------
  Route::view('/login', 'front.auth.login');
  Route::view('/register', 'front.auth.register');
  Route::view('/forgot', 'front.auth.forgotpassword');

});
require __DIR__ . '/auth.php';
Route::prefix('admin')->name('admin')->group(function () {
  Route::get('/', backHomecontroller::class)->Middleware('admin')->name('index');

  Route::view('/login', 'back.auth.login');
  Route::view('/register', 'back.auth.register');
  Route::view('/forgot', 'back.auth.forgotpassword');
  require __DIR__ . '/Adminauth.php';
});


Route::prefix('Captain')->name('Captain')->group(function () {
  Route::get('/', CaptinHomecontroller::class)->Middleware('captin')->name('index');
  Route::view('/login', 'back.auth.login');
  Route::view('/register', 'back.auth.register');
  Route::view('/forgot', 'back.auth.forgotpassword');
  require __DIR__ . '/Captinauth.php';

});

Route::get('/', function () {
  return view('auth.login-');
});

Route::get('/dashboard-admin', function () {
  return view('admin.index');
});

Route::get('/home-page', function () {
  return view('admin.index');
})->name('user.index');

Route::resource('job', JobController::class);
Route::resource('aircraft', AircraftController::class);
Route::resource('airport', AirportController::class);

Route::get('/jobs', [JobTable::class , 'render']);
