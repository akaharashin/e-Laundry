@extends('layouts.layout')
@section('title', 'Invoice')

@section('container')
    <div class="card col-5 mx-auto mt-5">
        <div class="card-body text-secondary">
            <table class="table">
                <h4 class="text-black">E-Laundry</h4>
                <h6>Nama Pelanggan : {{ $pesanan->idCustomer }}</h6>
                <h6>Jenis Paket : {{ $pesanan->paket }}</h6>
                <h6>Total Berat : {{ $pesanan->berat }} Kg</h6>
                <h6>No. Telp : {{ $pesanan->notelp }}</h6>
                <h6>Alamat Pelanggan : {{ $pesanan->alamat }}</h6>
                <h6>Catatan : {{ $pesanan->catatan }}</h6>
                <h6 class="pt-3 text-black">Total Harga : Rp.{{ number_format($pesanan->harga, 0, ',', '.') }}</h6>
            </table>

            <a href="" onclick="printInvoice()" class="btn btn-success mt-3 d-flex flex-column w-25 flex-end">Print</a>
        </div>
    </div>
    <script>
        function printInvoice() {
            window.print();
        }
    </script>
@endsection
