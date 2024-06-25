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
        Schema::create('libro_autores', function (Blueprint $table) { 
            $table->id();          
            $table->foreignId('id_libro')->constrained('libros')->onUpdate('cascade')->nullOnDelete();
            $table->foreignId('id_autor')->constrained('autores')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro_autores');
    }
};
