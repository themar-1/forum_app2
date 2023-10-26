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
        Schema::create('remarques', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->unsignedBigInteger('entretien_id');
            $table->string('entreprise_id');
            $table->timestamps();
            $table->foreign('entretien_id')->references('id')->on('entretiens');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remarques');
    }
};
