<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->string('order_numbered')->nullable();
            $table->string('ordercreated_date')->nullable();            
            $table->string('service_date')->nullable();
            $table->string('signedservi_date')->nullable();
            $table->string('invoice_date')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('receipt_date')->nullable();
            $table->string('dataupload_date')->nullable();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_dates');
    }
}
