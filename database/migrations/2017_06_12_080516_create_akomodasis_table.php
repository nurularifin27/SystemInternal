<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkomodasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akomodasis', function (Blueprint $table) {
            $table->increments('id_akomodasi');
            $table->integer('id_karyawan');
            $table->text('keterangan');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('akomodasis');
    }
}
