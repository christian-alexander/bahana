<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSoundingCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_sounding_cargos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_sounding_cargo', 150)->nullable();
            $table->date('tannggal')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('office_id')->nullable();
            $table->string('posisi', 255)->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('stop_at')->nullable();
            $table->string('kompartemen', 255)->nullable();
            $table->string('produk', 255)->nullable();
            $table->bigInteger('tinggi_cairan')->nullable();
            $table->bigInteger('volume')->nullable();
            $table->string('foto_sounding_cargo', 255)->nullable();
            $table->bigInteger('sounding_oob_id')->nullable();
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
        Schema::dropIfExists('form_sounding_cargos');
    }
}
