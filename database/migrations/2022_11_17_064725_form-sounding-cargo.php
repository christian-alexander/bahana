<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormSoundingCargo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sounding-cargo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_sounding_cargo', 150);
            $table->date('tannggal');
            $table->bigInteger('user_id');
            $table->bigInteger('office_id');
            $table->timestamps();
            $table->string('posisi', 255);
            $table->dateTime('start_at');
            $table->dateTime('stop_at');
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
