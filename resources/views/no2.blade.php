@extends('base/base')

@section('judul','Per-Reseller')

@section('header', 'PER-RESELLER')

@section('konten')
    <thead>
        <tr>
            <th>Nama Reseller</th>
            <th>Jumlah Penjualan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($no2 as $p)
        <tr>
            <td>{{ $p->nama_reseller }}</td>
            <td>{{ $p->jumlah }}</td>
        
        </tr>
        @endforeach
    </tbody>
@endsection
@section('paginate')
        <br>
        Halaman: {{$no2->currentpage()}} <br>
        Jumlah Data: {{$no2->total()}} <br>

        {{ $no2->links() }}
@endsection