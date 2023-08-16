<?php

namespace Database\Seeders;

use App\Models\DetailPenjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake_sales_data = [
            ['penjualan_id' => 1, 'product_code' => 'ABC123', 'product_total' => 2, 'item_price' => 22000000, 'total_price' => 44000000],
            ['penjualan_id' => 2, 'product_code' => 'DEF456', 'product_total' => 3, 'item_price' => 35000000, 'total_price' => 105000000],
            ['penjualan_id' => 3, 'product_code' => 'GHI789', 'product_total' => 1, 'item_price' => 18000000, 'total_price' => 18000000],
            ['penjualan_id' => 4, 'product_code' => 'JKL012', 'product_total' => 2, 'item_price' => 24000000, 'total_price' => 48000000],
            ['penjualan_id' => 5, 'product_code' => 'MNO345', 'product_total' => 1, 'item_price' => 25000000, 'total_price' => 25000000],
            ['penjualan_id' => 6, 'product_code' => 'PQR678', 'product_total' => 1, 'item_price' => 10000000, 'total_price' => 10000000],
            ['penjualan_id' => 7, 'product_code' => 'STU901', 'product_total' => 1, 'item_price' => 20000000, 'total_price' => 20000000],
            ['penjualan_id' => 8, 'product_code' => 'VWX234', 'product_total' => 2, 'item_price' => 19000000, 'total_price' => 38000000],
            ['penjualan_id' => 9, 'product_code' => 'YZA567', 'product_total' => 1, 'item_price' => 28000000, 'total_price' => 28000000],
            ['penjualan_id' => 10, 'product_code' => 'BCD890', 'product_total' => 2, 'item_price' => 26000000, 'total_price' => 52000000],
            ['penjualan_id' => 11, 'product_code' => 'EFG123', 'product_total' => 2, 'item_price' => 32000000, 'total_price' => 64000000],
            ['penjualan_id' => 12, 'product_code' => 'HIJ456', 'product_total' => 1, 'item_price' => 17000000, 'total_price' => 17000000],
            ['penjualan_id' => 13, 'product_code' => 'KLM789', 'product_total' => 1, 'item_price' => 15000000, 'total_price' => 15000000],
            ['penjualan_id' => 14, 'product_code' => 'NOP012', 'product_total' => 1, 'item_price' => 12000000, 'total_price' => 12000000],
            ['penjualan_id' => 15, 'product_code' => 'QRS345', 'product_total' => 2, 'item_price' => 8000000, 'total_price' => 16000000],
            ['penjualan_id' => 1, 'product_code' => 'TUV678', 'product_total' => 1, 'item_price' => 17000000, 'total_price' => 17000000],
            ['penjualan_id' => 2, 'product_code' => 'WXY901', 'product_total' => 1, 'item_price' => 18000000, 'total_price' => 18000000],
            ['penjualan_id' => 3, 'product_code' => 'ZAB234', 'product_total' => 2, 'item_price' => 19000000, 'total_price' => 38000000],
            ['penjualan_id' => 4, 'product_code' => 'CDE567', 'product_total' => 1, 'item_price' => 20000000, 'total_price' => 20000000],
            ['penjualan_id' => 5, 'product_code' => 'FGH890', 'product_total' => 1, 'item_price' => 21000000, 'total_price' => 21000000],
            ['penjualan_id' => 6, 'product_code' => 'IJK123', 'product_total' => 1, 'item_price' => 22000000, 'total_price' => 22000000],
            ['penjualan_id' => 7, 'product_code' => 'LMN456', 'product_total' => 2, 'item_price' => 23000000, 'total_price' => 46000000],
            ['penjualan_id' => 8, 'product_code' => 'OPQ789', 'product_total' => 2, 'item_price' => 24000000, 'total_price' => 48000000],
            ['penjualan_id' => 9, 'product_code' => 'RST012', 'product_total' => 1, 'item_price' => 25000000, 'total_price' => 25000000],
            ['penjualan_id' => 10, 'product_code' => 'UVW345', 'product_total' => 1, 'item_price' => 26000000, 'total_price' => 26000000],
            ['penjualan_id' => 11, 'product_code' => 'XYZ678', 'product_total' => 2, 'item_price' => 27000000, 'total_price' => 54000000],
            ['penjualan_id' => 12, 'product_code' => 'ABC901', 'product_total' => 1, 'item_price' => 28000000, 'total_price' => 28000000],
            ['penjualan_id' => 13, 'product_code' => 'DEF234', 'product_total' => 2, 'item_price' => 29000000, 'total_price' => 58000000],
            ['penjualan_id' => 14, 'product_code' => 'GHI567', 'product_total' => 1, 'item_price' => 30000000, 'total_price' => 30000000],
            ['penjualan_id' => 15, 'product_code' => 'JKL890', 'product_total' => 2, 'item_price' => 31000000, 'total_price' => 62000000],
            ['penjualan_id' => 1, 'product_code' => 'MNO123', 'product_total' => 2, 'item_price' => 32000000, 'total_price' => 64000000],
            ['penjualan_id' => 3, 'product_code' => 'STU789', 'product_total' => 1, 'item_price' => 34000000, 'total_price' => 34000000],
            ['penjualan_id' => 4, 'product_code' => 'VWX012', 'product_total' => 1, 'item_price' => 35000000, 'total_price' => 35000000],
            ['penjualan_id' => 5, 'product_code' => 'YZA345', 'product_total' => 2, 'item_price' => 36000000, 'total_price' => 72000000],
            ['penjualan_id' => 6, 'product_code' => 'BCD678', 'product_total' => 1, 'item_price' => 37000000, 'total_price' => 37000000],
            ['penjualan_id' => 7, 'product_code' => 'EFG901', 'product_total' => 2, 'item_price' => 38000000, 'total_price' => 76000000],
            ['penjualan_id' => 8, 'product_code' => 'HIJ234', 'product_total' => 1, 'item_price' => 39000000, 'total_price' => 39000000],
            ['penjualan_id' => 9, 'product_code' => 'KLM567', 'product_total' => 2, 'item_price' => 40000000, 'total_price' => 80000000],
            ['penjualan_id' => 10, 'product_code' => 'NOP890', 'product_total' => 1, 'item_price' => 41000000, 'total_price' => 41000000],
            ['penjualan_id' => 11, 'product_code' => 'QRS123', 'product_total' => 2, 'item_price' => 42000000, 'total_price' => 84000000],
            ['penjualan_id' => 12, 'product_code' => 'STU456', 'product_total' => 1, 'item_price' => 43000000, 'total_price' => 43000000],
            ['penjualan_id' => 13, 'product_code' => 'VWX789', 'product_total' => 2, 'item_price' => 44000000, 'total_price' => 88000000],
            ['penjualan_id' => 14, 'product_code' => 'YZA012', 'product_total' => 1, 'item_price' => 45000000, 'total_price' => 45000000],
            ['penjualan_id' => 15, 'product_code' => 'BCD345', 'product_total' => 2, 'item_price' => 46000000, 'total_price' => 92000000]
        ];             
        
        DetailPenjualan::insert($fake_sales_data);
    }
}
