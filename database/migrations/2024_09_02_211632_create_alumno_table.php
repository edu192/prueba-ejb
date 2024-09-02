<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10)->unique();
            $table->string('apellido_paterno',20);
            $table->string('apellido_materno',20);
            $table->string('nombres',30);
            $table->string('direccion',60);
            $table->dateTime('fecha_nacimiento');
            $table->integer('edad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumno');
    }
};
