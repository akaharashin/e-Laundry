@extends('layouts.layout')

@section('container')
    <form action="{{ route('pesanan') }}" method="POST">
        @csrf
        <div class="card mt-5 col-6 mx-auto p-3 shadow" style="background-color: rgba(6, 6, 145))">
            <div class="card-body p-4">
                <label for="idCustomer" class="label">ID Customer</label>
                <input type="text" name="idCustomer" id="idCustomer" class="form-control">
                <label for="paket" class="label">Pilihan Paket</label>
                <input type="text" name="paket" id="paket" class="form-control" value="{{ $paket->namaPaket }}">
                <label for="berat" class="label">Berat</label> 
                <div class="d-flex">
                <input type="number" name="berat" id="berat" class="form-control"> <span class="p-1">Kg</span>
                </div>
                <label for="notelp" class="label">No. Telepon</label>
                <input type="text" name="notelp" id="notelp" class="form-control">
                <label for="alamat" class="label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
                <label for="catatan" class="label">Catatan</label>
                <textarea class="form-control" name="catatan" id="catatan" cols="20" rows="5"></textarea>

                <button class="btn btn-success mt-4 shadow">Konfirmasi</button>
            </div> 
        </div>
    </form>
@endsection
