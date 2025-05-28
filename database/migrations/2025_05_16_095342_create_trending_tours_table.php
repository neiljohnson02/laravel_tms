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
        Schema::create('trending_tours', function (Blueprint $table) {
            $table->id();
              $table->date('departure');
                $table->string('tourtype');
                $table->integer('adult');
                $table->integer('infant')->nullable();
                $table->integer('children')->nullable();
                $table->string('name');
                $table->string('email')->unique(); // email is unique
                $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trending_tours');
    }
};
