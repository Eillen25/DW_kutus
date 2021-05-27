@extends('base/base')

@section('judul','Per-Tanggal')

@section('header', 'PER-TANGGAL')

@section('konten')
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Jumlah Penjualan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($no3 as $p)
        <tr>
            <td>{{ $p->tanggal }}</td>
            <td>{{ $p->jumlah }}</td>
        
        </tr>
        @endforeach
    </tbody>
@endsection
@section('paginate')
        <br>
        Halaman: {{$no3->currentpage()}} <br>
        Jumlah Data: {{$no3->total()}} <br>

        {{ $no3->links() }}
@endsection