<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaHasCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_has_cargo', function (Blueprint $table) {
            $table->integer('pessoa_id')->unsigned();
            $table->integer('cargo_id')->unsigned();
            $table->timestamp('datainicio')->nullable();
            $table->timestamp('datafim')->nullable();
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('cargo_id')->references('id')->on('cargos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_has_cargo');
    }
}
