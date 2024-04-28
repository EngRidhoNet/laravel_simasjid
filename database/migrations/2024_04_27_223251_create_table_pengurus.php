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
        Schema::create('table_pengurus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_masjid')->unsigned();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('no_hp');
            $table->string('email');
            $table->timestamps();

            $table->foreign('id_masjid')->references('id')->on('table_masjid')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pengurus');
    }
};
