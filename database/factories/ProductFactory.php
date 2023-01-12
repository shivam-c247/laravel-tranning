<?php

namespace Database\Factories;

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
        return [
            'product_name' => $this->faker->word(),
            'product_sub_name' => $this->faker->word(),
            'product_abbreviation' => $this->faker->lexify('???'),
            'price' => rand(400,500),
            'sell_price' =>  rand(300,400),
        ];
    }
}
