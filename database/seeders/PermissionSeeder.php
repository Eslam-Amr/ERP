<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions=[
            'add_product',
            'show_product',
            'edit_product',
            'delete_product',
            'add_role',
            'show_role',
            'edit_role',
            'delete_role',
            'add_permission',
            'show_permission',
            'edit_permission',
            'delete_permission',
            'add_employee',
            'show_employee',
            'edit_employee',
            'delete_employee',
        ];
        foreach ($permissions as $permission){
         Permission::updateOrCreate(['name' => $permission],['name' => $permission,'guard_name'=>'admin']);
        }
    }
}
