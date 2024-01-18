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
        Schema::table('quarters', function (Blueprint $table) {
            $table->integer('year');
            $table->date('to_date')->nullable();
            $table->date('from_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quarters', function (Blueprint $table) {
            $table->dropColumn('year');
            $table->dropColumn('to_date');
            $table->dropColumn('from_date');
        });
    }
};
