@extends('base/base')

@section('judul','Reseller + Tanggal')

@section('header', 'RESELLER + TANGGAL')

@section('konten')
    <thead>
        <tr>
            <th>Nama Reseller</th>
            <th>Tanggal</th>
            <th>Jumlah Penjualan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($no4 as $p)
        <tr>
            <td>{{ $p->nama_reseller }}</td>
            <td>{{ $p->tanggal }}</td>
            <td>{{ $p->jumlah }}</td>
        
        </tr>
        @endforeach
    </tbody>
@endsection
@section('paginate')
        <br>
        Halaman: {{$no4->currentpage()}} <br>
        Jumlah Data: {{$no4->total()}} <br>

        {{ $no4->links() }}
@endsection