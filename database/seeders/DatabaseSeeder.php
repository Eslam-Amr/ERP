<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

<<<<<<< HEAD
        // User::updateOrCreate(
        //     ['email' => 'test@test.com'], // Condition to check for an existing user
        //     [
        //         'name' => 'Test User',
        //         'role' => 'admin'
        //     ] // Data to update or create
        // );
=======
        User::updateOrCreate(
            ['email' => 'test@test.com'], // Condition to check for an existing user
            [
                'name' => 'Test User',
                'role' => 'admin',

                'password' => Hash::make('password'),
            ] // Data to update or create
        );
>>>>>>> 1f1078471eec581ce5f6eba5e08db3558831f75a
                $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
