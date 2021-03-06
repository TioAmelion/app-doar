<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('pais_id')->nullable()->constrained('pais')->onDelete('cascade');
            $table->foreignId('provincia_id')->nullable()->constrained('provincias')->onDelete('cascade');
            $table->foreignId('municipio_id')->nullable()->constrained('municipios')->onDelete('cascade');
            
            $table->string('nome_pessoa', 100);
            $table->enum('genero', ['masculino', 'feminino']); 
            $table->string('telefone');
            $table->date('data_nascimento');
            $table->string('num_bi', 30)->nullable();
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
        Schema::dropIfExists('pessoas');
    }
}
