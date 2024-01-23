<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Paket;
use App\Models\Pesanan;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    function paket()
    {
        $pakets = Paket::all();
        return view('paket', compact('pakets'));
    }

    function kasir(Paket $paket)
    {
        $customers = Customer::all();
        return view('inputkasir', compact('paket', 'customers'));
    }

    function invoice(int $id)
    {
        $pesanan = Pesanan::find($id);

        return view('invoice', compact('pesanan'));
    }

    function pesanan(Request $request)
    {
        $data = $request->validate([
            'idCustomer' => 'required',
            'paket' => 'required',
            'harga' => 'required',
            'berat' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'catatan' => 'required',
        ]);


        $pesanan = Pesanan::create([
            'idCustomer' => $request->idCustomer,
            'paket' => $request->paket,
            'berat' => $request->berat,
            'harga' => $request->harga * $request->berat,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('invoice', ['id' => $pesanan->id]);
    }
    

    
}
