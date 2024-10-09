<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'id' => 1,
                'customer_name' => 'Kebede',
                'customer_email' => 'customer@gmail.com',
                'customer_phone' => '+251915276873',
                'customer_country' => 'Netherlands',
                'customer_address' => 'Lideta, Beside Dama House Dynamic MFI Building Addis Ababa, Ethiopia',
                'customer_state' => 'TX',
                'customer_city' => 'Addis Ababa',
                'customer_zip' => '1000',
                'customer_password' => Hash::make('password'), // Hashed password
                'customer_token' => '',
                'customer_status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'customer_name' => 'Nigus Abate',
                'customer_email' => 'nigusabate4@gmail.com',
                'customer_phone' => '+251915852276',
                'customer_country' => 'Ethiopia',
                'customer_address' => '4008 Cherchill Street, Ethiopia',
                'customer_state' => 'Addis Ababa',
                'customer_city' => 'Addis ababa',
                'customer_zip' => '1000',
                'customer_password' => Hash::make('password'), // Hashed password
                'customer_token' => '0af035f2bd20622ea76ea48a3d6b7504b86d45c46c1816e274e151a8343864d6',
                'customer_status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}