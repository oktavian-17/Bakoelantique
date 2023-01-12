-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221229.833958a092
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2023 pada 23.30
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
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(25) NOT NULL,
  `body` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `title`, `img`, `body`) VALUES
(5, 'Kakak3', 'alumni1673491895.JPG', 'Skillhunt V'),
(6, 'Kakak2', 'alumni1673491927.JPG', 'Skillhunt V'),
(7, 'Kakak1', 'alumni1673491963.JPG', 'Skillhunt I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(25) NOT NULL,
  `body` varchar(25) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `title`, `img`, `body`, `jabatan`) VALUES
(9, 'Roy', 'anggota1673489328.JPG', 'Skillhunt VIII', 'Anggota'),
(10, 'David', 'anggota1673489380.JPG', 'Skillhunt VIII', 'Anggota'),
(11, 'Saputra', 'anggota1673489468.JPG', 'Skillhunt VIII', 'Anggota'),
(12, 'Dika', 'anggota1673489579.JPG', 'Skillhunt VIII', 'Anggota'),
(13, 'Rafiqi', 'anggota1673489627.JPG', 'Skillhunt VIII', 'Anggota'),
(14, 'Saron', 'anggota1673489729.JPG', 'Skillhunt VIII', 'Anggota'),
(17, 'Adipati', 'anggota1673491271.JPG', 'Skillhunt VIII', 'Bendahara'),
(18, 'Madina', 'anggota1673491289.JPG', 'Skillhunt VIII', 'Wakil Ketua'),
(19, 'Rio Angriawan', 'anggota1673491338.JPG', 'Skillhunt VIII', 'Ketua');

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
(9, 'Pelatihan Menggunakan Kamera', 'kegiatan.jpg', 'Pelatihan Unit Kegiatan Mahasiswa Bakoelantique tentang cara menggunakan kamera dan mengatur kamera'),
(16, 'Pelatihan Calon Anggota', 'artikel1673492390.JPG', 'Pelatihan Calon Anggota baru unit kegiatan mahasiswa bakoelantique photography yang dilaksanakan d Unlam Banjarmasin'),
(17, 'Pelatihan Calon Anggota', 'artikel1673492455.JPG', 'Pelatihan Calon Anggota baru unit kegiatan mahasiswa bakoelantique photography yang dilaksanakan di Citra Land Banjarmasin');

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
(3, 'Pelantikan Anggota', 'galeri3.jpg', ' Acara Pelantikan anggota baru bakoelantique dipantai Batakan Lama'),
(10, 'Pelatihan Di Citraland', 'galeri1673492610.JPG', 'Pelatihan Calon Anggota baru unit kegiatan mahasiswa bakoelantique photography yang dilaksanakan di CItraland Banjarmasin'),
(11, 'Pelatihan', 'galeri1673492647.JPG', 'Pelatihan Calon Anggota baru unit kegiatan mahasiswa bakoelantique photography yang dilaksanakan di Unlam Banjarmasin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` varchar(100) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `title`, `body`, `tempat`, `tanggal`) VALUES
(1, 'Pelatihan', 'Pelatihan Skillhunt IX membawa parang dan kamera', 'Taman Siring BJM', '2023-01-22'),
(2, 'Acara PKKMB', 'Acara PKKMB akan dihadiri seluruh anggota UKM Bakoelantique dan menyiapkan Presentasi', 'Aula STMIK IB', '2023-01-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `almt_peserta` text NOT NULL,
  `Alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `nrp`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `almt_peserta`, `Alasan`) VALUES
('P202300015', '2023-01-04', '19041076', 'Dicky Oktavian', 'Tamban', '2023-01-25', 'Perempuan', 'Islam', 'Tamban', 'Gabut'),
('P202300016', '2023-01-04', '19041076', 'Dicky Oktavian', 'Tamban', '2001-01-18', 'Laki-laki', 'Islam', 'Tamban Raya', 'Karena Saya Gabut'),
('P202300017', '2023-01-04', '19041080', 'John Cena', 'Banjarmasin', '1999-10-17', 'Laki-laki', 'Kristen', 'Banjarmasin City', 'Gak mau jadi Mahasiswa kupu kupu'),
('P202300018', '2023-01-04', '20212209', 'Messi', 'German', '2001-10-04', 'Laki-laki', 'Islam', 'Banjarbaru City', 'Karenaa ingin belajar foto'),
('P202300020', '2023-01-10', '12345678', 'Dicky', 'Banjarmasin', '2023-01-12', 'Laki-laki', 'Kristen', 'Banjarmasin', 'Gabut banget');

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
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
