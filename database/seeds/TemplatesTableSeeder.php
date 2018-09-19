<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('templates')->delete();
        
        \DB::table('templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_default' => 1,
                'name' => 'Welcome Email',
                'category' => 'welcome_email',
                'subject' => NULL,
                'body' => NULL,
                'created_at' => '2017-06-26 10:23:15',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}