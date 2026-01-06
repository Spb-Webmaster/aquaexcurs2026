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
        Schema::create('excursions', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('subtitle')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('desc')->nullable();
            $table->text('desc2')->nullable();
            $table->string('img')->nullable();
            $table->text('gallery')->nullable();
            $table->text('yandex_map')->nullable();
            $table->text('route')->nullable();
            $table->integer('price')->nullable();
            $table->text('price_desc')->nullable();
            $table->integer('price_pier')->nullable();
            $table->integer('price_advantage')->nullable();
            $table->text('price_advantage_desc')->nullable();
            $table->integer('price_child')->nullable();
            $table->text('price_child_desc')->nullable();
            $table->integer('place')->nullable();
            $table->text('list_points')->nullable();
            $table->string('metatitle')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('params')->nullable();
            $table->string('published')->default(1);
            $table->integer('sorting')->default(999);
            $table->integer('price_hide')->default(1);
            $table->string('time_route')->default(1);
            $table->text('pier')->nullable();
            $table->text('privilege')->nullable();
            $table->text('departure_time')->nullable();
            $table->integer('price_hide')->change()->default(0);
            $table->string('time_route')->change()->nullable();
            $table->integer('count_ticket')->default(100);
            $table->integer('price_hide')->change()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excursions');
    }
};
