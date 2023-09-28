@extends('master')

@section('title', 'Index')

@section('content')
<h4>Data Gudang</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>ID Suplier</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_barang as $barang)
                <tr>
                    <td>{{$barang->id}}</td>
                    <td>{{$barang->nama_barang}}</td>
                    <td>{{"Rp ".number_format($barang->harga, 2, ',', ".")}}</td>
                    <td>{{$barang->stok}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

