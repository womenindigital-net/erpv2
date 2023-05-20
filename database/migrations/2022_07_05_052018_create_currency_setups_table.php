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
        Schema::create('currency_setups', function (Blueprint $table) {
            $table->id();
            $table->string('currency_name')->nullable();
            $table->string('symbol')->nullable();
            $table->string('lowest_unit_name')->nullable();
            $table->string('converse_amount')->nullable();
            $table->string('btnradio1')->nullable();
            $table->string('search')->nullable();
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
        Schema::dropIfExists('currency_setups');
    }
};
