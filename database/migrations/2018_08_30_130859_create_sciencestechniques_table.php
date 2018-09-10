<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSciencestechniquesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('sciencestechniques', function (Blueprint $table) {
				$table->increments('id');
				$table->string('Trimestre');
				$table->string('classe_niveau');
				$table->integer('francais');
				$table->integer('maths');
				$table->integer('LV1');
				$table->integer('phychi');
				$table->integer('technologie');
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
		Schema::dropIfExists('sciencestechniques');
	}
}
