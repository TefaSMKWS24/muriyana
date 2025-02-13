@extends('layouts.layout')

@section('header')

<div class="app-content -header">
    <! - -begin::Controller- ->
    <div class="app-controller-fluid">
        <!--begin::Row-->
        <div class="row">
            <div clas="col-5m-6"><h3 class="mb-0">Barang</h3></div>
            <div class="col-5m-6">
                <ol class="breadcrumb float-5m-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Barang</li>
                </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!-- - -end::Controller- ->
</div>

@endsection

@section('content')

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>kode Barang</th>
            <th>nama Barang</th>
            <th>kategori</th>
            <th>stok</th>
            <th>harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kode_barang }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->kategori->nama_kategori }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->harga }}</td>
            <td>
                <a href="/barang/edit/{{ $item->kode_barang }}/edit" class="btn btn-primary">Edit</a>
                <a href="/barang/delete/{{ $item->kode_barang }}" class="btn btn-danger">hapus</a>
            </td>
        </tr>
        @endforeach
        </tbody>
</table>
@endsection
