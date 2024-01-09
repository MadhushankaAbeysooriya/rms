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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('item_category_id')->nullable();
            $table->foreign('item_category_id')->references('id')->on('item_categories')->onDelete('cascade');

            $table->unsignedBigInteger('ration_category_id')->nullable();
            $table->foreign('ration_category_id')->references('id')->on('ration_categories')->onDelete('cascade');

            $table->unsignedBigInteger('measurement_id')->nullable();
            $table->foreign('measurement_id')->references('id')->on('measurements')->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
