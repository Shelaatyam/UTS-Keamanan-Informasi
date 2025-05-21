<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['nama_produk', 'kategori', 'stok', 'harga'];

    public function detailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}