<?php

namespace Database\Factories;

use App\Models\FormModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormModelFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = FormModel::class;

    public function definition()
    {
        return  [
            'email' => $this->faker->email(),
            'password' => $this->faker->password(),
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'state' => $this->faker->state(),
            'zip' => 'sip',
        ];
    }
}
