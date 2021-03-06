<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallbookController;


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

// Route::get('hall',BranchController::class);

Route::resource('project',HallbookController::class);

// Route::post('hallbooking',[HallbookController::class,'store']);
// Route::get('get-state-list',[HallBookController::class,'getStateList']);