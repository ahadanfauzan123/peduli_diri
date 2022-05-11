<?php

namespace Database\Seeders;

use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'ahadanfauzan',
            //'email' => 'ahadanfauzan123@gmail.com',
            'password' => bcrypt('80808080'),
        ]);
        User::create([
            'name' => 'ahajelex',
            //'email' => 'ahajelex123@gmail.com',
            'password' => bcrypt('90909090'),
        ]);
        User::create([
            'name' => 'naira',
            //'email' => 'naira@gmail.com',
            'password' => bcrypt('10101010'),
        ]);

        Perjalanan::factory(40)->create();
    }
}
