<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class teamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'nama'=>$this->faker->name(), 
            'jk'=>$this->faker->randomelement(['male', 'female']), 
            'alamat'=>$this->faker->address(),
            'telepon'=>$this->faker->phoneNumber() ,
            'tempat_lahir'=>$this->faker->state(), 
            'tanggal_lahir'=>$this->faker->date(),
            'posisi'=>$this->faker->jobTitle(), 
        ];
    }
}
