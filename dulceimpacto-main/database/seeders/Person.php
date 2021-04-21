<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Person extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PERSONAS
        DB::table('people')->insert([
            'fullName' => 'Cristina Ruiz',
            'document' => '1079390120',
            'birthDate' => '2000-04-07',
            'cellPhone' => '3226777186',
            'direction' => 'Calle 45 # 36a - 61',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('people')->insert([
            'fullName' => 'Maily',
            'document' => '10793233423',
            'birthDate' => '1994-01-12',
            'cellPhone' => '322525422',
            'direction' => 'Calle 60 # 38c - 20',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('people')->insert([
            'fullName' => 'Carlos Andrés Hernandez',
            'document' => '1079360119',
            'birthDate' => '1998-11-04',
            'cellPhone' => '3226777190',
            'direction' => 'Calle 20 # 20b - 61',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
