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
        Schema::create('preq_requests_caracteristiques', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->integer("caracteristique_id")->index();
            $table->integer("request_id")->index();
            $table->string("valeur");
            $table->enum("user_approval", ["OK","NOT OK","N/A"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preq_requests_caracteristiques');
    }
};
