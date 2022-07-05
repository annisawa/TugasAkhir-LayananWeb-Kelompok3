<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangTuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orang_tuas', function (Blueprint $table) {
            $table->id();
            $table->string('nik_ayah');
            $table->string('nama_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nohp_ayah');
            $table->string('nik_ibu');
            $table->string('nama_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('nohp_ibu');
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
        Schema::dropIfExists('orang_tuas');
    }
}
