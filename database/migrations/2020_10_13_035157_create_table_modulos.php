<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableModulos extends Migration
{
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ds_modulo',100);
            $table->string('crud',1)->comment('C, R, U, D');            
            $table->integer('sistema_id')->unsigned();
            $table->foreign('sistema_id')->references('id')->on('sistemas')->onUpdate('cascade')->onDelete('cascade');                        
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('modulos');
    }
}
