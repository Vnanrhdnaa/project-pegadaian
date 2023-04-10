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
        Schema::create('pawnshops', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('JK');
            $table->string('nama');
            $table->string('no_telp');
            $table->string('umur');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('pawnshops');
    }
};
