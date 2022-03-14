<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PrekesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pavadinimas' => $this->faker->name(),
            'kiekis' =>$this->faker->randomDigit(),
            'kaina' =>$this->faker->randomDigit(),
            'svoris' =>$this->faker->randomDigit(),
            'aprasymas' =>$this->faker->sentence(),
        ];
    }
}
