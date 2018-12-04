<?php

use Illuminate\Database\Seeder;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('users')->insert([
            'name' => 'Waseem',
            'email' => 'waseemdawood@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('auth'),
        ]);
        DB::table('users')->insert([
            'name' => 'Cognition',
            'email' => 'info@cgn.co.za',
            'is_admin' => 1,
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'Enduser',
            'email' => 'user@cgn.co.za',
            'password' => bcrypt('password'),
        ]);
    }
}
