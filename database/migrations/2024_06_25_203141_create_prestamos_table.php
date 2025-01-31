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
        Schema::create('prestamos', function (Blueprint $table) { 
            $table->id(); 
            $table->foreignId('id_usuario')->constrained('usuarios')->onUpdate('cascade')->nullOnDelete();
            $table->foreignId('id_libro')->constrained('libros')->onUpdate('cascade')->nullOnDelete();
            $table->string('fecha_prestamo'); 
            $table->string('fecha_devolucion');     
                    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
