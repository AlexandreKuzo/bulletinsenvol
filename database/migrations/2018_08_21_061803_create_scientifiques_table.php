<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScientifiquesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('scientifiques', function (Blueprint $table) {
				$table->increments('id');
				$table->string('Trimestre');
				$table->string('classe_niveau');
				$table->integer('LV1');
				$table->integer('phychi');
				$table->integer('SVT');
				$table->integer('maths');
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
		Schema::dropIfExists('scientifiques');
	}
}
