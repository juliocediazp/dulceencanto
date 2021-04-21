<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ROLES
        DB::table('roles')->insert([
            'name' => 'Admin',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Empleado',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Cliente',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        // USUARIOS
        DB::table('users')->insert([
            'email' => 'cristina@gmail.com',
            'password' => Hash::make('cristina123'), // crisina123
            'person_id' => '1',
            'role_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'email' => 'maily@gmail.com',
            'password' => Hash::make('maily123'),
            'person_id' => '2',
            'role_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('carlos123'),
            'person_id' => '3',
            'role_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
