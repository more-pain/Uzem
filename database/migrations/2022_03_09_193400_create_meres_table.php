<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meres', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->float('osszFogyasztas', 10, 0);
            $table->integer('aktFogyasztas');
            $table->dateTime('ido');
            $table->integer('szenzor_ID')->index('Meres_fk0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meres');
    }
}
