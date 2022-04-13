<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    public function definition()
    {
        return [
            "bd_nombre" => $this->faker->firstName(),
            "bd_apellido" => $this->faker->lastName(),
            "bd_direccion" => $this->faker->address(),
            "bd_email" => $this->faker->email(),
            "bd_edad" => $this->faker->randomNumber(2)
        ];
    }
}
