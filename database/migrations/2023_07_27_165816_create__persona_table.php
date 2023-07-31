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
        Schema::create('_persona', function (Blueprint $table) {
            $table->id();
            $table->string ('NombrePersona');
            $table->string ('ApellidoPersona');
            $table->integer('EdadPersona');
            $table->boolean('PersonaYR');
            $table->string('CorreoPersona')->unique();
            $table->string('DniPersona')->unique();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_persona');
    }
};
