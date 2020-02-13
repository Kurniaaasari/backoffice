<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
=======
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
$this->call(PermissionsTableSeeder::class);
$this->call(UsersTableSeeder::class);
>>>>>>> master
    }
}
