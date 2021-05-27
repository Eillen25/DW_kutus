@extends('base/base')

@section('judul','Reseller + Produk')

@section('header', 'RESELLER + PRODUK')

@section('konten')
    <thead>
        <tr>
            <th>Nama Reseller</th>
            <th>Produk</th>
            <th>Jumlah Penjualan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($no6 as $p)
        <tr>
            <td>{{ $p->nama_reseller }}</td>
            <td>{{ $p->nama_produk }}</td>
            <td>{{ $p->jumlah }}</td>
        
        </tr>
        @endforeach
    </tbody>
@endsection
@section('paginate')
        <br>
        Halaman: {{$no6->currentpage()}} <br>
        Jumlah Data: {{$no6->total()}} <br>

        {{ $no6->links() }}
@endsection