<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Permission::create([
       'name_permissions' => 'view data' // id 1
]);
App\Permission::create([
       'name_permissions' => 'create data' // id 2
]);
App\Permission::create([
       'name_permissions' => 'edit data' // id 3
]);
App\Permission::create([
       'name_permissions' => 'update data' // id 4
]);
App\Permission::create([
       'name_permissions' => 'delete data' // id 5
]);

$admin = App\Role::where('name_roles', 'admin')->first();
$admin->permissions()->attach([1, 2, 5]);


$staff = App\Role::where('name_roles', 'staff')->first();
$staff->permissions()->attach([1, 2, 3, 4]);

$ceo = App\Role::where('name_roles', 'ceo')->first();
$ceo->permissions()->attach([1, 2, 3, 4, 5]);
    }
}
