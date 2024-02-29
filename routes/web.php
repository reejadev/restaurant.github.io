<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/', [HomeController::class,'index']);

Route::get('/users', [AdminController::class,'user']);

Route::get('/deletemenu/{id}', [AdminController::class,'deletemenu']);

Route::get('/updateview/{id}', [AdminController::class,'updateview']);

Route::post('/update/{id}', [AdminController::class,'update']);

Route::post('/addtocart/{id}', [HomeController::class,'addtocart']);

Route::get('/showcart/{id}', [HomeController::class,'showcart']);

Route::get('/remove/{id}', [HomeController::class,'remove']);

Route::post('/reservation', [AdminController::class,'reservation']);

Route::get('/foodmenu', [AdminController::class,'foodmenu']);

Route::get('/adminreservation', [AdminController::class,'adminreservation']);

Route::post('/uploadfood', [AdminController::class,'upload']);

Route::get("/deleteuser/{id}", [AdminController::class,'deleteuser']);
  
Route::get('/redirects', [HomeController::class,'redirects']);

Route::get('/redirects', [HomeController::class,'redirects']);

Route::post('/orderconfirm', [HomeController::class,'orderconfirm']);

Route::get('/orders', [AdminController::class,'orders']);

Route::get('/search', [AdminController::class,'search']);

Route::middleware(['auth:sanctum', 'verified',])->get('/dashboard', function ()
 {
        return view('dashboard');
    })->name('dashboard');

