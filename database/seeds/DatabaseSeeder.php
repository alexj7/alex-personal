<?php

use Illuminate\Database\Seeder;
use App\game;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GamesTableSeeder::class);
    }
}