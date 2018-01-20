<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            //'name' => str_random(3),
           // 'age' => str_random().'@gmail.com',
            'name'=>'zlw',
           'age'=>19,
           'sex'=>1
           // 'password' => bcrypt('secret'),
        ]);
    }
}
