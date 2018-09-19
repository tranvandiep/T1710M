<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('student', function (Blueprint $table) {
				$table->increments('id');
				$table->string('roll_no', 10);
				$table->string('fullname', 100);
				$table->integer('old');
				$table->string('email', 150);
				$table->string('address', 255);
				$table->string('gender', 10);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('student');
	}
}
