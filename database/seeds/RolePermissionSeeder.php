<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        // create permissions
        $permissions = [
            'view-user',
            'create-user',
            'update-user',
            'destroy-user',

            'view-role',
            'create-role',
            'update-role',
            'destroy-role',

            'view-permission',
            'create-permission',
            'update-permission',
            'destroy-permission',

            'view-category',
            'create-category',
            'update-category',
            'destroy-category',

            'view-post',
            'create-post',
            'update-post',
            'destroy-post',

            'view-hospital',
            'create-hospital',
            'update-hospital',
            'destroy-hospital',

            'view-dcotor',
            'create-dcotor',
            'update-dcotor',
            'destroy-dcotor',

            'view-patient',
            'create-patient',
            'update-patient',
            'destroy-patient',

            'view-patientadmission',
            'create-patientadmission',
            'update-patientadmission',
            'destroy-patientadmission',

            'view-activity-log',
            'update-settings',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        // Create Super user & role
        $admin= Role::create(['name' => 'super-admin']);
        $admin->syncPermissions($permissions);

        $usr = User::create([
            'name'=> 'Admin',
            'email' => 'hasanslaravelproject@gmail.com',
            'password' => '11111111',
            'status' => true,
            'email_verified_at' => now(),
        ]);

        $usr->assignRole($admin);

        $usr->syncPermissions($permissions);

        // Create user & role
        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('update-settings');
        $role->givePermissionTo('view-user');

        $user = User::create([
            'name'=> 'User',
            'email' => 'hasanspeaking@yahoo.com',
            'password' => '11111111',
            'status' => true,
            'email_verified_at' => now(),
        ]);
        $user->assignRole($role);
    }
}
