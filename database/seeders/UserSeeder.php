<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        User::factory()->create([
            'name' => 'Nur Abyad',
            'username' => 'nurabyad',
            'email' => 'nurabyad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('langitbirulaut'),
            'remember_token' => Str::random(10),
        ]);
        User::factory(5)->create();
    }
}
