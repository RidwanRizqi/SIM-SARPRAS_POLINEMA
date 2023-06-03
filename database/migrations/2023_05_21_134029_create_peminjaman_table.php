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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_sarana_prasarana')->constrained('sarana_prasarana');
            $table->foreignId('id_wewenang')->constrained('wewenang');
            $table->string('dokumen');
            $table->string('kegiatan');
            $table->string('penanggung_jawab');
            $table->enum(
                'status',
                [
                    'Proses',
                    'Valid',
                    'Ditolak',
                ]
            )->default('Proses');
            $table->enum(
                'daya_listrik',
                [
                    'Ya',
                    'Tidak',
                ]
            )->default('Ya');
            $table->text('catatan_admin')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
