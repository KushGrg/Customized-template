<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUsersSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        $superAdmin = User::create([
            'name' => 'NCCS',
            'email' => 'nccsedu@nccs.edu.np',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'previously_verified' => true,
        ]);
        $superAdmin->assignRole('superadmin');

        // Create regular user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@nccs.edu.np',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'previously_verified' => true,
        ]);
        $admin->assignRole('admin');
    }
} 