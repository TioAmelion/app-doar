<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->id();
            $table->string('area_actuacao');
            $table->timestamps();
        });

        Schema::create('fornecedors_produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fornecedor_id')->constrained('fornecedors')->onDelete('cascade');

            $table->foreignId('produto_id')->constrained('produtos')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('fornecedors_instituicao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fornecedor_id')->constrained('fornecedors')->onDelete('cascade');

            $table->foreignId('instituicao_id')->constrained('instituicaos')->onDelete('cascade');
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
        Schema::dropIfExists('fornecedors');
    }
}
