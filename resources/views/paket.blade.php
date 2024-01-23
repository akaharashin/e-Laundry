@extends('layouts.layout')
@section('title', 'Pilih Paket')
    
@section('container')
<div class="container mt-5">
    <div class="row">
        @foreach ($pakets as $paket)
        <div class="col-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3>{{ $paket->nama }}</h3>
                    <p class="card-text">{{ $paket->desc }}</p>
                    <p class="card-text fs-6">Rp.{{ number_format($paket->harga, 0, ',' , '.') }} /kg</p>
                    <ul class="list-group">
                        <li class="list-group-item">{{ $paket->service1 }}</li>
                        <li class="list-group-item">{{ $paket->service2 }}</li>
                        <li class="list-group-item">{{ $paket->service3 }}</li>
                    </ul>

                    <a href="{{ route('kasir', $paket->id) }}" class="btn btn-success w-100 mt-4">Pilih</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
