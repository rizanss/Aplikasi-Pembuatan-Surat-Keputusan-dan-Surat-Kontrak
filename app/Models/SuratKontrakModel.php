<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKontrakModel extends Model
{
    protected $table = 'surat_kontrak';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'buku_up', 'uraian_sk_up', 'no_st', 'bln_angka', 'nu_kontrak', 'hari_kontrak', 'tgl_huruf', 'bln_huruf',
        'nama_petugas_kontrak', 'nik_petugas_kontrak', 'alamat_petugas_kontrak', 'jabatan_petugas', 'tgl_mulai', 'tgl_selesai',
        'honorarium_kontrak', 'sebagai_kontrak', 'ttd_petugas'
    ];

    public function getPetugas($searchTerm)
    {
        $builder = $this->db->table('mitra_statistik');
        $builder->like('sobat_id', $searchTerm);
        $query = $builder->get();

        $data = [];
        foreach ($query->getResultArray() as $row) {
            $data[] = [
                'id'    => $row['sobat_id'],
                'text'  => $row['sobat_id'] . ' - ' . $row['nama_pegawai'],
                'snama' => $row['nama_pegawai'],
                'spos'  => $row['posisi'],
            ];
        }

        return $data;
    }
}
