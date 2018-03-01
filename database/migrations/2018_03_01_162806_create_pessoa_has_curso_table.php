<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaHasCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_has_curso', function (Blueprint $table) {
            $table->integer('pessoa_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->timestamp('datainicio')->nullable();
            $table->timestamp('datafim')->nullable();
            $table->foreign('pessoa_id')->references('id')->on('pessoa');
            $table->foreign('curso_id')->references('id')->on('curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_has_curso');
    }
}
