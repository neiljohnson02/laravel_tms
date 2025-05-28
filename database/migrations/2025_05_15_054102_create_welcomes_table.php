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
        Schema::create('welcomes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cityofresitense');
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->string('tourtype');
            $table->string('whatsapp');
            $table->string('traveldestination');
            $table->string('dateoftravel');
            $table->string('numberoftravelers');
            $table->string('vocationtype');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('welcomes');
    }
};
