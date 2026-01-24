<?php

use App\Models\Excursion;
use App\Models\FleetShip;
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
        Schema::create('excursion_fleet_ship', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Excursion::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignIdFor(FleetShip::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excursion_fleet_ship');
    }
};
