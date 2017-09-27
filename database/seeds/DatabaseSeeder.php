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

        DB::table('threads')->insert([
        	['title' => 'Titill a', 'body' => 'Body fyrir titill a', 'user_id' => 1],
        	['title' => 'Titill b', 'body' => 'Body fyrir titill b', 'user_id' => 1],
        	['title' => 'Titill c', 'body' => 'Body fyrir titill c', 'user_id' => 1],
        	['title' => 'Titill d', 'body' => 'Body fyrir titill d', 'user_id' => 1],
        	['title' => 'Titill e', 'body' => 'Body fyrir titill e', 'user_id' => 1]
        ]);
    }
}