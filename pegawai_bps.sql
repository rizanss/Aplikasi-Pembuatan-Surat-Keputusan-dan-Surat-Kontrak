CREATE TABLE pegawai_bps (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pns VARCHAR(255) NOT NULL,
    nip VARCHAR(50) NOT NULL,
    jabatan VARCHAR(255) NOT NULL,
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    gol VARCHAR(10) NOT NULL,
    pangkat VARCHAR(50) NOT NULL
);

INSERT INTO pegawai_bps (nama_pns, nip, jabatan, jenis_kelamin, gol, pangkat) VALUES
    ('Anita Rahminingrum, S.ST.', '19780604 199912 2 002', 'Statistisik Ahli Muda', 'Perempuan', 'III/d', 'Penata Tk.1'),
    ('Dedeh Sadiah, S. Si', '19820306 201003 2 002', 'Statistisik Ahli Muda', 'Perempuan', 'III/c', 'Penata'),
    ('Deni Ramdan Abdul Gani, A.Md', '19881104 201101 1 004', 'Asisten Statistisik Mahir', 'Laki-laki', 'III/a', 'Penata Muda'),
    ('Fazlina Uzlifatul Jannah A.Md.Kb.N.', '20000614 202201 2 002', 'Pranata Keuangan APBN Terampil', 'Perempuan', 'II/c', 'Pengatur'),
    ('Hani Setiani, S.ST., M.Si', '19820830 200312 2 003', 'Statistisik Ahli Muda', 'Perempuan', 'III/d', 'Penata Tk.1'),
    ('Ikah Islamiyah, S.ST', '19841210 200801 2 004', 'Statistisik Ahli Muda', 'Perempuan', 'III/d', 'Penata Tk.1'),
    ('Ir. Amilija Nurjuliani', '19680728 199401 2 001', 'Pranata Komputer Ahli Muda', 'Perempuan', 'III/d', 'Penata Tk.1'),
    ('Irlan Herdiana', '19720715 199403 1 004', 'Pengolah Data', 'Laki-laki', 'III/b', 'Penata Muda Tk.1'),
    ('Iyut Ria Muttaqun, S.Si', '19770804 199912 2 001', 'Statistisik Ahli Muda', 'Perempuan', 'III/d', 'Penata Tk.1'),
    ('Muhidin, SH', '19770709 200604 1 003', 'Analis Pengelola Keuangan APBN Ahli Pertama', 'Laki-laki', 'III/c', 'Penata'),
    ('Nastiana Pramesa', '19850303 200701 1 003', 'Pengolah Data', 'Laki-laki', 'III/a', 'Pengatur Tk.1'),
    ('Pradini Ajeng Gemellia SST, M.E.K.K', '19891013 201211 2 001', 'Statistisik Ahli Pertama', 'Perempuan', 'III/c', 'Penata'),
    ('Risky Hadipebriyandi, S.A.P.', '19870204 201101 1 009', 'Statistisik Ahli Pertama', 'Laki-laki', 'III/a', 'Penata Muda'),
    ('Rudi Hermawan', '19740605 200604 1 022', 'Pengolah Data', 'Laki-laki', 'III/a', 'Penata Muda'),
    ('Sri Rachmawati, S.ST.', '19721029 199603 2 001', 'Statistisik Ahli Muda', 'Perempuan', 'III/d', 'Penata Tk.1'),
    ('Surya Budiman', '19710309 199102 1 001', 'Asisten Statistisik Penyelia', 'Laki-laki', 'III/d', 'Penata Tk.1'),
    ('Taufik Januar', '19810123 200112 1 002', 'Asisten Statistisik Terampil', 'Laki-laki', 'II/d', 'Pengatur Tk.1'),
    ('Urip Sugeng Santoso, S.ST, M.A', '19710212 199403 1 005', 'Kepala Kantor', 'Laki-laki', 'IV/b', 'Pembina Tk.1'),
    ('Wishnu Eka Saputra SP, M.M.', '19720518 199903 1 001', 'Kasubbag Umum', 'Laki-laki', 'IV/a', 'Pembina');