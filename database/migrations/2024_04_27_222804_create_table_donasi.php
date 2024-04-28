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
        Schema::create('table_donasi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_donatur')->unsigned();
            $table->bigInteger('id_masjid');
            $table->date('tanggal');
            $table->decimal('jumlah');
            $table->string('metode_pembayaran');
            $table->string('bukti_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_donasi');
    }
};
