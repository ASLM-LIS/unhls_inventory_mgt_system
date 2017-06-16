<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->date('Expiry_date');
            $table->date('Date_of_delivery');
            $table->string('Storage_Location');
            $table->string('BatchNumber')->unique();
            $table->string('LotNumber')->unique();
            $table->string('Description_of_Goods');
            $table->integer('Unit_Cost');
            $table->string('funding_source');
            $table->string('dept_code');
            $table->string('serial_number')->unique();
            $table->integer('stock_bal');
            $table->string('producer');
            $table->string('verifier');
            $table->string('receiver');
            $table->string('designation');
            $table->string('supplier');
            $table->string('delivery_note_number')->unique();
            $table->string('invoice_number')->unique();
            $table->string('storage_condition');
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
        Schema::drop('stocks');
    }
}
