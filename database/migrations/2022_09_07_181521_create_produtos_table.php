<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomeprod');
            $table->float('precoprod');
            $table->integer('qtd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->dropColumn('nomeprod');
            $table->dropColumn('precoprod');
            $table->dropColumn('qtd');
        });
    }
}
