<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         customer::create([
            
           'name' => 'ashu',
           'email' => 'ashu@gmail.com',
           'password' => '147',
           'age' => 47,
           'gender' => 'male',
         ]);
    }
}
