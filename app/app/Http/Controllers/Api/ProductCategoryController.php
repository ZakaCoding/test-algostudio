<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $penjualan = DB::table('detail_penjualans')
                        ->select(
                            'barangs.category',
                            DB::raw('COUNT(barangs.category) AS category_total'),
                            DB::raw('COUNT(barangs.category) * 100.0 / SUM(COUNT(barangs.category)) OVER() AS category_percentage')
                        )
                        ->join('barangs', 'barangs.product_code', '=', 'detail_penjualans.product_code')
                        ->groupBy('barangs.category')
                        ->get();

        return response([
            'status' => true,
            'data' => $penjualan,
            'message' => 'Success get category'
        ], 200);
    }
}
