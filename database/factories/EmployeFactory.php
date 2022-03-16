<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration_number' => 4,
            'fullname' => $this->faker->name(),
            'email' => $this->faker->email(),
            'depart' => $this->faker->word(),
            'hire_date' => $this->faker->date(),
            'phone' => $this->faker->numberBetween(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
        ];
    }
}
