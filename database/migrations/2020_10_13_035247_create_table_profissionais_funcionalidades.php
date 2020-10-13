<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfissionaisFuncionalidades extends Migration
{
    public function up()
    {
        Schema::create('profissionais_funcionalidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profissional_id')->unsigned();
            $table->foreign('profissional_id')->references('id')->on('profissionais')->onUpdate('cascade')->onDelete('cascade');                        
            $table->integer('funcionalidade_id')->unsigned();
            $table->foreign('funcionalidade_id')->references('id')->on('funcionalidades')->onUpdate('cascade')->onDelete('cascade');                                    
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profissionais_funcionalidades');
    }
}
