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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description'); // Changed to text for longer content
            $table->string('address');
            $table->string('number'); // Consider phone number validation
            $table->json('image')->nullable(); // Consider separate images table
            $table->decimal('price', 10, 2); // Changed to decimal for currency
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->float('area'); // Changed to float for numeric area
            $table->string('type');
            $table->string('status');
            $table->string('youtube_link')->nullable();
            $table->decimal('latitude', 9, 7)->nullable(); // Precise type
            $table->decimal('longitude', 9, 7)->nullable(); // Precise type
            $table->string('slug')->unique();
            $table->foreignId('agent_id')->constrained();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
