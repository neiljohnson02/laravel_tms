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
        Schema::create('honeymoon_internationls', function (Blueprint $table) {
            $table->id();
            $table->date('departure');
            $table->string('email');
            $table->unsignedInteger('adult')->default(0);
            $table->unsignedInteger('children')->default(0);
            $table->unsignedInteger('infant')->default(0);
            $table->string('package'); 
            $table->json('addons')->nullable(); 
            $table->text('requests')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('honeymoon_internationls');
    }
};
