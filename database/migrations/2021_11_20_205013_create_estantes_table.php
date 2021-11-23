<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estantes', function (Blueprint $table) {
            $table->id();
            $table->date('data_retirada');
            $table->date('data_devolucao_prevista')->nullable();
            $table->date('data_devolucao')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        schema::table('estantes', function(Blueprint $table) {
            $table->BigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')
                ->on('usuarios');
            $table->BigInteger('livro_id')->unsigned();
            $table->foreign('livro_id')->references('id')
                ->on('livros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estantes', function(Blueprint $table) {
            $table->dropForeign(['usuario_id']);
            $table->dropForeign(['livro_id']);
        });
        Schema::dropIfExists('estantes');
    }
}
