@extends('layouts.app')

@section('title')
    Categories | Study Admin
@endsection

@section('content')
    <h3>Categories</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/category/tambah">Tambah Data</a>
    </button>
    <button type="button" class="btn">
        <a href="/category/cetak">Cetak</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Class</th>
                <th>Angkatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td><img src="{{ asset('img_categories/' . $category->gambar) }}" alt="" width="300px"></td>
                    <td>{{ $category->class }}</td>
                    <td>{{ $category->angkatan }}</td>
                    <td>
                        <a href="/category/edit/{{ $category->id_categories }}">Edit</a>
                        <a href="/category/hapus/{{ $category->id_categories }}">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
