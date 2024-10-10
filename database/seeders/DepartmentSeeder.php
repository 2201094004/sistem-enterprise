<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Human Resources',
                'description' => 'Responsible for managing employee relations and human resource policies.',
            ],
            [
                'name' => 'Finance',
                'description' => 'Handles financial planning, management of financial risks, and financial reporting.',
            ],
            [
                'name' => 'IT Support',
                'description' => 'Provides technical support and IT services to the organization.',
            ],
            [
                'name' => 'Marketing',
                'description' => 'Focuses on promoting and selling products or services, including market research and advertising.',
            ],
            [
                'name' => 'Sales',
                'description' => 'Responsible for selling products and services to customers and managing client relationships.',
            ],
        ];

        // Insert each department into the database
        foreach ($departments as $department) {
            Department::updateOrCreate(
                ['name' => $department['name']], // Unique identifier
                ['description' => $department['description']]
            );
        }
    }
}
