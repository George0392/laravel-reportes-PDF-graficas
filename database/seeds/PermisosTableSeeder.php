<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        // ************************************************************
        // *
        // *				PERMISOS DE USUARIOS
        // *
        // ************************************************************

        Permission::create([
			'name'        => 'Navegar usuarios',
			'slug'        => 'users.index',
			'description' => 'Ve todos los usuarios de la App.'
        ]);

        Permission::create([
            'name'        => 'Crear roles',
            'slug'        => 'users.create',
            'description' => 'Crea todos los usuarios de la App.'
        ]);


        Permission::create([
			'name'        => 'Editar usuarios',
			'slug'        => 'users.edit',
			'description' => 'Edita los usuarios de la App.'
        ]);

        Permission::create([
			'name'        => 'Eliminar usuarios',
			'slug'        => 'users.destroy',
			'description' => 'Elimina los usuarios de la App.'
        ]);

        Permission::create([
			'name'        => 'Detalle de usuarios',
			'slug'        => 'users.show',
			'description' => 'Ve todos los detalles de cada usuario de la App.'
        ]);

        // ************************************************************
        // *
        // *				PERMISOS DE LOS ROLES
        // *
        // ************************************************************

        Permission::create([
			'name'        => 'Navegar roles',
			'slug'        => 'roles.index',
			'description' => 'Ve todos los roles de la App.'
        ]);

        Permission::create([
			'name'        => 'Crear roles',
			'slug'        => 'roles.create',
			'description' => 'Crea todos los roles de la App.'
        ]);

        Permission::create([
			'name'        => 'Editar roles',
			'slug'        => 'roles.edit',
			'description' => 'Edita todos los roles de la App.'
        ]);

        Permission::create([
			'name'        => 'Eliminar roles',
			'slug'        => 'roles.destroy',
			'description' => 'Elimina los roles de la App.'
        ]);

        Permission::create([
			'name'        => 'Mostrar roles',
			'slug'        => 'roles.show',
			'description' => 'Ve en detalle todos los roles de la App.'
        ]);

        // ************************************************************
        // *
        // *                PERMISOS BASE
        // *
        // ************************************************************

        Permission::create([
            'name'        => 'Navegar permisos',
            'slug'        => 'permisos.index',
            'description' => 'Ve todos los permisos de la App.'
        ]);

        Permission::create([
            'name'        => 'Crear permisos',
            'slug'        => 'permisos.create',
            'description' => 'Crea todos los permisos de la App.'
        ]);

        Permission::create([
            'name'        => 'Editar permisos',
            'slug'        => 'permisos.edit',
            'description' => 'Edita todos los permisos de la App.'
        ]);

        Permission::create([
            'name'        => 'Eliminar permisos',
            'slug'        => 'permisos.destroy',
            'description' => 'Elimina los permisos de la App.'
        ]);

        Permission::create([
            'name'        => 'Mostrar permisos',
            'slug'        => 'permisos.show',
            'description' => 'Ve en detalle todos los permisos de la App.'
        ]);


         // ************************************************************
        // *
        // *                PERMISOS DE MEDICOS
        // *
        // ************************************************************

        Permission::create([
            'name'        => 'Navegar medicos',
            'slug'        => 'medicos.index',
            'description' => 'Ve todos los medicos de la App.'
        ]);

        Permission::create([
            'name'        => 'Crear medicos',
            'slug'        => 'medicos.create',
            'description' => 'Crea todos los medicos de la App.'
        ]);

        Permission::create([
            'name'        => 'Editar medicos',
            'slug'        => 'medicos.edit',
            'description' => 'Edita todos los medicos de la App.'
        ]);

        Permission::create([
            'name'        => 'Eliminar medicos',
            'slug'        => 'medicos.destroy',
            'description' => 'Elimina los medicos de la App.'
        ]);

        Permission::create([
            'name'        => 'Mostrar medicos',
            'slug'        => 'medicos.show',
            'description' => 'Ve en detalle todos los medicos de la App.'
        ]);


 // ************************************************************
        // *
        // *                PERMISOS DE pacientes
        // *
        // ************************************************************

        Permission::create([
            'name'        => 'Navegar pacientes',
            'slug'        => 'pacientes.index',
            'description' => 'Ve todos los pacientes de la App.'
        ]);

        Permission::create([
            'name'        => 'Crear pacientes',
            'slug'        => 'pacientes.create',
            'description' => 'Crea todos los pacientes de la App.'
        ]);

        Permission::create([
            'name'        => 'Editar pacientes',
            'slug'        => 'pacientes.edit',
            'description' => 'Edita todos los pacientes de la App.'
        ]);

        Permission::create([
            'name'        => 'Eliminar pacientes',
            'slug'        => 'pacientes.destroy',
            'description' => 'Elimina los pacientes de la App.'
        ]);

        Permission::create([
            'name'        => 'Mostrar pacientes',
            'slug'        => 'pacientes.show',
            'description' => 'Ve en detalle todos los pacientes de la App.'
        ]);

 // ************************************************************
        // *
        // *                PERMISOS DE consultorios
        // *
        // ************************************************************

        Permission::create([
            'name'        => 'Navegar consultorios',
            'slug'        => 'consultorios.index',
            'description' => 'Ve todos los consultorios de la App.'
        ]);

        Permission::create([
            'name'        => 'Crear consultorios',
            'slug'        => 'consultorios.create',
            'description' => 'Crea todos los consultorios de la App.'
        ]);

        Permission::create([
            'name'        => 'Editar consultorios',
            'slug'        => 'consultorios.edit',
            'description' => 'Edita todos los consultorios de la App.'
        ]);

        Permission::create([
            'name'        => 'Eliminar consultorios',
            'slug'        => 'consultorios.destroy',
            'description' => 'Elimina los consultorios de la App.'
        ]);

        Permission::create([
            'name'        => 'Mostrar consultorios',
            'slug'        => 'consultorios.show',
            'description' => 'Ve en detalle todos los consultorios de la App.'
        ]);

 // ************************************************************
        // *
        // *                PERMISOS DE control
        // *
        // ************************************************************

        Permission::create([
            'name'        => 'Navegar control',
            'slug'        => 'control.index',
            'description' => 'Ve todos los control de la App.'
        ]);

        Permission::create([
            'name'        => 'Crear control',
            'slug'        => 'control.create',
            'description' => 'Crea todos los control de la App.'
        ]);

        Permission::create([
            'name'        => 'Editar control',
            'slug'        => 'control.edit',
            'description' => 'Edita todos los control de la App.'
        ]);

        Permission::create([
            'name'        => 'Eliminar control',
            'slug'        => 'control.destroy',
            'description' => 'Elimina los control de la App.'
        ]);

        Permission::create([
            'name'        => 'Mostrar control',
            'slug'        => 'control.show',
            'description' => 'Ve en detalle todos los control de la App.'
        ]);

 // ************************************************************
        // *
        // *                PERMISOS DE medicamentos
        // *
        // ************************************************************

        Permission::create([
            'name'        => 'Navegar medicamentos',
            'slug'        => 'medicamentos.index',
            'description' => 'Ve todos los medicamentos de la App.'
        ]);

        Permission::create([
            'name'        => 'Crear medicamentos',
            'slug'        => 'medicamentos.create',
            'description' => 'Crea todos los medicamentos de la App.'
        ]);

        Permission::create([
            'name'        => 'Editar medicamentos',
            'slug'        => 'medicamentos.edit',
            'description' => 'Edita todos los medicamentos de la App.'
        ]);

        Permission::create([
            'name'        => 'Eliminar medicamentos',
            'slug'        => 'medicamentos.destroy',
            'description' => 'Elimina los medicamentos de la App.'
        ]);

        Permission::create([
            'name'        => 'Mostrar medicamentos',
            'slug'        => 'medicamentos.show',
            'description' => 'Ve en detalle todos los medicamentos de la App.'
        ]);

         // ************************************************************
        // *
        // *                PERMISOS DE entregas
        // *
        // ************************************************************

        Permission::create([
            'name'        => 'Navegar entregas',
            'slug'        => 'entregas.index',
            'description' => 'Ve todos los entregas de la App.'
        ]);

        Permission::create([
            'name'        => 'Crear entregas',
            'slug'        => 'entregas.create',
            'description' => 'Crea todos los entregas de la App.'
        ]);

        Permission::create([
            'name'        => 'Editar entregas',
            'slug'        => 'entregas.edit',
            'description' => 'Edita todos los entregas de la App.'
        ]);

        Permission::create([
            'name'        => 'Eliminar entregas',
            'slug'        => 'entregas.destroy',
            'description' => 'Elimina los entregas de la App.'
        ]);

        Permission::create([
            'name'        => 'Mostrar entregas',
            'slug'        => 'entregas.show',
            'description' => 'Ve en detalle todos los entregas de la App.'
        ]);




        // ************************************************************
        // *
        // *				PERMISOS DE otras tablas aqui
        // *
        // ************************************************************


    }
}
