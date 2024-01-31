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
        Schema::create('preq_parametres_calibrages', function (Blueprint $table) {
            $table->id();
            $table->string("nom_parametre");
            $table->integer("equipement_id")->index()->nullable();
            $table->string("equipement_code")->index()->nullable();
            $table->string("nom_colonne_observee")->nullable();
            $table->string("nom_colonne_reference")->nullable();
            $table->float("difference_toleree");
            $table->string("group_name")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preq_parametres_calibrages');
    }
};
