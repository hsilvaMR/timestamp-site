<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogAcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_acessos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('utilizadors_id');
            $table->string('data', 50);
            $table->string('duracao', 50);
            $table->string('ip', 255);
            $table->string('browser', 255);
            $table->string('sistemaOperativo', 255);
            $table->string('local', 100);
            $table->foreign('utilizadors_id')->references('id')->on('utilizadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_acessos');
    }
}
