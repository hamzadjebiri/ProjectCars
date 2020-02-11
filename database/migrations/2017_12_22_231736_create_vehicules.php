<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::defaultStringLength(191);

class CreateVehicules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {

             $table->increments('NumeroVéhicule');

            $table->integer('NumeroSequenceMatricule');

            $table->string('Wilaya');
            $table->date('AnneeCirculation');          
            $table->string('Marque');
            $table->string('Modele');
            $table->string('Couleur');


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
        Schema::dropIfExists('vehicules');
    }
}
