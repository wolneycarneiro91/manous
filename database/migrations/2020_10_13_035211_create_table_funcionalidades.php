<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFuncionalidades extends Migration
{
    public function up()
    {
        Schema::create('funcionalidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_funcionalidade');
            $table->longText('ds_funcionalidade')->nullable();            
            $table->integer('modulo_id')->unsigned();
            $table->foreign('modulo_id')->references('id')->on('modulos')->onUpdate('cascade')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionalidades');
    }
}


