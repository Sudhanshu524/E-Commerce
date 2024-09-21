<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('member_id');
            $table->integer('admin_id');
            $table->integer('product_id');
            $table->string('delivery_address');
            $table->string('customer_name');
            $table->string('payment_method')->default('COD');
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
        Schema::dropIfExists('member_orders');
    }
};
