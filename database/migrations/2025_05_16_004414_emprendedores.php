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
    schema::create('emprendedores', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('telefono');
        $table->enum('servicio', ['comida', 'uñas', 'estilista', 'mascotas', 'arte', 'tecnologia', 'juquetes', 'ropa', 'otros']);
        $table->timestamps();
    });
    }


   


    public function down(): void
    {
        schema::dropIfExists('emprendedores');
    }

   
};

