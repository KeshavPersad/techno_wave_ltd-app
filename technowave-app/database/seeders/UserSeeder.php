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
                'name' => 'John Doe',
                'email' => 'johndoe@mail.com',
                'password' => Hash::make('12345678'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@mail.com',
                'password' => Hash::make('12345678'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Keshav Persad',
                'email' => 'kipersad262@gmail.com',
                'password' => Hash::make('51248388'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
