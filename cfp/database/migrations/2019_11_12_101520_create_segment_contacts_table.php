<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateSegmentContactsTable.
 */
class CreateSegmentContactsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('segment_contacts', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('segment_id')->unsigned();
            $table->foreign('segment_id')->references('id')->on('segments');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
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
		Schema::drop('segment_contacts');
	}
}
