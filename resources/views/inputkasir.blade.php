@extends('layouts.layout')

@section('title', 'Input Pesanan')

@section('container')
<form action="{{ route('pesanan') }}" method="POST">
    @csrf
    <h3 class="text-center mt-5">Masukan Pesanan</h3>
    <div class="card col-6 mx-auto p-3 shadow" style="background-color: rgba(6, 6, 145))">
        <div class="card-body p-4">
                <label for="idCustomer" class="label">ID Customer</label>
                <input required type="text" name="idCustomer" id="idCustomer" class="form-control" placeholder="Masukan ID Customer">
                <label for="paket" class="label">Pilihan Paket</label>
                <input required type="text" name="paket" id="paket" class="form-control" value="{{ $paket->nama }}">
                <label for="harga" class="label">harga /kg</label>
                <input required type="text" name="harga" id="harga" class="form-control" value="{{ $paket->harga }}">
                <label for="berat" class="label">Berat</label> 
                <div class="d-flex">
                <input required type="number" name="berat" id="berat" class="form-control" placeholder="Masukan Total Berat Cucian"> <span class="p-1">Kg</span>
                </div>
                <label for="notelp" class="label">No.Telepon</label>
                <input required type="text" name="notelp" id="notelp" class="form-control" inputmode="numeric" pattern="[0-9]*" placeholder="Masukan No.Telp (Number Only)">
                <label for="alamat" class="label">Alamat</label>
                <input required type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat Customer">
                <label for="catatan" class="label">Catatan</label>
                <textarea class="form-control" name="catatan" id="catatan" cols="20" rows="5" placeholder="Masukan Catatan"></textarea>

                <button type="submit" class="btn btn-success mt-4 shadow">Konfirmasi</button>
            </div> 
        </div>
    </form>
@endsection
