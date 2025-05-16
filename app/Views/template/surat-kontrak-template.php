<html>

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  <style type="text/css">
    @import url(https://themes.googleusercontent.com/fonts/css?kit=zqpv9qCntOqpqyzFcziM2jFXDelBu2lgpLV8Tx-HAlTk6Lzqt4v4L9kq0HzGZ6Gj);

    body {
      font-family: 'Bookman Old Style', Georgia, serif;
      margin: 2.5;
      line-height: 1.2;
      word-spacing: 1.5;
      text-align: justify;
    }

    .surat-kontrak {
      margin: 20px 70px;
      font-size: 15px;
    }

    .judul {
      line-height: 2px;
      text-align: center;
      font-size: 15px;
      font-weight: bolder;
    }

    .nama_petugas {
      text-align: left;
    }

    .paragraf-1 {
      margin-top: -60px;
    }

    .pasal-1,
    .pasal-2,
    .pasal-3,
    .pasal-4,
    .pasal-5 .pasal-6,
    .pasal-7,
    .pasal-8,
    .pasal-9,
    .pasal-10 {
      margin-top: -25px;
    }

    .doc-content {
      max-width: 800px;
      margin: 0 auto;
    }

    .c35,
    .c6 {
      text-align: center;
      font-weight: bold;
    }

    .c18,
    .c14,
    .c18 .c14 {
      text-align: justify;
    }


    /* table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    } */

    td {
      padding: 3px;
      vertical-align: top;
    }

    /* .c70 td,
    .c62 td {
      border: 1px solid black;
    } */

    .c0 {
      text-align: left;
    }

    .c45 {
      width: 5%;
    }

    tr {
      margin-top: -30px;
    }

    .c21,
    .c27 {
      width: 45%;
    }

    .c59 {
      width: 5%;
    }

    ol {
      margin-left: 20px;
    }

    ol.lst-kix_list_5-0,
    ol.lst-kix_list_1-0,
    ol.lst-kix_list_2-0,
    ol.lst-kix_list_3-0,
    ol.lst-kix_list_4-0 {
      list-style-type: none;
    }

    li {
      list-style-type: none;
    }

    ol.lst-kix_list_5-0>li:before,
    ol.lst-kix_list_1-0>li:before,
    ol.lst-kix_list_2-0>li:before,
    ol.lst-kix_list_3-0>li:before,
    ol.lst-kix_list_4-0>li:before {
      content: counter(list, decimal) ". ";
      counter-increment: list;
    }

    ol.start {
      counter-reset: list;
    }

    p.c3 {
      margin: 0;
    }

    .signature table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .signature table td {
      width: 50%;
      text-align: center;
      padding: 50px;
      font-weight: bold;
    }
  </style>
</head>

<body class="c61 doc-content">
  <div class="surat-kontrak">

    <!-- JUDUL -->
    <div class="judul">
      <p class="c35">
        <span class="c25 c4 c11">PERJANJIAN KERJA &nbsp; &nbsp; &nbsp;</span>
      </p>
      <p class="c35"><span class="c25 c4 c11"><?= esc($buku_up) ?> <?= esc($uraian_sk_up) ?> 2024</span></p>
      <p class="c35">
        <span class="c25 c4 c11">PADA BADAN PUSAT STATISTIK KOTA SUKABUMI</span>
      </p>
      <p class="c35">
        <span class="c4">NOMOR : </span><span class="c37 c71"><?= esc($no_st) ?>.<?= esc($bln_angka) ?>.<?= esc($nu_kontrak) ?>/32720/VS.000/2024</span>
      </p>
    </div>

    <p class="c18">
      <span class="c1">Pada hari ini <?= esc($hari_kontrak) ?>, tanggal <?= esc($tgl_huruf) ?>,
        bulan <?= esc($bln_huruf) ?>, tahun Dua ribu dua puluh empat,
        bertempat di Jalan Selabintana &nbsp;No.14 Sukabumi, yang bertanda
        tangan di bawah ini :</span>
    </p>
    <a id="t.5c7338e771a6d775be1e1df97e23fdf96cc02115"></a><a id="t.0"></a>

    <!-- PIHAK PERTAMA & PIHAK KEDUA -->
    <div class="pihak">
      <table>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">1</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1">WISHNU EKA SAPUTRA, S.P., M.M.</span></p>
          </td>
          <td class="c59">
            <p class="c18"><span class="c1">:</span></p>
          </td>
          <td class="c27">
            <p class="c18">
              <span class="c13">Pejabat Pembuat Komitmen Badan Pusat Statistik Kota Sukabumi,
                berkedudukan di BPS Kota Sukabumi, bertindak untuk dan atas nama
                Badan Pusat Statistik Kota Sukabumi, selanjutnya disebut sebagai </span><span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c1">.</span>
            </p>
          </td>
        </tr>
        <tr class="pihak-kedua">
          <td class="c45">
            <p class="c18"><span class="c1">2.</span></p>
          </td>
          <td class="c21" colspan="1" rowspan="2">
            <p class="c18"><span class="nama_petugas"><?= esc($nama_petugas_kontrak) ?></span></p>
          </td>
          <td class="c59">
            <p class="c18"><span class="c1">:</span></p>
          </td>
          <td class="c27">
            <p class="c18"><span class="c1">NIK : <?= esc($nik_petugas_kontrak) ?><br />
                <?= esc($alamat_petugas_kontrak) ?>, selanjutnya disebut sebagai </span><span class="c4"><strong>PIHAK KEDUA</strong></span></span>.</p>
          </td>
        </tr>
      </table>
    </div>

    <div class="paragraf-1">
      <p class="c18">
        <span class="c13">bahwa </span><span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c13">&nbsp;dan </span><span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c13">&nbsp;yang secara bersama-sama disebut </span><span class="c4">PARA PIHAK</span><span class="c1">, sepakat untuk mengikatkan diri dalam Perjanjian Kerja Petugas
          <?= esc($jabatan_petugas) ?> <?= esc($uraian_sk_up) ?> &nbsp;2024
          &nbsp;pada Badan Pusat Statistik Kota Sukabumi yang selanjutnya disebut
          Perjanjian, dengan ketentuan-ketentuan sebagai berikut:</span>
      </p>
    </div>

    <!-- PASAL 1 -->
    <div class="pasal-1">
      <p class="c6"><span class="c25 c4 c11">Pasal 1</span></p>
      <p class="c18">
        <span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c13">&nbsp;memberikan pekerjaan kepada </span><span class="c4">PIHAK KEDUA</span><span class="c13">&nbsp;dan </span><span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c13">&nbsp;menerima pekerjaan dari </span><span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c13">&nbsp;sebagai &nbsp;Petugas <?= esc($jabatan_petugas) ?>
          <?= esc($uraian_sk_up) ?> 2024 &nbsp;pada Badan Pusat Statistik Kota
          Sukabumi, dengan lingkup pekerjaan yang ditetapkan oleh </span><span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c13">. </span>
      </p>
    </div>


    <!-- PASAL 2 -->
    <div class="pasal-2">
      <p class="c6"><span class="c25 c4 c11">Pasal 2</span></p>
      <p class="c18" id="h.gjdgxs">
        <span class="c13">Ruang lingkup pekerjaan dalam Perjanjian ini mengacu pada tugas dan
          tanggung jawab sebagaimana tertuang dalam Buku Pedoman
          <?= esc($buku_up) ?> <?= esc($uraian_sk_up) ?> 2024 dan
          ketentuan-ketentuan yang ditetapkan oleh </span><span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c1">.</span>
      </p>
    </div>


    <!-- PASAL 3 -->
    <div class="pasal-3">
      <p class="c6"><span class="c25 c4 c11">Pasal 3</span></p>
      <p class="c18">
        <span class="c13 c11">Jangka Waktu Perjanjian terhitung sejak tanggal </span><span class="c13"><?= esc($tgl_mulai) ?></span><span class="c13 c11">&nbsp;sampai dengan tanggal </span><span class="c13"><?= esc($tgl_selesai) ?></span><span class="c1">.</span>
      </p>
    </div>


    <!-- PASAL 4 -->
    <div class="pasal-4">
      <p class="c6"><span class="c25 c4 c11">Pasal 4</span></p>
      <p class="c18" id="h.30j0zll">
        <span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c13">&nbsp;berkewajiban dan bertanggung jawab melaksanakan seluruh pekerjaan
          yang diberikan oleh </span><span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c13">&nbsp;sampai selesai, sesuai ruang lingkup pekerjaan sebagaimana
          dimaksud dalam Pasal 2 dan mematuhi ketentuan-ketentuan yang ditetapkan
          oleh </span><span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c13">.</span>
      </p>
    </div>


    <!-- PASAL 5 -->
    <div class="pasal-5">
      <p class="c6"><span class="c25 c4 c11">Pasal 5</span></p>
      <table>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(1)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1"><strong>PIHAK KEDUA</strong></span><span class="c13 c11">&nbsp; sebagai <?= esc($jabatan_petugas) ?> berhak untuk mendapatkan honorarium petugas dari </span><span class="c4 c11"><strong>PIHAK PERTAMA</strong> </span><span class="c1">sebesar <?= esc($honorarium_kontrak) ?> per Rumah Tangga yang
                berhasil didata untuk pekerjaan sebagaimana dimaksud dalam Pasal 2, sudah termasuk biaya
                pajak, bea materai, pulsa dan kuota internet untuk komunikasi, jasa
                pelayanan keuangan dan biaya </span><span class="c13">perjalanan ke kantor Badan Pusat Statistik Kota Sukabumi jika dilakukan
                pemanggilan oleh </span><span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c13">&nbsp;untuk konfirmasi hasil pencacahan</span><span class="c1">.</span></p>
          </td>
        </tr>
        <tr class="c48">
          <td class="c45">
            <p class="c18"><span class="c1">(2)</span></p>
          </td>
          <td class="c21" colspan="1" rowspan="2">
            <p class="c18"><span class="c1"><strong>PIHAK KEDUA</strong></span><span class="c13 c11">&nbsp;tidak diberikan honorarium tambahan apabila melakukan kunjungan
                di luar jadwal atau terdapat tambahan waktu penyelesaian pelaksanaan
                pekerjaan </span><span class="c13"><?= esc($sebagai_kontrak) ?></span><span class="c1">.</span></p>
          </td>
        </tr>
      </table>
    </div>

    <!-- PASAL 6 -->
    <div class="pasal-6">
      <p class="c6"><span class="c25 c4 c11">Pasal 6</span></p>
      <table>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(1)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1">Pembayaran honorarium sebagaimana dimaksud dalam Pasal 5 ayat (1)
                dilakukan setelah </span><span class="c4 c11"><strong>PIHAK KEDUA</strong></span><span class="c13 c11">&nbsp;menyelesaikan dan menyerahkan seluruh hasil pekerjaan
                sebagaimana dimaksud dalam Pasal 2 kepada </span><span class="c4 c11"><strong>PIHAK PERTAMA</strong> </span><span class="c1">dibuktikan dengan Berita Acara Serah Terima Pekerjaan.</span></p>
          </td>
        </tr>
        <tr class="c48">
          <td class="c45">
            <p class="c18"><span class="c1">(2)</span></p>
          </td>
          <td class="c21" colspan="1" rowspan="2">
            <p class="c18"><span class="c1">Pembayaran sebagaimana dimaksud pada ayat (1) dilakukan oleh </span><span class="c4 c11"><strong>PIHAK PERTAMA</strong> </span><span class="c13 c11">kepada </span><span class="c4 c11"><strong>PIHAK KEDUA</strong> </span><span class="c1">sesuai dengan ketentuan peraturan perundang-undangan.</span></p>
          </td>
        </tr>
      </table>
    </div>


    <!-- PASAL 7 -->
    <div class="pasal-7">
      <p class="c6"><span class="c25 c4 c11">Pasal 7</span></p>
      <p class="c18">
        <span class="c1">Penyerahan seluruh hasil pekerjaan lapangan sebagaimana dimaksud dalam
          Pasal 2 dilakukan secara bertahap dan berjenjang sampai pada Badan Pusat
          Statistik Kota Sukabumi sesuai dengan waktu yang ditentukan pada Buku
          Pedoman <?= esc($buku_up) ?> <?= esc($uraian_sk_up) ?> 2024 pada setiap bulan berjalan.</span>
      </p>
    </div>


    <!-- PASAL 8 -->
    <div class="pasal-8">
      <p class="c6">
        <span class="c25 c4 c11">Pasal 8</span>
      </p>
      <p class="c18">
        <span class="c4"><strong>PIHAK KEDUA</strong> </span><span class="c13">bersedia hadir di kantor Badan Pusat Statistik Kota Sukabumi jika </span><span class="c4"><strong>PIHAK PERTAMA</strong> </span><span class="c13">memerlukan konfirmasi terhadap hasil pekerjaan</span><span class="c4">&nbsp;<strong>PIHAK KEDUA</strong></span><span class="c1">.</span>
      </p>
    </div>


    <!-- PASAL 9 -->
    <div class="pasal-9">
      <p class="c6 text-center"><span class="c25 c4 c11">Pasal 9</span></p>
      <table>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(1)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1"><strong>PIHAK PERTAMA</strong> </span><span class="c13">dapat memutuskan Perjanjian ini secara sepihak sewaktu-waktu dalam hal </span><span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c1">&nbsp;tidak dapat melaksanakan kewajibannya sebagaimana dimaksud dalam
                Pasal 4, dengan menerbitkan Surat Pemutusan Perjanjian Kerja.</span></p>
          </td>
        </tr>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(2)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1">Dalam hal </span><span class="c4"><strong>PIHAK PERTAMA</strong></span><span class="c13">&nbsp;memutuskan Perjanjian sebagaimana dimaksud pada ayat (1), maka </span><span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c13">&nbsp;tidak menerima dan tidak dapat menuntut pembayaran honorarium
                dalam bentuk apapun atas pekerjaan yang sudah selesai dilaksanakan oleh </span><span class="c4"><strong>PIHAK KEDUA</strong></span></p>
          </td>
        </tr>
        <tr class="c48">
          <td class="c45">
            <p class="c18"><span class="c1">(3)</span></p>
          </td>
          <td class="c21" colspan="1" rowspan="2">
            <p class="c18"><span class="c1">Apabila </span><span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c13">&nbsp;diberhentikan sebagaimana dimaksud pada ayat (1), maka </span><span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c13">&nbsp;wajib mengembalikan biaya briefing/pelatihan yang telah
                dikeluarkan oleh </span><span class="c4"><strong>PIHAK PERTAMA</strong></span></p>
          </td>
        </tr>
      </table>
    </div>


    <!-- PASAL 10 -->
    <div class="pasal-10">
      <p class="c6 text-center"><span class="c25 c4 c11">Pasal 10</span></p>
      <table>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(1)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1"><strong>PIHAK PERTAMA</strong></span><span class="c13">&nbsp;membayarkan honorarium dengan menerbitkan Surat Pemutusan
                Perjanjian Kerja &nbsp;kepada </span><span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c13">&nbsp;secara proporsional sesuai pekerjaan yang telah dilaksanakan
                dalam hal </span><span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c1">&nbsp;tidak dapat melaksanakan kewajibannya karena:</span></p>
            <ul>
              <li>a. Meninggal dunia;</li>
              <li>b. Sakit dengan keterangan rawat inap;</li>
              <li>c. Terindikasi terinfeksi Covid-19;</li>
              <li>d. Kecelakaan dengan keterangan kepolisian; dan/atau</li>
              <li>e. Ketentuan lain yang ditetapkan oleh </span><span class="c4"><strong>PIHAK PERTAMA</strong></span></li>
            </ul>
          </td>
        </tr>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(2)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1">Pembayaran honorarium sebagaimana dimaksud pada ayat (1) dibayarkan
                berdasarkan alokasi beban tugas petugas yang ditetapkan oleh </span><span class="c4 c11"><strong>PIHAK PERTAMA</strong></span></p>
          </td>
        </tr>
      </table>
    </div>


    <!-- PASAL 11 -->
    <div class="pasal-11">
      <p class="c6" id="h.3znysh7"><span class="c25 c4 c11">Pasal 11</span></p>
      <p class="c18">
        <span class="c4"><strong>PIHAK PERTAMA</strong> </span><span class="c13">berhak melakukan penilaian kinerja terhadap </span><span class="c4"><strong>PIHAK KEDUA</strong></span><span class="c13">&nbsp;berdasarkan ketepatan waktu penyelesaian pekerjaan, kualitas
          hasil pekerjaan, sikap dan kriteria lain sebagai bahan pertimbangan
          untuk diikutsertakan pada kegiatan Badan Pusat Statistik
          selanjutnya.</span>
      </p>
    </div>

    <!-- PASAL 12  -->
    <div class="pasal-12">
      <p class="c6 text-center"><span class="c25 c4 c11">Pasal 12</span></p>
      <table>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(1)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1"><strong>PARA PIHAK</strong> </span><span class="c1">untuk waktu yang tidak terbatas dan/atau tidak terikat kepada masa
                berlakunya Perjanjian ini, menjamin kerahasiaan, penggunaan, dan
                pengamanan data/informasi yang diterima/diperoleh, serta menjamin bahwa
                data/informasi tersebut hanya dipergunakan untuk melaksanakan tujuan
                menurut Perjanjian ini.</span></p>
          </td>
        </tr>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(2)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1"><span class="c4"><strong>PARA PIHAK</strong> </span><span class="c1">tidak diperkenankan memberikan dan mengungkapkan data/informasi
                  sebagaimana dimaksud pada ayat (1) dalam bentuk apapun kepada pihak
                  lain.</span></span></p>
          </td>
        </tr>
        <tr class="c48">
          <td class="c45">
            <p class="c18"><span class="c1">(3)</span></p>
          </td>
          <td class="c21" colspan="1" rowspan="2">
            <p class="c18"><span class="c1">Apabila <span class="c4"><strong>PARA PIHAK</strong> </span><span class="c1">melanggar ketentuan sebagaimana dimaksud pada ayat (1) dan ayat (2),
                  akan diberhentikan dan diberikan sanksi sesuai ketentuan peraturan
                  perundang-undangan yang berlaku.</span></span></p>
          </td>
        </tr>
      </table>
    </div>


    <!-- PASAL 13 -->
    <div class="pasal-13">
      <p class="c6 text-center"><span class="c25 c4 c11">Pasal 13</span></p>
      <table>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(1)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1">Apabila terjadi Keadaan Kahar, yang meliputi bencana alam dan bencana
                sosial, </span><span class="c4 c11"><strong>PIHAK KEDUA</strong> </span><span class="c13 c11">memberitahukan kepada </span><span class="c4 c11"><strong>PIHAK PERTAMA</strong> </span><span class="c1">dalam waktu paling lambat 7 (tujuh) hari sejak mengetahui atas
                kejadian Keadaan Kahar dengan menyertakan bukti.</span></span></p>
          </td>
        </tr>
        <tr class="c48">
          <td class="c45">
            <p class="c18"><span class="c1">(2)</span></p>
          </td>
          <td class="c21" colspan="1" rowspan="2">
            <p class="c18"><span class="c13 c11">Pada saat terjadi Keadaan Kahar, pelaksanaan pekerjaan oleh </span><span class="c4 c11"><strong>PIHAK KEDUA</strong> </span><span class="c13 c11">dihentikan sementara dan dilanjutkan kembali setelah Keadaan Kahar
                berakhir, namun apabila akibat Keadaan Kahar tidak memungkinkan
                dilanjutkan/diselesaikannya pelaksanaan pekerjaan, </span><span class="c4 c11"><strong>PIHAK KEDUA</strong> </span><span class="c1">berhak menerima honorarium secara proporsional sesuai pekerjaan yang
                telah dilaksanakan.</span></p>
          </td>
        </tr>
      </table>
    </div>

    <!-- PASAL 14 -->
    <div class="pasal-14">
      <p class="c6"><span class="c25 c4 c11">Pasal 14</span></p>
      <p class="c18">
        <span class="c13">Segala sesuatu yang belum atau tidak cukup diatur dalam Perjanjian ini,
          dituangkan dalam perjanjian tambahan</span><span class="c13 c60">/</span><span class="c1">adendum dan merupakan bagian tidak terpisahkan dari perjanjian ini.
        </span>
      </p>
    </div>


    <!-- PASAL 15 -->
    <div class="pasal-15">
      <p class="c6 text-center"><span class="c25 c4 c11">Pasal 15</span></p>
      <table>
        <tr class="c0">
          <td class="c45">
            <p class="c18"><span class="c1">(1)</span></p>
          </td>
          <td class="c21">
            <p class="c18"><span class="c1">Segala perselisihan atau perbedaan pendapat yang timbul sebagai
                akibat adanya Perjanjian ini akan diselesaikan secara musyawarah untuk
                mufakat.</span></p>
          </td>
        </tr>
        <tr class="c48">
          <td class="c45">
            <p class="c18"><span class="c1">(2)</span></p>
          </td>
          <td class="c21" colspan="1" rowspan="2">
            <p class="c18"><span class="c13 c11">Apabila perselisihan tidak dapat diselesaikan sebagaimana dimaksud
                pada ayat (1), </span><span class="c4 c11"><strong>PARA PIHAK</strong></span><span class="c1">&nbsp;sepakat menyelesaikan perselisihan dengan memilih
                kedudukan/domisili hukum di Panitera Pengadilan Negeri Sukabumi.</span></p>
          </td>
        </tr>
      </table>
    </div>


    <div class="signature">
      <p class="c18">
        <span class="c13">Demikian Perjanjian ini dibuat dan ditandatangani oleh </span>
        <span class="c4"><strong>PARA PIHAK</strong></span>
        <span class="c13"> dalam 2 (dua) rangkap asli bermeterai cukup, tanpa paksaan dari </span>
        <span class="c4"><strong>PIHAK</strong></span>
        <span class="c13"> manapun dan untuk dilaksanakan oleh </span>
        <span class="c4"><strong>PARA PIHAK</strong></span>
        <span class="c1">.</span>
      </p>
      <p class="c18 c20"><span class="c1"></span></p>
      <p class="c18 c20"><span class="c1"></span></p>
      <table>
        <tr>
          <td>PIHAK PERTAMA,</td>
          <td>PIHAK KEDUA,</td>
        </tr>
        <tr>
          <td><?= esc($nama_petugas_kontrak) ?></td>
          <td>WISHNU EKA SAPUTRA, S.P., M.M.</td>
        </tr>
      </table>
    </div>


    <!-- <div class="ttd-pihak">
      <p class="c18">
        <span class="c13">Demikian Perjanjian ini dibuat dan ditandatangani oleh </span><span class="c4"><strong>PARA PIHAK</strong></span><span class="c13">&nbsp;dalam 2 (dua) rangkap asli bermeterai cukup, tanpa paksaan dari </span><span class="c4"><strong>PIHAK</strong></span><span class="c13">&nbsp;manapun dan untuk dilaksanakan oleh </span><span class="c4"><strong>PARA PIHAK</strong></span><span class="c1">.</span>
      </p>
      <p class="c18 c20"><span class="c1"></span></p>
      <p class="c18 c20"><span class="c1"></span></p>
      <a id="t.a32be430eb2daf2cd38ad42bd53f37c22bbbe9ca"></a><a id="t.1"></a>
      <table class="c62">
        <tr class="c0">
          <td class="c65" colspan="1" rowspan="1">
            <p class="c6">
              <span class="c4">&nbsp; PIHAK KEDUA</span><span class="c1">,</span>
            </p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c6"><span class="c25 c4 c11"><?= esc($ttd_petugas) ?></span></p>
            <p class="c20 c44"><span class="c1"></span></p>
          </td>
          <td class="c67" colspan="1" rowspan="1">
            <p class="c6">
              <span class="c4">PIHAK PERTAMA</span><span class="c1">,</span>
            </p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c3"><span class="c1"></span></p>
            <p class="c6"><span class="c4">HANI SETIANI, S.ST, M.Si</span></p>
          </td>
        </tr>
      </table>
    </div> -->

    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c2 c20"><span class="c1"></span></p>-->
    <!--<p class="c44 c58">-->
    <!--  <span style="-->
    <!--        overflow: hidden;-->
    <!--        display: inline-block;-->
    <!--        margin: 0px 0px;-->
    <!--        border: 0px solid #000000;-->
    <!--        transform: rotate(0rad) translateZ(0px);-->
    <!--        -webkit-transform: rotate(0rad) translateZ(0px);-->
    <!--        width: 99.67px;-->
    <!--        height: 80.33px;-->
    <!--      "><img alt="" src="images/image2.png" style="-->
    <!--          width: 99.67px;-->
    <!--          height: 80.33px;-->
    <!--          margin-left: -0px;-->
    <!--          margin-top: -0px;-->
    <!--          transform: rotate(0rad) translateZ(0px);-->
    <!--          -webkit-transform: rotate(0rad) translateZ(0px);-->
    <!--        " title="" /></span>-->
    <!--</p>-->

    <!--<div class="container">-->
    <!--  <div class="header">-->
    <!--    <p class="c8 title"><span class="c40 c11 c50">BADAN PUSAT STATISTIK</span></p>-->
    <!--    <p class="c8 subtitle"><span class="c54">KOTA SUKABUMI</span></p>-->
    <!--  </div>-->
    <!--  <div class="content">-->
    <!--    <p class="c32 c6"><span class="c52">SURAT TUGAS</span></p>-->
    <!--    <p class="c6"><span class="c9">Nomor : B-NoST.Nu/3272KodeTeknis/VS.300/BlnAngka/2024</span></p>-->

    <!--    <table class="c55">-->
    <!--      <tr class="c0">-->
    <!--        <td class="c57" colspan="1" rowspan="1">-->
    <!--          <p class="c7"><span class="c9">Menimbang</span></p>-->
    <!--        </td>-->
    <!--        <td class="c30" colspan="1" rowspan="1">-->
    <!--          <p class="c35"><span class="c9">:</span></p>-->
    <!--        </td>-->
    <!--        <td class="c56" colspan="1" rowspan="1">-->
    <!--          <p class="c7"><span class="c9">a.</span></p>-->
    <!--        </td>-->
    <!--        <td class="c53" colspan="3" rowspan="1">-->
    <!--          <p class="c2"><span class="c9">bahwa dengan adanya kegiatan UraianSK di lingkungan Badan Pusat Statistik Kota Sukabumi, maka diperlukan keikutsertaan Pegawai/Mitra Statistik Badan Pusat Statistik Kota Sukabumi;</span></p>-->
    <!--        </td>-->
    <!--      </tr>-->
    <!--      <tr class="c0">-->
    <!--        <td class="c57" colspan="1" rowspan="1">-->
    <!--          <p class="c7 c20"><span class="c9"></span></p>-->
    <!--        </td>-->
    <!--        <td class="c30" colspan="1" rowspan="1">-->
    <!--          <p class="c5"><span class="c9"></span></p>-->
    <!--        </td>-->
    <!--        <td class="c56" colspan="1" rowspan="1">-->
    <!--          <p class="c7"><span class="c9">b.</span></p>-->
    <!--        </td>-->
    <!--        <td class="c53" colspan="3" rowspan="1">-->
    <!--          <p class="c2"><span class="c37">bahwa berdasarkan pertimbangan sebagaimana dimaksud pada huruf a, perlu menugaskan Pegawai/Mitra Statistik Badan Pusat Statistik Kota Sukabumi sebagai Petugas </span><span class="c24">JabatanLengkap UraianSK2</span><span class="c9">;</span></p>-->
    <!--        </td>-->
    <!--      </tr>-->
    <!--      <tr class="c0">-->
    <!--        <td class="c57" colspan="1" rowspan="1">-->
    <!--          <p class="c7"><span class="c9">Mengingat</span></p>-->
    <!--        </td>-->
    <!--        <td class="c30" colspan="1" rowspan="1">-->
    <!--          <p class="c35"><span class="c9">:</span></p>-->
    <!--        </td>-->
    <!--        <td class="c17" colspan="4" rowspan="1">-->
    <!--          <p class="c2"><span class="c9">Surat Keputusan Kepala Badan Pusat Statistik Kota Sukabumi nomor : NoSK tanggal TglAngka BlnHuruf 2024 tentang Penetapan Buku UraianSK Badan Pusat Statistik Kota Sukabumi Tahun 2024</span></p>-->
    <!--        </td>-->
    <!--      </tr>-->
    <!--      <tr class="c0">-->
    <!--        <td class="c57" colspan="1" rowspan="1">-->
    <!--          <p class="c7"><span class="c9">Memberi Tugas</span></p>-->
    <!--        </td>-->
    <!--        <td class="c30" colspan="1" rowspan="1">-->
    <!--          <p class="c35"><span class="c9">:</span></p>-->
    <!--        </td>-->
    <!--        <td class="c69" colspan="2" rowspan="1">-->
    <!--          <p class="c7"><span class="c9">Nama</span></p>-->
    <!--          <p class="c7"><span class="c9">NIK</span></p>-->
    <!--          <p class="c7"><span class="c9">Alamat</span></p>-->
    <!--        </td>-->
    <!--        <td class="c36" colspan="1" rowspan="1">-->
    <!--          <p class="c7"><span class="c9">:</span></p>-->
    <!--          <p class="c7"><span class="c9">:</span></p>-->
    <!--          <p class="c7"><span class="c9">:</span></p>-->
    <!--        </td>-->
    <!--        <td class="c46" colspan="1" rowspan="1">-->
    <!--          <p class="c7"><span class="c9">Nama</span></p>-->
    <!--          <p class="c7"><span class="c9">NIK</span></p>-->
    <!--          <p class="c7"><span class="c9">Alamat Sukabumi</span></p>-->
    <!--        </td>-->
    <!--      </tr>-->
    <!--      <tr class="c0">-->
    <!--        <td class="c57" colspan="1" rowspan="1">-->
    <!--          <p class="c7"><span class="c9">Untuk</span></p>-->
    <!--        </td>-->
    <!--        <td class="c30" colspan="1" rowspan="1">-->
    <!--          <p class="c35"><span class="c9">:</span></p>-->
    <!--        </td>-->
    <!--        <td class="c17" colspan="4" rowspan="1">-->
    <!--          <p class="c2"><span class="c9">Melaksanakan Jabatanan UraianSK2 di lingkungan Badan Pusat Statistik Kota Sukabumi yang diselenggarakan dari tanggal Tanggal Mulai sampai dengan Tanggal Selesai di Kota Sukabumi</span></p>-->
    <!--        </td>-->
    <!--      </tr>-->
    <!--    </table>-->

    <!--    <p class="c32"><span class="c9">Sukabumi, TglAngka BlnHuruf 2024</span></p>-->
    <!--    <p class="c32"><span class="c9">Kepala BPS Kota Sukabumi</span></p>-->

    <!--    <div class="signature">-->
    <!--      <div>-->
    <!--        <p><span class="c25 c4 c11"><?= esc($ttd_petugas) ?></span></p>-->
    <!--        <p class="c20 c44"><span class="c1"></span></p>-->
    <!--      </div>-->
    <!--      <div>-->
    <!--        <p class="c6"><span class="c4">PIHAK PERTAMA</span></p>-->
    <!--        <p class="c3"><span class="c1"></span></p>-->
    <!--        <p class="c6"><span class="c4">HANI SETIANI, S.ST, M.Si</span></p>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
  </div>
</body>

</html>