<?php

namespace App\Http\Controllers;

use App\Models\Detail_pesanan;
// use App\Models\DetailPesanan;
use App\Models\User;
use App\Models\Produk;
use App\Http\Middleware\IsAdmin;
use Illuminate\Http\Request;

class DetailPesananController extends Controller
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
        $detailPesanan = Detail_pesanan::orderBy('id', 'desc')->get();
        $user = User::All();
        $produk = Produk::All();
        return view('detail_pesanan.index', compact('detailPesanan', 'user', 'produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $detailPesanan = Detail_pesanan::all();
        $user = User::all();
        $produk = Produk::all();
        return view('detail_pesanan.create', compact('detailPesanan', 'user', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_user' => 'required',
            'id_produk' => 'required',
            'tgl_pesanan' => 'required',
            'jumlah' => 'required',
            'total' => 'required'
        ]);

        $detailPesanan = new Detail_pesanan();
        $detailPesanan->id_user = $request->id_user;
        $detailPesanan->id_produk = $request->id_produk;
        $detailPesanan->tgl_pesanan = $request->tgl_pesanan;
        $detailPesanan->jml = $request->jml;
        $detailPesanan->total = $request->total;

        $detailPesanan->save();
        return redirect()->route('detail_pesanan.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail_pesanan $detailPesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail_pesanan $detailPesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail_pesanan $detailPesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail_pesanan $detailPesanan)
    {
        //
    }
}
