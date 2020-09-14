<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\Need;
use App\Models\Ong;
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
        Donation::factory(6)->create();
        Need::factory(6)->create();
        Ong::factory(5)->create();
        User::factory(5)->create();
    }
}
