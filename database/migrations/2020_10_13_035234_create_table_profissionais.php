<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfissionais extends Migration
{
    public function up()
    {
        Schema::create('profissionais', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('matricula');
            $table->string('cpf');
            $table->string('ds_nome',150)->comment('Nome do profissional');    
            $table->integer('setor_id')->unsigned();
            $table->foreign('setor_id')->references('id')->on('setores');                             
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('profissionais');
    }
}
