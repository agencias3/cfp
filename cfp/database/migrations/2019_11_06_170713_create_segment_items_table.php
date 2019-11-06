<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateSegmentItemsTable.
 */
class CreateSegmentItemsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('segment_items', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('segment_id')->unsigned();
            $table->foreign('segment_id')->references('id')->on('segments');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('order')->nullable();
            $table->enum('active', ['y', 'n'])->default('n');
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
		Schema::drop('segment_items');
	}
}
