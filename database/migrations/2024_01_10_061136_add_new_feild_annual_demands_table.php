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
        Schema::table('annual_demands', function (Blueprint $table) {          

            $table->double('avl_qty', 12, 2);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('annual_demands', function (Blueprint $table) {

            $table->dropColumn('avl_qty');
            
        });
    }
};
