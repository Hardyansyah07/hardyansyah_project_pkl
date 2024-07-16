<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_pesanan extends Model
{
    use HasFactory;
    public $fillable = ['id_user', 'id_produk', 'tgl_pesanan', 'jumlah', 'total'];
    public $visible = ['id_user', 'id_produk', 'tgl_pesanan', 'jumlah', 'total'];
    public $timestamp = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
    //mengapus image
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/produk' . $this->gambar_produk))) {
            return unlink(public_path('images/produk' . $this->gambar_produk));
        }
    }
}
