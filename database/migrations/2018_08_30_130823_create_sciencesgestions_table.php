<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSciencesgestionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('sciencesgestions', function (Blueprint $table) {
				$table->increments('id');
				$table->string('Trimestre');
				$table->string('classe_niveau');
				$table->integer('francais');
				$table->integer('maths');
				$table->integer('LV1');
				$table->integer('ecodroit');
				$table->integer('management');
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
		Schema::dropIfExists('sciencesgestions');
	}
}
