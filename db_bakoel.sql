-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221229.833958a092
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2022 pada 01.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bakoel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(25) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `img`, `body`) VALUES
(8, 'Pelantikan anggota baru', 'kegiatan2.jpg', ' Acara Pelantikan anggota baru Unit Kegiatan Mahsiswa bakoelantique yang dilaksanakan dipantai Batakan Lama'),
(9, 'Pelatihan Menggunakan Kamera', 'kegiatan.jpg', 'Pelatihan Unit Kegiatan Mahasiswa Bakoelantique tentang cara menggunakan kamera dan mengatur kamera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(25) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `title`, `img`, `body`) VALUES
(1, 'Acara Buka Bersama DiPanti Asuhan', 'galeri1.jpg', 'Pelaksanaan Acara buka bersama yang Dilaksanakan oleh Unit Kegiatan Mahasiswa Bakoealantique bersama dengan anak-anak panti asuhan.'),
(2, 'Acara PKKMB perkenalan UKM', 'galeri2.jpg', ' Acara PKKMB untuk memperkenalkan Unit Kegiatan Mahasiswa Bakoealantique kepada calon mahasiwa baru di Aula STMIK Indonesia Banjarmasin'),
(3, 'Pelantikan Anggota', 'galeri3.jpg', ' Acara Pelantikan anggota baru bakoelantique dipantai Batakan Lama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `alamat`) VALUES
(1, 'Madina', 'Banjarmasin', '2001-03-31', 'Laki-laki', 'Islam', 'Ds. Tamban Muara Baru RT. 12 RW. 03Jl. sungai jingah kecil Kec. Tamban Kab. Baritokuala  Provinsi Kalimantan Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Super Admin','Admin') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Dicky', 'admins', 'e10adc3949ba59abbe56e057f20f883e', 'Super Admin', '2022-12-29 23:43:39', NULL),
(2, 'Oktavian', 'admin', '25d55ad283aa400af464c76d713c07ad', 'Admin', '2022-12-29 23:47:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
