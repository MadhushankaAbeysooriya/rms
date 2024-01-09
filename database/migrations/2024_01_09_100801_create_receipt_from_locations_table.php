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
        Schema::create('receipt_from_locations', function (Blueprint $table) {
            $table->id();

            $table->integer('year');

            $table->unsignedBigInteger('demand_from_location_id')->nullable();
            $table->foreign('demand_from_location_id')->references('id')->on('demand_from_locations')->onDelete('cascade');

            $table->unsignedBigInteger('receipt_type_id')->nullable();
            $table->foreign('receipt_type_id')->references('id')->on('receipt_types')->onDelete('cascade');

            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');

            $table->double('qty', 12, 2);

            $table->dateTime('receipt_date');

            $table->tinyInteger('status')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipt_from_locations');
    }
};
