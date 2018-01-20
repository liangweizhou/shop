<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=>'电子产品','pid'=>0],
            ['name'=>'手机','pid'=>0],
            ['name'=>'耳机','pid'=>0],
            ['name'=>'服装','pid'=>0],
            ['name'=>'女士服装','pid'=>0],
            ['name'=>'男士服装','pid'=>0],
            ['name'=>'裙子','pid'=>0],
            ['name'=>'女裤','pid'=>0],
            ['name'=>'女鞋','pid'=>0],
            ['name'=>'男裤','pid'=>0],
            ['name'=>'男鞋','pid'=>0]
        ]);
    }
}
