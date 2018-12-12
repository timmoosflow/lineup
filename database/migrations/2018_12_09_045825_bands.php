<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('bands', function (Blueprint $table) {
        $table->increments('bandId');
        $table->string('bandName');
        $table->string('bandStyle');
        $table->string('bandGenre');   
        $table->string('bandRegio');
        $table->integer('bandPhone');
        $table->string('bandMail');   
        $table->string('bandFace');   
        $table->string('bandSound');
        $table->string('bandCamp');
        $table->string('bandVid');   
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
        //
    }
}
