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
       'precio'=>'80.000€',
            ]);
          DB::table('coches')->insert([
        'modelo'=> 'M8',
        'marca'=> 'BMW',
        'cv'=>'600 CV',
        'precio'=>'190.000€',
            ]);
          DB::table('coches')->insert([
        'modelo'=> 'Urus',
        'marca'=> 'Lamborghini',
        'cv'=>'485 CV',
        'precio'=>'280.000€',
            ]);
    }
}
