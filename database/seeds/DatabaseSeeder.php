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
        DB::table('leikstjori')->insert([
            ['nafn' => 'Ragnar P. Ragnarsson', 'thjoderni' => 'Ísland'],
            ['nafn' => 'James Gatz', 'thjoderni' => 'England'],
            ['nafn' => 'Beggi Helga', 'thjoderni' => 'Ísland'],
            ['nafn' => 'W.C. Bartek', 'thjoderni' => 'Kanada'],
            ['nafn' => 'Wibe Lund', 'thjoderni' => 'Danmörk']
        ]);
        DB::table('dvd')->insert([
            ['titill' => 'Vindurinn er blautur', 'adalleikari' => 'Pétur Snæland', 'utgafuar' => 1973, 'verd' => 2500, 'flokkur' => 'spenna', 'leikstjori_id' => 5],
            ['titill' => 'Veiðidellan er frábær', 'adalleikari' => 'Gústaf Gústafsson', 'utgafuar' => 1999, 'verd' => 3550, 'flokkur' => 'Sport', 'leikstjori_id' => 1],
            ['titill' => 'Into the wild', 'adalleikari' => 'John Johnson', 'utgafuar' => 2003, 'verd' => 3770, 'flokkur' => 'Drama', 'leikstjori_id' => 4],
            ['titill' => 'The Strider', 'adalleikari' => 'Biff Holmes', 'utgafuar' => 1969, 'verd' => 4520, 'flokkur' => 'Ævintýri', 'leikstjori_id' => 2],
        ]);
    }
}