@extends('layouts.app')

@section('title')
    Yearbook | Study Admin
@endsection

@section('content')
    <h3>Yearbook</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/yearbook/tambah">Tambah Data</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th style="width: 20%">Nama</th>
                <th>Kelas</th>
                <th style="width: 20%">Angkatan</th>
                <th style="width: 20%">Motto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($yearbooks as $yearbook)
                <tr>
                    <td>{{ $yearbook->nama }}</td>
                    <td>{{ $yearbook->category->class }}</td>
                    <td>{{ $yearbook->angkatan }}</td>
                    <td>{{ $yearbook->motto }}</td>
                    <td>
                        <a href="/yearbook/edit/{{ $yearbook->id_yearbook }}">Edit</a>
                        <a href="/yearbook/hapus/{{ $yearbook->id_yearbook }}">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center">Data Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
