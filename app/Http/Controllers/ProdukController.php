<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar' => 'required|max:2080|mimes:png,jpg',
            'id_kategori' => 'required'
        ]);

        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_kategori;

        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/produk/', $name);
            $produk->gambar = $name;
        }

        $produk->save();
        return redirect()->route('produk.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::FindOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::FindOrFail($id);
        $kategori = Kategori::all();
        $selectKategori = Kategori::with('produk')->pluck('id')->toArray();
        return view('produk.edit', compact('produk', 'kategori','selectKategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            // 'gambar' => 'required',
            'id_kategori' => 'required'

        ]);

        $produk = Produk::FindOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_kategori;

        if ($request->hasFile('gambar')) {
            $produk->deleteImage();
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/produk/', $name);
            $produk->gambar = $name;
        }

        $produk->save();
        return redirect()->route('produk.index')
            ->with('success', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::FindOrFail($id);
        $produk->delete();
        // $siswa->genre()->detach();
        return redirect()->route('produk.index')
            ->with('success', 'data berhasil dihapus');
    }
}
