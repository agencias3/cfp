<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateServiceContactsTable.
 */
class CreateServiceContactsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_contacts', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('subject')->nullable();
            $table->text('message');
            $table->enum('view', ['y', 'n'])->nullable('n');
            $table->string('session_id')->nullable();
            $table->string('ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('service_contacts');
	}
}
