<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class State extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Estados de una venta
        DB::table('state_sales')->insert([
            'state' => 'En ruta',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('state_sales')->insert([
            'state' => 'En curso',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('state_sales')->insert([
            'state' => 'Entregrado',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
