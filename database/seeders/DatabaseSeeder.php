<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        PermissionSeeder::class,
        RoleSeeder::class,
        UserSeeder::class,
        DepartmentSeeder::class,
        PayrollSeeder::class,
        LeaveSeeder::class,
        AttendancesSeeder::class,
        ]);
    }
}
