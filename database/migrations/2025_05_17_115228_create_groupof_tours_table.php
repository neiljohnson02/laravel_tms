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
        Schema::create('groupof_tours', function (Blueprint $table) {
            $table->id();
            $table->date('departure');
            $table->string('email');
            $table->unsignedInteger('adult')->default(0);
            $table->unsignedInteger('children')->default(0);
            $table->unsignedInteger('infant')->default(0);
            $table->string('package'); // e.g. Dubai, France, etc.
            $table->json('addons')->nullable(); // multiple add-ons stored as JSON
            $table->text('requests')->nullable(); // special requests
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupof_tours');
    }
};
