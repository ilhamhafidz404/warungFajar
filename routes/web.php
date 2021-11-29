<?php

use App\Exports\ProductsExport;
use App\Http\Controllers\DebugController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\TambahProduct;
use App\Http\Livewire\TableList;

// yang harusnya di contoller
use App\Imports\ProductsImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::get('/debug', DebugController::class)->name('debug');

Route::get('/proucts/export', function () {
    return Excel::download(new ProductsExport, 'dataBarang-WarungFajar.xlsx');
})->name('export-products');
Route::post('/products/import', function (Request $request) {
    Excel::import(new ProductsImport, $request->file('excel'));
        
    Alert::success('Berhasil Menambah', 'Menambah data barang dari excel');
    return back();
})->name('import-product');
Route::get('/download-template-excel', function () {
    return response()->download('databarang_warungFajar.xlsx');
})->name('download-template-excel');