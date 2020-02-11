<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::defaultStringLength(191);

class CreateAssurances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurances', function (Blueprint $table) {
            $table->increments('NumeroAssurance');
            $table->integer('Matricule');

            $table->date('DateEffet');
            $table->date('DateExpiration_Assurance');
            $table->string('NomCompagnieAssurance');
            $table->string('TypeAssurance');
            $table->string('PrixAssurance');
            $table->string('NumeroPoliceAssurance');

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
        Schema::dropIfExists('assurances');
    }
}
