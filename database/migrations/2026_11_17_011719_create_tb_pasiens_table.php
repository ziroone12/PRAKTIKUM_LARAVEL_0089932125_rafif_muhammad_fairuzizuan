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
        Schema::create('tb_pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->varchar(100);
            $table->string('email')->varchar(100);
            $table->string('no_telepon')->varchar(20);
            $table->
            $table->string('password')->varchar(255);
            $table->
            $table->
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pasiens');
    }
};
