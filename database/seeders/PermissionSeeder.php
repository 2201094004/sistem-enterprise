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
    //permission untuk mengelola users
    Permission::updateORcreate(['name' => 'show users']);
    Permission::updateORcreate(['name' => 'add users']);
    Permission::updateORcreate(['name' => 'edit users']);
    Permission::updateORcreate(['name' => 'delete users']);

    //permission untuk mengelola departments
    Permission::updateORcreate(['name' => 'show department']);
    Permission::updateORcreate(['name' => 'add department']);
    Permission::updateORcreate(['name' => 'edit department']);
    Permission::updateORcreate(['name' => 'delete department']);

    //permission untuk mengelola employees
    Permission::updateORcreate(['name' => 'show employees']);
    Permission::updateORcreate(['name' => 'add employees']);
    Permission::updateORcreate(['name' => 'edit employees']);
    Permission::updateORcreate(['name' => 'delete employees']);

    //permission untuk mengelola payroll
    Permission::updateORcreate(['name' => 'show payroll']);
    Permission::updateORcreate(['name' => 'add payroll']);
    Permission::updateORcreate(['name' => 'edit payroll']);
    Permission::updateORcreate(['name' => 'delete payroll']);

    }
}
