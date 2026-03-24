<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'arco@031.mk'],
            [
                'name' => 'Arco User',
                'password' => bcrypt('password'), // Not used for magic link but required by User model
                'email_verified_at' => now(),
            ]
        );

        User::firstOrCreate(
            ['email' => 'stefan@031.mk'],
            [
                'name' => 'Stefan User',
                'password' => bcrypt('password'), // Not used for magic link but required by User model
                'email_verified_at' => now(),
            ]
        );
    }
}
