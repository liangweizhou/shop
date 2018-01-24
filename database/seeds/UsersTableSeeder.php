<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'zlw',
            'email'=>'793926875@qq.com',
            'password'=>bcrypt('secret'),
            'phone'=>'123456789412'],

            ['name'=>'xx',
             'email'=>'xxname@gmail.com',
             'password'=>bcrypt('secret'),
                'phone'=>'123456521612',

        ],

            ['name'=>'yy',
            'email'=>'yyname@163.com',
            'password'=>bcrypt('secret'),
                'phone'=>'123456778413',
               ],
        ]);
    }
}
