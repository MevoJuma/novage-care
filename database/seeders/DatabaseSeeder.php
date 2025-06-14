<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   public function run(): void
{
    // Create roles
    Role::firstOrCreate(['name' => 'admin']);
    Role::firstOrCreate(['name' => 'elder']);
    Role::firstOrCreate(['name' => 'caregiver']);

    // Create a test user and assign the admin role
    $admin = User::factory()->create([
        'name' => 'Admin User',
        'email' => 'admin@example.com',
    ]);

    $admin->assignRole('admin');

    // Optionally create other test users
    $elder = User::factory()->create([
        'name' => 'Elder User',
        'email' => 'elder@example.com',
    ]);

    $elder->assignRole('elder');
}

}
