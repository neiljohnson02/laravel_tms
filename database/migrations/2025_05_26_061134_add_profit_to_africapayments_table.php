<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('africapayments', function (Blueprint $table) {
        $table->decimal('profit', 10, 2)->nullable(); // adjust 'cost' to the actual column if needed
    });
}

public function down()
{
    Schema::table('africapayments', function (Blueprint $table) {
        $table->dropColumn('profit');
    });
}


};
