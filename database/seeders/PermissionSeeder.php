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

     //permission untuk mengelola leave
     Permission::updateORcreate(['name' => 'show leave']);
     Permission::updateORcreate(['name' => 'add leave']);
     Permission::updateORcreate(['name' => 'edit leave']);
     Permission::updateORcreate(['name' => 'delete leave']);

      //permission untuk mengelola attendances
    Permission::updateORcreate(['name' => 'show attendances']);
    Permission::updateORcreate(['name' => 'add attendances']);
    Permission::updateORcreate(['name' => 'edit attendances']);
    Permission::updateORcreate(['name' => 'delete attendances']);

    }
}
