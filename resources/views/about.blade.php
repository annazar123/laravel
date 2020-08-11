@extends('layout.main')

@section('title', 'about')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Hello, <?php echo $nama; ?></h1>

        </div>
    </div>
    @endsection