<?php

use Illuminate\Database\Seeder;
use App\Models\User;

use App\Models\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//assigning dummy roles to users
        $role_admin=Role::where('role','Stores Manager')->first();
        //$role_report=Role::where('role','')->first();
        $role_data=Role::where('role','Stores Assistant')->first();

        $admin =new User();
        $admin->username="Ben";
        $admin->email="storesadmin@unhls.co.ug";
        $admin->password=bcrypt('poipoi');
        $admin->role_id="1";
        $admin->save();
        $admin->role()->attach($role_admin);
    }
}
