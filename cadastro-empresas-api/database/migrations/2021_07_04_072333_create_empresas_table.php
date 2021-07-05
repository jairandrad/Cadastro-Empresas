<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('razao_social');
            $table->string('nome_fantasia')->nullable();
            $table->string('cep');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('telefone');
            $table->string('email');
            $table->string('complemento')->nullable();
            $table->string('cidade');
            $table->string('estado', 2);
            $table->string('segmento');
            $table->string('inscricao_municipal');
            $table->string('inscricao_estadual')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
       /*  Schema::create('empresa_segmento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained();
            $table->foreignId('segmento_id')->constrained();
            $table->timestamps();

        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
        Schema::dropIfExists('empresa_segmento');
    }
}
