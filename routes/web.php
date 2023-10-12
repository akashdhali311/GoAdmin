<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormTableController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\AdminHomeSliderComponent;
use App\Http\Controllers\Admin\AdminAddHomeSliderComponent;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminEditAddHomeSliderComponent;

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
})->name('home');
Route::get('/register',[RegisteredUserController::class,'register'])->name('register');
Route::post('/register',[RegisteredUserController::class,'registerpost'])->name('register');

Route::get('/login',[AuthenticatedSessionController::class,'login'])->name('login');
Route::post('/login',[AuthenticatedSessionController::class,'postlogin'])->name('login');







Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/dashbord-v2',[AdminController::class,'dashbord_v2' ])->name('dashbord-v2');
Route::get('/dashbord-v3',[AdminController::class,'dashbord_v3' ])->name('dashbord-v3');

Route::get('/charts/chartjs',[AdminController::class,'chartjs' ])->name('chartjs');
Route::get('/charts/flot',[AdminController::class,'flot' ])->name('flot');
Route::get('/charts/inline',[AdminController::class,'inline' ])->name('inline');
Route::get('/charts/uplot',[AdminController::class,'uplot' ])->name('uplot');
// Form TABLE
Route::get('/forms/general',[FormTableController::class,'general' ])->name('general');
Route::get('/forms/general/general-create',[FormTableController::class,'create' ])->name('general-create');
Route::post('/forms/general',[FormTableController::class,'store' ])->name('general-table-store');
Route::get('/forms/general/general-edit/{id}',[FormTableController::class,'edit' ])->name('edit');
Route::put('/table/editors/general-update/{id}',[FormTableController::class,'update' ])->name('generalupdate');
Route::get('/forms/general/general-delete/{formTable}',[FormTableController::class,'delete' ])->name('general-delete');



Route::get('/widgets',[AdminController::class,'widgets' ])->name('widgets');
Route::get('/calendar',[AdminController::class,'calendar' ])->name('calendar');
Route::get('/gallery',[AdminController::class,'gallery' ])->name('gallery');
Route::get('/sliders',[AdminController::class,'sliders' ])->name('sliders');
Route::get('/kanban',[AdminController::class,'kanban' ])->name('kanban');
// TABLE
Route::get('/table/simpletable',[CategoryController::class,'simpletable' ])->name('simpletable');
Route::get('/table/simpletable/catagory-create',[CategoryController::class,'created' ])->name('catagory-create');
Route::post('/table/simpletable/catagory-store',[CategoryController::class,'stored' ])->name('catagory-store');
Route::get('/table/simpletable/catagory-edit/{id}',[CategoryController::class,'edit' ])->name('catagory-edit');
Route::put('/table/simpletable/catagory-update/{id}',[CategoryController::class,'update' ])->name('catagory-update');
Route::get('/table/simpletable/catagory-delete/{id}',[CategoryController::class,'delete' ])->name('catagory-delete');

Route::get('/dashboard/dataTables',[StudentController::class,'dataTables'])->name('dataTables');


// Settings/HomeSettings
Route::get('/settings/homeSettings',[AdminHomeSliderComponent::class,'index' ])->name
('homeSettings');
Route::get('/settings/homeSettings/create',[AdminHomeSliderComponent::class,'create' ])->name
('create');
Route::post('/settings/homeSettings/store',[AdminHomeSliderComponent::class,'store' ])->name
('store');
Route::get('/settings/homeSettings/product-edit/{id}',[AdminHomeSliderComponent::class,'edit' ])->name('productedit');
Route::put('/settings/homeSettings/product-update/{id}',[AdminHomeSliderComponent::class,'update' ])->name('productupdate');
Route::get('/settings/homeSettings/product-delete/{id}',[AdminHomeSliderComponent::class,'destroy' ])->name('productdelete');



// Route::get('/tables',[AdminController::class,'tables' ])->name('tables');

// require __DIR__.'/auth.php';

Route::get('/dotCreative',[AdminController::class,'webpage' ]);
Route::get('/home',[AdminController::class,'home' ])->name('home1');
Route::get('/about',[AdminController::class,'about' ])->name('about');
Route::get('/services',[AdminController::class,'services' ])->name('services');

