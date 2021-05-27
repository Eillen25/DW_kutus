<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = "penjualan";

    public function produk(){
        return $this->belongsTo('App\Models\Produk', 'produk_id');
    }

    public function tanggal(){
        return $this->belongsTo('App\Models\Tanggal', 'tanggal_id');
    }

    public function reseller(){
        return $this->belongsTo('App\Models\Reseller', 'reseller_id');
    }

    public function perproduk(){
        $cmd = "SELECT p.produk_id, pr.nama_produk, SUM(jumlah) AS jumlah from penjualan AS p LEFT JOIN produk AS pr ON pr.produk_id = p.produk_id group by p.`produk_id`, pr.nama_produk order by jumlah DESC;";
        $no1 = DB::select($cmd);
        
        // dd($no1);
        return $no1;
    }
    
}
