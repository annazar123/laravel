@extends('layout.main')

@section('title', 'Form Ubah Data Siswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Siswa</h1>

            <form method="post" action="/siswa/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no">No Telp</label>
                    <input type="text" class="form-control @error ('no') is-invalid @enderror" id="no" placeholder="Masukkan No Telp" name="no" value="{{$student->no}}">
                    @error('no')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{$student->email}}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data!</button>
        </div>
    </div>
</div>
@endsection