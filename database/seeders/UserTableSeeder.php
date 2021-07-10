<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Usuarios; 


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin= Usuarios::create([

        'username' =>'Jmendez',
        'email'=>'jhon.mendez@gmail.com',
        'password'=>'123'

      ]);
        $admin->assignRole('Administrador');
   

    
    }
}
