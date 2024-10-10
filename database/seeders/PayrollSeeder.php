<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payroll;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $employees = Employees::inRandomOrder()->take(5)->get();

        foreach ($employees as $employee) {
            Payroll::create([
                'user_id' => $employee->user_id, 
                'salary' => rand(3000000, 10000000), 
                'created_at' => now(), 
            ]);
        }
    }
}
