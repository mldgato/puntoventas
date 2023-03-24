<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');

        \App\Models\User::factory(2)->create();

        \App\Models\User::factory()->create([
            'name' => 'Manuel Dardón',
            'email' => 'manueldardon@hotmail.com',
            'password' => 'Alejandro31$'
        ]);

        \App\Models\Supplier::factory(10)->create();
        \App\Models\Warehouse::factory(2)->create();
        \App\Models\Rack::factory(20)->create();
        \App\Models\Measure::factory(7)->create();
        \App\Models\Product::factory(100)->create();
        \App\Models\Buy::factory(2)->create();
        \App\Models\Buydetail::factory(20)->create();

        
    }
}
