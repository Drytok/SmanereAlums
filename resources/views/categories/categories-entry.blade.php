@extends('layouts.app')

@section('title')
    Tambah Category | Study Admin
@endsection

@section('content')
    <h3>Input Categories</h3>
    <div class="form-login">
        <form action="{{ url('/category/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="categories">Class</label>
            <input class="input" type="text" name="class" id="class" placeholder="Class" value="{{ old('class') }}" />
            @error('class')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="price">Angkatan</label>
            <input class="input" type="text" name="angkatan" id="angkatan" placeholder="Angkatan"
                value="{{ old('angkatan') }}" />
            @error('angkatan')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="photo">Photo</label>
            <input type="file" name="gambar" id="photo" />
            @error('gambar')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
                Simpan
            </button>
        </form>
    </div>
@endsection
