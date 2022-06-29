<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->string('Azienda', 50);
            $table->string('Stazione_di_partenza', 50);
            $table->string('Stazione_di_arrivo', 50);
            $table->string('Orario_di_partenza', 50);
            $table->string('Orario_di_arrivo', 50);
            $table->string('Codice_treno', 50);
            $table->unsignedSmallInteger('Numero_carrozze');
            $table->boolean('In_orario')->default(1);
            $table->boolean('Cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
}


// Azienda varchar(30)
// Stazione di partenza varchar(40)
// Stazione di arrivo varchar(40)
// Orario di partenza varchar(7)
// Orario di arrivo varchar(7)
// Codice Treno varchar(6)
// Numero Carrozze smallint(unsigned)
// In orario tinyint(unsigned)
// Cancellato(unsigned)