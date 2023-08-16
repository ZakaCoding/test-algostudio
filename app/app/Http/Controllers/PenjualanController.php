<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = DB::table('penjualans')
                        ->where('penjualans.id', $id)
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
                        ->first();

        $detail = DB::table('detail_penjualans')
                    ->select(
                        'detail_penjualans.product_code',
                        'detail_penjualans.product_total',
                        'detail_penjualans.item_price',
                        'detail_penjualans.total_price',
                        'barangs.name',
                        'barangs.category'
                    )
                    ->where('penjualan_id', $penjualan->id)
                    ->join('barangs', 'barangs.product_code', '=' ,'detail_penjualans.product_code')
                    ->get();

        return view('penjualan.detail', ['penjualan'=> $penjualan, 'detail' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
