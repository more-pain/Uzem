<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSzenzorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('szenzor', function (Blueprint $table) {
            $table->foreign(['berendezes_ID'], 'Szenzor_fk0')->references(['ID'])->on('berendezes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('szenzor', function (Blueprint $table) {
            $table->dropForeign('Szenzor_fk0');
        });
    }
}
