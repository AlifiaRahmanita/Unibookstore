<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Home extends Model
{
    protected $table            = 'buku';
    protected $primaryKey       = 'id_buku';
    protected $allowedFields    = ['kategori', 'nama_buku', 'harga', 'stok', 'penerbit'];
    public function AllData()
    {
        return $this->orderBy('id_buku', "asc")->findAll();
    }

    public function cari($detail)
    {
        return $this->db->table('buku')->join(
            'penerbit',
            'penerbit.nama_penerbit=buku.penerbit'
        )->where('nama_buku', $detail)->get()->getResultArray();
    }

}
