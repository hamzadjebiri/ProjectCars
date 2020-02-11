<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::defaultStringLength(191);

class CreateConducteurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conducteurs', function (Blueprint $table) {

            $table->increments('NumeroConducteur');

            $table->integer('NumeroPermis');

            $table->string('Nom');
            $table->string('Prenom');
            $table->date('DateNaissance');
            $table->string('Adresse');
            $table->string('SituationFamiliale');
            $table->string('Genre');
            $table->date('AnneeObtention');
            $table->string('WilayaObtention');


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
        Schema::dropIfExists('conducteurs');
    }
}
