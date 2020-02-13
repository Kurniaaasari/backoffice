<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        App\User::create([
            'name' => 'Cakrawati',
            'email' => 'cakrawatisudjono@gmail.com',
            'password' => bcrypt('05032000'),
            'id_roles' => 1
         ]);
 
         App\User::create([
            'name' => 'Siskawati Sianipar',
            'email' => 'siskawati@gmail.com',
            'password' => bcrypt('123456'),
            'id_roles' => 2
         ]);
 
         App\User::create([
            'name' => 'Kurniasari',
            'email' => 'kurniaasari195@gmail.com',
            'password' => bcrypt('123456'),
            'id_roles' => 1
         ]); 
=======
        App\User::create([
       'name' => 'Cakrawati',
       'email' => 'cakrawatisudjono@gmail.com',
       'password' => bcrypt('05032000'),
       'id_roles' => 1
]);

App\User::create([
       'name' => 'Siskawati Sianipar',
       'email' => 'siskawati@gmail.com',
       'password' => bcrypt('123456'),
       'id_roles' => 2
]);

App\User::create([
       'name' => 'Kurniasari',
       'email' => 'kurniaasari195@gmail.com',
       'password' => bcrypt('123456'),
       'id_roles' => 3
]);     
>>>>>>> master
    }
}
