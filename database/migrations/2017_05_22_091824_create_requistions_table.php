<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequistionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requistions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voucher_no');
            $table->date('voucher_date');
            $table->string('unit');
            $table->string('incharge_name');
            $table->integer('folio_number');
            $table->string('description');
            $table->string('issue_unit');
            $table->integer('quantity_required');
            $table->integer('quantity_issued');
            $table->integer('unit_cost');
            $table->integer('total_issued');
            $table->integer('grand_total');
            $table->string('authorized_by');
            $table->string('received_by');
            $table->string('title');
            $table->string('Signature');
            $table->date('issue_date');
            $table->date('stock_card_date');
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
        Schema::drop('requistions');
    }
}
