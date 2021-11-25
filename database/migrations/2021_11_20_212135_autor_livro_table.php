<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AutorLivroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livro_autor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        schema::table('livro_autor', function(Blueprint $table) {
            $table->bigInteger('livro_id')->unsigned();
            $table->bigInteger('autor_id')->unsigned();
            $table->foreign('livro_id')->references('id')
                ->on('livros');
            $table->foreign('autor_id')->references('id')
                ->on('autors');
            $table->unique(['livro_id','autor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livro_autor');
    }
}
