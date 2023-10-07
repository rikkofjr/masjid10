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
        Schema::create('tb_kegiatan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('judul_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->dateTime('tanggal_pelaksanaan');
            $table->dateTime('tanggal_berakhir')->nullable();
            $table->string('status_pelaksanaan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
