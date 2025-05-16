<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeputusanModel extends Model
{
    protected $table = 'surat_keputusan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no_sk', 'tahun_sk', 'nama_kegiatan_sk', 'tanggal_sk', 'ttd_sk', 'nip'
    ];

    public function getPenanggungjawab($searchTerm)
    {
        $builder = $this->db->table('penanggungjawab');
        $builder->like('nip', $searchTerm);
        $query = $builder->get();

        $data = [];
        foreach ($query->getResultArray() as $row) {
            $data[] = [
                'id'    => $row['nip'],
                'text'  => $row['nip'] . ' - ' . $row['nama'],
                'snip' => $row['nip'],
                'snama' => $row['nama'],
            ];
        }

        return $data;
    }
}