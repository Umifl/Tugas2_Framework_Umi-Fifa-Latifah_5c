@extends('layout.navbar')
@section('pembatas')
    <div class="media mt-3">
        <div class="container d-flex align-items-center justify-content-center" style="padding-top: 60px;">
            <h1>SIAKAD UNSIKA 2022</h1>
        </div>
        <div class="container d-flex mt-4 align-items-center justify-content-center">
            <a type="button" class="btn btn-primary btn-lg mx-3 w-25" href="/dosen">Dosen</a>
            <a type="button" class="btn btn-primary btn-lg mx-3 w-25" href="/mahasiswa">Mahasiswa</a>
            <a type="button" class="btn btn-primary btn-lg mx-3 w-25" href="/matakuliah">Mata Kuliah</a> 
        </div>
    </div>
@endsection
