<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crear la taula 'productes'
        Schema::create('productes', function (Blueprint $table) {
            $table->id(); // Camp autoincremental, clau primària
            $table->string('nom'); // Camp de tipus cadena per al nom del producte
            $table->text('descripcio'); // Camp de tipus text per a descripcions més llargues
            $table->decimal('preu', 8, 2); // Camp de tipus decimal per al preu amb 8 dígits totals, 2 dígits decimals
            $table->integer('estoc');
            $table->text('imagen'); // Camp de tipus enter per a l'estoc del producte
            // Altres camps necessaris...

            $table->timestamps(); // Dos camps de data i hora per al seguiment de quan es va crear i actualitzar el registre
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Desfer la creació de la taula 'productes'
        Schema::dropIfExists('productes');
    }
}
