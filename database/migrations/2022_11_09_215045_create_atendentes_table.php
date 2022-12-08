<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtendentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nmatendente')->nullable();
            $table->integer('qtdatendimentos')->nullable();
            $table->float('vlrarrecadado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('atendentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dropColumn('nmatendente');
            $table->dropColumn('qtdatendimento');
            $table->dropColumn('vlrarrecadado');
        });
    }
}
