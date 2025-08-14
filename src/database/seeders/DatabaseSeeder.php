<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contacts;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        // Contacts::factory(35)->create();
        // \App\Models\User::factory(10)->create();
    }
}
