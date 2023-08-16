<?php

use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProfileController;
use App\Models\Barang;
use App\Models\Penjualan;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // table penjualan
    $penjualan = DB::table('penjualans')
                    ->select(
                        'penjualans.id AS id', 
                        'penjualans.name', 
                        'penjualans.address', 
                        'penjualans.created_at', 
                        DB::raw('SUM(detail_penjualans.total_price) as total_sales')
                    )
                    ->leftJoin('detail_penjualans', 'detail_penjualans.penjualan_id', '=', 'penjualans.id')
                    ->join('barangs', 'detail_penjualans.product_code', '=', 'barangs.product_code') // Changed 'detail_penjualan' to 'detail_penjualans'
                    ->groupBy('penjualans.id', 'penjualans.name', 'penjualans.address', 'penjualans.created_at')
                    ->orderBy('penjualans.created_at', 'desc')
                    ->paginate(10);


    return view('dashboard', compact('penjualan'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get(
    'product',
    function () {
        $product = Barang::get();

        return view('product', compact('product'));
    }
)->middleware('auth')->name('product');

Route::get(
    'penjualan/data/{id}',
    [PenjualanController::class, 'show']
)->middleware('auth')->name('penjualan.detail');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
