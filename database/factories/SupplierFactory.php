<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->unique()->word(20),
            'seller' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber()
        ];
    }
}
