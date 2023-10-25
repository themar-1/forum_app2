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
            $table->string('matricule');
            $table->string('cin')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaissance');
            $table->string('email');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('tel3');
            $table->Integer('filiere_id');
            $table->Integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
