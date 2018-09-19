<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'manage-configuration',
                'description' => NULL,
                'category' => 'configuration',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'manage-language',
                'description' => NULL,
                'category' => 'language',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'change-language',
                'description' => NULL,
                'category' => 'language',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'manage-backup',
                'description' => NULL,
                'category' => 'backup',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'manage-template',
                'description' => NULL,
                'category' => 'template',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'manage-ip-filter',
                'description' => NULL,
                'category' => 'ip-filter',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'manage-custom-field',
                'description' => NULL,
                'category' => 'custom-field',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'manage-permission',
                'description' => NULL,
                'category' => 'permission',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'manage-todo',
                'description' => NULL,
                'category' => 'to_do',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'manage-role',
                'description' => NULL,
                'category' => 'role',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'manage-user',
                'description' => NULL,
                'category' => 'user',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'create-user',
                'description' => NULL,
                'category' => 'user',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'update-user',
                'description' => NULL,
                'category' => 'user',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'delete-user',
                'description' => NULL,
                'category' => 'user',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'reset-user-password',
                'description' => NULL,
                'category' => 'user',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'email-user',
                'description' => NULL,
                'category' => 'user',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'change-user-status',
                'description' => NULL,
                'category' => 'user',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'manage-email-log',
                'description' => NULL,
                'category' => 'template',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'manage-message',
                'description' => NULL,
                'category' => 'message',
                'is_default' => 1,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}