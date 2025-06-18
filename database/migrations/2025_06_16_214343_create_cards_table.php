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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('country');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->string('image');
            $table->boolean('available')->default(true);
            $table->date('date_start');
            $table->date('date_end');
            $table->string('departure_location')->nullable();
            $table->string('departure_time')->nullable();
            $table->string('excursions')->nullable();
            $table->string('meal_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
