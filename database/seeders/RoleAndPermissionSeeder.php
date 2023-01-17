<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $permissions = [
      
            'view_user','add_user','edit_user','delete_user',
            'view_product','add_product','edit_product','delete_product'
           
        ];

        foreach($permissions as $permission)
            $permission=Permission::create(['name'=>$permission]);
    }
}
