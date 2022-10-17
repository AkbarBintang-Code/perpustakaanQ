<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function hitungPeminjaman(int $banyakbuku, int $harga): float|int
    {
        return $banyakbuku * $harga;
    }
}
