<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
        $table->id();
            $table->string("azienda", 100);
            $table->string("stazione_partenza", 50);
            $table->string("stazione_arrivo", 50);
            $table->timestamps("orario_partenza", 4);
            $table->timestamps("orario_arrivo", 4);
            $table->smallInteger("codice_treno");
            $table->smallInteger("numero_carrozze");
            $table->boolean("in_orario")->default(1);
            $table->boolean("cancellato")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
