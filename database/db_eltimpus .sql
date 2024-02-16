

CREATE TABLE `instruktur` (
  `id_instruktur` int(11) NOT NULL AUTO_INCREMENT,
  `kode_instruktur` varchar(50) NOT NULL,
  `nama_instruktur` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_instruktur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `jadwal_matkul` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(50) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nama_instruktur` varchar(100) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




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
  `jurusan` text NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(100) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO mata_kuliah VALUES("7","ELT - 001","Web Programming B");



CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL AUTO_INCREMENT,
  `kode_semester` varchar(50) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO semester VALUES("27","ELT2024143105","Semester 1","false");



CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_pelajaran` varchar(25) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id_tahun_ajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tahun_ajaran VALUES("8","2020/2021","true");



CREATE TABLE `wali` (
  `id_wali` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan_id` int(11) NOT NULL,
  `nama_instruktur` varchar(100) NOT NULL,
  PRIMARY KEY (`id_wali`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


