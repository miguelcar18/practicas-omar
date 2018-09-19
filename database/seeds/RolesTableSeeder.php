<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'is_hidden' => 1,
                'default_user_role' => 0,
                'description' => NULL,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}