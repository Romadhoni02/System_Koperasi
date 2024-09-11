<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_pinjaman_table.php
public function up()
{
    Schema::create('pinjaman', function (Blueprint $table) {
        $table->id();
        $table->foreignId('anggota_id')->constrained('members')->onDelete('cascade'); // Menggunakan 'members' sebagai nama tabel
        $table->double('jumlah');
        $table->date('tanggal_pinjaman');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjaman');
    }
};
