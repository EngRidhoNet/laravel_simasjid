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
        Schema::create('table_masjid', function (Blueprint $table) {
            $table->id();
            $table->text('nama_masjid')->nullable();
            $table->text('alamat_masjid')->nullable();
            $table->string('telepon_masjid', 20)->nullable();
            $table->string('email_masjid', 255)->unique();
            $table->mediumtext('foto_masjid')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index('nama_masjid');
            $table->index('alamat_masjid');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_masjid');
    }
};
