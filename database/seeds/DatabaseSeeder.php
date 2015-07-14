<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	public function run()
	{
		Model::unguard();

		$this->call('RoleSeeder');

        $admin = new \App\Models\User();
        $roleAdmin = \App\Models\Role::where('key','=','admin')->first();

        $admin->email = "admin@admin.com";
        $admin->password = \Hash::make("1234");
        $admin->save();
        $admin->roles()->save($roleAdmin);


    }

}
