<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSetores extends Migration
{
    public function up()
    {
        Schema::create('setores', function (Blueprint $table) {
            $table->increments('id');                                     
            $table->string('ds_setor');   
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('setores');
    }
}
