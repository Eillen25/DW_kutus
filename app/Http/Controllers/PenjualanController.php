<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\Tanggal;
use App\Models\Reseller;
use Illuminate\Support\Facades\DB;


class PenjualanController extends Controller
{
    public function index(){
        // $penjualan = Penjualan::all();

        // paginate
        $penjualan = Penjualan::paginate(25);

        return view('penjualan', ['penjualan' => $penjualan]);

    }

    // public function perproduk(){
    //     // $no1 = DB::table('penjualan AS p')
    //     //      ->leftjoin('produk', 'produk.produk_id', '=', 'p.produk_id')
    //     //      ->select(DB::raw('p.produk_id, SUM(jumlah) AS jumlah'))
    //     //      ->groupBy('produk_id')
    //     //      ->get();

    //     $no1 = DB::table(DB::raw('penjualan AS p LEFT JOIN produk AS pr ON p.produk_id = pr.produk_id'))
    //     // ->leftjoin('produk', 'pr.produk_id', '=', 'p.produk_id')
    //     ->select(DB::raw('p.produk_id, SUM(jumlah) AS jumlah'))
    //     ->groupBy('produk_id')
    //     ->get();
    //     // dd($no1);
    //     return view('no1', ['no1' => $no1]);
    // }

    public function perproduk(){
        $pr = new Penjualan;
        $perproduk = $pr->perproduk();
        return view('no1', compact('perproduk'));
    }

    // public function pereseller(){
    //     $no2 = DB::table('penjualan')
    //         ->select(DB::raw('reseller_id, SUM(jumlah) AS jumlah'))
    //         ->groupBy('reseller_id')
    //         ->orderBy('jumlah', 'DESC')
    //         ->get();
    //     return view('no2', ['no2' => $no2]);
    // }

    public function pereseller(){
        $no2 = DB::table(DB::raw('penjualan AS p LEFT JOIN reseller AS r ON p.reseller_id = r.reseller_id'))
            ->select(DB::raw("CONCAT(SUBSTRING(p.reseller_id, 1,3), ' - ', nama_reseller) AS nama_reseller, SUM(jumlah) AS jumlah"))
            ->groupBy('p.reseller_id', 'r.nama_reseller')
            ->orderBy('jumlah', 'DESC')
            ->paginate(25);
            // ->get();
        return view('no2', ['no2' => $no2]);
    }

    public function pertanggal(){
        $no3 = DB::table(DB::raw('penjualan AS p LEFT JOIN tanggal AS t ON p.tanggal_id = t.tanggal_id'))
        ->select(DB::raw('tanggal, SUM(jumlah) AS jumlah'))
        ->groupBy('p.tanggal_id', 't.tanggal')
        ->orderBy('jumlah', 'DESC')
        ->paginate(25);
        // ->get();
        return view('no3', ['no3' => $no3]);
    }

    public function restanggal(){
        $no4 = DB::table(DB::raw('penjualan AS p JOIN tanggal AS t ON p.tanggal_id = t.tanggal_id JOIN reseller AS r ON p.reseller_id = r.reseller_id'))
        ->select(DB::raw("CONCAT(SUBSTRING(p.reseller_id, 1,3), ' - ', nama_reseller) AS nama_reseller, tanggal, SUM(jumlah) AS jumlah"))
        ->groupBy('p.reseller_id', 't.tanggal_id', 'tanggal', 'nama_reseller')
        ->orderBy('jumlah', 'DESC')
        ->paginate(25);
        // ->get();
        return view('no4', ['no4' => $no4]);
    }

    public function prodtanggal(){
        $no5 = DB::table(DB::raw('penjualan AS p JOIN tanggal AS t ON p.tanggal_id = t.tanggal_id JOIN produk AS pr ON p.produk_id = pr.produk_id'))
        ->select(DB::raw('nama_produk, tanggal, SUM(jumlah) AS jumlah'))
        ->groupBy('p.tanggal_id', 'p.produk_id', 'tanggal', 'nama_produk')
        ->orderBy('jumlah', 'DESC')
        ->paginate(25);
        // ->get();
        return view('no5', ['no5' => $no5]);
    }

    public function resprod(){
        $no6 = DB::table(DB::raw('penjualan AS p JOIN produk AS pr ON p.produk_id = pr.produk_id JOIN reseller AS r ON p.reseller_id = r.reseller_id'))
        ->select(DB::raw("CONCAT(SUBSTRING(p.reseller_id, 1,3), ' - ', nama_reseller) AS nama_reseller, nama_produk, SUM(jumlah) AS jumlah"))
        ->groupBy('p.reseller_id', 'p.produk_id', 'nama_produk', 'nama_reseller')
        ->orderBy('jumlah', 'DESC')
        ->paginate(25);
        // ->get();
        return view('no6', ['no6' => $no6]);
    }
}
