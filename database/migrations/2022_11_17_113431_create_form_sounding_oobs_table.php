<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSoundingOobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_sounding_oobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('no_sounding_oob')->nullable();
            $table->bigInteger('tinggi_cairan')->nullable();
            $table->bigInteger('volume')->nullable();
            $table->string('lampiran', 255)->nullable();
            $table->string('catatan', 255)->nullable();
            $table->string('temuan', 255)->nullable();
            $table->string('ttd_oob', 255)->nullable();
            $table->string('foto_sounding_oob', 255)->nullable();
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
        Schema::dropIfExists('form_sounding_oobs');
    }
}
