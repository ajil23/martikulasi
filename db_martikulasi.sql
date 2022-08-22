-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 05:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `tb_acc_ujian`
--

CREATE TABLE `tb_acc_ujian` (
  `Id` int(11) NOT NULL,
  `Dosen_Penguji` varchar(45) DEFAULT NULL,
  `Jadwal_Ujian` datetime DEFAULT NULL,
  `ACC_Ujian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota_kelompok`
--

CREATE TABLE `tb_anggota_kelompok` (
  `Id` int(11) NOT NULL,
  `Nama_Anggota` varchar(45) DEFAULT NULL,
  `NIM` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `Id` int(11) NOT NULL,
  `Nama_Dosen` varchar(45) DEFAULT NULL,
  `NIK` varchar(45) DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lembar_kerja`
--

CREATE TABLE `tb_lembar_kerja` (
  `Id` int(11) NOT NULL,
  `Tanggal` datetime DEFAULT NULL,
  `File` varchar(45) DEFAULT NULL,
  `Anggota_Kelompok_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
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
-- Table structure for table `tb_pendaftaran_kp`
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
-- Table structure for table `tb_pendaftaran_ujian_kp`
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
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `Id` int(11) NOT NULL,
  `Nama_Perusahaan` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Telephone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `Id` int(11) NOT NULL,
  `Usernname` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Id_Role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `Id_User` int(11) NOT NULL,
  `Role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_acc_ujian`
--
ALTER TABLE `tb_acc_ujian`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_acc_ujian` (`Id`);

--
-- Indexes for table `tb_anggota_kelompok`
--
ALTER TABLE `tb_anggota_kelompok`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_anggota_kelompok` (`Id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_dosen` (`Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `tb_lembar_kerja`
--
ALTER TABLE `tb_lembar_kerja`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_lembar_kerja` (`Id`),
  ADD KEY `Anggota_Kelompok_Id` (`Anggota_Kelompok_Id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_mahasiswa` (`Id`),
  ADD KEY `User_Id` (`User_Id`),
  ADD KEY `Anggota_Kelompok_Id` (`Anggota_Kelompok_Id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_nilai` (`Id`),
  ADD KEY `Pendaftaran_Ujian_KP_Id` (`Pendaftaran_Ujian_KP_Id`);

--
-- Indexes for table `tb_pendaftaran_kp`
--
ALTER TABLE `tb_pendaftaran_kp`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_pendaftaran_kp` (`Id`),
  ADD KEY `Anggota_Kelompok_Id` (`Anggota_Kelompok_Id`),
  ADD KEY `Dosen_Id` (`Dosen_Id`),
  ADD KEY `Perusahaan_Id` (`Perusahaan_Id`);

--
-- Indexes for table `tb_pendaftaran_ujian_kp`
--
ALTER TABLE `tb_pendaftaran_ujian_kp`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_pendaftaran_ujian_kp` (`Id`),
  ADD KEY `Pendaftaran_KP_Id` (`Pendaftaran_KP_Id`),
  ADD KEY `ACC_Ujian_Id` (`ACC_Ujian_Id`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_perusahaan` (`Id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_user` (`Id`),
  ADD KEY `Id_Role` (`Id_Role`);

--
-- Indexes for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`Id_User`),
  ADD UNIQUE KEY `idx_user_role` (`Id_User`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD CONSTRAINT `tb_dosen_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `tb_user` (`Id`);

--
-- Constraints for table `tb_lembar_kerja`
--
ALTER TABLE `tb_lembar_kerja`
  ADD CONSTRAINT `tb_lembar_kerja_ibfk_1` FOREIGN KEY (`Anggota_Kelompok_Id`) REFERENCES `tb_anggota_kelompok` (`Id`);

--
-- Constraints for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `tb_mahasiswa_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `tb_user` (`Id`),
  ADD CONSTRAINT `tb_mahasiswa_ibfk_2` FOREIGN KEY (`Anggota_Kelompok_Id`) REFERENCES `tb_anggota_kelompok` (`Id`);

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`Pendaftaran_Ujian_KP_Id`) REFERENCES `tb_pendaftaran_ujian_kp` (`Id`);

--
-- Constraints for table `tb_pendaftaran_kp`
--
ALTER TABLE `tb_pendaftaran_kp`
  ADD CONSTRAINT `tb_pendaftaran_kp_ibfk_1` FOREIGN KEY (`Anggota_Kelompok_Id`) REFERENCES `tb_anggota_kelompok` (`Id`),
  ADD CONSTRAINT `tb_pendaftaran_kp_ibfk_2` FOREIGN KEY (`Dosen_Id`) REFERENCES `tb_dosen` (`Id`),
  ADD CONSTRAINT `tb_pendaftaran_kp_ibfk_3` FOREIGN KEY (`Perusahaan_Id`) REFERENCES `tb_perusahaan` (`Id`);

--
-- Constraints for table `tb_pendaftaran_ujian_kp`
--
ALTER TABLE `tb_pendaftaran_ujian_kp`
  ADD CONSTRAINT `tb_pendaftaran_ujian_kp_ibfk_1` FOREIGN KEY (`Pendaftaran_KP_Id`) REFERENCES `tb_pendaftaran_kp` (`Id`),
  ADD CONSTRAINT `tb_pendaftaran_ujian_kp_ibfk_2` FOREIGN KEY (`ACC_Ujian_Id`) REFERENCES `tb_acc_ujian` (`Id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`Id_Role`) REFERENCES `tb_user_role` (`Id_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
