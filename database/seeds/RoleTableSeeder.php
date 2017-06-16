<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $role_admin= new Role();
      $role_admin->role='Stores Manager';
      $role_admin->save();

      //$role_report= new Role();
      //$role_report->role='guest';
      //$role_admin->role_description='Can generate reports';
      //$role_report->save();

      $role_data= new Role();
      $role_data->role='Stores Assistant';
      $role_data->save();
    }
}
