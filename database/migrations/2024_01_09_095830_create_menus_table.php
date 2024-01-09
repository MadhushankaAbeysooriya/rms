<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->softDeletes();

            $table->unsignedBigInteger('ration_date_id')->nullable();
            $table->foreign('ration_date_id')->references('id')->on('ration_dates')->onDelete('cascade');

            $table->unsignedBigInteger('ration_type_id')->nullable();
            $table->foreign('ration_type_id')->references('id')->on('ration_types')->onDelete('cascade');

            $table->unsignedBigInteger('ration_time_id')->nullable();
            $table->foreign('ration_time_id')->references('id')->on('ration_times')->onDelete('cascade');

            $table->integer('year');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
