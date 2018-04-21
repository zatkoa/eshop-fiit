<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->text('name');
            $table->text('surname');
            $table->text('email');
            $table->text('tel_num');
            $table->text('city_dell');
            $table->text('zip_dell');
            $table->text('street_dell');
            $table->text('street_num_dell');
            $table->text('state_dell');

            $table->text('city_billing');
            $table->text('zip_billing');
            $table->text('street_billing');
            $table->text('street_num_billing');
            $table->text('state_billing');
            $table->integer('user_id')->unsigned();
            $table->integer('delivery_id')->unsigned();
            $table->integer('payment_id')->unsigned();

//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('delivery_id')->references('id')->on('deliveries');
//
//            $table->foreign('payment_id')->references('id')->on('payments');


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
