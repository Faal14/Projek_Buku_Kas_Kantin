<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaksi_harians', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_transaksi');
            $table->string('nama_kios');
            $table->bigInteger('total_pemasukan');
            $table->bigInteger('total_pengeluaran');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaksi_harians');
    }
};