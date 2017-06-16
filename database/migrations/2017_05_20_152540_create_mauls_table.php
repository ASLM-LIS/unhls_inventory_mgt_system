<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mauls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Serial_number');
            $table->string('prepared_by');
            $table->string('job_title');
            //$table->string('name');
            //$table->string('job_title');
            $table->date('prep_date');

            $table->string('description');
            $table->integer('unit_cost');
            $table->integer('quantity');
            $table->integer('estimated_unit_cost');
            $table->string('funder');
            $table->integer('cost_code');
            $table->string('dept');
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
        Schema::drop('mauls');
    }
}
