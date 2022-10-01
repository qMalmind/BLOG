<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        $this->createPermission();
        $this->fillMediumTable();
    }

    public function createRoles(){
        DB::table('roles')->insertOrIgnore([
            ['name' => 'super_admin'],
            ['name' => 'admin'],
            ['name' => 'moderator'],
            ['name' => 'default_user'],
        ]);
    }

    public function createPermission(){
        DB::table('permissions')->insertOrIgnore([
           ['action' => 'create_articles'], // 1
           ['action' => 'my_edit'], // 2
           ['action' => 'my_delete'], // 3
           ['action' => 'send_comments'], // 4
           ['action' => 'my_delete_comments'], // 5
           ['action' => 'all_delete_comments'], // 6
           ['action' => 'all_edit_article'], // 7
           ['action' => 'all_delete_article'], // 8
           ['action' => 'grade_articles'], // 9
           ['action' => 'grade_comments'], // 10
           ['action' => 'send_reports'], // 11
           ['action' => 'watch_reports'], // 12
        ]);
    }

    public function fillMediumTable(){
        $this->addPermissionsForSuperAdmin();
        $this->addPermissionsForAdmin();
        $this->addPermissionsForModerator();
        $this->addPermissionsForDefaultUser();
    }

    public function addPermissionsForSuperAdmin(){
        DB::table('role_permission')->insert([
            ['role_id' => 1, 'permission_id' => 1],
            ['role_id' => 1, 'permission_id' => 2],
            ['role_id' => 1, 'permission_id' => 3],
            ['role_id' => 1, 'permission_id' => 4],
            ['role_id' => 1, 'permission_id' => 5],
            ['role_id' => 1, 'permission_id' => 6],
            ['role_id' => 1, 'permission_id' => 7],
            ['role_id' => 1, 'permission_id' => 8],
            ['role_id' => 1, 'permission_id' => 9],
            ['role_id' => 1, 'permission_id' => 10],
            ['role_id' => 1, 'permission_id' => 11],
            ['role_id' => 1, 'permission_id' => 12],
        ]);
    }

    public function addPermissionsForAdmin(){
        DB::table('role_permission')->insert([
            ['role_id' => 2, 'permission_id' => 1],
            ['role_id' => 2, 'permission_id' => 2],
            ['role_id' => 2, 'permission_id' => 3],
            ['role_id' => 2, 'permission_id' => 4],
            ['role_id' => 2, 'permission_id' => 5],
            ['role_id' => 2, 'permission_id' => 6],
            ['role_id' => 2, 'permission_id' => 8],
            ['role_id' => 2, 'permission_id' => 9],
            ['role_id' => 2, 'permission_id' => 10],
            ['role_id' => 2, 'permission_id' => 11],
            ['role_id' => 2, 'permission_id' => 12],
        ]);
    }

    public function addPermissionsForModerator(){
        DB::table('role_permission')->insert([
            ['role_id' => 3, 'permission_id' => 1],
            ['role_id' => 3, 'permission_id' => 2],
            ['role_id' => 3, 'permission_id' => 3],
            ['role_id' => 3, 'permission_id' => 4],
            ['role_id' => 3, 'permission_id' => 5],
            ['role_id' => 3, 'permission_id' => 9],
            ['role_id' => 3, 'permission_id' => 10],
            ['role_id' => 3, 'permission_id' => 11],
            ['role_id' => 3, 'permission_id' => 12],
        ]);
    }

    public function addPermissionsForDefaultUser(){
        DB::table('role_permission')->insert([
            ['role_id' => 4, 'permission_id' => 1],
            ['role_id' => 4, 'permission_id' => 2],
            ['role_id' => 4, 'permission_id' => 3],
            ['role_id' => 4, 'permission_id' => 4],
            ['role_id' => 4, 'permission_id' => 5],
            ['role_id' => 4, 'permission_id' => 9],
            ['role_id' => 4, 'permission_id' => 10],
            ['role_id' => 4, 'permission_id' => 11],
        ]);
    }
}
