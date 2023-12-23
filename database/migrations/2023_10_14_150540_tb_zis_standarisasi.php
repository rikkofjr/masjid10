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
        Schema::create('tb_zis_standarisasi', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->integer('uang_standarisasi')->nullable();
            $table->double('beras_standarisasi', 8,2)->nullable();
            $table->date('hijri');
            $table->string('penginput');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
