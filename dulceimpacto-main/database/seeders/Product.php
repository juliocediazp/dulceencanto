<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Producto 1
        DB::table('products')->insert([
            'name' => 'Producto 1',
            'description' => 'Alguna descripción del producto.',
            'price' => 25000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('images')->insert([
            'image' => 'img1.jpg',
            'product_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // Producto 2
        DB::table('products')->insert([
            'name' => 'Producto 2',
            'description' => 'Alguna descripción del producto.',
            'price' => 15000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('images')->insert([
            'image' => 'img2.jpg',
            'product_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // Producto 3
        DB::table('products')->insert([
            'name' => 'Producto 3',
            'description' => 'Alguna descripción del producto.',
            'price' => 20000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('images')->insert([
            'image' => 'img3.jpg',
            'product_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        // Producto 4
        DB::table('products')->insert([
            'name' => 'Producto 4',
            'description' => 'Alguna descripción del producto.',
            'price' => 15000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('images')->insert([
            'image' => 'img4.jpg',
            'product_id' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // Producto 5
        DB::table('products')->insert([
            'name' => 'Producto 5',
            'description' => 'Alguna descripción del producto.',
            'price' => 15000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('images')->insert([
            'image' => 'img5.jpg',
            'product_id' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // Producto 6
        DB::table('products')->insert([
            'name' => 'Producto 6',
            'description' => 'Alguna descripción del producto.',
            'price' => 15000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('images')->insert([
            'image' => 'img6.jpg',
            'product_id' => 6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // Producto 7
        DB::table('products')->insert([
            'name' => 'Producto 7',
            'description' => 'Alguna descripción del producto.',
            'price' => 15000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('images')->insert([
            'image' => 'img7.jpg',
            'product_id' => 7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // Producto 8
        DB::table('products')->insert([
            'name' => 'Producto 8',
            'description' => 'Alguna descripción del producto.',
            'price' => 15000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('images')->insert([
            'image' => 'img8.jpg',
            'product_id' => 8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // Producto 19
        DB::table('products')->insert([
            'name' => 'Producto 9',
            'description' => 'Alguna descripción del producto.',
            'price' => 15000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('images')->insert([
            'image' => 'img9.jpg',
            'product_id' => 9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);        
    }
}
