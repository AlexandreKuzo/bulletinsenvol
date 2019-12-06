<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamedossierSciencesgestions extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('sciencesgestions', function (Blueprint $table) {
				$table->string('name')->default('untel');
				$table->string('dossier')->default('ancienbulletin');

			});}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		$table->dropColumn('name');
		$table->dropColumn('dossier');}
}
