<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomiquesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('economiques', function (Blueprint $table) {
				$table->increments('id');

				$table->string('Trimestre');
				$table->string('classe_niveau');
				$table->integer('histoiregeo');
				$table->integer('maths');
				$table->integer('LV1');
				$table->integer('SES');
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
		Schema::dropIfExists('economiques');
	}
}
