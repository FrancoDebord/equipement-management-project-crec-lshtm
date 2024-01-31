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
        Schema::create('preq_equipements_requests_forms', function (Blueprint $table) {
            $table->id();
            $table->string("requester_name");
            $table->integer("departement_id")->index();
            $table->integer("type_equipement_id")->index();
            $table->string("to_be_used_for");
            $table->date("date_request");
            $table->integer("quantity")->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preq_equipements_requests_forms');
    }
};
