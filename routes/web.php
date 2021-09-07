<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
// use ClientController;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//mycompany
Route::get('/mycompany',[App\Http\Controllers\mycompanyController::class, 'index'])->name('mycompany');
Route::post('/mycompany',[App\Http\Controllers\mycompanyController::class, 'store'])->name('mycompany');


// drivers
Route::get('/drivers', [App\Http\Controllers\DriverController::class, 'index'])->name('drivers');
Route::get('/adddriver',[App\Http\Controllers\DriverController::class, 'create'])->name('adddriver');
Route::post('/savedriver',[App\Http\Controllers\DriverController::class, 'store'])->name('savedriver');
Route::get('/drivers',[App\Http\Controllers\DriverController::class, 'show'])->name('drivers');
Route::get('deletedriver/{dr_id}',[App\Http\Controllers\DriverController::class, 'destroy'])->name('deletedriver/{dr_id}');
Route::get('editdriver/{id}',[App\Http\Controllers\DriverController::class, 'edit'])->name('editdriver');

// clients
Route::get('/clients',[App\Http\Controllers\ClientController::class, 'index'])->name('clients');
Route::post('/addclients',[App\Http\Controllers\ClientController::class, 'store'])->name('addclients');
Route::get('/deleteclients/{id}',[App\Http\Controllers\ClientController::class, 'destroy'])->name('deleteclients/{id}');
Route::get('/editclients/{id}',[App\Http\Controllers\ClientController::class, 'edit'])->name('editclients/{id}');

//myltds
Route::get('/myltds',[App\Http\Controllers\MyltdsController::class, 'index'])->name('myltds');
Route::post('/myltdssave',[App\Http\Controllers\MyltdsController::class, 'store'])->name('myltdssave');
Route::get('deletemyltds/{id}',[App\Http\Controllers\MyltdsController::class, 'destroy'])->name('deletemyltds/{id}');
Route::get('/editmyltds/{id}',[App\Http\Controllers\MyltdsController::class, 'edit'])->name('/editmyltds/{id}');


// fleet

Route::get('/fleet',[App\Http\Controllers\FleetController::class, 'index'])->name('fleet');
//owncar
Route::get('/owncar',[App\Http\Controllers\OwncarController::class, 'index'])->name('owncar');
Route::post('/owncarSave',[App\Http\Controllers\OwncarController::class, 'store'])->name('owncarSave');
Route::get('deleteowncar/{id}',[App\Http\Controllers\OwncarController::class, 'destroy'])->name('deleteowncar/{id}');
Route::get('/editowncar/{id}',[App\Http\Controllers\OwncarController::class, 'edit'])->name('/editowncar/{id}');

// services
Route::get('/services',[App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::post('/servicessave',[App\Http\Controllers\ServicesController::class, 'store'])->name('servicessave');
Route::get('deleteservices/{id}',[App\Http\Controllers\ServicesController::class, 'destroy'])->name('deleteservices/{id}');
Route::get('/editservices/{id}',[App\Http\Controllers\ServicesController::class, 'edit'])->name('/editservices/{id}');







// viewprices
// Route::get('/viewprices',[App\Http\Controllers\ViewpricesController::class, 'index'])->name('viewprices');


// region
Route::get('/regions', [App\Http\Controllers\RegionController::class, 'index'])->name('regions');
Route::post('/saveregions', [App\Http\Controllers\RegionController::class, 'store'])->name('saveregions');
Route::get('/allregions',[App\Http\Controllers\RegionController::class, 'show'])->name('allregions');

Route::get('/setviewprices/{id}',[App\Http\Controllers\RegionController::class, 'setviewprices'])->name('setviewprices');
Route::get('/clientroute',[App\Http\Controllers\ClientrouteController::class, 'index'])->name('/clientroute');
Route::post('/clientroutesave',[App\Http\Controllers\ClientrouteController::class, 'store'])->name('clientroutesave');
Route::get('/clientsetprice/{id}',[App\Http\Controllers\ClientrouteController::class, 'setprice_for_client'])->name('clientsetprice');
Route::get('/viewprices',[App\Http\Controllers\viewpricesController::class, 'index'])->name('viewprices');





Route::get('/getaccount', function () {
    return view('backend.account');
});

Route::get('/finished', function () {
    return view('backend.finished');
});








