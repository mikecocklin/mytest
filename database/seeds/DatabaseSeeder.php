<?php

use Illuminate\Database\Eloquent\Model;
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
    Eloquent::unguard();

        //call uses table seeder class
		$this->call('CarsTableSeeder');
	    $this->call('TasksTableSeeder');
	    $this->call('UsersTableSeeder');

       }
}
	class CarsTableSeeder extends Seeder {
	 
		   public function run()
		   {

			 //delete users table records
			 DB::table('cars')->delete();
			 //insert some dummy records
			 DB::table('cars')->insert(array(
				 array('make'=>'Ford','model'=>'Mondeo','produced_on'=>'2015-05-05','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")),
				 array('make'=>'Toyota','model'=>'Carolla','produced_on'=>'2015-05-05','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")),
				 array('make'=>'BMW','model'=>'i540','produced_on'=>'2015-05-05','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")),

			  ));
		   }	   
	   
}

	class TasksTableSeeder extends Seeder {
	 
		   public function run()
		   {

			 //delete users table records
			 DB::table('tasks')->delete();
			 //insert some dummy records
			 DB::table('tasks')->insert(array(
				 array('name'=>'Task One','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")),
				 array('name'=>'Task Two','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")),
				 array('name'=>'Task Three','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")),

			  ));
		   }	   
	   
}


	class UsersTableSeeder extends Seeder {
	 
		   public function run()
		   {

			 //delete users table records
			 DB::table('users')->delete();
			 //insert some dummy records
			 DB::table('users')->insert(array(
				 array('name' => 'Mike Cocklin', 'email' => 'foo@bar', 'password' => 'secret', 'remember_token' => 'true', 'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")),
				 array('name' => 'Pete Smith', 'email' => 'foo@bar2', 'password' => 'secret', 'remember_token' => 'true', 'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")),
				 array('name' => 'Fred Bloggs', 'email' => 'foo@bar3', 'password' => 'secret', 'remember_token' => 'true', 'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"))

			  ));
		   }	   
	   
}