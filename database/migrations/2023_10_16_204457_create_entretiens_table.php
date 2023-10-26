<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('entretiens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stagiaire_id');
            $table->unsignedBigInteger('entreprise_id');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->unique(['stagiaire_id', 'entreprise_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entretiens');
    }
};
