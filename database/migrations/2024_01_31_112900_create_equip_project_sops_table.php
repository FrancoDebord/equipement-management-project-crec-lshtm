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
        Schema::create('preq_sops', function (Blueprint $table) {
            $table->id();
            $table->string("code_sop");
            $table->integer("version_number");
            $table->string("titre_sop");
            $table->integer("autorise_par")->index()->nullable();
            $table->date("current_issued_date")->nullable();
            $table->date("expire_date")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preq_sops');
    }
};
