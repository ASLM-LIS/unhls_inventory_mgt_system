<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetMgtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_mgts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Asset_Name');
            $table->string('Asset_Type');
            $table->string('Asset_Category');
            $table->string('Serial_number');
            $table->string('manufacturer');
            $table->string('location');
            $table->string('department');
            $table->string('supplier');
            $table->integer('cost');
            $table->string('funder');
            $table->date('date_of_delivery');
            $table->date('installation_date');
            $table->string('warranty_details');
            $table->string('useful_life');
            $table->date('disposal_date');
            $table->string('method_of_disposal');
            $table->string('status');
            $table->string('repair_details');
            $table->string('service_details');
            $table->string('comments');
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
        Schema::drop('asset_mgts');
    }
}
