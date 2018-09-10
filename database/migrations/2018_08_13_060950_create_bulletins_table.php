<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('bulletins', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('francais');
				$table->integer('histoiregeo');
				$table->integer('maths');
				$table->integer('phychi');
				$table->integer('LV1');
				$table->integer('SVT');
				$table->integer('brevet');
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
		Schema::dropIfExists('bulletins');
	}
}
