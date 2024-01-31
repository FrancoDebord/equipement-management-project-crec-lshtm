<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('preq_parametres_calibrages_valeurs_equipements', function (Blueprint $table) {
            $table->id();
            $table->integer("num_reading");//1,2, 3, Le numéro de lecture 
            $table->time("heure_observation");
            $table->integer("calibrage_id")->index();
            $table->string("valeur_observee");
            $table->string("valeur_reference");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preq_parametres_calibrages_valeurs_equipements');
    }
};
