<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrpemailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grpemails', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('cityofresitense'); 
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->string('whatsapp');  // Corrected this line
            $table->string('traveldestination'); 
            $table->string('dateoftravel'); 
            $table->string('numberoftravelers'); 
            $table->string('vocationtype');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grpemails');
    }
}
