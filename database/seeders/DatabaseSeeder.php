<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // 1. Buat Akun Admin (Password default: password)
    User::factory()->create([
        'name' => 'Admin SMEA',
        'email' => 'admin@smea.com',
        'role' => 'admin', // Tandai sebagai admin
        'password' => bcrypt('rpljayaaa'), // Set password manual biar tau
    ]);

    // 2. Buat user dummy biasa (opsional)
    User::factory(5)->create();
}
}
