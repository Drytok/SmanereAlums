@extends('layouts.app')
@section('title')
    Tambah Yearbook | Study Admin
@endsection

@section('content')
    <h3>Input Yearbook</h3>
    <div class="form-login">
        <form action="{{ url('/yearbook/store') }}" method="POST">
            @csrf
            <label for="nama">Nama</label>
            <input class="input" type="text" name="nama" id="nama" placeholder="Nama" value="{{ old('nama') }}" />
            @error('nama')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="category_id">Kelas</label>
            <select class="input" name="class" id="class">
                <option value="">Pilih Kelas</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id_categories }}"
                        {{ old('class') == $category->id_categories ? 'selected' : '' }}>{{ $category->class }}</option>
                @endforeach
            </select>
            @error('class')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="harga">Angkatan</label>
            <input class="input" type="text" name="angkatan" id="Angkatan" placeholder="Angkatan"
                value="{{ old('angkatan') }}" />
            @error('angkatan')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="tanggal">Motto</label>
            <input class="input" type="text" name="motto" id="motto" placeholder="Motto"
                style="margin-bottom: 20px" value="{{ old('motto') }}" />
            @error('motto')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
                Simpan
            </button>
        </form>
    </div>
@endsection
