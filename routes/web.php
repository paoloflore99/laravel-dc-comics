<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, "index"])->name("home");

//create 
route::get('/comics/create', [HomeController::class, "create"])->name("comics.create");

//store
route::post('/comics', [HomeController::class, "store"])->name("comics.store");

route::get('/comics', [HomeController::class, "index"])->name("comics.home");

route::get('/comics/{id}', [HomeController::class, "show"])->name("comics.show");

//edit
route::get('/comics/{id}/edit', [HomeController::class, "edit"])->name("comics.edit");

//updtade
route::put('/comics/{id}', [HomeController::class, "updtade"])->name("comics.updtade");

//destroy
route::delete('/comics/{id}', [HomeController::class, "destroy"])->name("comics.destroy");