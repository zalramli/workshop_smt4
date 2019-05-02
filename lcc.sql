-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27 Apr 2019 pada 19.18
-- Versi Server: 10.1.38-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lcc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` varchar(8) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `akses` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(70) NOT NULL,
  `foto` text NOT NULL,
  `stok_real` int(11) NOT NULL,
  `stok_sementara` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` varchar(8) NOT NULL,
  `id_merk` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `foto`, `stok_real`, `stok_sementara`, `harga`, `deskripsi`, `id_kategori`, `id_merk`) VALUES
('BRG001', 'Asus XM123', '', 0, 0, 20000, '', '', ''),
('BRG002', 'Acer Aspire 0213', '', 0, 0, 50000, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chatting`
--

CREATE TABLE `tbl_chatting` (
  `id_pesan` int(11) NOT NULL,
  `isi_pesan` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_pegawai` varchar(8) NOT NULL,
  `id_pelanggan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` varchar(8) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` varchar(8) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
('KTG001', 'Laptop'),
('KTG002', 'Smartphone');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_merk`
--

CREATE TABLE `tbl_merk` (
  `id_merk` varchar(8) NOT NULL,
  `nama_merk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` varchar(8) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_jabatan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` varchar(8) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` varchar(8) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_tenggang` date NOT NULL,
  `id_barang` varchar(8) NOT NULL,
  `id_pelanggan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` varchar(8) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `total_kembalian` int(11) NOT NULL,
  `id_pegawai` varchar(8) NOT NULL,
  `id_pelanggan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksidetail`
--

CREATE TABLE `tbl_transaksidetail` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` varchar(8) NOT NULL,
  `id_barang` varchar(8) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_hrg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`,`id_merk`);

--
-- Indexes for table `tbl_chatting`
--
ALTER TABLE `tbl_chatting`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_pegawai` (`id_pegawai`,`id_pelanggan`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_barang` (`id_barang`,`id_pelanggan`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD KEY `id_pegawai` (`id_pegawai`,`id_pelanggan`),
  ADD KEY `id_pegawai_2` (`id_pegawai`,`id_pelanggan`);

--
-- Indexes for table `tbl_transaksidetail`
--
ALTER TABLE `tbl_transaksidetail`
  ADD PRIMARY KEY (`id_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chatting`
--
ALTER TABLE `tbl_chatting`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_transaksidetail`
--
ALTER TABLE `tbl_transaksidetail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
