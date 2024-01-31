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
        Schema::create('preq_calibrages_equips', function (Blueprint $table) {
            $table->id();
            $table->string("intitule_calibrage");
            $table->integer("equipement_id")->index();
            $table->string("equipement_code")->index();
            $table->string("spo_code")->index()->nullable();
            $table->string("calibration_logger_code")->index()->nullable();
            $table->date("date_calibrage");
            $table->time("heure_calibrage");
            $table->enum("type_calibrage",["interne","externe"])->default("interne");
            $table->string("certificat_calibrage")->nullable();
            $table->integer("staff_personnel_id")->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preq_calibrages_equips');
    }
};
