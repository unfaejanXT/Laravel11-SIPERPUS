<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataRole = [
            ['name' => 'pustakawan'],
            ['name' => 'mahasiswa'],
        ];

        $dataPermission = [
            ['name' => 'edit_book'],
            ['name' => 'edit_user'],
            ['name' => 'view_book'],
        ];

        foreach($dataRole as $role){
            Role::create($role);
        }

        foreach($dataPermission as $permission){
            Permission::create($permission);
        }
    }
}
