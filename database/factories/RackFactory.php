<?php

namespace Database\Factories;

use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class RackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Estantería 1', 'Estantería 2', 'Estantería 3', 'Estantería 4', 'Estantería 5', 'Estantería 6', 'Estantería 7', 'Estantería 8', 'Estantería 9', 'Estantería 10', 'Estantería 11', 'Estantería 12', 'Estantería 13', 'Estantería 14', 'Estantería 15', 'Estantería 16', 'Estantería 17', 'Estantería 18', 'Estantería 19', 'Estantería 20']),
            'warehouse_id' => Warehouse::all()->random()->id
        ];
    }
}
