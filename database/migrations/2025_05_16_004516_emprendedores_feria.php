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
        schema::create('emprendedores_ferias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emprendedores_id')->constrained('emprendedores')->onDelete('cascade');
            $table->foreignId('ferias_id')->constrained('ferias')->onDelete('cascade');
            $table->timestamps();
        });
       
    }

   
    public function down(): void
    {
        //
    }
};
