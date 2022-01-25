<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_events', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('event_id');
            $table->integer('user_id');
            $table->string('event_name');
            $table->integer('qty');
            $table->double('price');
            $table->string('pay_status')->default("Pending");
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
        Schema::dropIfExists('orders_event');
    }
}
