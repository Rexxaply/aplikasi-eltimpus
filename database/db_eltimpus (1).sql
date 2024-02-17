

CREATE TABLE `instruktur` (
  `id_instruktur` int(11) NOT NULL AUTO_INCREMENT,
  `kode_instruktur` varchar(50) NOT NULL,
  `nama_instruktur` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_instruktur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO instruktur VALUES("4","INS - 001 - ELT","Udin","example@gmail.com");
INSERT INTO instruktur VALUES("9","INS - 002 - ELT","Caca","caca@gmail.com");



CREATE TABLE `jadwal_matkul` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(50) NOT NULL,
  `mata_kuliah_id` int(11) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `nama_instruktur_id` int(11) NOT NULL,
  `tahun_pelajaran_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO jadwal_matkul VALUES("4","ELT-20240217235716","7","selasa","12.00 - 13.00 WIB","Lab 6","19","9","9","27");



CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_jurusan` varchar(25) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO jurusan VALUES("19","ELT - 001","Manajemen Informatika & Komputer 5");
INSERT INTO jurusan VALUES("20","ELT - 002","Manajemen Informatika & Komputer 2");



CREATE TABLE `login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `foto` int(255) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO mahasiswa VALUES("17","224-MIK-001","Juleha","19","L","","ketua","2021/2022");
INSERT INTO mahasiswa VALUES("22","224-MIK-008","Upin","20","L","","anggota","2020/2021");



CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(100) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO mata_kuliah VALUES("7","ELT - 001","Web Programming B");



CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `mahasiswa_id` int(11) NOT NULL,
  `jatuh_tempo` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `no_bayar` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO pembayaran VALUES("25","22","2020","Juli 2020","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("26","22","2020","Agustus 2020","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("27","22","2020","September 2020","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("28","22","2020","Oktober 2020","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("29","22","2020","November 2020","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("30","22","2020","Desember 2020","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("31","22","2020","Januari 2021","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("32","22","2020","Februari 2021","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("33","22","2020","Maret 2021","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("34","22","2020","April 2021","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("35","22","2020","Mei 2021","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");
INSERT INTO pembayaran VALUES("36","22","2020","Juni 2021","0","0000-00-00","1500000","BELUM DIBAYAR","2020","Manajemen Informatika & Komputer 2");



CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL AUTO_INCREMENT,
  `kode_semester` varchar(50) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO semester VALUES("27","ELT2024143105","Semester 1","true");



CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_pelajaran` varchar(25) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id_tahun_ajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tahun_ajaran VALUES("8","2020/2021","false");
INSERT INTO tahun_ajaran VALUES("9","2021/2022","true");



CREATE TABLE `wali` (
  `id_wali` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan_id` int(11) NOT NULL,
  `nama_instruktur` varchar(100) NOT NULL,
  PRIMARY KEY (`id_wali`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


