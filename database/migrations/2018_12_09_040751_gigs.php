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
            $table->increments('id');
            $table->string('gigDate')->nullable();
            $table->string('gigTime')->nullable();
            $table->string('gigName')->nullable();
            $table->string('gigVenue')->nullable();
            $table->string('gigColor')->nullable();
            $table->string('gigGenre')->nullable();
            $table->string('gigAct1')->nullable();
            $table->string('gigAct2')->nullable();
            $table->string('gigAct3')->nullable();
            $table->string('gigAct4')->nullable();
            $table->string('gigAct5')->nullable();
            $table->string('gigAct6')->nullable();
            $table->string('gigAct7')->nullable();
            $table->string('gigAct8')->nullable();
            $table->string('gigFace')->nullable();
            $table->string('gigTick')->nullable();
            $table->string('gigUser')->nullable();
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
