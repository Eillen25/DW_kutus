@extends('base/base')

@section('judul','Per-Produk')

@section('header', 'PER-PRODUK')

@section('konten')
    <thead>
        <tr>
            <th>Produk</th>
            <th>Jumlah Penjualan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($perproduk as $p)
        <tr>
            <td>{{ $p->nama_produk }}</td>
            <td>{{ $p->jumlah }}</td>
        
        </tr>
        @endforeach
    </tbody>
@endsection