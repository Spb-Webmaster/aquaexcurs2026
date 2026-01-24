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
        Schema::create('excursion_next_ticket_numbers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('next_value')->default(100); // Начинаем с 100
            $table->timestamps();
        });
        // Добавляем первую запись
        DB::table('excursion_next_ticket_numbers')->insert([
            'next_value' => 100
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excursion_next_ticket_numbers');
    }
};
