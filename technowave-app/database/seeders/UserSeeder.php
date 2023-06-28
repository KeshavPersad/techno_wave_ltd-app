<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Keshav',
                'last_name' => 'Persad',
                'email' => 'kipersad262@gmail.com',
                'password' => Hash::make('51248388'),
                'phone_number' =>'(868) 364-2362',
                'utype' => 'USR',
                'user_image' => 'images/products/product_10.jpeg',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'first_name' => 'Admin',
                'last_name' => 'First',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456789'),
                'phone_number' =>'(868) 350-5350',
                'utype' => 'ADM',
                'user_image' => '',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
