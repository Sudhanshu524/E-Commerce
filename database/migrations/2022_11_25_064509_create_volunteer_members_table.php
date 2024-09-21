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
        Schema::create('volunteer_members', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('member_id');
            $table->integer('partner_id');
            $table->string('member_name');
            $table->string('member_address');
            $table->string('meal_name');
            $table->string('meal_type');
            $table->string('partner_organizations');
            $table->string('partner_address');
            $table->string('volunteer_name');
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
        Schema::dropIfExists('volunteer_members');
    }
};
