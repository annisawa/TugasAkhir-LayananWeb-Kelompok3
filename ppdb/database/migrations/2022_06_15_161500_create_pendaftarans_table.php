<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa')->constrained('siswas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_ortu')->constrained('orang_tuas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_nilai')->constrained('nilais')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_sekolah')->constrained('sekolahs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_jurusan')->constrained('jurusans')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pendaftarans');
    }
}
