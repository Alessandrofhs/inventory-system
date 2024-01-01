<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Alessandro Ferdhinand Hedi Syahputra',
            'email' => 'alessandrofhs@gmail.com',
            'username' => 'alessandrofhs',
            'password' => Hash::make('ale090903'),
            'role' => 'admin',
            'gender' => 'male'
        ]);
    }
}
