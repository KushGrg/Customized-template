<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // User permissions
            'view_users',
            'create_users',
            'edit_users',
            'delete_users',
            
            // Role permissions
            'view_roles',
            'create_roles',
            'edit_roles',
            'delete_roles',
            
            // Permission permissions
            'view_permissions',
            'create_permissions',
            'edit_permissions',
            'delete_permissions',
            
            // Dashboard permission
            'access_dashboard',

            //Category permission
            'access_category',
            'create_category',
            'edit_category',
            'delete_category'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create admin role and assign permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo([
            'access_dashboard',
        ]);

        // Create superadmin role and assign permissions
        $superadminRole = Role::create(['name' => 'superadmin']);
        $superadminRole->givePermissionTo(Permission::all());
    }
} 

