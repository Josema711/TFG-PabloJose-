<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin'),
        'rol' => 'admin'
      ]);
			DB::table('users')->insert([
        'name' => 'jose',
        'email' => 'jose@gmail.com',
        'password' => Hash::make('jose'),
        'rol' => 'comprador'
      ]);
			DB::table('users')->insert([
        'name' => 'pablo',
        'email' => 'pablo@gmail.com',
        'password' => Hash::make('pablo'),
        'rol' => 'comprador'
      ]);


        $this->call([
					CochesSeeder::class,
				]);
    }
}
