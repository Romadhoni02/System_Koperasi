<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_angsuran_table.php
public function up()
{
    Schema::create('angsuran', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pinjaman_id')->constrained('pinjaman')->onDelete('cascade');
        $table->double('jumlah_angsuran');
        $table->date('tanggal_angsuran');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angsuran');
    }
};
