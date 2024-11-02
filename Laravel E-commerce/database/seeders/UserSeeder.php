<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User Admin
        $user=User::create([
            'name'        =>   'Admin',
            'email'       =>   'admin@example.com',
            'user_type'   =>   'admin',
            'password'    =>   bcrypt('123456789'),
            'created_at'  =>   Carbon::now()->toDateTimeString(),
            'updated_at'  =>   null,
        ]);
        //User Moderator
        $user = User::create([
            'name'        =>   'Moderator',
            'email'       =>   'moderator@example.com',
            'user_type'   =>   'moderator',
            'password'    =>   bcrypt('123456789'),
            'created_at'  =>   Carbon::now()->toDateTimeString(),
            'updated_at'  =>   null,
        ]);
        //User Customer
        $user = User::create([
            'name'        =>   'Customer',
            'email'       =>   'customer@example.com',
            'user_type'   =>   'customer',
            'password'    =>   bcrypt('123456789'),
            'created_at'  =>   Carbon::now()->toDateTimeString(),
            'updated_at'  =>   null,
        ]);
    }
}
