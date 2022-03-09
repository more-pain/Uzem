<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBerendezesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('berendezes', function (Blueprint $table) {
            $table->foreign(['uzem_ID'], 'Berendezes_fk0')->references(['ID'])->on('uzem')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('berendezes', function (Blueprint $table) {
            $table->dropForeign('Berendezes_fk0');
        });
    }
}
