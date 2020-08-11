@extends('layout.main')

@section('title', 'Daftar Siswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Siswa</h1>

            <a href="/siswa/create" class="btn btn-primary my-3">Tambah Data Siswa</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $ssw)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$ssw->nama}}</td>
                        <td>{{$ssw->no}}</td>
                        <td>{{$ssw->email}}</td>
                        <td>
                            <form action="{{url('siswa/{$ssw->id}')}}" method="post">
                                <a href="/siswa/{{$ssw->id }}/edit" class="btn btn-primary">edit</a>
                                <button class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection