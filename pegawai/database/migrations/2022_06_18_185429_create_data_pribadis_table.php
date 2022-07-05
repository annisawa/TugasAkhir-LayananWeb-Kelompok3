<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPribadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pribadis', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nik');
            $table->string('nama');
            $table->enum('jk', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('status', ['Menikah', 'Belum Menikah']);
            $table->string('no_hp');
            $table->string('email');
            $table->string('alamat');
            $table->string('pendidikan_terakhir');
            $table->string('tempat_pendidikan');
            $table->string('tahun_masuk');
            $table->string('tahun_lulus');
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
        Schema::dropIfExists('data_pribadis');
    }
}
