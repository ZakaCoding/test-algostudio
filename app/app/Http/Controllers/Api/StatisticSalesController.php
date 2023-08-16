<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticSalesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $income = DB::table('penjualans')
                    ->select(
                        DB::raw('SUM(detail_penjualans.total_price) as total_sales')
                    )
                    ->leftJoin('detail_penjualans', 'detail_penjualans.penjualan_id', '=', 'penjualans.id')
                    ->join('barangs', 'detail_penjualans.product_code', '=', 'barangs.product_code')
                    ->get();

        $expense = DB::table('barangs')
                        ->select(
                            DB::raw('SUM(barangs.purchase_price) AS total_expense')
                        )
                        ->join('detail_penjualans', 'barangs.product_code', '=', 'detail_penjualans.product_code')
                        ->get();

        $penjualan = DB::table('penjualans')
                        ->select(
                            DB::raw("DATE_FORMAT(penjualans.created_at, '%M %d') AS categories"),
                            DB::raw("COUNT(penjualans.created_at) AS total")
                        )
                        ->leftJoin('detail_penjualans', 'detail_penjualans.penjualan_id', '=', 'penjualans.id')
                        ->join('barangs', 'detail_penjualans.product_code', '=', 'barangs.product_code')
                        ->groupBy('penjualans.created_at')
                        ->get();

        return response([
            'status' => true,
            'data' => [
                "sales" => [
                    "income" => $income,
                    "expense" => $expense
                ],
                "statistics" => $penjualan
            ],
            'message' => "success get statistics"
        ]);
    }
}
