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
        Schema::table('excursions', function (Blueprint $table) {
            $table->text('teaser')->nullable();
            $table->integer('dont_register')->default(0);
            $table->string('dont_register_prefix_price')->nullable();
            $table->string('dont_register_price')->nullable();
            $table->string('dont_register_button')->nullable();
            $table->string('dont_register_form')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('excursions', function (Blueprint $table) {
            //
        });
    }
};
