@extends('base/base')

@section('judul','Tanggal + Produk')

@section('header', 'TANGGAL + PRODUK')

@section('konten')
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Produk</th>
            <th>Jumlah Penjualan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($no5 as $p)
        <tr>
            <td>{{ $p->tanggal }}</td>
            <td>{{ $p->nama_produk }}</td>
            <td>{{ $p->jumlah }}</td>
        
        </tr>
        @endforeach
    </tbody>
@endsection
@section('paginate')
        <br>
        Halaman: {{$no5->currentpage()}} <br>
        Jumlah Data: {{$no5->total()}} <br>

        {{ $no5->links() }}
@endsection