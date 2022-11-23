<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role::truncate();
        DB::table('role_user')->truncate();

        $user = User::create([
            'nombre'    =>  'Dimar',
            'apellidos' =>  'Coca',
            'direccion' =>  'barrio guadalupe',
            'genero'    =>  'M',
            'telefono'  =>  777777,
            'email'     =>  'dimar@email.com',
            'estado'    =>  1,
            'password'  =>  bcrypt(123123)
        ]);

        $role = Role::create([
            'nombre' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador del sitio web'
        ]);

        $user->rol()->save($role);

        $role = Role::create([
            'nombre' => 'mod',
            'display_name' => 'Cajero',
            'description' => 'Cajero del sitio'
        ]);
        
        $role = Role::create([
            'nombre' => 'client',
            'display_name' => 'Usuario',
            'description' => 'Usuario'
        ]);
    }
}
