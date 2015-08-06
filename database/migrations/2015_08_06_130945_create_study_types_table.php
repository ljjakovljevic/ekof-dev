<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('study_level_id')->unsigned();

            $table->foreign('study_level_id')
                  ->references('id')->on('study_levels')
                  ->onDelete('cascade');

            $table->string('slug')->unique();
            $table->string('title', 100);
            $table->text('desc');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('study_types');
    }
}
