<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
Schema::defaultStringLength(191);



class CreateControles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
           
        
            $table->increments('NumeroControle');

            $table->string('OrganismeEmetteur');
             $table->date('DateExpiration_Controle');
            $table->string('ObservationControle');
            $table->date('DateEffetControle');
            
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
        Schema::dropIfExists('controles');
    }
}
