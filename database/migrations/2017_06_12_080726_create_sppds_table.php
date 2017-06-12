<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSppdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sppds', function (Blueprint $table) {
            $table->increments('id_sppd');
            $table->integer('id_karyawan');
            $table->string('tujuan');
            $table->string('project');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('jumlah_hari');
            $table->double('rp_harian');
            $table->double('total');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sppds');
    }
}
