<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name'=>'Apple',
            'product_id'=>'74125896',
            'status'=>'',
            'details'=>'2017年新款！',
            'price'=>'999.99'

        ]);
    }
}
