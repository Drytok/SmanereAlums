@extends('layouts.app')

@section('title')
    Edit Category | Study Admin
@endsection

@section('content')
    <h3>Edit Categories</h3>
    <div class="form-login">
        <form action="{{ url('/category/update/' . $category->id_categories) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <label for="categories">Class</label>
            <input class="input" type="text" name="class" id="class" placeholder="Class"
                value="{{ old('nama', $category->class) }}" />
            @error('class')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="price">Angkatan</label>
            <input class="input" type="text" name="angkatan" id="angkatan" placeholder="Angkatan"
                value="{{ old('harga', $category->angkatan) }}" />
            @error('angkatan')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="photo">Photo</label>
            <img src="{{ asset('img_categories/' . $category->gambar) }}" alt="" width="200px">
            <input type="file" name="gambar" id="photo" />
            @error('gambar')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
                Edit
            </button>
        </form>
    </div>
@endsection
