@extends('layouts.app')

@section('title')
    Edit Yearbook | Catshop Admin
@endsection

@section('content')
    <h3>Input Yearbook</h3>
    <div class="form-login">
        <form action="{{ url('/yearbook/update', $yearbook->id_yearbook) }}" method="post">
            @csrf
            @method('PUT')
            <label for="nama">Nama</label>
            <input class="input" type="text" name="nama" id="nama" placeholder="Nama"
                value="{{ old('nama', $yearbook->nama) }}" />
            @error('nama')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="class">Kelas</label>
            <select class="input" name="Class" id="class">
                <option value="">Pilih Kelas</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id_categories }}"
                        {{ old('category_id', $yearbook->category_id) == $category->id_categories ? 'selected' : '' }}>
                        {{ $category->class }}</option>
                @endforeach
            </select>
            @error('class')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="harga">Angkatan</label>
            <input class="input" type="text" name="angkatan" id="angkatan" placeholder="Angkatan"
                value="{{ old('angkatan', $yearbook->angkatan) }}" />
            @error('angkatan')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="tanggal">Motto</label>
            <input class="input" type="text" name="motto" id="motto" style="margin-bottom: 20px"
                value="{{ old('motto', $yearbook->motto) }}" />
            @error('motto')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
                Edit
            </button>
        </form>
    </div>
@endsection
