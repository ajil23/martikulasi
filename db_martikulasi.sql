-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2022 pada 05.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_martikulasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_acc_ujian`
--

CREATE TABLE `tb_acc_ujian` (
  `Id` int(11) NOT NULL,
  `Dosen_Penguji` varchar(45) DEFAULT NULL,
  `Jadwal_Ujian` datetime DEFAULT NULL,
  `ACC_Ujian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota_kelompok`
--

CREATE TABLE `tb_anggota_kelompok` (
  `Id` int(11) NOT NULL,
  `Nama_Anggota` varchar(45) DEFAULT NULL,
  `NIM` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `Id` int(11) NOT NULL,
  `Nama_Dosen` varchar(45) DEFAULT NULL,
  `NIK` varchar(45) DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`Id`, `Nama_Dosen`, `NIK`, `User_Id`) VALUES
(197506, 'Endi Sailul Haq, S.T., M.Kom.', '197506252021211003', NULL),
(197601, 'Mohamad Dimyati Ayatullah, S.T., M.Kom.', '197601222021211001', NULL),
(197806, 'Muh. Fuad Al Haris, S.T., M.T.', '197806132014041001', NULL),
(198010, 'Dedy Hidayat Kusuma, S.T., M.Cs.', '198010222015041001', NULL),
(198301, 'Moh. Nur Shodiq, S.T., M.T.', '198301192021211006', NULL),
(198310, 'Eka Mistiko Rini, S.Kom, M.Kom.', '198310202014042001', NULL),
(198311, 'Devit Suwardiyanto,S.Si., M.T.', '198311052015041001', NULL),
(198403, 'Dianni Yusuf, S.Kom., M.Kom.', '198403052021212004', NULL),
(198404, 'Vivien Arief Wardhany, S.T., M.T.', '198404032019032012', NULL),
(199004, 'Junaedi Adi Prasetyo, S.ST., M.Sc.', '199004192018031001', NULL),
(199009, 'Sepyan Purnama Kristanto, S.Kom., M.Kom.', '199009052019031024', NULL),
(199010, 'Alfin Hidayat, S.T., M.T.', '199010052014041002', NULL),
(199104, 'Alif Akbar Fitrawan, S.Pd., M.Kom.', '199104202018031002', NULL),
(199203, 'Lutfi Hakim, S.Pd., M.T.', '199203302019031012', NULL),
(199209, 'Galih Hendra Wibowo, S.Tr.Kom., M.T.', '199209052022031004', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lembar_kerja`
--

CREATE TABLE `tb_lembar_kerja` (
  `Id` int(11) NOT NULL,
  `Tanggal` datetime DEFAULT NULL,
  `File` varchar(45) DEFAULT NULL,
  `Anggota_Kelompok_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `Id` int(11) NOT NULL,
  `Nama_Mahasiswa` varchar(45) DEFAULT NULL,
  `NIM` varchar(45) DEFAULT NULL,
  `Kelas` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL,
  `Anggota_Kelompok_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`Id`, `Nama_Mahasiswa`, `NIM`, `Kelas`, `Email`, `Alamat`, `User_Id`, `Anggota_Kelompok_Id`) VALUES
(1095, 'Aisyah Almas Nur Salsabila', '362155401095', 'D', 'salsabila@gmail.com', 'Kec. Kalipuro', NULL, NULL),
(1096, 'Nada Celia Sinka Audy Ines', '362155401096', 'D', 'nadacelia@gmail.com', 'Kembiritan', NULL, NULL),
(1097, 'Fauziah Putri Ramadhani', '362155401097', 'D', 'putriramadhani@gmail.com', 'Kec. Glenmore', NULL, NULL),
(1098, 'Nanda Ayu Putri Ashari', '362155401098', 'D', 'putriashari@gmail.com', 'Kec. Singojuruh', NULL, NULL),
(1099, 'Luluk Triyani', '362155401099', 'D', 'luluktriyani@gmail.com', 'Kec. Giri', NULL, NULL),
(1101, 'Alvin Ikhsan Nur Wahid', '362155401101', 'D', 'alvinikhsan@gmail.com', 'Kec. Srono', NULL, NULL),
(1102, 'Jehan Khairul Anwar', '362155401102', 'D', 'jehananwar@gmail.com', 'Kec. Muncar', NULL, NULL),
(1103, 'Andini Diska Anggraini', '362155401103', 'D', 'andinidiska@gmail.com', 'Kec. Bangorejo', NULL, NULL),
(1104, 'Muhammad Nanang Nafi\'a', '362155401104', 'D', 'nanangnafia@gmial.com', 'Kec. Srono', NULL, NULL),
(1105, 'Putri Nur Sakinah', '362155401105', 'D', 'putrisakinah@gmail.com', 'Kec. Giri', NULL, NULL),
(1106, 'Eliya Fitri Nur Azizah', '362155401106', 'D', 'eliyafitri@gmail.com', 'Kec. Pesanggaran', NULL, NULL),
(1107, 'Aztil Praya Prasetyo', '362155401107', 'D', 'azrilpraya@gmail.com', 'Lembar', NULL, NULL),
(1108, 'Rizal Andriansyah', '362155401108', 'D', 'rizalandriansyah@gmail.com', 'Wonosobo', NULL, NULL),
(1109, 'Juniardanu Widi Murdianto', '362155401109', 'D', 'juniardanu@gmail.com', 'Kec. Rambipuji', NULL, NULL),
(1110, 'Zeiniyatul Fitriyah', '362155401110', 'D', 'zeinifitriyah@gmail.com', 'Labanasem', NULL, NULL),
(1111, 'Putra Questy Ramadhani', '362155401111', 'D', 'putraquesty2gmail.com', 'Kec. Licin', NULL, NULL),
(1112, 'Ahmad Syafi\' Azka Azkiya', '362155401112', 'D', 'azkaazkiya@gmail.com', 'Kec. Pesanggaran', NULL, NULL),
(1113, 'Risma Rizki Amalia', '362155401113', 'D', 'rismarizki@gmail.com', 'Kec. Banyuwangi', NULL, NULL),
(1114, 'Erna Ainul Khasanah', '362155401114', 'D', 'ernakhasanah@gmail.com', 'Kec. Bangorejo', NULL, NULL),
(1115, 'Mohammad Zavir Zakaria', '362155401115', 'D', 'zavirzakaria@gmail.com', 'Kec. Banyuwangi', NULL, NULL),
(1116, 'Nur Lailatul Hidayah', '362155401116', 'D', 'lailatulhidayah@gmail.com', 'Kec. Purwoharjo', NULL, NULL),
(1117, 'Xavier Is\'ad Ariel', '362155401117', 'D', 'arilex@gmail.com', 'Kec. Arut Selatan', NULL, NULL),
(1118, 'Zayidan Muttaqin', '362155401118', 'D', 'zayidanmutaqqin@gmail.com', 'Kec. Tegaldlimo', NULL, NULL),
(1119, 'M. Sofi Ulinuha Adian', '362155401119', 'D', 'diankrl@gmail.com', 'Kec. Srono', NULL, NULL),
(1120, 'Linka Fitri Handayani', '362155401120', 'D', 'linkafitri@gmail.com', 'Kec. Srono', NULL, NULL),
(1121, 'Egi Brenka Ginting', '362155401121', 'D', 'egibrenka@gmail.com', 'STM Hilir', NULL, NULL),
(1122, 'Fitri Sukma Kinasih', '362155401122', 'D', 'fitrisukma2gmail.com', 'Songgon', NULL, NULL),
(1123, 'Indana Zulfa', '362155401123', 'D', 'indanazulfa@gmail.com', 'Kec. Banyuwangi', NULL, NULL),
(1124, 'Moch Yusril Irsya Nur Rohim', '362155401124', 'D', 'yusrilirsya@gmail.com', 'Gitik', NULL, NULL),
(1125, 'Aura Presty Bintari', '362155401125', 'D', 'auraprestybintari@gmail.com', 'Kec. Sempu', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `Id` int(11) NOT NULL,
  `Nilai_Pembimbing_Lapangan` varchar(45) DEFAULT NULL,
  `Nilai_Pembimbing_KP` varchar(45) DEFAULT NULL,
  `Nilai_Penguji` varchar(45) DEFAULT NULL,
  `Bukti_Nilai_Pembimbing_Lapangan` varchar(45) DEFAULT NULL,
  `Pendaftaran_Ujian_KP_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran_kp`
--

CREATE TABLE `tb_pendaftaran_kp` (
  `Id` int(11) NOT NULL,
  `Tempat_KP` varchar(45) DEFAULT NULL,
  `Alamat_KP` varchar(45) DEFAULT NULL,
  `Tanggal_Mulai` datetime DEFAULT NULL,
  `Tanggal_Selesai` datetime DEFAULT NULL,
  `Proposal` varchar(45) DEFAULT NULL,
  `Anggota_Kelompok_Id` int(11) DEFAULT NULL,
  `Dosen_Id` int(11) DEFAULT NULL,
  `Perusahaan_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran_ujian_kp`
--

CREATE TABLE `tb_pendaftaran_ujian_kp` (
  `Id` int(11) NOT NULL,
  `Laporan_KP` varchar(45) DEFAULT NULL,
  `Jadwal_Ujian` varchar(45) DEFAULT NULL,
  `Pendaftaran_KP_Id` int(11) DEFAULT NULL,
  `ACC_Ujian_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `Id` int(11) NOT NULL,
  `Nama_Perusahaan` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Telephone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`Id`, `Nama_Perusahaan`, `Alamat`, `Email`, `Telephone`) VALUES
(1216, 'PT. GoTo Gojek Tokopedia TBK', 'Jakarta Selatan', 'info@go-jek.com', '0-21-690-5784'),
(1271, 'PT. Espay Debit Indonesia Koe', 'Jakarta Pusat', 'help@dana.id', '0-21-452-9685'),
(1436, 'PT. Tokopedia ', 'Jakarta Pusat', 'android.feedback@tokopedia.com', '0-21-831-0155 '),
(5556, 'PT. Bank Jago Tbk', 'Jakarta Selatan', 'tanya@jago.com', '0-21-509-27490'),
(6025, 'PT. Karya Digital Indo', 'Surabaya, Jawa Timur', 'developer@woilo.com', '0-21-753-4939 '),
(6262, 'PT. Bibit Tumbuh Bersama - Reksadana Online', 'Jakarta Pusat', 'hello@bibit.id', '0-21-723-5090 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `Id` int(11) NOT NULL,
  `Usernname` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Id_Role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `Id_User` int(11) NOT NULL,
  `Role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_acc_ujian`
--
ALTER TABLE `tb_acc_ujian`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_acc_ujian` (`Id`);

--
-- Indeks untuk tabel `tb_anggota_kelompok`
--
ALTER TABLE `tb_anggota_kelompok`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_anggota_kelompok` (`Id`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_dosen` (`Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indeks untuk tabel `tb_lembar_kerja`
--
ALTER TABLE `tb_lembar_kerja`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_lembar_kerja` (`Id`),
  ADD KEY `Anggota_Kelompok_Id` (`Anggota_Kelompok_Id`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_mahasiswa` (`Id`),
  ADD KEY `User_Id` (`User_Id`),
  ADD KEY `Anggota_Kelompok_Id` (`Anggota_Kelompok_Id`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_nilai` (`Id`),
  ADD KEY `Pendaftaran_Ujian_KP_Id` (`Pendaftaran_Ujian_KP_Id`);

--
-- Indeks untuk tabel `tb_pendaftaran_kp`
--
ALTER TABLE `tb_pendaftaran_kp`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_pendaftaran_kp` (`Id`),
  ADD KEY `Anggota_Kelompok_Id` (`Anggota_Kelompok_Id`),
  ADD KEY `Dosen_Id` (`Dosen_Id`),
  ADD KEY `Perusahaan_Id` (`Perusahaan_Id`);

--
-- Indeks untuk tabel `tb_pendaftaran_ujian_kp`
--
ALTER TABLE `tb_pendaftaran_ujian_kp`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_pendaftaran_ujian_kp` (`Id`),
  ADD KEY `Pendaftaran_KP_Id` (`Pendaftaran_KP_Id`),
  ADD KEY `ACC_Ujian_Id` (`ACC_Ujian_Id`);

--
-- Indeks untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_perusahaan` (`Id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_user` (`Id`),
  ADD KEY `Id_Role` (`Id_Role`);

--
-- Indeks untuk tabel `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`Id_User`),
  ADD UNIQUE KEY `idx_user_role` (`Id_User`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD CONSTRAINT `tb_dosen_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `tb_user` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_lembar_kerja`
--
ALTER TABLE `tb_lembar_kerja`
  ADD CONSTRAINT `tb_lembar_kerja_ibfk_1` FOREIGN KEY (`Anggota_Kelompok_Id`) REFERENCES `tb_anggota_kelompok` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `tb_mahasiswa_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `tb_user` (`Id`),
  ADD CONSTRAINT `tb_mahasiswa_ibfk_2` FOREIGN KEY (`Anggota_Kelompok_Id`) REFERENCES `tb_anggota_kelompok` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`Pendaftaran_Ujian_KP_Id`) REFERENCES `tb_pendaftaran_ujian_kp` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_pendaftaran_kp`
--
ALTER TABLE `tb_pendaftaran_kp`
  ADD CONSTRAINT `tb_pendaftaran_kp_ibfk_1` FOREIGN KEY (`Anggota_Kelompok_Id`) REFERENCES `tb_anggota_kelompok` (`Id`),
  ADD CONSTRAINT `tb_pendaftaran_kp_ibfk_2` FOREIGN KEY (`Dosen_Id`) REFERENCES `tb_dosen` (`Id`),
  ADD CONSTRAINT `tb_pendaftaran_kp_ibfk_3` FOREIGN KEY (`Perusahaan_Id`) REFERENCES `tb_perusahaan` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_pendaftaran_ujian_kp`
--
ALTER TABLE `tb_pendaftaran_ujian_kp`
  ADD CONSTRAINT `tb_pendaftaran_ujian_kp_ibfk_1` FOREIGN KEY (`Pendaftaran_KP_Id`) REFERENCES `tb_pendaftaran_kp` (`Id`),
  ADD CONSTRAINT `tb_pendaftaran_ujian_kp_ibfk_2` FOREIGN KEY (`ACC_Ujian_Id`) REFERENCES `tb_acc_ujian` (`Id`);

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`Id_Role`) REFERENCES `tb_user_role` (`Id_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
