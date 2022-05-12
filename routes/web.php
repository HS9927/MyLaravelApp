<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\PaginationDataTableController;
use App\Models\PaginationDataTable;
use Illuminate\Pagination\PaginationState;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [MyController::class, "index"]);

/// Pagination DataTable
Route::get("/pdt", [PaginationDataTableController::class, "index"])->name("pdt");
Route::post("/pdt/store", [PaginationDataTable::class, "store"])->name("pdt.store");

