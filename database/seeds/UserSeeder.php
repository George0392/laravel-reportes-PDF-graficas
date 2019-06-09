<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            DB::table('users')->insert([
            'name'     => 'Admin',
            'email'    => '123@123.com',
            'password' => bcrypt(123456),
            ]);

            DB::table('users')->insert([
            'name'     => 'supervisor',
            'email'    => '1234@123.com',
            'password' => bcrypt(123456),
            ]);

            DB::table('users')->insert([
            'name'     => 'usuario',
            'email'    => '12345@123.com',
            'password' => bcrypt(123456),
            ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        // factory(User::class, 20)->create();

            Role::create([
            'name'    => 'Admin',
            'slug'    => 'Admin',
            'special' => 'all-access'
            ]);

            Role::create([
            'name'    => 'Supervisor',
            'slug'    => 'Supervisor',
            // 'special' => 'all-access'
            ]);

            Role::create([
            'name'    => 'Usuario',
            'slug'    => 'Usuario',
            // 'special' => 'all-access'
            ]);

            Role::create([
            'name'    => 'Bloqueado',
            'slug'    => 'SinAcceso',
            'special' => 'no-access'
            ]);


    }
}
