<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idvoiture')->constrained('voitures');
            $table->foreignId('idclient')->constrained('clients');
            $table->integer('place');
            $table->dateTime('date_reservation');
            $table->date('date_voyage');
            $table->enum('paiement', ['sans avance', 'avec avance', 'tout payé']);
            $table->integer('montant_avance')->nullable();
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
        Schema::dropIfExists('reservations');
    }
};
