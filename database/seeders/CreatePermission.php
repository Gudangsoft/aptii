<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreatePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create(['guard_name' => 'admin', 'name' => 'manager']);
        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'edit articles']);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        // $role->syncPermissions($permissions);
        // $permission->syncRoles($roles);


    }
}
