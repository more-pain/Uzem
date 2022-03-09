<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSzenzorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szenzor', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('mertTulajdonsag');
            $table->string('mertekegyseg');
            $table->integer('berendezes_ID')->index('Szenzor_fk0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('szenzor');
    }
}
