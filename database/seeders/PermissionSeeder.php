<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'viewAny-artists']);
        Permission::create(['name' => 'view-artists']);
        Permission::create(['name' => 'create-artists']);
        Permission::create(['name' => 'update-artists']);
        Permission::create(['name' => 'delete-artists']);

        Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());

        Role::create(['name' => 'user'])
            ->givePermissionTo([
                'viewAny-artists',
                'view-artists',
            ]);

        Role::create(['name' => 'guest'])
            ->givePermissionTo([
                'viewAny-artists',
                'view-artists',
            ]);
    }
}
