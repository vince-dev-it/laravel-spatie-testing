<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);

        $superadmin = User::firstOrCreate(
            ['email' => 'superadmin@example.com'], 
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'password' => 'S123456789!'
            ]
        );

        $superadmin->assignRole($superAdminRole);
        
    }
}
