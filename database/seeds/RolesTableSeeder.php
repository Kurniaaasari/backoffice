<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //
        App\Role::create(['name_roles' => 'admin']);

		App\Role::create(['name_roles' => 'staff']);
=======
        App\Role::create([
      'name_roles' => 'admin'
]);

App\Role::create([
      'name_roles' => 'staff'
]);

App\Role::create([
      'name_roles' => 'ceo'
]);
>>>>>>> master
    }
}
