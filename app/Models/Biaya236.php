<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya236 extends Model
{
    use HasFactory;

    protected $table = 'biaya236s';

    protected $fillable = ['nama_konsumen', 'email_konsumen', 'jumlah_biaya', 'tanggal_transaksi', 'keterangan', 'crated_at', 'updated_at'];
}
