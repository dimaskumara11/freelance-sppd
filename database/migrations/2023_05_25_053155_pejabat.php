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
        Schema::create('pejabat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('tahun');
            $table->string('nip');
            $table->string('nama');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('jabatan_sebenarnya');
            $table->string('status_aktif');
            $table->string('tingkat');
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pejabat');
    }
};
