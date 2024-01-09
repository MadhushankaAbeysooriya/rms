<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreatePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'province-list',
            'province-create',
            'province-edit',
            'province-delete',
            'district-list',
            'district-create',
            'district-edit',
            'district-delete',
            'hospital-list',
            'hospital-create',
            'hospital-edit',
            'hospital-delete',
            'logindetail-list',
            'searchdetail-list',
            'search-details'          
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
