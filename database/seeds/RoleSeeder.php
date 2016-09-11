<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolesArr = ['Student','Admin '];
        foreach($rolesArr as $role){
            Role::firstOrCreate(['name'=>$role]);
        }
    }
}
