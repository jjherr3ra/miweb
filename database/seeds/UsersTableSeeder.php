<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Borramos los datos de la tabla
      DB::table('users')->delete();

      DB::table('users')->insert([
             'name' => 'Juan Jara',
             'email' => 'jjarahe@gmail.com',
             'password' => bcrypt('secret'),
         ]);


    }
}
