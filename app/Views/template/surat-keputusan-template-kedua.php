<html>

<head>
    <title>Document</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 30px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 100px;
        }

        .content table {
            width: 100%;
            margin: 10px 0;
        }

        .content table tr td:nth-child(1) {
            width: 17%;
            font-size: 15px;
        }

        .content table tr td:nth-child(2) {
            width: 3%;
        }

        .content table tr td:nth-child(3) {
            width: 80%;
        }

        .content td {
            vertical-align: top;
        }

        .header h1 {
            font-size: 16px;
            margin: 5px 0;
            font-style: italic;
            margin-bottom: 20px;
        }

        li {
            text-align: justify;
            font-size: 14px;
        }

        .header h2 {
            margin: 5px 0;
            font-size: 15px;
        }

        .content p {
            font-size: 14px;
        }

        .header h3 {
            font-size: 14px;
        }

        .header .tentang {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .content {
            margin-bottom: 10px;
        }

        /* .content div {
            width: 100%;
            display: flex;
            justify-content: flex-start; 
            margin-bottom: 10px;
        } */

        /* .content .label {
            width: 25%; 
            font-weight: bold;
            text-align: left; // Label diatur ke kiri 
        } */

        /* .content .value {
            width: 75%; 
            text-align: justify;
        } */

        ol {
            padding-left: 20px;
        }

        ol li {
            margin-bottom: 9px;
        }

        .content h3 {
            text-align: center;
            font-size: 14px;
            margin: 20px 0;
        }

        .content p {
            margin: 10px 0;
            text-align: justify;
        }

        .content ol {
            margin: 0 0 10px 20px;
        }

        /* .footer {
            text-align: right;
            margin-top: 15px;
            font-size: 14px;  
        }

        .footer .signature {
            margin-top: 20px;
            font-size: 14px;    
        } */

        .footer {
            text-align: left; /* Align text to the left */
            margin-top: 15px;
            font-size: 14px;
        }

        .footer .location {
            margin-left: 428px;
        }

        .footer .signature {
            text-align: center; /* Center the signature */
            font-size: 14px;
            margin-left: 400px; /* Aligns the signature to the right */
        }

        .footer .line {
            border-top: 2px solid black; /* Add line above signature */
            width: 60%; /* Adjust line width */
            margin: 10px auto; /* Center the line */
        }
    </style>
</head>

<body>
    <div class="header">
        <img alt="Logo of Badan Pusat Statistik Kota Sukabumi" height="100"
            src="https://res.cloudinary.com/dpgrmhiz3/image/upload/v1729500492/logo_bps_hfmutl.png" width="100" />
        <h1>Badan Pusat Statistik Kota Sukabumi</h1>
        <h2>KEPUTUSAN KUASA PENGGUNA ANGGARAN</h2>
        <h2>NOMOR : <?= esc($no_sk) ?>/32720/KPA Tahun <?= esc($tahun_sk) ?></h2>
        <h3 class="tentang">TENTANG</h3>
        <h3>PENETAPAN PETUGAS <?= esc($nama_kegiatan_sk) ?></h3>
        <h3>BADAN PUSAT STATISTIK KOTA SUKABUMI</h3>
        <h3>TAHUN ANGGARAN <?= esc($tahun_sk) ?></h3>
    </div>
    <div class="content">
        <p>Lamprian : 1 (satu) daftar</p>
        <h3>KUASA PENGGUNA ANGGARAN</h3>

        <table>
            <tr>
                <td>Menimbang</td>
                <td>:</td>
                <td>
                    <ol style="list-style-type: none;">
                        <li>bahwa untuk kelancaran pelaksanaan kegiatan <?= esc($nama_kegiatan_sk) ?> Badan Pusat Statistik Kota Sukabumi Tahun Anggaran <?= esc($tahun_sk) ?> pada Badan Pusat Statistik Kota Sukabumi, maka perlu menetapkan nama-nama Petugas <?= esc($nama_kegiatan_sk) ?> Kota Sukabumi Tahun Anggaran <?= esc($tahun_sk) ?>.</li>
                    </ol>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>Mengingat</td>
                <td>:</td>
                <td>
                    <ol>
                        <li>Undang-undang Nomor 16 Tahun 1997 tentang Statistik (Lembaran Negara Tahun 1997 Nomor 39, Tambahan Lembaran Negara Nomor 3683);</li>
                        <li>Undang-undang Republik Indonesia Nomor 15 Tahun 2017 tentang Anggaran Pendapatan dan Belanja Negara Tahun Anggaran 2018;</li>
                        <li>Peraturan Pemerintah Nomor 40 Tahun 1994 tentang Rumah Negara;</li>
                        <li>Keputusan Presiden Nomor 103 Tahun 2001 tentang Kedudukan, Tugas, Fungsi, Kewenangan, Susunan Organisasi dan Tata Kerja Lembaga Pemerintah Non Departemen sebagaimana telah beberapa kali diubah terakhir dengan Peraturan Presiden Nomor 64 Tahun 2005;</li>
                        <li>Keputusan Presiden Nomor 42 Tahun 2002 tentang Pedoman Pelaksanaan Anggaran Pendapatan dan Belanja Negara (Lembaran Negara Republik Indonesia Tahun 2002 Nomor 73, Tambahan Lembaran Negara Republik Indonesia Nomor 4212) sebagaimana telah diubah dengan Keputusan Presiden Nomor 72 Tahun 2004 (Lembaran Negara Republik Indonesia Tahun 2004 Nomor 92, Tambahan Lembaran Negara Republik Indonesia Nomor 4418);</li>
                        <li>Keputusan Menteri Sekretaris Negara RI Nomor 27 Tahun 1989 tanggal 21 April 1989 dan Nomor 29 Tahun 1990 tanggal 21 Juli 1990 tentang Penetapan Status Rumah Negara Golongan I (Rumah Jabatan) milik Badan Pusat Statistik;</li>
                    </ol>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <ol>
                        <li>Peraturan Kepala Badan Pusat Statistik Nomor 10 Tahun 2017 tentang Perubahan atas Keputusan Kepala Badan Pusat Statistik Nomor 121 Tahun 2001 tentang Organisasi dan Tata Kerja Perwakilan Badan Pusat Statistik di Daerah;</li>
                        <li>Keputusan Kepala Badan Pusat Statistik Nomor : 1221001/3200/BP Tahun 2023 Tanggal 21 Desember 2023 tentang Pengelola Anggaran Badan Pusat Statistik Provinsi Jawa Barat Tahun Anggaran 2024.</li>
                    </ol>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>Memperhatikan</td>
                <td>:</td>
                <td>
                    <ol style="list-style-type: none;">
                        <li>Daftar Isian Pelaksanaan Anggaran Perikan. Badan Pusat Statistik Kota Sukabumi Nomor: SP DIPA-054.01.2.018767/<?= esc($tahun_sk) ?> tanggal 28 November 2023;</li>
                    </ol>
                </td>
            </tr>
        </table>

        <h3>MEMUTUSKAN</h3>
        <p>KEPUTUSAN KUASA PENGGUNA ANGGARAN BADAN PUSAT STATISTIK KOTA SUKABUMI NOMOR : <?= esc($no_sk) ?>/32780/KPA TAHUN <?= esc($tahun_sk) ?> TENTANG NAMA-NAMA PETUGAS <?= esc($nama_kegiatan_sk) ?> TAHUN <?= esc($tahun_sk) ?></p>
        <!-- More content here -->
        <p>Menetapkan</p>

        <table>
            <tr>
                <td>PERTAMA</td>
                <td>:</td>
                <td>
                    <ol style="list-style-type: none;">
                        <li>Menetapkan mereka yang namanya tersebut dalam lampiran 1 (satu) Surat Keputusan ini sebagai Petugas <?= esc($nama_kegiatan_sk) ?> Sukabumi Tahun Anggaran <?= esc($tahun_sk) ?>;</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>KEDUA</td>
                <td>:</td>
                <td>
                    <ol style="list-style-type: none;">
                        <li>Petugas <?= esc($nama_kegiatan_sk) ?> Badan Pusat Statistik Kota Sukabumi Tahun Anggaran <?= esc($tahun_sk) ?> yang namanya tersebut dalam lampiran 1 (satu) melaksanakan tugas sesuai jadwal yang ditetapkan;</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>KETIGA</td>
                <td>:</td>
                <td>
                    <ol style="list-style-type: none;">
                        <li>Petugas Pencacah <?= esc($nama_kegiatan_sk) ?> Badan Pusat Statistik Kota Sukabumi Tahun Anggaran <?= esc($tahun_sk) ?> yang merupakan Mitra Statistik akan mendapatkan honor per dokumen seperti tersebut dalam lampiran 1 (satu), dengan dikenakan pajak sesuai aturan yang berlaku;</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>KEEMPAT</td>
                <td>:</td>
                <td>
                    <ol style="list-style-type: none;">
                        <li>Petugas Pemeriksa Lapangan <?= esc($nama_kegiatan_sk) ?> Badan Pusat Statistik Kota Sukabumi Tahun Anggaran <?= esc($tahun_sk) ?> yang merupakan Pegawai Organik Badan Pusat Statistik akan mendapatkan transport lokal sesuai aturan yang berlaku;</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>KELIMA</td>
                <td>:</td>
                <td>
                    <ol style="list-style-type: none;">
                        <li>Keputusan ini berlaku terhitung sejak tanggal ditetapkan, dengan ketentuan bahwa apabila ternyata terdapat kekeliruan akan diperbaiki sebagaimana mestinya apabila didalamnya hari ternyata terdapat kekeliruan dalam keputusan ini.</li>
                    </ol>
                </td>
            </tr>
        </table>
        <!-- Bagian lainnya disusun serupa -->
    </div>
    <!-- <div class="footer">
        <!-- <table>
            <tr>
                <td>Ditetapkan di</td>
                <td>:</td>
                <td>SUKABUMI</td>
            </tr>
            <tr>
                <td>Pada tanggal</td>
                <td>:</td>
                <td><?= esc($tanggal_sk) ?></td>
            </tr>
        </table> 
        <p>Ditetapkan di: SUKABUMI</p>
        <p>Pada tanggal: <?= esc($tanggal_sk) ?></p>
        <div class="signature">
            <p>KUASA PENGGUNA ANGGARAN</p>
            <p>BPS KOTA SUKABUMI,</p>
            <br><br><br>
            <p><?= esc($ttd_sk) ?></p>
            <p>NIP. <?= esc($nip) ?></p>
        </div>
    </div> -->
    <div class="footer">
        <div class="location">
            <p>Ditetapkan di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : SUKABUMI</p>
            <p>Pada tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= esc($tanggal_sk) ?></p>
        </div>
        <div class="signature">
            <div class="line"></div>
            <p>KUASA PENGGUNA ANGGARAN</p>
            <p>BPS KOTA SUKABUMI,</p>
            <br><br><br>
            <u><strong><?= esc($ttd_sk) ?></strong></u>
            <p>NIP. <?= esc($nip) ?></p>
        </div>
    </div>
</body>

</html>