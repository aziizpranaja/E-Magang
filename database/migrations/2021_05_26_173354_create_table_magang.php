<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMagang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nama_perusahaan');
            $table->string('lokasi_magang');
            $table->integer('status')->default('1')->unsigned()->nullable;
            $table->foreign('status')->references('id')->on('m_status')->onDelete('restrict');
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
        Schema::table('magang', function (Blueprint $table) {
            //
        });
    }
}