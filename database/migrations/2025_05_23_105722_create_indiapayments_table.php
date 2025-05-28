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
        Schema::create('indiapayments', function (Blueprint $table) {
            $table->id();
            $table->string('travel_group');
            $table->string('first_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->decimal('amount', 10, 2);
            $table->string('description');
            $table->string('card_first_name');
            $table->string('card_last_name');
            $table->date('date');
            $table->string('signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indiapayments');
    }
};
