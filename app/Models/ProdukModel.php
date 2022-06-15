<?php

namespace App\Models;

Use CodeIgniter\Model;

class ProdukModel extends Model {

    protected $table = 'produk';
   
    public function getProduk($kategori)
    {
        if ($kategori == 'all') {
            return $this->findAll();
        } else {
            return $this->where('kategori', $kategori)->findAll();
        }
    }
}