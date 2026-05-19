<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiHarian extends Model
{
    use HasFactory;

    protected $table = 'transaksi_harians';

    protected $fillable = [
        'tanggal_transaksi',
        'nama_kios',
        'total_pemasukan',
        'total_pengeluaran',
        'keterangan',
    ];
}