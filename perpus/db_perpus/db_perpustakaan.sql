-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2022 pada 08.21
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `username`, `password`) VALUES
('ADM00001', 'Danu', 'danuseptiadi@gmail.com', 'admin', 'admin'),
('ADM00002', 'gugun', 'gugun@gmail.com', 'gugun', 'gugun'),
('ADM00003', 'gegen', 'gegen@gmail.com', 'gegen', 'gegen'),
('ADM00004', 'olaf', 'olaf@gmail.com', 'olaf', 'olaf'),
('ADM00005', 'olef', 'olef@gmail.com', 'olef', 'olef'),
('ADM00006', 'gagan', 'gagan@gmail.com', 'gagan', 'gagan'),
('ADM00007', 'hani', 'hani@gmail.com', 'hani', 'hani'),
('ADM00008', 'monyet', 'monyet@gmail.com', 'monyet', 'monyet'),
('ADM00009', 'narto', 'narto@gmail.com', 'narto', 'narto'),
('ADM00010', 'narti', 'narti@gmail.com', 'narti', 'narti'),
('ADM00011', 'fania', 'fani@gmail.com', 'fani', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `email_anggota` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `email_anggota`, `username`, `password`) VALUES
('AGT000001', 'Danu Septi Adi', 'danuseptiadi@gmail.com', 'anggota', 'anggota'),
('AGT000004', 'lala', 'lala@gmail.com', 'admin', ''),
('AGT000005', 'lili', 'lili@gmail.com', 'lili', 'lili'),
('AGT000006', 'dina', 'dina@gmail.com', 'dina', 'dina'),
('AGT000007', 'dini', 'dini@gmail.com', 'dini', 'dini'),
('AGT000008', 'olin', 'olin@gmail.com', 'olin', 'olin'),
('AGT000009', 'olen', 'olen@gmail.com', 'olen', 'olen'),
('AGT000010', 'olif', 'olif@gmail.com', 'olif', 'olif'),
('AGT00011', 'adie', 'adie@honeys.be', 'adie1', 'anggota'),
('AGT00012', 'rere', 'rere@honeys.be', 'rere', 'anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis_id` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `status_buku` enum('Tersedia','Tidak Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis_id`, `penerbit`, `status_buku`) VALUES
('BK00001', 'jemuran di curi kancil', '', 'ITTAS', 'Tersedia'),
('BK00002', 'cintaku tergantung jemuran', '', 'ITTAS', 'Tersedia'),
('BK00003', 'KAMBING DI COLONG PAK RT', 'PNL1', 'itats', 'Tersedia'),
('BK00004', 'KAMBING PAK RT', 'PNL2', 'JARKOM', 'Tersedia'),
('BK00005', 'Cara membuat judul buku', 'PNL3', 'ITATS', 'Tersedia'),
('BK00007', 'Buku tak berjudul', 'PNL1', 'JARKOM', 'Tersedia'),
('BK00008', 'Bodoamat', 'PNL4', 'JARKOM', 'Tersedia'),
('BK00009', 'Gerbong kereta', 'PNL7', 'ITATS', 'Tersedia'),
('BK00010', 'Jalan panjang', 'PNL7', 'ITATS', 'Tersedia'),
('BK00012', 'PENYAKIT', 'PNL4', 'ITATS', 'Tersedia'),
('BK00015', 'INI BUKU', 'PNL2', 'ITATS', 'Tersedia'),
('BK00018', 'kancil mencuri jemuran', 'PNL1', 'Jarkom', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `id_denda` varchar(10) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `denda`
--

INSERT INTO `denda` (`id_denda`, `jumlah_hari`, `denda`) VALUES
('DN1', 1, 10000),
('DN2', 7, 10000),
('DN3', 30, 50000),
('DN4', 60, 75000),
('DN5', 70, 80000),
('DN6', 80, 90000),
('DN7', 90, 100000),
('DN8', 100, 110000),
('DN9', 110, 120000),
('DN9', 120, 130000),
('DN10', 130, 140000),
('DN0', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(10) NOT NULL,
  `buku_id` varchar(10) NOT NULL,
  `anggota_id` varchar(10) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `buku_id`, `anggota_id`, `tanggal_pinjam`, `tanggal_kembali`, `denda_id`) VALUES
('PJM00001', 'BK00003', 'AGT000005', '2022-06-22', '2022-06-22', 'DN0'),
('PJM00002', 'BK00003', 'AGT000006', '2022-06-22', '2022-06-22', 'DN2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` varchar(30) NOT NULL,
  `nama_penulis` varchar(30) NOT NULL,
  `email_penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `email_penulis`) VALUES
('PNL1', 'Danu Septi Adi', 'danuseptiadi@gmail.com'),
('PNL2', 'gugun', 'gugun@gmail.com'),
('PNL3', 'gegen', 'gegen@gmail.com'),
('PNL4', 'lala', 'lala@gmail.com'),
('PNL5', 'lili', 'lili@gmail.com'),
('PNL6', 'lele', 'lele@gmail.com'),
('PNL7', 'lulu', 'lulu@gmail.com'),
('PNL8', 'rere', 'rere@gmail.com'),
('PNL9', 'ruru', 'ruru@gmail.com'),
('PNL9', 'rara', 'rara@gmail.com'),
('PNL10', 'yuni', 'yuni@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
