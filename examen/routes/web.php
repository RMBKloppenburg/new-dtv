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

//home user page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin---------------------------------
//admin index
Route::get('/admin', function () {
    return view('Backend.AdminIndex');
});
Route::get('/adminlogin', function () {
    return view('Backend.AdminLogin');
});

Route::get('/pref',
    function () {

        return view('Backend.preferences');
    });


//banen---------------------------------
//baan index
Route::get('/adminbaan', [App\Http\Controllers\BaanController::class, 'index'])->name('adminbaans');
//baan create
Route::get('/adminbaan-create', [App\Http\Controllers\BaanController::class, 'indexCreate'])->name('createbaan');
Route::post('/adminbaan-create', [App\Http\Controllers\BaanController::class, 'create'])->name('createpostbaan');
//baan edit $id
Route::get('/adminbaan-edit/{id}', [App\Http\Controllers\BaanController::class, 'edit'])->name('editbaan');
Route::post('/adminbaan-edit/{id}', [App\Http\Controllers\BaanController::class, 'update'])->name('editpostbaan');
//baan delete
Route::delete('/adminbaan{baan}', [App\Http\Controllers\BaanController::class, 'destroy'])->name('destroybaan');


//users---------------------------------
//user index
Route::get('/usermanage', [App\Http\Controllers\UserController::class, 'index'])->name('userindex');
//user delete
Route::delete('/usermanage{User}', [App\Http\Controllers\UserController::class, 'destroy'])->name('userdelete');
//edit
Route::get('/usermanage{users}', [App\Http\Controllers\UserController::class, 'edit'])->name('useredit');
Route::put('/usermanage{users}', [App\Http\Controllers\UserController::class, 'update'])->name('userpostedit');


//toernooien---------------------------
Route::get('/toernooien', [App\Http\Controllers\ToernooiController::class, 'index'])->name('toernooiindex');
//toernooi create
Route::get('/toernooi-create', [App\Http\Controllers\ToernooiController::class, 'store'])->name('createtoernooi');
Route::post('/toernooi-create', [App\Http\Controllers\ToernooiController::class, 'create'])->name('createposttoernooi');






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
