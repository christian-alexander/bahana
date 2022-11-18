<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditTankisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_tankis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('office_id');
            $table->bigInteger('no_form');
            $table->date('tanggal');
            $table->string('posisi');
            $table->string('start_at');
            $table->string('stop_at');
            $table->text('catatan');
            $table->text('foto');
            $table->text('temuan');
            $table->text('ttd');
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
        Schema::dropIfExists('audit_tankis');
    }
}
