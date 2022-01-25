<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilizadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // criar tabela e inserir e colunas 
    public function up()
    {
        Schema::create('utilizadors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 100);
            $table->string('apelido', 50);
            $table->string('email', 50);
            $table->string('senha', 255);
            $table->string('acesso', 1);
            $table->string('token', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    // nota para usar executar o metodo dowm 
    // php artisan migrate: rollback

    public function down()
    {
        Schema::dropIfExists('utilizadors');
    }
}
