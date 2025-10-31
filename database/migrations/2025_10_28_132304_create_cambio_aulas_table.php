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
    Schema::create('cambio_aulas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('aula_id')->constrained()->onDelete('cascade');
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // quién reportó
        $table->string('tipo_cambio'); // 'foco', 'cortina', 'silla', etc.
        $table->integer('cantidad');
        $table->text('descripcion')->nullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambio_aulas');
    }
};
