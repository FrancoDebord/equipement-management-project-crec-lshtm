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
        Schema::create('preq_maintenances_equipements', function (Blueprint $table) {
            $table->id();
            $table->integer("equipement_id");
            $table->string("equipement_code");
            $table->date("date_maintenance");
            $table->date("next_date_maintenance");
            $table->enum("equipement_status",["bon","mauvais"]);
            $table->string("service_provided");
            $table->string("service_provider_name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preq_maintenances_equipements');
    }
};
