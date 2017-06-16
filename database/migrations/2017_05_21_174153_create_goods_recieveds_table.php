<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsRecievedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_recieveds', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date_of_receipt');
            $table->string('supplier');
            $table->integer('serial_number');
            $table->integer('delivery_note_number');
            $table->integer('invoice_number');
            $table->string('delivered_at');
            $table->string('vehicle_number');
            $table->string('base_number');
            $table->string('item_name');
            $table->string('batch_number');
            $table->date('expiry');
            $table->integer('quantity');
            $table->integer('rate');
            $table->integer('cost');
            $table->string('produced_by');
            $table->string('verified_by');
            $table->string('received_by');
            $table->text('Signature');
            $table->string('Designation');
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
        Schema::drop('goods_recieveds');
    }
}
