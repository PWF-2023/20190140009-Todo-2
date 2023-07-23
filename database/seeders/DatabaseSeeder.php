<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Pest\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$PZdbHNVUOKlMoEaK7NieOOFnO6uIEWDlI9UnhPApOpLfDxM6eI62e',
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );
        User::factory(100)->create();
        Todo::factory(500)->create();
    }
}
