-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2022 pada 05.18
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_kinerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'taufik', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(5) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
(2, 'Aan Subhan'),
(3, 'Chairuka Dhewi'),
(4, 'Sugianto'),
(5, 'Agung Wishnugroho'),
(6, 'Sayekto'),
(7, 'Ade Hapsah'),
(8, 'Raden Akbar'),
(9, 'Endang Mulyadi'),
(10, 'Yani Tubiantini'),
(11, 'Ade Andriona');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai` double(11,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_alternatif`, `nilai`) VALUES
(2, 2, 0.1247),
(3, 3, 0.1067),
(4, 4, 0.0875),
(5, 5, 0.1167),
(6, 6, 0.0938),
(7, 7, 0.0941),
(8, 8, 0.0991),
(9, 9, 0.0941),
(10, 10, 0.0980),
(11, 11, 0.0853);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(5) NOT NULL,
  `kode_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL,
  `tipe` enum('cost','benefit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `bobot`, `tipe`) VALUES
(7, 'C1', 'Orientasi Pelayanan', 15, 'benefit'),
(8, 'C2', 'Absensi', 25, 'benefit'),
(9, 'C3', 'Kerjasama', 20, 'benefit'),
(10, 'C4', 'Kepemimpinan', 20, 'benefit'),
(11, 'C5', 'Integritas', 20, 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opt_alternatif`
--

CREATE TABLE `opt_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(5) NOT NULL,
  `id_kriteria` int(5) NOT NULL,
  `id_subkriteria` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel ini digunakan agar kriteria nya bisa dinamis';

--
-- Dumping data untuk tabel `opt_alternatif`
--

INSERT INTO `opt_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `id_subkriteria`) VALUES
(7, 2, 7, 42),
(8, 2, 8, 50),
(9, 2, 9, 55),
(10, 2, 10, 62),
(11, 2, 11, 69),
(12, 3, 7, 41),
(13, 3, 8, 49),
(14, 3, 9, 54),
(15, 3, 10, 62),
(16, 3, 11, 69),
(17, 4, 7, 41),
(18, 4, 8, 48),
(19, 4, 9, 55),
(20, 4, 10, 59),
(21, 4, 11, 69),
(22, 5, 7, 43),
(23, 5, 8, 49),
(24, 5, 9, 55),
(25, 5, 10, 61),
(26, 5, 11, 69),
(27, 6, 7, 42),
(28, 6, 8, 50),
(29, 6, 9, 53),
(30, 6, 10, 60),
(31, 6, 11, 68),
(32, 7, 7, 41),
(33, 7, 8, 49),
(34, 7, 9, 53),
(35, 7, 10, 62),
(36, 7, 11, 68),
(37, 8, 7, 42),
(38, 8, 8, 48),
(39, 8, 9, 55),
(40, 8, 10, 60),
(41, 8, 11, 69),
(42, 9, 7, 41),
(43, 9, 8, 49),
(44, 9, 9, 56),
(45, 9, 10, 61),
(46, 9, 11, 66),
(47, 10, 7, 42),
(48, 10, 8, 50),
(49, 10, 9, 54),
(50, 10, 10, 62),
(51, 10, 11, 66),
(52, 11, 7, 39),
(53, 11, 8, 48),
(54, 11, 9, 55),
(55, 11, 10, 62),
(56, 11, 11, 68);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(5) NOT NULL,
  `id_kriteria` int(5) NOT NULL,
  `nama_subkriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL,
  `nilai_sub` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `id_kriteria`, `nama_subkriteria`, `bobot`, `nilai_sub`) VALUES
(39, 7, 'Sangat Kurang', 1, 'E'),
(40, 7, 'Kurang', 2, 'D'),
(41, 7, 'Cukup', 3, 'C'),
(42, 7, 'Bagus', 4, 'B'),
(43, 7, 'Sangat Bagus', 5, 'A'),
(46, 8, 'Sangat Kurang', 1, '<60%'),
(47, 8, 'Kurang', 2, '60 - 69 %'),
(48, 8, 'Cukup', 3, '70 - 80 %'),
(49, 8, 'Baik', 4, '81 - 90 %'),
(50, 8, 'Amat Baik', 5, '91 - 100 %'),
(52, 9, 'Sangat Rendah', 1, 'E'),
(53, 9, 'Rendah', 2, 'D'),
(54, 9, 'Sedang', 3, 'C'),
(55, 9, 'Tinggi', 4, 'B'),
(56, 9, 'Sangat Tinggi', 5, 'A'),
(58, 10, 'Sangat Kurang', 1, 'E'),
(59, 10, 'Kurang', 2, 'D'),
(60, 10, 'Cukup', 3, 'C'),
(61, 10, 'Baik', 4, 'B'),
(62, 10, 'Sangat Baik', 5, 'A'),
(65, 11, 'Sangat Kurang', 1, 'E'),
(66, 11, 'Kurang', 2, 'D'),
(67, 11, 'Sedang', 3, 'C'),
(68, 11, 'Bagus', 4, 'B'),
(69, 11, 'Sangat Bagus', 5, 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(2, 'Pimpinan', '90973652b88fe07d05a4304f0a945de8');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `opt_alternatif`
--
ALTER TABLE `opt_alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_subkriteria` (`id_subkriteria`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `opt_alternatif`
--
ALTER TABLE `opt_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `opt_alternatif`
--
ALTER TABLE `opt_alternatif`
  ADD CONSTRAINT `opt_alternatif_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `opt_alternatif_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `opt_alternatif_ibfk_3` FOREIGN KEY (`id_subkriteria`) REFERENCES `subkriteria` (`id_subkriteria`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD CONSTRAINT `subkriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
