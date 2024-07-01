@extends('layouts.app')

@section('title')
    Hapus Yearbook | Study Admin
@endsection

@section('content')
    <h3>Hapus Yearbook</h3>
    <div class="form-login">
        <h4>Ingin Menghapus Data ?</h4>
        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href={{ url('/yearbook/destroy/' . $yearbook->id_yearbook) }}>
                Yes
            </a>
        </button>
        <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
            <a href="/yearbook">
                No
            </a>
        </button>
    </div>
@endsection
