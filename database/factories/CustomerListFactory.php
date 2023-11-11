<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Naam' => $this->faker->name(),
            'Bank_Account_Number' => $this->faker->bankAccountNumber(),
            'Social_Security_Number' => $this ->faker->ssn()
        ];
    }
}
