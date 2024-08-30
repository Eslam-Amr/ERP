<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'test@test.com'], // Condition to check for an existing user
            [
                'name' => 'Test User',
                'role' => 'admin'
            ] // Data to update or create
        );
                $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}
