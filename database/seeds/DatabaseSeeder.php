<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\User::create([
          'name'   => 'Admin',
          'user'     => 'fhernandez',
          'departamento' => 'Sala Situacional',
          'password'  => bcrypt('admin123456')
        ]);
    }
}
