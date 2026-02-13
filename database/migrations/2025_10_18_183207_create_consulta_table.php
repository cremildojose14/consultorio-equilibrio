<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
           $table->id('consulta_id');
            $table->unsignedBigInteger('profissional_id');
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('tipo_consulta_id');
            $table->dateTime('data_consulta');
            $table->text('descricao')->nullable();
            $table->timestamps();

            $table->foreign('profissional_id')->references('profissional_id')->on('profissional')->onDelete('cascade');
            $table->foreign('paciente_id')->references('paciente_id')->on('paciente')->onDelete('cascade');
            $table->foreign('tipo_consulta_id')->references('tipo_consulta_id')->on('tipo_consulta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta');
    }
}
