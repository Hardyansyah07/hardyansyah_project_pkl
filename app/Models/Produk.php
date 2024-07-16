<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/buku/' . $this->cover))) {
            return unlink(public_path('images/buku/' . $this->cover));
        }
    }
    use HasFactory;
    public $fillable = ['nama_produk', 'deskripsi', 'harga', 'stok', 'gambar', 'id_kategori'];
    public $visible = ['nama_produk', 'deskripsi', 'harga', 'stok', 'gambar', 'id_kategori'];
    public $timestamp = true;

    public function detail_pesanan()
    {
        return $this->hasMany(Detail_pesanan::class);
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
