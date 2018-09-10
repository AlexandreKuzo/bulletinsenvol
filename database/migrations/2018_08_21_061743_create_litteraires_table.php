<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLitterairesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('litteraires', function (Blueprint $table) {
				$table->increments('id');
				$table->string('Trimestre');
				$table->string('classe_niveau');
				$table->integer('francais');
				$table->integer('histoiregeo');
				$table->integer('LV1');
				$table->integer('philo')->nullable();
				$table->integer('spé')->nullable();
				$table->string('email');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('litteraires');
	}
}
