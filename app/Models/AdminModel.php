<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    // protected $table = 'pegawai_bps';
    // protected $primaryKey = 'id';
    // protected $allowedFields = ['nama_pns', 'nip', 'jabatan', 'jenis_kelamin', 'gol', 'pangkat'];

    // DASHBOARD
    public function jmlPegawaiBps(){
        return $this->db->table('pegawai_bps')
                        ->countAll();
    }

    public function jmlMitra(){
        return $this->db->table('mitra_statistik')
                        ->countAll();
    }

    public function jmlCetakSuratKontrak(){
        return $this->db->table('surat_kontrak')
                        ->countAll();
    }

    public function jmlCetakSuratKeputusan(){
        return $this->db->table('surat_keputusan')
                        ->countAll();
    }

    // PEGAWAI BPS
    public function pegawaiBps()
    {
        return $this->db->table('pegawai_bps')
                        ->select('*')
                        ->get()->getResultArray();
    }

    public function getPegawaiById($id)
    {
        return $this->db->table('pegawai_bps')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
    }

    public function addPegawai($data)
    {
        return $this->db->table('pegawai_bps')
                        ->insert($data);
    }

    public function updatePegawai($id, $data)
    {
        return $this->db->table('pegawai_bps')
                        ->where('id', $id)
                        ->update($data);
    }

    public function deletePegawai($id)
    {
        return $this->db->table('pegawai_bps')
                        ->where('id', $id)
                        ->delete();
    }

    // MITRA STATISTIK
    public function mitraStatistik()
    {
        return $this->db->table('mitra_statistik')
            ->select('*')
            ->get()->getResultArray();
    }

    public function getMitraById($id)
    {
        return $this->db->table('mitra_statistik')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
    }

    public function addMitra($data)
    {
        return $this->db->table('mitra_statistik')
                        ->insert($data);
    }

    public function updateMitra($id, $data)
    {
        return $this->db->table('mitra_statistik')
                        ->where('id', $id)
                        ->update($data);
    }

    public function deleteMitra($id)
    {
        return $this->db->table('mitra_statistik')
                        ->where('id', $id)
                        ->delete();
    }

    // PENANGGUNGJAWAB
    public function penanggungjawab()
    {
        return $this->db->table('penanggungjawab')
                        ->select('*')
                        ->get()
                        ->getResultArray();
    }

    public function getPenanggungjawabById($id)
    {
        return $this->db->table('penanggungjawab')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
    }

    public function addPenanggungjawab($data)
    {
        return $this->db->table('penanggungjawab')
                        ->insert($data);
    }

    public function updatePenanggungjawab($id, $data)
    {
        return $this->db->table('penanggungjawab')
                        ->where('id', $id)
                        ->update($data);
    }

    public function deletePenanggungjawab($id)
    {
        return $this->db->table('penanggungjawab')
                        ->where('id', $id)
                        ->delete();
    }
}
