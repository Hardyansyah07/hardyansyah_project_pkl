<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
     public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/buku/' . $this->cover))) {
            return unlink(public_path('images/buku/' . $this->cover));
        }
    }
    use HasFactory;
    public $fillable = ['nama_kategori', 'gambar', 'ket'];
    public $visible = ['nama_kategori', 'gambar', 'ket'];
    public $timestamp = true;

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
