<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfissionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissional', function (Blueprint $table) {
             $table->id('profissional_id');
            $table->string('nome', 150);
            $table->unsignedBigInteger('funcao_id');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();

            $table->foreign('funcao_id')->references('funcao_id')->on('funcao')->onDelete('cascade');
            $table->foreign('categoria_id')->references('categoria_id')->on('categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profissional');
    }
}
