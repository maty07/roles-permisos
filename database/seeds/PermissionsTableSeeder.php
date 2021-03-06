<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ----------------------USERS---------------------
        Permission::create([
          'name' => 'Navegar usuarios',
          'slug' => 'users.index',
          'description' => 'Lista y Navega todos los usuarios del sistema',
        ]);

        Permission::create([
          'name' => 'Ver detalle de usuario',
          'slug' => 'users.show',
          'description' => 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
          'name' => 'Edicion de usuarios',
          'slug' => 'users.edit',
          'description' => 'Editar datos de un usuario del sistema',
        ]);

        Permission::create([
          'name' => 'Eliminar usuarios',
          'slug' => 'users.delete',
          'description' => 'Eliminar un usuario del sistema',
        ]);

        // ---------------------ROLES---------------------

        Permission::create([
          'name' => 'Navegar roles',
          'slug' => 'roles.index',
          'description' => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
          'name' => 'Ver detalle del rol',
          'slug' => 'roles.show',
          'description' => 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
          'name' => 'Creación de roles',
          'slug' => 'roles.create',
          'description' => 'Editar datos de un rol del sistema',
        ]);

        Permission::create([
          'name' => 'Edicion de roles',
          'slug' => 'roles.edit',
          'description' => 'Editar datos de un rol del sistema',
        ]);

        Permission::create([
          'name' => 'Eliminar roles',
          'slug' => 'roles.delete',
          'description' => 'Eliminar un rol del sistema',
        ]);

        // -------------------PRODUCTS---------------------

        Permission::create([
          'name' => 'Navegar productos',
          'slug' => 'products.index',
          'description' => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
          'name' => 'Ver detalle del producto',
          'slug' => 'products.show',
          'description' => 'Ver en detalle cada producto del sistema',
        ]);

        Permission::create([
          'name' => 'Creación de productos',
          'slug' => 'products.create',
          'description' => 'Editar datos de un producto del sistema',
        ]);

        Permission::create([
          'name' => 'Edicion de productos',
          'slug' => 'products.edit',
          'description' => 'Editar datos de un producto del sistema',
        ]);

        Permission::create([
          'name' => 'Eliminar productos',
          'slug' => 'products.delete',
          'description' => 'Eliminar un producto del sistema',
        ]);



    }
}
