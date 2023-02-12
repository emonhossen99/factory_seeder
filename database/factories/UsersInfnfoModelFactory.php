<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsersInfnfoModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this -> faker-> name(),
            'email' => $this -> faker -> email(),
            'address' => $this -> faker -> address()
        ];
    }
}
