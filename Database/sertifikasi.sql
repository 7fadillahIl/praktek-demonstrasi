-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 03.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `kd_skema` varchar(255) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `nik` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `kd_skema`, `nama_peserta`, `jenis_kelamin`, `alamat`, `no_hp`, `nik`) VALUES
(2, 'SKM - 001', 'Ilyas Hidayat', 'Cowo', 'Yugoslavia', '0993689212', 0),
(3, 'SKM - 002', 'Yusuf', 'Laki-Laki', 'Hegarmanah', '08213141221', 0),
(4, 'SKM - 003', 'Echa', 'Perempuan', 'Jakarta', '0853252624', 0),
(5, 'SKM - 004', 'Anjani', 'Perempuan', 'Bogor', '086537122', 0),
(6, 'SKM - 001', 'Habibi', 'Cowo', 'Aceh', '09432432532', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skema`
--

CREATE TABLE `skema` (
  `id_skema` int(11) NOT NULL,
  `kd_skema` varchar(255) NOT NULL,
  `nm_skema` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jml_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skema`
--

INSERT INTO `skema` (`id_skema`, `kd_skema`, `nm_skema`, `jenis`, `jml_unit`) VALUES
(1, 'SKM - 001', 'JUNIOR WEB DEVELOPER', 'KKNI', '6'),
(2, 'SKM - 002', 'DIGITAL MARKETING', 'KLASTER', '10'),
(3, 'SKM - 003', 'DESAINER MULTIMEDIA MUDA', 'KKNI ', '10'),
(5, 'SKM - 004', 'Network Administrator Muda', 'KKNI', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin1', 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`id_skema`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `skema`
--
ALTER TABLE `skema`
  MODIFY `id_skema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
