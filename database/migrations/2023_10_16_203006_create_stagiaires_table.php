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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();
            $table->string('cin')->unique();
            $table->string('email')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->enum('sexe', ['F', 'H']);
            $table->date('dateNaissance');
            $table->string('telephone')->nullable();
            $table->string('filiere');
            $table->unsignedBigInteger('etablissement_id');
            $table->string('cv')->nullable();
            $table->tinyInteger('status')->default(0);
            // 0 : not activated || 1: activated || 2: attended
            $table->foreign('etablissement_id')->references('id')->on('etablissements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaire');
    }
};
