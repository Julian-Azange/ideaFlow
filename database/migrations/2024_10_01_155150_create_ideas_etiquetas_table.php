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
        Schema::create('ideas_etiquetas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idea_id');
            $table->unsignedBigInteger('etiqueta_id');

            $table->timestamps();

            $table->foreign('idea_id')->references('id')->on('ideas');
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideas_etiquetas');
    }
};
