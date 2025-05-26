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
    Schema::create('pais', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('capital');
        $table->string('region');
        $table->integer('poblacion');
        $table->string('idioma');
        $table->string('moneda');
        $table->string('imagen');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pais');
    }
};
