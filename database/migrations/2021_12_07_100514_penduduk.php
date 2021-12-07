<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('jk');
            $table->string('alamat');
            $table->string('agama');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('hp');
            $table->string('kewarganegaraan');
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
        Schema::dropIfExists('penduduk');
    }
}
