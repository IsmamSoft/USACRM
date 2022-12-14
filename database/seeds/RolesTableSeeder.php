<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['urole'=> 'superadmin']);
        Role::create(['urole'=> 'admin']);
        Role::create(['urole'=> 'author']);
        Role::create(['urole'=> 'office']);
        Role::create(['urole'=> 'teammate']);
        Role::create(['urole'=> 'salesperson']);
        Role::create(['urole'=> 'user']);
    }
}
