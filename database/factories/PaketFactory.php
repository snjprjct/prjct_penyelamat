<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class paketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
             
           
    'nama_paket'=>$this->faker->randomelement(['Paket 1', 'Paket 2', 'Paket 3']," "),
    'harga'=>$this->faker->randomNumber(6, true),
    'jumlah_jam'=>$this->faker->randomNumber(1, true),
    'keterangan'=>$this->faker->sentences(),
     
        ];
    }
}
