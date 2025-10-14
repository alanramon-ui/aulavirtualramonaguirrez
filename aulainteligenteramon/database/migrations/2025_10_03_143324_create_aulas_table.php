<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

public function up()
{
    Schema::create('aulas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('lugar');
        $table->integer('capacidad');
        $table->timestamps();
    });
} 