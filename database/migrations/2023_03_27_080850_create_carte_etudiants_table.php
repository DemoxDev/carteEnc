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
        Schema::create('carte_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nomEtudiant');
            $table->string('prenomEtudiant');
            //$table->string('email')->unique();
            $table->string('email') ;
            $table->integer('numero');
            $table->string('nomcv');
            $table->date('date_entree');
            $table->string('section');
            $table->unsignedBigInteger('idUser');
            //$table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carte_etudiants');
    }
};
