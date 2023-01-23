<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
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
        $user = [
            'name' => 'Admin',
            'username' => 'admin',
            'phone_no' => '123123',
            'email' => 'test@mail.com',
            'password' => Hash::make('password'),
            'user_level' => 'Super Admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        User::insert($user);
    }
}
