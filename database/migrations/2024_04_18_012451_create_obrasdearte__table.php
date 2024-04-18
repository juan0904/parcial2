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
        Schema::create('obrasdearte', function (Blueprint $table) {
            $table->id(); 
            $table->integer('artista_id');
            $table->string('título');
            $table->integer('año');
            $table->string('técnica');
            $table->string('dimensiones');
            $table->string('descripción');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obrasdearte_');
    }
};
