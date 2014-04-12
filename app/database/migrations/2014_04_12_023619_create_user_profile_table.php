<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profile', function(Blueprint $table)
		{
			$table->increments('user_profile_id');
			$table->integer('user_id');
			$table->string('first_name',64);
			$table->string('middle_name',64);
			$table->string('last_name',64);
			$table->text('address');
			$table->date('birthday');
			$table->string('email_address');
			$table->string('contact_number',20);
			$table->string('emergency_contact_person',20);
			$table->string('emergency_contact_number',20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_profile');
	}

}
