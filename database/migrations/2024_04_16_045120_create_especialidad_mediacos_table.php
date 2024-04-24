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
        Schema::create('especialidad_mediacos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('especialidad_id')->nullable();
            $table->unsignedBigInteger('medico_id')->nullable();
            $table->foreign('especialidad_id')->references('id')->on('especialidads');
            $table->foreign('medico_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialidad_mediacos');
    }
};
