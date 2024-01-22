@extends('layouts.layout')
@section('title', 'invoice')
    
@section('container')
    <div class="card col-5 mx-auto mt-5">
        <div class="card-body">
            <h4>E-Laundry</h4>
            <h5>Nama Pelanggan : {{ $pesanan->idCustomer }}</h5>
            <h6>Jenis Paket : {{ $pesanan->paket }}</h6>
            <h6>Total Berat : {{ $pesanan->berat }}</h6>
            <h6>Total Nomer Telepon Pelanggan : {{ $pesanan->notelp }}</h6>
            <h6>Alamat Pelanggan : {{ $pesanan->alamat }}</h6>
            <h6>Catatan : {{ $pesanan->catatan }}</h6>
            
            <a href="" onclick="printInvoice()" class="btn btn-success mt-3">Print</a>
        </div>
    </div>
    <script>
        function printInvoice() {
            window.print();
        }
    </script>
@endsection