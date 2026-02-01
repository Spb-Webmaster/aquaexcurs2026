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
        Schema::table('excursion_orders', function (Blueprint $table) {
            $table->enum('status_yoo_kassa', ['pending', 'waiting_for_capture', 'succeeded', 'canceled'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('excursion_orders', function (Blueprint $table) {
            //
        });
    }
};
