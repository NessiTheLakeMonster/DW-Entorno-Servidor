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
        Schema::create('partes', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('alumno');
            $table->string('gravedad');
            $table->unsignedBigInteger('idprofesor'); // BigInteger es para las claves primarias, no se usa Int
            $table->foreign('idprofesor')->references('id')->on('profesores')->onDelete('cascade'); // Foreign key
            $table->text('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partes');
    }
};
