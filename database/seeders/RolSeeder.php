<?php

namespace Database\Seeders;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        app()['cache']->forget('spatie.permission.cache');

      

        $role1=  Role::create(['name'=>'Administrador']);
        $role2= Role::create(['name'=>'Usuario']);

        Permission::create(['name'=>'Crear Usuario'])->syncRoles($role1);
        Permission::create(['name'=>'Crear Habitaciones'])->syncRoles($role1);
        
        
       

    }
}
