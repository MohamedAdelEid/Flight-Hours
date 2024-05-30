<?php

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
//************* */ Front Design *************************

Route::prefix('front')->name('front')->group(function () {
  Route::get('/', FrontHomecontroller::class)->Middleware('auth')->name('index');

  //----------*/ category----
  Route::get('/category', [jobs_categoriecontroller::class, 'view_jobs'])->Middleware('auth')->name('show');
  Route::get('/category/add', [jobs_categoriecontroller::class, 'create'])->Middleware('auth')->name('jobs.create');
  Route::post('/category/add', [jobs_categoriecontroller::class, 'store'])->Middleware('auth')->name('jobs.store');
  Route::get('/category/edit', [jobs_categoriecontroller::class, 'edit'])->Middleware('auth')->name('jobs.edit');

  //----------*/ types ----
  Route::get('/types', [Types_categoriecontroller::class, 'view_types'])->Middleware('auth')->name('view_types');
  Route::get('/types/add', [Types_categoriecontroller::class, 'create'])->Middleware('auth')->name('types.create');
  Route::post('/types/add', [Types_categoriecontroller::class, 'store'])->Middleware('auth')->name('types.store');
  Route::get('/types/edit', [Types_categoriecontroller::class, 'edit'])->Middleware('auth')->name('types.edit');

  //----------*/ Airports ----
  Route::get('/Airports', [Airports_categoriecontroller::class, 'view_Airports'])->Middleware('auth')->name('view_Airports');
  Route::get('/Airports/add', [Airports_categoriecontroller::class, 'create'])->Middleware('auth')->name('Airports.create');
  Route::post('/Airports/add', [Airports_categoriecontroller::class, 'store'])->Middleware('auth')->name('Airports.store');
  Route::get('/Airports/edit', [Airports_categoriecontroller::class, 'edit'])->Middleware('auth')->name('Airports.edit');

  //----------*/ employees ---- 
  Route::get('/Employee', [Employeecontroller::class, 'Employee_index'])->Middleware('auth')->name('Employee.index');
  Route::get('/Employee/view', [Employeecontroller::class, 'Employee_search'])->Middleware('auth')->name('Employee_search');

  //----------*/ login  ---------
  Route::view('/login', 'front.auth.login');
  Route::view('/register', 'front.auth.register');
  Route::view('/forgot', 'front.auth.forgotpassword');

});
require __DIR__ . '/auth.php';

//***************** +++++++++++++++++++++++++++++++++++++++++++++++++++++ ******************

//***************** */ Admin Design ******************

Route::prefix('admin')->name('admin')->group(function () {
  Route::get('/', backHomecontroller::class)->Middleware('admin')->name('index');

  Route::view('/login', 'back.auth.login');
  Route::view('/register', 'back.auth.register');
  Route::view('/forgot', 'back.auth.forgotpassword');
  require __DIR__ . '/Adminauth.php';
});

//***************** +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++******************

//***************** */ Captin Design ******************

Route::prefix('Captin')->name('Captin')->group(function () {
  Route::get('/', CaptinHomecontroller::class)->Middleware('captin')->name('index');
  Route::view('/login', 'back.auth.login');
  Route::view('/register', 'back.auth.register');
  Route::view('/forgot', 'back.auth.forgotpassword');
  require __DIR__ . '/Captinauth.php';

});

Route::get('/', function () {
  return view('welcome');
});


Route::get('/dashboard-admin', function () {
  return view('admin.index');
});