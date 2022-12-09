<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class BasicAdminPermissionSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permissions = [
            'permission list',
            //            'permission create',
            //            'permission edit',
            //            'permission delete',
            //
            'role list',
            //            'role create',
            //            'role edit',
            //            'role delete',

            'user list',
            'user create',
            'user edit',
            'user delete',

            'intro list',
            'intro create',
            'intro edit',
            'intro delete',
        ];

        $roleSuperAdmin = Role::create(['name' => 'super-admin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleWriter = Role::create(['name' => 'writer']);

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // create roles and assign existing permissions
        $roleWriter->givePermissionTo('user list');
        $roleWriter->givePermissionTo('intro list');

        foreach ($permissions as $permission) {
            $roleAdmin->givePermissionTo($permission);
        }

        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($roleSuperAdmin);

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($roleAdmin);

        $user = User::factory()->create([
            'name' => 'Writer',
            'email' => 'writer@example.com',
        ]);
        $user->assignRole($roleWriter);
    }
}
