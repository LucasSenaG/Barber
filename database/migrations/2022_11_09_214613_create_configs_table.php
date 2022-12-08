<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->time('horaabre')->nullable();
            $table->time('horafecha')->nullable();
            // $table->json('diasaberto')->nullable();
            $table->binary('Domingo')->nullable();
            $table->binary('Segunda')->nullable();
            $table->binary('Terca')->nullable();
            $table->binary('Quarta')->nullable();
            $table->binary('Quinta')->nullable();
            $table->binary('Sexta')->nullable();
            $table->binary('Sabado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dropColumn('diasaberto');
            $table->dropColumn('horaabre');
            $table->dropColumn('horafecha');
        });
    }
}
