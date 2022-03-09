<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER aktFogyasztasCalc before INSERT ON `meres` FOR EACH ROW
                BEGIN
                    DECLARE regiOsszFogyasztas FLOAT;
                    IF regiOsszFogyasztas IS NOT NULL THEN
                        set new.aktFogyasztas = (new.osszFogyasztas - regiOsszFogyasztas);
                     end if; 
                END');  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `aktFogyasztasCalc`');
    }
};
