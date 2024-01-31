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
        Schema::create('preq_equipements_usages_sheets', function (Blueprint $table) {
            $table->id();
            $table->integer("caracteristique_id");
            $table->integer("equipement_id");
            $table->string("equipement_code");
            $table->string("project_code");
            $table->date("date_usage");
            $table->time("heure_usage");
            $table->string("description_usage");
            $table->boolean("cleaned_after_use");
            $table->text("observation");
            $table->text("action_taken");
            $table->integer("staff_personnel_id")->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preq_equipements_usages_sheets');
    }
};
