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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('web')->nullable();
            $table->string('raisonsociale');
            $table->string('activite');
            $table->string('manager');
            $table->string('adresse');
            $table->string('localite');
            $table->string('ville');
            $table->string('codepostale');
            $table->timestamp('date_creation');
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('tel3')->nullable();
            $table->Integer('status');
             
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
