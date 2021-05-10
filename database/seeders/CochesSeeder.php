<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CochesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('coches')->insert([
       'modelo'=> 'M2',
       'marca'=> 'BMW',
       'cv'=>'390 CV',
       'color'=>'Azul intenso',
       'precio'=>'80.000€',
       'tipo'=>'Coupe',
            ]);
          DB::table('coches')->insert([
        'modelo'=> 'M8',
        'marca'=> 'BMW',
        'cv'=>'600 CV',
        'color'=>'Negro mate',
        'precio'=>'190.000€',
        'tipo'=>'Coupe',
            ]);
          DB::table('coches')->insert([
        'modelo'=> 'Urus',
        'marca'=> 'Lamborghini',
        'cv'=>'485 CV',
        'color'=>'Amarillo',
        'precio'=>'280.000€',
        'tipo'=>'SUV',
            ]);
    }
}