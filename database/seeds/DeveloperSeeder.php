<?php

use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developers')->insert([
            'user_id' => 1,
        ]);
        DB::table('developers')->insert([
            'user_id' => 2,
        ]);
    }
}
