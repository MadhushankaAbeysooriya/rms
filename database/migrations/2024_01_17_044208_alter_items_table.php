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
        Schema::table('items', function (Blueprint $table) {

            $table->dropForeign(['ration_category_id']);
            $table->dropColumn('ration_category_id');

            $table->unsignedBigInteger('ration_sub_category_id')->nullable();
            $table->foreign('ration_sub_category_id')->references('id')->on('ration_sub_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->unsignedBigInteger('ration_category_id')->nullable();
            $table->foreign('ration_category_id')->references('id')->on('ration_categories')->onDelete('cascade');

            $table->dropForeign(['ration_sub_category_id']);
            $table->dropColumn('ration_sub_category_id');
        });
    }
};
