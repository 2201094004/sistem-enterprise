<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adi = User::updateOrCreate([
            'email' => 'adi@email.com', // Gunakan email sebagai kunci unik
        ], [
            'name' => 'adi',
            'password' => bcrypt('password'),
        ]);
        $adi->assignRole('admin');

        $budi = User::updateOrCreate([
            'email' => 'budi@email.com',
        ], [
            'name' => 'Budi',
            'password' => bcrypt('password'),
        ]);
        $budi->assignRole('operator');

        $cindy = User::updateOrCreate([
            'email' => 'cindy@email.com',
        ], [
            'name' => 'cindy',
            'password' => bcrypt('password'),
        ]);
        $cindy->assignRole('operator');
        $cindy->givePermissionTo('delete users'); // Memberikan akses permission langsung
    }
}
