<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLyceensTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('lyceens', function (Blueprint $table) {
				$table->increments('id');
				$table->string('Trimestre');
				$table->string('classe_niveau');
				$table->string('français');
				$table->string('histoiregeo');
				$table->string('LV1');
				$table->string('LV2');
				$table->string('EPS');
				$table->string('sciences')->nullable();
				$table->string('email');
				$table->string('dossier');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('lyceens');
	}
}
