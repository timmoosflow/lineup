<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigs', function (Blueprint $table) {
            $table->increments('gigId');
            $table->string('gigDate');
            $table->string('gigTime');
            $table->string('gigName');
            $table->string('gigVenue');   
            $table->string('gigColor');
            $table->string('gigGenre');
            $table->string('gigAct1');   
            $table->string('gigAct2');   
            $table->string('gigAct3');
            $table->string('gigAct4');
            $table->string('gigAct5');   
            $table->string('gigAct6');   
            $table->string('gigAct7');
            $table->string('gigAct8');
            $table->string('gigFace');   
            $table->string('gigTick');   
            $table->string('gigUser');
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
