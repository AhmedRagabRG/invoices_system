<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration {

	public function up()
	{
		Schema::create('academics', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->nullable();
			$table->text('notes');
			$table->integer('academic_years');
			$table->string('requirements');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('academics');
	}
}
