<?php

use App\Models\master\AnnualDemand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DSDivisionController;
use App\Http\Controllers\LoginDetailController;
use App\Http\Controllers\AnnualDemandController;
use App\Http\Controllers\master\BrandController;
use App\Http\Controllers\SearchDetailController;
use App\Http\Controllers\UserHospitalController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\master\QuarterController;
use App\Http\Controllers\master\RationDateController;
use App\Http\Controllers\master\RationTimeController;
use App\Http\Controllers\master\RationTypeController;
use App\Http\Controllers\master\MeasurementController;
use App\Http\Controllers\master\ReceiptTypeController;
use App\Http\Controllers\master\LocationTypeController;
use App\Http\Controllers\master\RationCategoryController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);

    Route::get('/users/inactive/{id}',[UserController::class,'inactive'])->name('users.inactive');
    // Route::get('/users/suspendusers/',[UserController::class,'suspendusers'])->name('users.suspendusers');
    Route::get('/users/activate/{id}',[UserController::class,'activate'])->name('users.activate');
    Route::get('/users/resetpass/{id}',[UserController::class,'resetpass'])->name('users.resetpass');
    Route::resource('users', UserController::class);
    
    Route::get('/change-password',  [ChangePasswordController::class,'index'])->name('change.index');
    Route::post('/change-password', [ChangePasswordController::class,'store'])->name('change.password');    

    Route::get('/logindetails',[LoginDetailController::class,'index'])->name('logindetails.index');
    
    Route::prefix('master/')->group(function (){
        Route::resource('location_types',LocationTypeController::class);
        Route::resource('ration_dates',RationDateController::class);
        Route::resource('ration_types',RationTypeController::class);
        Route::resource('ration_times',RationTimeController::class);
        Route::resource('ration_categories',RationCategoryController::class);
        Route::resource('brands',BrandController::class);
        Route::resource('quarters',QuarterController::class);
        Route::resource('measurements',MeasurementController::class);
        Route::resource('receipt_types',ReceiptTypeController::class);
    });

    Route::resource('annual_demands',AnnualDemandController::class);
});

Route::get('/ajax/getDistricts',[AjaxController::class,'getDistricts'])->name('ajax.getDistricts');

Route::get('/ajax/getDSDivisions',[AjaxController::class,'getDSDivisions'])->name('ajax.getDSDivisions');


