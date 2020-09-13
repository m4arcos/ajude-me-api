<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\Need;
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
    }
}
