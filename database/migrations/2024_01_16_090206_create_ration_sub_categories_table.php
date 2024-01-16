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
        Schema::create('ration_sub_categories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ration_category_id')->nullable();
            $table->foreign('ration_category_id')->references('id')->on('ration_categories')->onDelete('cascade');

            $table->string('name');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ration_sub_categories');
    }
};
