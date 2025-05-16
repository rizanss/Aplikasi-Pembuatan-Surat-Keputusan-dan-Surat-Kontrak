<?php

namespace App\Controllers;

use App\Models\MitraStatistikModel;
use App\Models\PegawaiBpsModel;
use App\Models\PenanggungjawabModel;
use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\SuratKontrakModel;
use App\Models\SuratKeputusanModel;
use Dompdf\Dompdf;
use Dompdf\Options;
use CodeIgniter\Controller;

class User extends Controller
{
    protected $adminModel;
    protected $userModel;
    protected $suratKontrakModel;
    protected $suratKeputusanModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->userModel = new UserModel();
        $this->suratKontrakModel = new SuratKontrakModel();
        $this->suratKeputusanModel = new SuratKeputusanModel();
        $this->ensureUserIsAuthenticated();
    }

    private function ensureUserIsAuthenticated()
    {
        $session = session();
        if (!$session->get('logged_in') || $session->get('role') !== 'user') {
            return redirect()->to('/login')->send();
        }
    }

    public function dashboard()
    {
        $amount = new AdminModel();
        $data = [
            'title' => 'Dashboard | BPS Kota Sukabumi',
            'page'  => 'dashboard',
            'totalPegawaiBps' => $amount->jmlPegawaiBps(),
            'totalMitraStatistik' => $amount->jmlMitra(),
            'totalCetakKontrak' => $amount->jmlCetakSuratKontrak(),
            'totalCetakKeputusan' => $amount->jmlCetakSuratKeputusan(),
        ];

        return view('/users/dashboard', $data);
    }

    public function suratKontrak()
    {
        return view('users/surat-kontrak');
    }

    public function prosesSuratKontrak()
    {
        $request = service('request');

        // Ambil data dari form
        $buku_up = $request->getPost('buku_up');
        $uraian_sk_up = $request->getPost('uraian_sk_up');
        $no_st = $request->getPost('no_st');
        $nu_kontrak = $request->getPost('nu_kontrak');
        $bln_angka = $request->getPost('bln_angka');
        $hari_kontrak = $request->getPost('hari_kontrak');
        $tgl_huruf = $request->getPost('tgl_huruf');
        $bln_huruf = $request->getPost('bln_huruf');
        $sobat_id = $request->getPost('sobat_id'); // Ambil sobat_id dari form
        $nik_petugas_kontrak = $request->getPost('nik_petugas_kontrak');
        $alamat_petugas_kontrak = $request->getPost('alamat_petugas_kontrak');
        $jabatan_petugas = $request->getPost('jabatan_petugas');
        $tgl_mulai = $request->getPost('tgl_mulai');
        $tgl_selesai = $request->getPost('tgl_selesai');
        $honorarium_kontrak = $request->getPost('honorarium_kontrak');
        $ttd_petugas = $request->getPost('ttd_petugas');

        // Ambil data mitra berdasarkan sobat_id
        $mitra = $this->suratKontrakModel->db->table('mitra_statistik')->where('sobat_id', $sobat_id)->get()->getFirstRow('array');

        if ($mitra) {
            $nama_petugas_kontrak = $mitra['nama_pegawai'];
            $ttd_petugas = $mitra['nama_pegawai'];
            $sebagai_kontrak = $mitra['posisi'];
        } else {
            // Handle jika sobat_id tidak ditemukan di mitra_statistik
            $nama_petugas_kontrak = 'tidak ditemukan';
            $ttd_petugas = 'tidak ditemukan';
            $sebagai_kontrak = 'tidak ditemukan';
        }

        // Load view untuk generate PDF
        $data = [
            'buku_up' => $buku_up,
            'uraian_sk_up' => $uraian_sk_up,
            'no_st' => $no_st,
            'nu_kontrak' => $nu_kontrak,
            'bln_angka' => $bln_angka,
            'hari_kontrak' => $hari_kontrak,
            'tgl_huruf' => $tgl_huruf,
            'bln_huruf' => $bln_huruf,
            'nama_petugas_kontrak' => $nama_petugas_kontrak,
            'nik_petugas_kontrak' => $nik_petugas_kontrak,
            'alamat_petugas_kontrak' => $alamat_petugas_kontrak,
            'jabatan_petugas' => $jabatan_petugas,
            'tgl_mulai' => $tgl_mulai,
            'tgl_selesai' => $tgl_selesai,
            'honorarium_kontrak' => $honorarium_kontrak,
            'sebagai_kontrak' => $sebagai_kontrak,
            'ttd_petugas' => $ttd_petugas,
        ];

        // Simpan data ke database
        $this->suratKontrakModel->insert($data);

        $html = view('template/surat-kontrak-template', $data);

        // Generate PDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        // Render PDF (optional: set paper size and orientation)
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Output PDF to browser
        $dompdf->stream('surat_kontrak.pdf', array('Attachment' => 0));
    }

    public function getPetugas()
    {
        $suratKontrakModel = new SuratKontrakModel();

        $searchTerm = $this->request->getPost('searchTerm');

        $results = $suratKontrakModel->getPetugas($searchTerm);

        return $this->response->setJSON($results);
    }

    public function suratKeputusan()
    {
        return view('users/surat-keputusan');
    }

    public function prosesSuratKeputusan()
    {
        $request = service('request');

        // Ambil data dari form
        $no_sk = $request->getPost('no_sk');
        $tahun_sk = $request->getPost('tahun_sk');
        $nama_kegiatan_sk = $request->getPost('nama_kegiatan_sk');
        $nip = $request->getPost('nip'); // Ambil nama penanggungjawab dari form
        $tanggal_sk = $request->getPost('tanggal_sk');

        // Validasi input
        if (!$no_sk || !$tahun_sk || !$nama_kegiatan_sk || !$nip || !$tanggal_sk) {
            return redirect()->back()->with('error', 'Semua field harus diisi.');
        }

        // Ambil data mitra berdasarkan sobat_id
        $penanggungjawab = $this->suratKeputusanModel->db->table('penanggungjawab')->where('nip', $nip)->get()->getFirstRow('array');

        if ($penanggungjawab) {
            $nip = $penanggungjawab['nip'];
            $ttd_sk = $penanggungjawab['nama'];
        } else {
            // Handle jika nama tidak ditemukan di penanggungjawab
            $nip = 'tidak ditemukan';
            $ttd_sk = 'tidak ditemukan';
        }

        // Load view untuk generate PDF
        $data = [
            'no_sk' => $no_sk,
            'tahun_sk' => $tahun_sk,
            'nama_kegiatan_sk' => $nama_kegiatan_sk,
            'tanggal_sk' => $tanggal_sk,
            'ttd_sk' => $ttd_sk,
            'nip' => $nip
        ];

        // Simpan data ke database
        $this->suratKeputusanModel->insert($data);

        $html = view('template/surat-keputusan-template-kedua', $data);

        // Generate PDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        // Render PDF (optional: set paper size and orientation)
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Output PDF to browser
        $dompdf->stream('surat_keputusan.pdf', array('Attachment' => 0));
    }

    public function getPenanggungjawab()
    {
        $searchTerm = $this->request->getPost('searchTerm');
        $results = $this->suratKeputusanModel->getPenanggungjawab($searchTerm);
        return $this->response->setJSON($results);
    }
}
