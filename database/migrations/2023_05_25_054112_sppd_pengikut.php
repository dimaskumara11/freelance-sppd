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
        Schema::create('sppd_pengikut', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sppd_id');
            $table->unsignedBigInteger('pns_id');
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('sppd_id')->references('id')->on('sppd');
            $table->foreign('pns_id')->references('id')->on('pns');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sppd_pengikut');
    }
};
