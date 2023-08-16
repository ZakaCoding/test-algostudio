<?php

namespace Database\Seeders;

use App\Models\Barang;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        // data generate by ChatGPT
        $laptop_data = [
            ['product_code' => 'ABC123', 'name' => 'Dell XPS 13', 'selling_price' => 22000000, 'purchase_price' => 18000000, 'stock' => 50, 'category' => 'Ultrabook'],
            ['product_code' => 'DEF456', 'name' => 'MacBook Pro 16', 'selling_price' => 35000000, 'purchase_price' => 28000000, 'stock' => 30, 'category' => 'Laptop'],
            ['product_code' => 'GHI789', 'name' => 'HP Spectre x360', 'selling_price' => 18000000, 'purchase_price' => 15000000, 'stock' => 40, 'category' => 'Convertible'],
            ['product_code' => 'JKL012', 'name' => 'Lenovo ThinkPad X1 Carbon', 'selling_price' => 24000000, 'purchase_price' => 20000000, 'stock' => 25, 'category' => 'Business'],
            ['product_code' => 'MNO345', 'name' => 'Asus ROG Zephyrus G14', 'selling_price' => 25000000, 'purchase_price' => 21000000, 'stock' => 20, 'category' => 'Gaming'],
            ['product_code' => 'PQR678', 'name' => 'Acer Swift 3', 'selling_price' => 10000000, 'purchase_price' => 8000000, 'stock' => 60, 'category' => 'Ultrabook'],
            ['product_code' => 'STU901', 'name' => 'Microsoft Surface Laptop 4', 'selling_price' => 20000000, 'purchase_price' => 17000000, 'stock' => 35, 'category' => 'Ultrabook'],
            ['product_code' => 'VWX234', 'name' => 'LG Gram 17', 'selling_price' => 19000000, 'purchase_price' => 16000000, 'stock' => 15, 'category' => 'Ultrabook'],
            ['product_code' => 'YZA567', 'name' => 'Razer Blade 15', 'selling_price' => 28000000, 'purchase_price' => 24000000, 'stock' => 10, 'category' => 'Gaming'],
            ['product_code' => 'BCD890', 'name' => 'MSI GS66 Stealth', 'selling_price' => 26000000, 'purchase_price' => 22000000, 'stock' => 30, 'category' => 'Gaming'],
            ['product_code' => 'EFG123', 'name' => 'Alienware m15', 'selling_price' => 32000000, 'purchase_price' => 27000000, 'stock' => 5, 'category' => 'Gaming'],
            ['product_code' => 'HIJ456', 'name' => 'Lenovo Yoga C940', 'selling_price' => 17000000, 'purchase_price' => 14000000, 'stock' => 18, 'category' => 'Convertible'],
            ['product_code' => 'KLM789', 'name' => 'HP Envy x360', 'selling_price' => 15000000, 'purchase_price' => 12000000, 'stock' => 22, 'category' => 'Convertible'],
            ['product_code' => 'NOP012', 'name' => 'Dell Inspiron 15', 'selling_price' => 12000000, 'purchase_price' => 10000000, 'stock' => 28, 'category' => 'Laptop'],
            ['product_code' => 'QRS345', 'name' => 'Lenovo IdeaPad 5', 'selling_price' => 8000000, 'purchase_price' => 6500000, 'stock' => 45, 'category' => 'Laptop'],
            ['product_code' => 'TUV678', 'name' => 'Asus ZenBook 14', 'selling_price' => 14000000, 'purchase_price' => 12000000, 'stock' => 50, 'category' => 'Ultrabook'],
            ['product_code' => 'WXY901', 'name' => 'Acer Predator Helios 300', 'selling_price' => 22000000, 'purchase_price' => 19000000, 'stock' => 12, 'category' => 'Gaming'],
            ['product_code' => 'ZAB234', 'name' => 'Microsoft Surface Book 3', 'selling_price' => 29000000, 'purchase_price' => 25000000, 'stock' => 8, 'category' => 'Convertible'],
            ['product_code' => 'CDE567', 'name' => 'LG UltraGear 17', 'selling_price' => 23000000, 'purchase_price' => 20000000, 'stock' => 14, 'category' => 'Gaming'],
            ['product_code' => 'FGH890', 'name' => 'MSI Prestige 14', 'selling_price' => 17000000, 'purchase_price' => 14000000, 'stock' => 20, 'category' => 'Ultrabook']
        ];

        Barang::insert($laptop_data);
    }
}
