<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KantineController;

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
Route::get('/over-DTV', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::get('/adminbaan', [App\Http\Controllers\BaanController::class, 'index'])->name('adminbaans');

Route::get('/adminbaan-create', [App\Http\Controllers\BaanController::class, 'indexCreate'])->name('createbaan');
Route::post('/adminbaan-create', [App\Http\Controllers\BaanController::class, 'create'])->name('createpostbaan');

Route::get('/adminbaan-edit/{id}', [App\Http\Controllers\BaanController::class, 'edit'])->name('editbaan');

Route::post('/adminbaan-edit/{id}', [App\Http\Controllers\BaanController::class, 'update'])->name('editpostbaan');

Route::delete('/adminbaan{baan}', [App\Http\Controllers\BaanController::class, 'destroy'])->name('destroybaan');

Route::get('/admin', function () {
    return view('Backend.AdminIndex');
});
Route::get('/adminlogin', function () {
    return view('Backend.AdminLogin');
});
Route::get('/usermanage', [App\Http\Controllers\UserController::class, 'index'])->name('userindex');
Route::delete('/usermanage{User}', [App\Http\Controllers\UserController::class, 'destroy'])->name('userdelete');
Route::get('/usermanage{users}', [App\Http\Controllers\UserController::class, 'edit'])->name('useredit');
Route::put('/usermanage{users}', [App\Http\Controllers\UserController::class, 'update'])->name('userpostedit');



Route::get('/pref',
    function () {

    return view('Backend.preferences');
});

//Frontend Kantine
//Show
Route::get("/kantine", [KantineController::class, "show"])->name("klantkantine");
//Backend Kantine
//Index
Route::get("/adminkantine", [KantineController::class, "index"])->name("adminkantine");
//Create + Store
Route::post("/admincreatekantine", [KantineController::class, "store"])->name("storekantine");
Route::get("/admincreatekantine", [KantineController::class, "create"])->name("createkantine");
//Edit + Update
Route::get("/admineditkantine/{kantine}/edit", [KantineController::class, "edit"])->name("editkantine");
Route::put("/admineditkantine/{kantine}/edit", [KantineController::class, "update"])->name("updatekantine");
//Delete
Route::delete("/kantine/{kantine}", [KantineController::class, "destroy"])->name("deleteKantine");
