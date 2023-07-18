<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); 
            $table->string('jk'); 
            $table->string('telepon'); 
            $table->string('alamat'); 
            $table->string('tempat_lahir'); 
            $table->string('tanggal_lahir'); 
            $table->string('posisi'); 
            $table->string('foto'); 


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
        Schema::dropIfExists('teams');
    }
}
