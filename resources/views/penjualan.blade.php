@extends('base/base')

@section('judul','HOME')

@section('header', 'HOME PENJUALAN')

@section('konten')
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Reseller</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($penjualan as $p)
        <tr>
            <td>{{ $p->tanggal['tanggal'] }}</td>
            <td>{{ $p->reseller['nama_reseller'] }}</td>
            <td>{{ $p->produk['nama_produk'] }}</td>
            <td>{{ $p->jumlah }}</td>
            <td>{{ $p->harga_satuan }}</td>
            <td>{{ $p->subtotal }}</td>
            <!-- <td>
                <a href="/pelajar/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                <a href="/pelajar/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
            </td> -->
        </tr>
        @endforeach
    </tbody>
@endsection
            
@section('paginate')
        <br>
        Halaman: {{$penjualan->currentpage()}} <br>
        Jumlah Data: {{$penjualan->total()}} <br>
        
        {{ $penjualan->links() }}
@endsection