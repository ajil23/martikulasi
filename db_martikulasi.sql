-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2022 pada 03.29
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
-- Struktur dari tabel `pendaftar_kp`
--

CREATE TABLE `pendaftar_kp` (
  `id` int(11) NOT NULL,
  `tempat_KP` varchar(45) NOT NULL,
  `alamat_KP` varchar(45) NOT NULL,
  `tanggal_Mulai` datetime NOT NULL,
  `tanggal_Selesai` datetime NOT NULL,
  `proposal` varchar(45) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `perusahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar_kp`
--

INSERT INTO `pendaftar_kp` (`id`, `tempat_KP`, `alamat_KP`, `tanggal_Mulai`, `tanggal_Selesai`, `proposal`, `id_anggota`, `id_dosen`, `perusahaan`) VALUES
(1114, 'PT. Bumi Sukses Indo', 'Jl. Pulau Merah', '2022-08-15 03:32:18', '2022-08-31 09:32:18', 'Cara Menjadi Super Programmer', 1107, 46738, 1154);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar_ujiankp`
--

CREATE TABLE `pendaftar_ujiankp` (
  `id` int(11) NOT NULL,
  `laporan` varchar(45) NOT NULL,
  `jadwal` varchar(45) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `id_acc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar_ujiankp`
--

INSERT INTO `pendaftar_ujiankp` (`id`, `laporan`, `jadwal`, `id_pendaftaran`, `id_acc`) VALUES
(1114, 'Cara Menjadi Suhu Programmer', '15-31 Agustus 2022', 8683, 1241);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftar_kp`
--
ALTER TABLE `pendaftar_kp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar_ujiankp`
--
ALTER TABLE `pendaftar_ujiankp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
