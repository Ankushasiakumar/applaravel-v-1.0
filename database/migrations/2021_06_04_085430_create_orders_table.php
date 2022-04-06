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
            $table->string('billing_first_name');
            $table->string('billing_last_name');
            $table->string('billing_email');
            $table->string('billing_street_address1');
            $table->string('billing_street_address2');
            $table->string('billing_city');
            $table->string('billing_country');
            $table->string('billing_postcode');
            $table->string('billing_phone');
            $table->string('shipping_first_name');
            $table->string('shipping_last_name');
            $table->string('shipping_email');
            $table->string('shipping_street_address1');
            $table->string('shipping_street_address2');
            $table->string('shipping_city');
            $table->string('shipping_country');
            $table->string('shipping_postcode');
            $table->string('shipping_phone');
            $table->longText('order_notes');
            $table->string('door_position');
            $table->string('door_color');
            $table->string('door_model');
            $table->string('window_position');
            $table->string('window_color');
            $table->string('window_model');
            $table->string('layout');
            $table->string('shortest_side');
            $table->string('longest_side');
            $table->string('total_price');
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
