<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty;

class RoleSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	public function run()
	{
		Model::unguard();

        $adminType = new \App\Models\Role();
        $adminType->key="admin";
        $adminType->name="Administrator";
        $adminType->description="Administrator";
        $adminType->save();

        $facultyType = new \App\Models\Role();
        $facultyType->key = "contentManager";
        $facultyType->name = "Content Manager";
        $facultyType->description = "Content Manager";
        $facultyType->save();

        $universityType = new \App\Models\Role();
        $universityType->key = "expert";
        $universityType->name = "Expert Advisor";
        $universityType->description = "Expert Advisor";
        $universityType->save();


	}

}
