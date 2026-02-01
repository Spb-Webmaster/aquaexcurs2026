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
            $table->float('amount')->nullable();
            $table->enum('status_yoo_kassa', ['CREATED', 'FAILED', 'CONFIRMED'])->default('CREATED');
            $table->string('id_yoo_kassa')->nullable();
            $table->integer('quantity')->default(0);
            $table->longText('notification_yoo_kassa')->nullable();

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
