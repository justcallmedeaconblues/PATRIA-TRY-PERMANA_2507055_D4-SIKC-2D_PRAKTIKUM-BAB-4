@extends('layouts.app')

@section('title', 'data laporan')

@section('content')
<h1 class="h4 mb-3">{{$judul}}</h1>
<table class="table table-bordered bg-white">
    <thead>
        <tr><th>No</th><th>Fasilitas</th><th>Status</th></tr>
    </thead>
    <tbody>
        @foreach ($laporan as $item)
        <tr>
            <td>{{ $loop-> iteration }}</td>
            <td>{{ $item['fasilitas'] }}</td>
            <td>{{ $item['Status'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
<p>Halaman Daftar Laporan</p>