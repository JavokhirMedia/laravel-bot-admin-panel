<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BotUsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1000000, 9999999999999),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'region' => 'Xorazm viloyati',
            'district' => 'Gurlan tumani',
            'phone_number' => rand(998110000000, 999999999999),
            'status' => 'user',
            'last_command' => $this->faker->sentence,
            'lang' => rand(0,2),
        ];
    }

    public function unverified(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'region' => null,
                'district' => null
            ];
        });
    }
}
