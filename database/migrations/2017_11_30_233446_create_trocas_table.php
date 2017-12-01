<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrocasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trocas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tasks_id');
            $table->integer('users_id');
            $table->integer('users_recebeu');
            $table->integer('tasks_id_my');
            $table->string('descricao');
            $table->string('valor');
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
        Schema::dropIfExists('trocas');
    }
}
