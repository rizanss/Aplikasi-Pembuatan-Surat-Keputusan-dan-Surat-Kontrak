    <?= $this->extend('layout/layout-admin') ?>

    <!-- SIDEBAR -->
    <?= $this->section('nav-riwayatpengisian') ?>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
          <img src="./assets/img/logo_bps.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold">SISUKO</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <!-- <li class="nav-item">
            <a class="nav-link" href="dashboard">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="pegawai-bps">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Pegawai BPS</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mitra-statistik">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Mitra Statistik</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="penanggungjawab">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Penanggung Jawab</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="riwayat-pengisian">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Riwayat Pencetakan</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/profile.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/logout">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <?= $this->endSection('nav-riwayatpengisian') ?>

    <!-- CONTENT -->
    <?= $this->section('riwayatpengisian-content') ?>
    <h5 class="px-4 text-white">Welcome, <?= session()->get('username') ?></h5>
    <!-- <a href="<?= site_url('logout') ?>">Logout</a> -->
    <div class="container-fluid py-4">
      <div class="container mt-5">
        <h3 class="text-white">Riwayat Pencetakan</h3>

        <br><br><br>
        <h2>Surat Keputusan</h2>
        <table class="table table-bordered" id="riwayatTable">
          <thead>
            <tr>
              <th>No SK</th>
              <th>Tahun SK</th>
              <th>Nama Kegiatan</th>
              <th>Tanggal SK</th>
              <th>Nama Penanggungjawab</th>
              <th>NIP</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($riwayat_surat_keputusan as $rskep) : ?>
              <tr>
                <td><?= $rskep['no_sk'] ?></td>
                <td><?= $rskep['tahun_sk'] ?></td>
                <td><?= $rskep['nama_kegiatan_sk'] ?></td>
                <td><?= $rskep['tanggal_sk'] ?></td>
                <td><?= $rskep['ttd_sk'] ?></td>
                <td><?= $rskep['nip'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <h2>Surat Kontrak</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No ST</th>
              <th>Nama Petugas</th>
              <th>NIK Petugas</th>
              <th>Alamat Petugas</th>
              <th>Jabatan Petugas</th>
              <th>Tgl Mulai</th>
              <th>Tgl Selesai</th>
              <th>Honorarium</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($riwayat_surat_kontrak as $rsktk) : ?>
              <tr>
                <td><?= $rsktk['no_st'] ?></td>
                <td><?= $rsktk['nama_petugas_kontrak'] ?></td>
                <td><?= $rsktk['nik_petugas_kontrak'] ?></td>
                <td><?= $rsktk['alamat_petugas_kontrak'] ?></td>
                <td><?= $rsktk['jabatan_petugas'] ?></td>
                <td><?= $rsktk['tgl_mulai'] ?></td>
                <td><?= $rsktk['tgl_selesai'] ?></td>
                <td><?= $rsktk['honorarium_kontrak'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">BPS Kota Sukabumi & Universitas Muhammadiyah Sukabumi.</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css">
    <script>
      new DataTable('#riwayatTable', {
        layout: {
          topStart: 'info',
          bottom: 'paging',
          bottomStart: null,
          bottomEnd: null
        }
      });
    </script>
    </div>
    <?= $this->endSection('riwayatpengisian-content') ?>