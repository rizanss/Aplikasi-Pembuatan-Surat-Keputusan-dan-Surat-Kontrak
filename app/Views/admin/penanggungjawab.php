    <?= $this->extend('layout/layout-admin') ?>

    <!-- SIDEBAR -->
    <?= $this->section('nav-penanggungjawab') ?>
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
            <a class="nav-link active" href="penanggungjawab">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Penanggung Jawab</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="riwayat-pengisian">
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
    <?= $this->endSection('nav-penanggungjawab') ?>

    <!-- CONTENT -->
    <?= $this->section('penanggungjawab-content') ?>
    <h5 class="px-4 text-white">Welcome, <?= session()->get('username') ?></h5>
    <!-- <a href="<?= site_url('logout') ?>">Logout</a> -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>PENANGGUNGJAWAB</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <button class="btn btn-primary add-button mx-4" data-bs-toggle="modal" data-bs-target="#addPenanggungjawabModal"><i class="fas fa-plus"></i> Tambah</button>
                <table id="penanggungjawabTable" class="display" style="width:100%">
                  <thead>
                    <tr>
                      <th>NIP</th>
                      <th>Jabatan</th>
                      <th>Nama</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($penanggungjawab as $row) : ?>
                      <tr>
                        <td><?= $row['nip'] ?></td>
                        <td><?= $row['jabatan'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td>
                          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editPenanggungjawabModal" onclick="populateEditModal(<?= $row['id'] ?>)">Edit</button>
                          <button class="text-sm text-white btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusPenanggungjawabModal" data-id="<?= $row['id'] ?>">Hapus</button>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Add Penanggungjawab Modal -->
      <div class="modal fade" id="addPenanggungjawabModal" tabindex="-1" aria-labelledby="addPenanggungjawabModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addPenanggungjawabModalLabel">Tambah Penanggungjawab</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('/penanggungjawab/store') ?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Edit Penanggungjawab Modal -->
      <div class="modal fade" id="editPenanggungjawabModal" tabindex="-1" aria-labelledby="editPenanggungjawabModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editPenanggungjawabModalLabel">Edit Penanggungjawab</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editPegawaiForm" action="<?= base_url('/penanggungjawab/update/' . $row['id']) ?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $row['jabatan'] ?>" required>
                </div>
                <div class=" form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama'] ?>" required>
                </div>
                <div class=" form-group">
                  <label for="nip">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" value="<?= $row['nip'] ?>" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Hapus Penanggungjawab Modal -->
      <div class="modal fade" id="hapusPenanggungjawabModal" tabindex="-1" aria-labelledby="hapusPenanggungjawabModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="hapusPenanggungjawabModalLabel">Konfirmasi Penghapusan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="hapusPenanggungjawabForm" action="<?= base_url('/penanggungjawab/delete') ?>" method="post">
              <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
                <input type="hidden" name="id" id="hapusPenanggungjawabId" value="<?= $row['id'] ?>">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
              </div>
            </form>
          </div>
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
        new DataTable('#penanggungjawabTable', {
          layout: {
            topStart: 'info',
            bottom: 'paging',
            bottomStart: null,
            bottomEnd: null
          }
        });

        document.addEventListener('DOMContentLoaded', function() {
          var hapusModal = document.getElementById('hapusPenanggungjawabModal');
          hapusModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Tombol yang memicu modal
            var id = button.getAttribute('data-id'); // Ambil ID dari tombol

            // Set ID ke input hidden di form modal
            var modal = bootstrap.Modal.getInstance(hapusModal);
            modal.querySelector('#hapusPenanggungjawabId').value = id;
          });
        });
      </script>
    </div>
    <?= $this->endSection('penanggungjawab-content') ?>