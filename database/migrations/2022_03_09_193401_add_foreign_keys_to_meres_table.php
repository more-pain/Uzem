<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meres', function (Blueprint $table) {
            $table->foreign(['szenzor_ID'], 'Meres_fk0')->references(['ID'])->on('szenzor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meres', function (Blueprint $table) {
            $table->dropForeign('Meres_fk0');
        });
    }
}
