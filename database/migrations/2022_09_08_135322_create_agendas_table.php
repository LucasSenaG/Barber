<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateagendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nmCliente')->nullable();
            $table->dateTime('datahora')->nullable();
            $table->json('servicos')->nullable();
            $table->string('atendente')->nullable();
        });
    }

    /**
     *
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('agendas', function (Blueprint $table) { 
            $table->dropColumn('nmCliente');
            $table->dropColumn('datahora');
            $table->dropColumn('servicos');
            $table->dropColumn('idatendente');
        });
    }
}
