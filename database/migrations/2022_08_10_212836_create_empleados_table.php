<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table -> string('nombre',100);
            $table -> string('apellidos',100);
            $table -> string('email',100);
            $table -> string('password', 100);
            $table -> string('telefono',15);
            $table -> string('puesto',50);
            $table -> integer('edad');
            $table -> string('sexo',50);
            $table -> decimal('sueldo', 8,2);
            $table -> date('fechaIngreso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
