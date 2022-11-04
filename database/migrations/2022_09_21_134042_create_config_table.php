<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->json('diasaberto');
            $table->time('horaabre');
            $table->time('horafecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dropColumn('diasaberto');
            $table->dropColumn('horaabre');
            $table->dropColumn('horafecha');
        });
    }
}
