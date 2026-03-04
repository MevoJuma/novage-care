<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   public function run(): void
{
    // Create roles (guard_name required by Spatie Permission)
    Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
    Role::firstOrCreate(['name' => 'elder', 'guard_name' => 'web']);
    Role::firstOrCreate(['name' => 'caregiver', 'guard_name' => 'web']);

    $password = Hash::make('123');

    // Create a test user and assign the admin role
    $admin = User::factory()->create([
        'name' => 'Admin User',
        'email' => 'admin@example.com',
        'password' => $password,
        'role' => 'admin',
    ]);

    $admin->assignRole('admin');

    // Optionally create other test users
    $elder = User::factory()->create([
        'name' => 'Elder User',
        'email' => 'elder@example.com',
        'password' => $password,
        'role' => 'elder',
    ]);

    $elder->assignRole('elder');

    $caregiver = User::factory()->create([
        'name' => 'Caregiver User',
        'email' => 'caregiver@example.com',
        'password' => $password,
        'role' => 'caregiver',
    ]);

    $caregiver->assignRole('caregiver');
}

}
