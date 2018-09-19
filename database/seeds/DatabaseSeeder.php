<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
	$this->call(PermissionsTableSeeder::class);         
	$this->call(ConfigTableSeeder::class);
	$this->call(RolesTableSeeder::class);        
	$this->call(TemplatesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
    }
}
