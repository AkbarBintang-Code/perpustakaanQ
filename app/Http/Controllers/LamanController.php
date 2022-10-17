<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LamanController extends Controller
{
    public function transaksi(): Factory|View|Application
    {
        return view('tampilan.laman.transaksi');
    }

    public function prosesTransaksi(Request $request): Factory|View|Application
    {
        $banyakbuku = $request->input('banyakbuku');
        $harga = $request->input('harga');

        $totalBayar = (new Transaksi())->hitungPeminjaman($banyakbuku, $harga);

        return view('tampilan.laman.transaksi', [
            'total_bayar' => $totalBayar
        ]);
    }

    public function tentang(): Factory|View|Application
    {
        return view('tampilan.laman.tentang');
    }

    public function katalog(): Factory|View|Application
    {
        return view('tampilan.laman.katalog');
    }
}
