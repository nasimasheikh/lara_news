<?php

use Illuminate\Database\Seeder;
use App\User ;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create(

        // ['name'=>'putul',
        // 'email'=>'putul@gmail.com',
        // 'password'=>Hash::make('putul12'),
        // 'remember_token'=>str_random(5)

        // ]);
         User::create(

        ['name'=>'putul',
        'email'=>'putul@gmail.com',
        'password'=>Hash::make('putul12'),
        'remember_token'=>str_random(5)

        ]);

    }
}
