<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'worker_id' => 1,
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('root1234'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'LoginTest',
            'email' => 'test@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test'),
            'remember_token' => Str::random(10),
        ]);
    }
}
