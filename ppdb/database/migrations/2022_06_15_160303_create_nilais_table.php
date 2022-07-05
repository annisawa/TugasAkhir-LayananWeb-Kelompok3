<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('raport_smt1');
            $table->string('raport_smt2');
            $table->string('raport_smt3');
            $table->string('raport_smt4');
            $table->string('raport_smt5');
            $table->string('usbn');
            $table->string('un');
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
        Schema::dropIfExists('nilais');
    }
}
