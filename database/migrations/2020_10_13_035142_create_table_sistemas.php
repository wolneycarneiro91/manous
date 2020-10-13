<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSistemass extends Migration
{

    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ds_sistema',150)->comment('Descrição do sistema');            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sistemas');
    }
}
