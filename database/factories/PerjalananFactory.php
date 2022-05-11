<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PerjalananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "user_id" => mt_rand(1,2),
            "tanggal" => $this->faker->date(),
            "jam" => $this->faker->time(),
            "lokasi" => $this->faker->streetName(),
            "suhu" => mt_rand(35, 40),
        ];
    }
}
