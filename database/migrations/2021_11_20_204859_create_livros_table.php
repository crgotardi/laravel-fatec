<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->integer('ano')->length(4);
            $table->integer('edicao')->length(3);
            $table->string('descricao', 500)->nullable();
            $table->integer('quantidade')->length(5)->nullable();
            $table->timestamps();
        });

        schema::table('livros', function(Blueprint $table) {
            $table->bigInteger('editora_id')->unsigned();
            $table->bigInteger('genero_id')->unsigned();
            $table->foreign('editora_id')->references('id')->on('editoras');
            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livros', function(Blueprint $table) {
            $table->dropForeign(['editora_id']);
            $table->dropColumn(['editora_id']);
            $table->dropForeign(['genero_id']);
            $table->dropColumn(['genero_id']);
        });
    }
}
