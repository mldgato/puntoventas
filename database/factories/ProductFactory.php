<?php

namespace Database\Factories;

use App\Models\Measure;
use App\Models\Rack;
use App\Models\Supplier;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cost = $this->faker->randomFloat(2, 1, 5000);
        $price = ($cost * 0.10) + $cost;
        return [
            'cod' => $this->faker->unique()->numberBetween(10001, 99999),
            'name' => $this->faker->sentence(), 
            'brand' => $this->faker->word(25), 
            'quantity' => $this->faker->numberBetween(1, 1000),
            'cost' => $cost,
            'price' => $price,
            'supplier_id' => Supplier::all()->random()->id,
            'measure_id' => Measure::all()->random()->id,
            'warehouse_id' => Warehouse::all()->random()->id,
            'rack_id' => Rack::all()->random()->id
        ];
    }
}
