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
        $permissionsEn=[
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
        $permissionsAr = [
    'إضافة_منتج',
    'عرض_منتج',
    'تعديل_منتج',
    'حذف_منتج',
    'إضافة_دور',
    'عرض_دور',
    'تعديل_دور',
    'حذف_دور',
    'إضافة_إذن',
    'عرض_إذن',
    'تعديل_إذن',
    'حذف_إذن',
    'إضافة_موظف',
    'عرض_موظف',
    'تعديل_موظف',
    'حذف_موظف',
];
        // foreach ($permissionsEn as $permission){
        //  Permission::updateOrCreate(['name' => $permission],['name' => $permission,'guard_name'=>'admin']);
        // }
        // foreach ($permissionsEn as $index =>$permission){
        //     $data = [
        //         'guard_name' => 'admin',
        //         'name' => $permission,
        //         // 'translations' => [
        //         //     'en' => ['name' =>  $permission],
        //         //     'ar' => ['name' => $permissionsAr[$index]],
        //         // ],
        //       ];
        //     // Permission::updateOrCreate(['name' => $permission],['name' => $permission,'guard_name'=>'admin']);
        //     Permission::create($data);
        // }
        // foreach ($permissionsEn as $index => $permission) {
        //     $data = [
        //         'guard_name' => 'admin',
        //         'name' => json_encode([
        //             'en' => $permission,
        //             'ar' => $permissionsAr[$index],
        //         ]),
        //     ];

        //     Permission::updateOrCreate(['name' => $permission, 'guard_name' => 'admin'], $data);
        // }
        foreach ($permissionsEn as $index => $permission) {
            $data = [
                'guard_name' => 'admin',
                'name_en' => $permission,
                'name_ar' => $permissionsAr[$index],
            ];

            Permission::updateOrCreate(['name_en' => $permission, 'guard_name' => 'admin'], $data);
        }
    }
}
