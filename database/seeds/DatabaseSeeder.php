<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Baldur',
            'email' => 'baldur@hotmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}