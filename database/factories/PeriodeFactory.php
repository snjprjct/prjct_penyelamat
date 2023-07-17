<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PeriodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        

        return [
             
    'bulan'=>$this->faker->monthName(),
    'tahun'=>"2022",
     
        ];
    }
}
