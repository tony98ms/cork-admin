<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $role = Role::create(['name' => 'super-admin', 'description' => 'Super Administrador']);
        DB::table('users')->insert([
            'username'        => 'administrador',
            'names'         => 'Administrador',
            'email'           => 'admin@cork-admin.com',
            'password'        => Hash::make('12345678'),
            'status'          => 'activo',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);
        $user = User::find(1);
        $user->assignRole($role);
        Role::create(['name' => 'usuario', 'description' => 'Usuario']);
        Permission::create(['name' => 'usuarios', 'description' => 'Modulo Usuarios']);
    }
}
