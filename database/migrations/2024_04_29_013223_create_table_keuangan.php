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
        Schema::create('table_keuangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_masjid');
            $table->enum('jenis_transaksi',['pemasukan','pengeluaran']);
            $table->date('tanggal');
            $table->string('keterangan');
            $table->decimal('jumlah',10,2);
            $table->decimal('saldo');
            $table->timestamps();

            $table->foreign('id_masjid')->references('id')->on('table_masjid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_keuangan');
    }
};
