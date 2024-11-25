<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignPermissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::where('name', 'super-admin')->first();
        
        $permissions = [
                'Create Masterlist',
        ];

        $superAdminRole->syncPermissions($permissions);
    }
}
