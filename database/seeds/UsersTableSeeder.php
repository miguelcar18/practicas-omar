<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_hidden' => 1,
                'email' => 'secretadmin@gmail.com',
                'username' => 'ADMIN',
                'password' => '$2y$10$79dvYbZGQXXm/AOIybt/uuiL17TqLE3ICnr8pkkbXNxHfgF40b31O',
                'remember_token' => 'B2YLq8rtkT5oWtX1fc9H9ASirhBZ0ZAKA0qXReEP8b2tE4yKYXeFLndT5UaF',
                'activation_token' => NULL,
                'provider' => NULL,
                'provider_unique_id' => NULL,
                'status' => NULL,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => '2017-07-09 20:06:20',
                'last_login' => '2017-07-09 19:41:56',
                'last_login_ip' => '127.0.0.1',
                'last_login_now' => '2017-07-09 20:06:20',
                'last_login_ip_now' => '127.0.0.1',
            ),
        ));
        
        
    }
}