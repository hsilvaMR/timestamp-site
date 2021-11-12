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
            $table->string('email', 50);
            $table->string('senha', 12);
            $table->string('acesso', 2);
            $table->string('tipo', 20);
            $table->string('token', 255);
        });

        // catch (Exception $e) {
        //     throw new QueryException(
        //      $query, $this->prepareBindings($bindings), $e
        //     );
        // }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilizadors');
    }
}