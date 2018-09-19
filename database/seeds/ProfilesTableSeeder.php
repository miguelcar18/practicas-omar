<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profiles')->delete();
        
        \DB::table('profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'first_name' => 'Admin',
                'last_name' => 'User',
                'avatar' => '59513ed7d67c3.jpeg',
                'date_of_birth' => '2017-06-26',
                'work_phone' => '',
                'work_phone_extension' => '',
                'mobile' => '',
                'home' => '',
                'address_line_1' => NULL,
                'address_line_2' => NULL,
                'city' => '',
                'state' => '',
                'zipcode' => '',
                'country_id' => '',
                'facebook' => NULL,
                'twitter' => NULL,
                'google_plus' => NULL,
                'created_at' => '2017-06-11 02:25:22',
                'updated_at' => '2017-06-26 22:35:27',
            ),
        ));
        
        
    }
}