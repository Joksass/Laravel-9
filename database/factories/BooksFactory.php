<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Pavadinimas' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'Autorius' => $this->faker->name(),
            'Isleista' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Aprasymas' => $this->faker->sentence(),
        ];
    }
}
