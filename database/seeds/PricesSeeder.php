<?php

use Illuminate\Database\Seeder;
use App\Price;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  for ($i=0; $i < 50; $i++) { 
            $price = new Price();
            $price->value = rand(1, 500);
            $price->app_id = $i+101;
            $price->save();
        } */
        for ($i=0; $i < 50; $i++) { 
            $price = new Price();
            $price->value = rand(1, 500);
            $price->app_id = rand(101,150);
            $price->save();
        }
    }
}
