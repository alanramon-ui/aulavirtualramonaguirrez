<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('aulas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre')->unique();
        $table->integer('capacidad');
        $table->integer('cantidad_focos')->default(0);
        $table->integer('cantidad_cortinas')->default(0);
        $table->integer('cantidad_sillas')->default(0);
        $table->integer('cantidad_mesas')->default(0);
        $table->boolean('tiene_aire_acondicionado')->default(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aulas');
    }
};