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
                'first_name' => 'Admin_1',
                'last_name' => 'First',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456789'),
                'phone_number' =>'350-5351',
                'utype' => 'ADM',
                'user_image' => 'user_3.jpeg',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_lot_number' => '28',
                'user_street' => 'Karamath Street',
                'user_city' => 'Princes Town',
            ],
            [
                'first_name' => 'Admin_2',
                'last_name' => 'Second',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('123456789'),
                'phone_number' =>'222-2221',
                'utype' => 'ADM',
                'user_image' => 'user_3.jpeg',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_lot_number' => '28',
                'user_street' => 'Karamath Street',
                'user_city' => 'Princes Town',
            ],
            [
                'first_name' => 'Keshav',
                'last_name' => 'Persad',
                'email' => 'kipersad262@gmail.com',
                'password' => Hash::make('123456789'),
                'phone_number' =>'364-2362',
                'utype' => 'USR',
                'user_image' => 'user_1.jpeg',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_lot_number' => '28',
                'user_street' => 'Karamath Street',
                'user_city' => 'Princes Town',
                
            ],
            [
                'first_name' => 'Rianna',
                'last_name' => 'Persad',
                'email' => 'rianna@gmail.com',
                'password' => Hash::make('123456789'),
                'phone_number' =>'324-7846',
                'utype' => 'USR',
                'user_image' => 'user_2.jpeg',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_lot_number' => '28',
                'user_street' => 'Karamath Street',
                'user_city' => 'Princes Town',
            ],
            [
                'first_name' => 'Nehru',
                'last_name' => 'Persad',
                'email' => 'nehru@gmail.com',
                'password' => Hash::make('123456789'),
                'phone_number' =>'364-7862',
                'utype' => 'USR',
                'user_image' => 'user_1.jpeg',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_lot_number' => '28',
                'user_street' => 'Karamath Street',
                'user_city' => 'Princes Town',
            ],
            [
                'first_name' => 'Shiv',
                'last_name' => 'Persad',
                'email' => 'shiv@gmail.com',
                'password' => Hash::make('123456789'),
                'phone_number' =>'367-2342',
                'utype' => 'USR',
                'user_image' => 'user_1.jpeg',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_lot_number' => '28',
                'user_street' => 'Karamath Street',
                'user_city' => 'Princes Town',
            ],
            [
                'first_name' => 'Sat',
                'last_name' => 'Persad',
                'email' => 'sat@gmail.com',
                'password' => Hash::make('123456789'),
                'phone_number' =>'347-2162',
                'utype' => 'USR',
                'user_image' => 'user_1.jpeg',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_lot_number' => '28',
                'user_street' => 'Karamath Street',
                'user_city' => 'Princes Town',
            ],
            [
                'first_name' => 'Sharda',
                'last_name' => 'Persad',
                'email' => 'sharda@gmail.com',
                'password' => Hash::make('123456789'),
                'phone_number' =>'350-5350',
                'utype' => 'USR',
                'user_image' => 'user_2.jpeg',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_lot_number' => '28',
                'user_street' => 'Karamath Street',
                'user_city' => 'Princes Town',
            ],
        ]);
    }
}
