<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert(['clave' => 'INNI', 'carrera' => 'INGENIERIA INFORMATICA']);
        DB::table('carreras')->insert(['clave' => 'INCO', 'carrera' => 'INGENIERIA EN COMPUTACION']);
    }
}
