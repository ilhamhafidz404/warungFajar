<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\TambahProduct;
use App\Http\Livewire\TableList;
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
//     return view('app');
// });

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/add-product', TambahProduct::class)->name('add-product');
Route::get('/table-product', TableList::class)->name('table-product');
// Route::get('/update-product/{id}', UpdateProduct::class)->name('update-product');