<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sale extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Venta 1
        DB::table('sales')->insert([
            'direction' => 'Cl 48 d # 66 - 21',
            'totalPrice' => 50000,
            'saleDate' => new DateTime(),
            'person_id' => 3,
            'stateSale_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('detail_sales')->insert([
            'amount' => 2,
            'price' => 25000,
            'totalPrice' => 50000,
            'product_id' => 1,
            'sale_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // Venta 2
        DB::table('sales')->insert([
            'direction' => 'Cl 48 d # 66 - 21',
            'totalPrice' => 30000,
            'saleDate' => new DateTime(),
            'person_id' => 3,
            'stateSale_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('detail_sales')->insert([
            'amount' => 2,
            'price' => 15000,
            'totalPrice' => 30000,
            'product_id' => 2,
            'sale_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // Venta 3
        DB::table('sales')->insert([
            'direction' => 'Cl 48 d # 66 - 21',
            'totalPrice' => 90000,
            'saleDate' => new DateTime(),
            'person_id' => 3,
            'stateSale_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('detail_sales')->insert([
            'amount' => 3,
            'price' => 20000,
            'totalPrice' => 60000,
            'product_id' => 3,
            'sale_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('detail_sales')->insert([
            'amount' => 2,
            'price' => 15000,
            'totalPrice' => 30000,
            'product_id' => 2,
            'sale_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
