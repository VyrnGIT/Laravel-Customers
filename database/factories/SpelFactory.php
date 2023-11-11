<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spel>
 */
class SpelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'spelnaam' => $this->faker->word(),
            'gokkans' => $this->faker->word(),
            'inzet' => $this ->faker->word()


        ];
    }
}
