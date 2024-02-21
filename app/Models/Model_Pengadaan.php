<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Pengadaan extends Model
{
    protected $table            = 'buku';
    protected $primaryKey       = 'id_buku';
    protected $allowedFields    = ['kategori', 'nama_buku', 'harga', 'stok', 'penerbit'];
    
    // public function AllData()
    // {
    //     return $this->findAll();
    // }

    public function AllData($stok = 10)
    {
        return $this->db->table('buku')->where('stok <', '10')->orderBy('stok', "asc")->get()->getResultArray();
    }


}
