<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Admin extends Model
{
    protected $table            = 'penerbit';
    protected $primaryKey       = 'nama_penerbit';
    protected $allowedFields    = ['id_penerbit', 'kota', 'alamat', 'telepon'];
    
    public function AllData()
    {
        return $this->orderBy('id_penerbit', "asc")->findAll();
    }
    
    public function Tambah($data)
    {
        $this->db->table('buku')->insert($data);
    }

    public function Tambahp($data)
    {
        $this->db->table('penerbit')->insert($data);
    }

    public function ubahdata($data)
    {
        $this->db->table('buku')->where('id_buku', $data['id_buku'])->update($data);
    }
    
    public function ubahdatap($data)
    {
        $this->db->table('penerbit')->where('nama_penerbit', $data['nama_penerbit'])->update($data);
    }

    public function hapusdata($data)
    {
        $this->db->table('buku')->where('id_buku', $data['id_buku'])->delete($data);
    }

    public function hapusdatap($data)
    {
        $this->db->table('penerbit')->where('nama_penerbit', $data['nama_penerbit'])->delete($data);
    }
}