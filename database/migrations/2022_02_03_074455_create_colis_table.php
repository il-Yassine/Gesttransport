<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->date('dateDuVoyage');
            $table->time('heureDeDepart');
            $table->string('nombreDeColi');
            $table->string('numeroWhatssapp');
            $table->string('nomDuBus');
            $table->string('matriculeBus');
            $table->string('nomChauffeur');
            $table->string('contactChauffeur');
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
        Schema::dropIfExists('colis');
    }
}
