<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminEmail = env('ADMIN_EMAIL', 'admin@quarkcars.in');
        $adminPassword = env('ADMIN_PASSWORD', 'Admin@12345');

        User::query()->firstOrCreate(
            ['email' => $adminEmail],
            [
                'name' => env('ADMIN_NAME', 'QuarkCars Admin'),
                'password' => Hash::make($adminPassword),
                'is_admin' => true,
            ],
        );
    }
}
