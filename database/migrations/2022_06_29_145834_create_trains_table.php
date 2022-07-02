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
            $table->time('Orario_di_partenza', 0);
            $table->time('Orario_di_arrivo', 0);
            $table->string('Codice_treno', 10);
            $table->tinyint('Numero_carrozze');
            $table->boolean('In_orario')->default(true);
            $table->boolean('Cancellato')->default(false);
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


// Codice Treno - varchar(10)
// Azienda - varchar(20)
// Stazione di partenza - varchar(50)
// Stazione di arrivo - varchar(50)
// Orario di partenza - time
// Orario di arrivo - time
// Numero Carrozze - tinyint
// In orario - tinyint
// Cancellato - tinyint

// prendibili da parte 1 lezione giovedi