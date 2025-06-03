<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    // Menampilkan semua produk dan form input
    public function index()
    {
        $produk = Produk::all();
        return view('list_produk', compact('produk'));
    }

    // Menyimpan produk baru
    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric'
        ]);

        $produk = new Produk();
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil disimpan.');
    }
}
