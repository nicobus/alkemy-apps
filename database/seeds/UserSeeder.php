<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'juandev',
            'email' => 'juandev@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'cachodev',
            'email' => 'cachodev@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'joseclient',
            'email' => 'joseclientv@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 2,
        ]);
    }
}
