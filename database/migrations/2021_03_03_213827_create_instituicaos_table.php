<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');

            $table->foreignId('pais_id')->constrained('pais')->onDelete('cascade');

            $table->foreignId('provincia_id')->nullable()->constrained('provincias')->onDelete('cascade');

            $table->foreignId('municipio_id')->nullable()->constrained('municipios')->onDelete('cascade');
            
            $table->string('nome_instituicao', 50);
            $table->string('sigla', 20);
            $table->string('telefone', 30);
            $table->text('objectivo', 250);
            $table->string('nif', 20);
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
        Schema::dropIfExists('instituicaos');
    }
}
