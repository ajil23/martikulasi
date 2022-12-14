-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 02:23 AM
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
  `Jadwal_Ujian` varchar(45) DEFAULT NULL,
  `ACC_Ujian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_acc_ujian`
--

INSERT INTO `tb_acc_ujian` (`Id`, `Dosen_Penguji`, `Jadwal_Ujian`, `ACC_Ujian`) VALUES
(2526, 'Dianni Yusuf, S.Kom, M.Kom', '2022-08-29 00:18:58', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota_kelompok`
--

CREATE TABLE `tb_anggota_kelompok` (
  `Id` int(11) NOT NULL,
  `Nama_Anggota` varchar(45) DEFAULT NULL,
  `NIM` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota_kelompok`
--

INSERT INTO `tb_anggota_kelompok` (`Id`, `Nama_Anggota`, `NIM`) VALUES
(95, 'Aisyah Almas Nur Salasabila', '362155401095'),
(96, 'Nada Celia Sinka Audy Ines', '362155401096'),
(97, 'Fauziah Putri Ramadhani', '362155401097'),
(98, 'Nanda Ayu Putri Ashari', '362155401098'),
(99, 'Luluk Triyani', '362155401099'),
(101, 'Alvin Ikhsan Nurwahid', '362155401101'),
(102, 'Jehan Khairul Anwar', '362155401102'),
(103, 'Andini Diska Anggraini', '362155401103'),
(104, 'Muhammad Nanang Nafi\'a', '362155401104'),
(105, 'Putri Nur Sakinah', '362155401105'),
(106, 'Eliya Fitri Nur Azizah', '362155401106'),
(107, 'Azril Praya Prasetyo', '362155401107'),
(108, 'Rizal Andriansyah', '362155401108'),
(109, 'Juniardanu Widi Murdianto', '362155401109'),
(110, 'Zeiniyatul Fitriyah', '362155401110'),
(111, 'Putra Questy Ramadhani', '362155401111'),
(112, 'Ahmad Syafi\' Azka Azkiya', '362155401112'),
(113, 'Risma Riski Amalia', '362155401113'),
(114, 'Erna Ainul Khasanah', '362155401114'),
(115, 'Mohammad Zavir Zakaria', '362155401115'),
(116, 'Nur Lailatul Hidayah', '362155401116'),
(117, 'Xavier Is\'ad Ariel', '362155401117'),
(118, 'Zayidan Muttaqin', '362155401118'),
(119, 'M. Sofi Ulinuha Adian', '362155401119'),
(120, 'Linka Fitri Handayani', '362155401120'),
(121, 'Egi Brenka Ginting', '362155401121'),
(122, 'Fitri Sukma Kinasih', '362155401122'),
(123, 'Indana Zulfa', '362155401123'),
(124, 'Moch Yusril Irsya Nur Rohim', '362155401124'),
(125, 'Aura Presty Bintari', '362155401125');

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

--
-- Dumping data for table `tb_dosen`
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
-- Table structure for table `tb_lembar_kerja`
--

CREATE TABLE `tb_lembar_kerja` (
  `Id` int(11) NOT NULL,
  `Tanggal` datetime DEFAULT NULL,
  `File` varchar(45) DEFAULT NULL,
  `Anggota_Kelompok_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lembar_kerja`
--

INSERT INTO `tb_lembar_kerja` (`Id`, `Tanggal`, `File`, `Anggota_Kelompok_Id`) VALUES
(9267, '2022-08-23 16:48:21', 'Proposal', 107);

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

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`Id`, `Nama_Mahasiswa`, `NIM`, `Kelas`, `Email`, `Alamat`, `User_Id`, `Anggota_Kelompok_Id`) VALUES
(1095, 'Aisyah Almas Nur Salsabila', '362155401095', '1D', 'salsabila@gmail.com', 'Kec. Kalipuro', NULL, NULL),
(1096, 'Nada Celia Sinka Audy Ines', '362155401096', '1D', 'nadacelia@gmail.com', 'Kembiritan', NULL, NULL),
(1097, 'Fauziah Putri Ramadhani', '362155401097', '1D', 'putriramadhani@gmail.com', 'Kec. Glenmore', NULL, NULL),
(1098, 'Nanda Ayu Putri Ashari', '362155401098', '1D', 'putriashari@gmail.com', 'Kec. Singojuruh', NULL, NULL),
(1099, 'Luluk Triyani', '362155401099', '1D', 'luluktriyani@gmail.com', 'Kec. Giri', NULL, NULL),
(1101, 'Alvin Ikhsan Nur Wahid', '362155401101', '1D', 'alvinikhsan@gmail.com', 'Kec. Srono', NULL, NULL),
(1102, 'Jehan Khairul Anwar', '362155401102', '1D', 'jehananwar@gmail.com', 'Kec. Muncar', NULL, NULL),
(1103, 'Andini Diska Anggraini', '362155401103', '1D', 'andinidiska@gmail.com', 'Kec. Bangorejo', NULL, NULL),
(1104, 'Muhammad Nanang Nafi\'a', '362155401104', '1D', 'nanangnafia@gmial.com', 'Kec. Srono', NULL, NULL),
(1105, 'Putri Nur Sakinah', '362155401105', '1D', 'putrisakinah@gmail.com', 'Kec. Giri', NULL, NULL),
(1106, 'Eliya Fitri Nur Azizah', '362155401106', '1D', 'eliyafitri@gmail.com', 'Kec. Pesanggaran', NULL, NULL),
(1107, 'Azril Praya Prasetyo', '362155401107', '1D', 'azrilpraya@gmail.com', 'Lembar', NULL, NULL),
(1108, 'Rizal Andriansyah', '362155401108', '1D', 'rizalandriansyah@gmail.com', 'Wonosobo', NULL, NULL),
(1109, 'Juniardanu Widi Murdianto', '362155401109', '1D', 'juniardanu@gmail.com', 'Kec. Rambipuji', NULL, NULL),
(1110, 'Zeiniyatul Fitriyah', '362155401110', '1D', 'zeinifitriyah@gmail.com', 'Labanasem', NULL, NULL),
(1111, 'Putra Questy Ramadhani', '362155401111', '1D', 'putraquesty2gmail.com', 'Kec. Licin', NULL, NULL),
(1112, 'Ahmad Syafi\' Azka Azkiya', '362155401112', '1D', 'azkaazkiya@gmail.com', 'Kec. Pesanggaran', NULL, NULL),
(1113, 'Risma Rizki Amalia', '362155401113', '1D', 'rismarizki@gmail.com', 'Kec. Banyuwangi', NULL, NULL),
(1114, 'Erna Ainul Khasanah', '362155401114', '1D', 'ernakhasanah@gmail.com', 'Kec. Bangorejo', NULL, NULL),
(1115, 'Mohammad Zavir Zakaria', '362155401115', '1D', 'zavirzakaria@gmail.com', 'Kec. Banyuwangi', NULL, NULL),
(1116, 'Nur Lailatul Hidayah', '362155401116', '1D', 'lailatulhidayah@gmail.com', 'Kec. Purwoharjo', NULL, NULL),
(1117, 'Xavier Is\'ad Ariel', '362155401117', '1D', 'arilex@gmail.com', 'Kec. Arut Selatan', NULL, NULL),
(1118, 'Zayidan Muttaqin', '362155401118', '1D', 'zayidanmutaqqin@gmail.com', 'Kec. Tegaldlimo', NULL, NULL),
(1119, 'M. Sofi Ulinuha Adian', '362155401119', '1D', 'diankrl@gmail.com', 'Kec. Srono', NULL, NULL),
(1120, 'Linka Fitri Handayani', '362155401120', '1D', 'linkafitri@gmail.com', 'Kec. Srono', NULL, NULL),
(1121, 'Egi Brenka Ginting', '362155401121', '1D', 'egibrenka@gmail.com', 'STM Hilir', NULL, NULL),
(1122, 'Fitri Sukma Kinasih', '362155401122', '1D', 'fitrisukma2gmail.com', 'Songgon', NULL, NULL),
(1123, 'Indana Zulfa', '362155401123', '1D', 'indanazulfa@gmail.com', 'Kec. Banyuwangi', NULL, NULL),
(1124, 'Moch Yusril Irsya Nur Rohim', '362155401124', '1D', 'yusrilirsya@gmail.com', 'Gitik', NULL, NULL),
(1125, 'Aura Presty Bintari', '362155401125', '1D', 'auraprestybintari@gmail.com', 'Kec. Sempu', NULL, NULL),
(1128, 'saya babu', '362155406653', '1D', 'maruk@gmail.com', 'jl. indra', NULL, NULL);

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

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`Id`, `Nilai_Pembimbing_Lapangan`, `Nilai_Pembimbing_KP`, `Nilai_Penguji`, `Bukti_Nilai_Pembimbing_Lapangan`, `Pendaftaran_Ujian_KP_Id`) VALUES
(2473, '80', '80', '85', 'yes', 2512),
(6234, '80', '85', '90', 'yes', 2412);

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

--
-- Dumping data for table `tb_pendaftaran_kp`
--

INSERT INTO `tb_pendaftaran_kp` (`Id`, `Tempat_KP`, `Alamat_KP`, `Tanggal_Mulai`, `Tanggal_Selesai`, `Proposal`, `Anggota_Kelompok_Id`, `Dosen_Id`, `Perusahaan_Id`) VALUES
(164, 'PT. Tokopedia', 'Jakarta Pusat', '2022-08-23 22:28:39', '2022-09-23 22:28:39', 'Pelopor Perusahaan Unicorn di Indonesia', 107, 198403, 1436),
(165, 'PT. Tokopedia', 'Jakarta Pusat', '2022-08-23 00:05:53', '2022-09-23 00:05:53', 'Pelopor Perusahaan Unicorn di Indonesia', 114, 198403, 1436),
(909, 'PT. Bank Jago Tbk', 'Jakarta Pusat', '2022-08-24 00:05:53', '2022-08-31 20:15:00', 'Perusahaan Unicorn di Indonesia', 124, 197806, 5556),
(910, 'PT. Karya Digital Indo', 'Jakarta Pusat', '2022-08-23 00:05:53', '2022-08-31 20:15:00', 'Unicorn di Indonesia', 119, 199009, 6025);

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

--
-- Dumping data for table `tb_pendaftaran_ujian_kp`
--

INSERT INTO `tb_pendaftaran_ujian_kp` (`Id`, `Laporan_KP`, `Jadwal_Ujian`, `Pendaftaran_KP_Id`, `ACC_Ujian_Id`) VALUES
(2412, 'Pelopor Perusahaan Unicorn di Indonesia', '23 Agustus - 23 September 2022', 165, 2526),
(2512, 'Pelopor Perusahaan Unicorn di Indonesia', '23 Agustus - 23 September 2022', 164, 2526);

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

--
-- Dumping data for table `tb_perusahaan`
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
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Id_Role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`Id`, `Username`, `Password`, `Id_Role`) VALUES
(1, 'koordinator', '12345', 3),
(2, 'admin', '12345', 4),
(3, 'dosen', '12345', 2),
(4, 'mahasiswa', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `Id_User` int(11) NOT NULL,
  `Role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user_role`
--

INSERT INTO `tb_user_role` (`Id_User`, `Role`) VALUES
(1, 'Mahasiswa'),
(2, 'Dosen'),
(3, 'Koordinator KP'),
(4, 'Admin');

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
