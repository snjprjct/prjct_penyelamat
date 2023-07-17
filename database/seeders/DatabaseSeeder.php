<?php

namespace Database\Seeders;
use App\Models\Pembayaran;
use App\Models\User;
use App\Models\customer;
use App\Models\Periode;
use App\Models\team;
use App\Models\paket;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        customer::factory(10)->create();
        User::factory(3)->create(); 
        team::factory(5)->create(); 
        //paket::factory(8)->create();
   

  User::create([
        'name'=> 'Admin',
        'email'=> 'admin@gmail.com',
        'level'=> 'Administrator',
        'username'=> 'admin',
        'password'=> bcrypt('admin')
        ]);


    }
}
