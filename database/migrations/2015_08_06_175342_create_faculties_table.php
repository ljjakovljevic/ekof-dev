<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('founder', 100);
            $table->string('university', 100);
            $table->string('slug')->unique();
            $table->string('title', 100);
            $table->string('short_title', 50);
            $table->string('street', 100);
            $table->string('postal_code', 5);
            $table->string('city', 50);
            $table->string('phone', 20);
            $table->string('fax', 20);
            $table->string('email', 100);
            $table->string('website', 100);
            $table->string('registration_no', 20);
            $table->string('activity_code', 10);
            $table->string('activity_desc', 100);
            $table->string('identification_no', 20);
            $table->string('bank_account', 50);
            $table->string('bank', 100);
            $table->string('foreign_payments', 100);
            $table->string('pib', 20);
            $table->string('pdv', 20);
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
        Schema::drop('faculties');
    }
}
