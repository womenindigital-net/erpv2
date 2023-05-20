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
        Schema::create('budget_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('date')->nullable();
            $table->string('name')->nullable();
            $table->string('end_date')->nullable();
            $table->string('note')->nullable();
            $table->string('is_active')->nullable();

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
        Schema::dropIfExists('budget_reviews');
    }
};
