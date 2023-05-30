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
        Schema::create('sppd', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pns_id');
            $table->unsignedBigInteger('skpd_id');
            $table->unsignedBigInteger('kendaraan_id');
            $table->unsignedBigInteger('dibuat_oleh');
            $table->string('perdin');
            $table->string('no_agenda');
            $table->integer('tahun');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_kembali');
            $table->date('tanggal_sppd');
            $table->string('dari_anggaran');
            $table->string('tujuan');
            $table->string('pengelola');
            $table->string('status_persetujuan');
            $table->string('no_surat')->nullable();
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('pns_id')->references('id')->on('pns');
            $table->foreign('skpd_id')->references('id')->on('skpd');
            $table->foreign('kendaraan_id')->references('id')->on('kendaraan');
            $table->foreign('dibuat_oleh')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sppd');
    }
};
