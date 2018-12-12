<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bookers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('bookers', function (Blueprint $table) {
        $table->increments('bookerId');
        $table->string('bookerName');
        $table->string('bookerEmail');
        $table->string('bookerLocation');    
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
