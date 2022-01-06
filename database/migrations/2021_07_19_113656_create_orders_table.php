<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('order_number')->nullable();
            $table->string('order_total');

            $table->string('date');
            $table->string('researcher');
            $table->string('investigator');
            $table->string('department');
            $table->string('institution');
            $table->string('billing');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('zipcode');
            $table->string('phone');
            $table->string('fax_number');
            $table->string('email');
            $table->string('alter_email');
            $table->string('form')->nullable();
            $table->string('image')->nullable();
            $table->string('service_speci')->nullable();
            $table->string('signed_service_speci')->nullable();
            $table->string('invoice')->nullable();
            $table->string('payment')->nullable();
            $table->string('receipt')->nullable();
            $table->string('data')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('orders');
    }
}
