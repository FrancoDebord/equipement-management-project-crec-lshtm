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
        Schema::create('preq_equipements', function (Blueprint $table) {
            $table->id();
            $table->string("code_equipement")->unique();
            $table->string("libelle_equipement")->nullable();
            $table->integer("type_equipement_id")->index();
            $table->string("description_equipement")->nullable();
            $table->string("to_be_used_for")->nullable();
            $table->integer("departement_id")->index();
            $table->integer("office_id")->index();
            $table->date("date_achat")->nullable();
            $table->date("date_approved_usage")->nullable();
            $table->string("serial_number")->unique();
            $table->string("model")->nullable();
            $table->string("annee")->nullable();
            $table->string("calibration_frequency")->nullable();
            $table->string("maintenance_frequency")->nullable();
            $table->string("status")->default("in use");
            $table->integer("equipement_id_parent")->index()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preq_equipements');
    }
};
