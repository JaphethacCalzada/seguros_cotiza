<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submarcas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auto_id')->unsigned();
            $table->foreign('auto_id')->references('id')->on('autos');
            $table->string('id_ana')->nullable();
            $table->string('descripcion');
            $table->integer('id_gs')->nullable();
            $table->integer('id_seg_gs')->nullable();
            $table->year('anio');
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
        Schema::dropIfExists('submarcas');
    }
}
