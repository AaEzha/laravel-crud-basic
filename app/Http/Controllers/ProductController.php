<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = "Tampil Produk";
        $products = Product::all();

        return view("tampilData", compact('title', 'products'));
    }

    public function tambah()
    {
        $title = "Tambah Produk";
        $kinds = ["Makanan", "Minuman", "Pelengkap"];

        return view("tambahData", compact('title', 'kinds'));
    }

    public function simpan(Request $request)
    {
        Product::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'qty' => $request->qty,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
        ]);

        return redirect()->route('tampil')->with('status', 'Data berhasil diinput');
    }

    public function ubah(Product $product)
    {
        $title = "Ubah Produk";
        $kinds = ["Makanan", "Minuman", "Pelengkap"];

        return view("ubahData", compact('title', 'kinds', 'product'));
    }

    public function update(Product $product, Request $request)
    {
        $product->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'qty' => $request->qty,
            'jenis' => $request->jenis,
            'harga' => $request->harga
        ]);

        return redirect()->route('tampil')->with('status', 'Data berhasil diupdate');
    }

    public function hapus(Product $product)
    {
        $product->delete();

        return redirect()->route('tampil')->with('status', 'Data berhasil dihapus');
    }
}
