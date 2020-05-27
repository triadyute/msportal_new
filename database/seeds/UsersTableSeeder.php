<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::find(1);
        $role_accessauthoriser  = Role::find(2);
        $role_ccauthoriser  = Role::find(3);
        $role_changelistauthoriser  = Role::find(4);
        $role_dcop  = Role::find(5);
        $role_security  = Role::find(6);

        $user = factory(User::class)->create(['email' => 'user@msportal.com', 'company_id' => 1]);
        $user->roles()->attach($role_user);
        $user->save();

        $accessauthoriser = factory(User::class)->create(['email' => 'aa@msportal.com', 'company_id' => 1]);
        $accessauthoriser->roles()->attach($role_accessauthoriser);
        $accessauthoriser->save();
 
        $ccauthoriser = factory(User::class)->create(['email' => 'cca@msportal.com', 'company_id' => 1]);
        $ccauthoriser->roles()->attach($role_ccauthoriser);
        $ccauthoriser->save();

        $changelistauthoriser = factory(User::class)->create(['email' => 'cla@msportal.com', 'company_id' => 1]);
        $changelistauthoriser->roles()->attach($role_changelistauthoriser);
        $changelistauthoriser->save();

        $dcop = factory(User::class)->create();
        $dcop->roles()->attach($role_dcop);
        $dcop->save();

        $security = factory(User::class)->create(['email' => 'security@msportal.com', 'company_id' => 1]);
        $security->roles()->attach($role_security);
        $security->save();
        
        
        $admin_user = factory(User::class)->create(['email' => 'admin@msportal.com', 'company_id' => 1]);
        $admin_user->roles()->attach([1,2,3,4,5]);
        $admin_user->save();
    }
}
