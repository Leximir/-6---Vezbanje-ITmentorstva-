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
        Schema::create('ocjene', function (Blueprint $table) {
            $table->id();
            $table->string('predmet' , 64);
            $table->unsignedInteger('ocjena');
            $table->string('profesor' , 64);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocjenes');
    }
};
