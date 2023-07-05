<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karyawan_id');
            $table->date('tanggal');
            $table->boolean('hadir');
            $table->timestamps();

            $table->foreign('karyawan_id')->references('id')->on('karyawan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}