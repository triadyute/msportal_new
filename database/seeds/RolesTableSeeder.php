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
        Role::create([
            'name' => 'User',
            'description' => 'default role'
        ]);
        Role::create([
            'name' => 'Access Authoriser',
            'description' => 'Access Authoriser'
        ]);
        Role::create([
            'name' => 'Change Control Authoriser',
            'description' => 'Change Control Authoriser'
        ]);
        Role::create([
            'name' => 'Change List Authoriser',
            'description' => 'Change List Authoriser'
        ]);
        Role::create([
            'name' => 'Datacenter Op',
            'description' => 'Datacenter Op'
        ]);
        Role::create([
            'name' => 'Security',
            'description' => 'Security'
        ]);
    }
}
