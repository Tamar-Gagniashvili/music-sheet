<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Sheet;
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
        Category::factory()->create(['name' => 'guitar']);
        Category::factory()->create(['name' => 'piano']);
        Category::factory()->create(['name' => 'violin']);
        Category::factory()->create(['name' => 'trumpet']);
        
        Sheet::factory(10)->create();
    }
}
