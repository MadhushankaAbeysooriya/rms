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
        Schema::table('receipt_from_locations', function (Blueprint $table) {
            $table->dropForeign(['receipt_type_id']);
            $table->dropColumn('receipt_type_id');

            $table->dropForeign(['item_id']);
            $table->dropColumn('item_id');

            $table->dropColumn('qty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('receipt_from_locations', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

            $table->unsignedBigInteger('receipt_type_id')->nullable();
            $table->foreign('receipt_type_id')->references('id')->on('receipt_types')->onDelete('cascade');

            $table->double('qty', 12, 2);
        });
    }
};
