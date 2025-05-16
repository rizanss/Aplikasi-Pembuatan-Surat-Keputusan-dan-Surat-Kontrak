<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\SuratKeputusanModel;
use App\Models\SuratKontrakModel;

class Admin extends Controller
{
    protected $suratKeputusanModel;
    protected $suratKontrakModel;
    protected $adminModel;

    public function __construct()
    {
        $this->ensureAdminIsAuthenticated();
        $this->suratKeputusanModel = new SuratKeputusanModel();
        $this->suratKontrakModel = new SuratKontrakModel();
        $this->adminModel = new AdminModel();
    }

    private function ensureAdminIsAuthenticated()
    {
        $session = session();
        if (!$session->get('logged_in') || $session->get('role') !== 'admin') {
            return redirect()->to('/login')->send();
        }
    }

    public function pegawaibps()
    {
        $pegawai = new AdminModel();

        $data = [
            'title' => 'Data Pegawai | BPS Kota Sukabumi',
            'page'  => 'pegawai-bps',
            'pegawai' => $pegawai->pegawaiBps()
        ];

        return view('admin/pegawai-bps', $data);
    }

    public function storePegawai()
    {
        $data = [
            'nama_pns' => $this->request->getPost('nama_pns'),
            'nip' => $this->request->getPost('nip'),
            'jabatan' => $this->request->getPost('jabatan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'gol' => $this->request->getPost('gol'),
            'pangkat' => $this->request->getPost('pangkat')
        ];
        $this->adminModel->addPegawai($data);
        return redirect()->to('/pegawai-bps');
    }

    public function updatePegawai($id)
    {
        $data = [
            'nama_pns' => $this->request->getPost('nama_pns'),
            'nip' => $this->request->getPost('nip'),
            'jabatan' => $this->request->getPost('jabatan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'gol' => $this->request->getPost('gol'),
            'pangkat' => $this->request->getPost('pangkat')
        ];
        $this->adminModel->updatePegawai($id, $data);
        return redirect()->to('/pegawai-bps');
    }

    public function deletePegawai()
    {
        $id = $this->request->getPost('id');

        if ($id) {
            $this->adminModel->deletePegawai($id);
            return redirect()->to('/pegawai-bps')->with('message', 'Pegawai berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'ID pegawai tidak ditemukan');
        }
    }


    public function mitra()
    {
        $mitra = new AdminModel();

        $data = [
            'title' => 'Data Mitra | BPS Kota Sukabumi',
            'page'  => 'mitra-statistik',
            'mitra' => $mitra->mitraStatistik()
        ];

        return view('admin/mitra-statistik', $data);
    }

    public function storeMitra()
    {
        $data = [
            'sobat_id' => $this->request->getPost('sobat_id'),
            'satker' => $this->request->getPost('satker'),
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'email' => $this->request->getPost('email'),
            'posisi' => $this->request->getPost('posisi')
        ];
        $this->adminModel->addMitra($data);
        return redirect()->to('/mitra-statistik');
    }

    public function updateMitra($id)
    {
        $data = [
            'sobat_id' => $this->request->getPost('sobat_id'),
            'satker' => $this->request->getPost('satker'),
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'email' => $this->request->getPost('email'),
            'posisi' => $this->request->getPost('posisi')
        ];
        $this->adminModel->updateMitra($id, $data);
        return redirect()->to('/mitra-statistik');
    }

    public function deleteMitra()
    {
        $id = $this->request->getPost('id');

        if ($id) {
            $this->adminModel->deleteMitra($id);
            return redirect()->to('/mitra-statistik')->with('message', 'Mitra berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'ID mitra tidak ditemukan');
        }
    }

    public function penanggungjawab()
    {

        $penanggungjawab = new AdminModel();

        $data = [
            'title' => 'Data Penanggungjawab | BPS Kota Sukabumi',
            'page'  => 'penanggungjawab',
            'penanggungjawab' => $penanggungjawab->penanggungjawab()
        ];

        return view('admin/penanggungjawab', $data);
    }

    public function storePenanggungjawab()
    {
        $data = [
            'jabatan' => $this->request->getPost('jabatan'),
            'nama' => $this->request->getPost('nama'),
            'nip' => $this->request->getPost('nip'),
        ];
        $this->adminModel->addPenanggungjawab($data);
        return redirect()->to('/penanggungjawab');
    }

    public function updatePenanggungjawab($id)
    {
        $data = [
            'jabatan' => $this->request->getPost('jabatan'),
            'nama' => $this->request->getPost('nama'),
            'nip' => $this->request->getPost('nip'),
        ];
        $this->adminModel->updatePenanggungjawab($id, $data);
        return redirect()->to('/penanggungjawab');
    }

    public function deletePenanggungjawab()
    {
        $id = $this->request->getPost('id');

        if ($id) {
            $this->adminModel->deletePenanggungjawab($id);
            return redirect()->to('/penanggungjawab')->with('message', 'Penanggungjawab berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'ID Penanggungjawab tidak ditemukan');
        }
    }

    public function riwayatPengisian()
    {
        $data['riwayat_surat_keputusan'] = $this->suratKeputusanModel->findAll();
        $data['riwayat_surat_kontrak'] = $this->suratKontrakModel->findAll();

        return view('admin/riwayat-pengisian', $data);
    }
}
