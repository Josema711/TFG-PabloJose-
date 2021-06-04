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
       'cv'=>'390',
       'precio'=>'80.000',
       'tipo'=>'Coupe',
       'tiempo' => date('2021-07-02'),
       'foto'=>'',
            ]);
          DB::table('coches')->insert([
        'modelo'=> 'M8',
        'marca'=> 'BMW',
        'cv'=>'600',
        'precio'=>'190.000',
        'tipo'=>'Deportivo',
        'tiempo' => date('2021-06-20'),
        'foto'=>'',
            ]);
          DB::table('coches')->insert([
        'modelo'=> 'Urus',
        'marca'=> 'Lamborghini',
        'cv'=>'485',
        'precio'=>'280.000',
        'tipo'=>'SUV',
        'tiempo' => date('2021-06-23'),
        'foto'=>'',
            ]);
    }
}
