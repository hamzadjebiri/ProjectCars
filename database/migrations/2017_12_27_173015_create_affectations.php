<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectations', function (Blueprint $table) {

             $table->increments('ID_Affectation');

             $table->integer('NumeroVéhicule')->unsigned();

             $table->foreign('NumeroVéhicule')->references('NumeroVéhicule')->on('vehicules');




             $table->integer('NumeroConducteur')->unsigned();

             $table->foreign('NumeroConducteur')->references('NumeroConducteur')->on('conducteurs');


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
        Schema::dropIfExists('affectations');
    }
}
