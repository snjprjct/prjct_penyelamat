<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class customerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
          $jk = ['Laki-Laki', 'Perempuan'];
         $stat = ['Mandiri', 'Bantuan'];

        return [
             
           
    'user_id'=>$this->faker->unique()->randomNumber(5, true),
    'nama_customer'=>$this->faker->name(), 
    'jk'=>$this->faker->randomelement(['male', 'female']), 
    'alamat'=>$this->faker->address(),
    'telepon'=>$this->faker->phoneNumber() ,
    'email'=>$this->faker->unique()->safeEmail(), 
    'username'=>$this->faker->name(),
    'remember_token' => Str::random(10),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' // password
 
        ];
    }
}
