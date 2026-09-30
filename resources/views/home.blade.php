@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1 class="h4 mb-3">Ringkasan Laporan Fasilitas Kota</h1>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="h6 text-secondary">Total Laporan</h2>
                <p class="display-6 mb-0">{{ $ringkasan['total'] }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="h6 text-secondary">Sedang Diproses</h2>
                <p class="display-6 mb-0">
                    {{ $ringkasan['diproses'] }}
                    <span class="badge text-bg-warning fs-6">Diproses</span>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="h6 text-secondary">Selesai</h2>
                <p class="display-6 mb-0">
                    {{ $ringkasan['selesai'] }}
                    <span class="badge text-bg-success fs-6">Selesai</span>
                </p>
            </div>
        </div>
    </div>
</div>

<a href="{{ route('reports.index') }}" class="btn btn-primary mt-4">Lihat Semua Laporan</a>
@endsection