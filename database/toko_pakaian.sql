-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2021 pada 04.56
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_pakaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_produk`
--

CREATE TABLE `gambar_produk` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Batik'),
(2, 'Kebaya'),
(3, 'Jaket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` double NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `bahan` varchar(100) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `gambar_produk`, `bahan`, `date_create`) VALUES
(16, 1, 'Batik A', 10000, '1.jpg', 'kertas', '2021-04-25'),
(17, 1, 'Batik B', 12000, '1.jpg', 'kertas', '2021-04-25'),
(18, 1, 'Batik C', 10400, '1.jpg', 'kertas', '2021-04-25'),
(19, 2, 'Kebaya A', 12000, '1.jpg', 'kertas', '2021-04-25'),
(20, 2, 'Kebaya B', 13000, '1.jpg', 'kertas', '2021-04-25'),
(21, 2, 'Kebaya C', 15000, '1.jpg', 'kertas', '2021-04-25'),
(22, 2, 'Kebaya D', 17000, '1.jpg', 'kertas', '2021-04-25'),
(23, 3, 'Jaket A', 10800, '1.jpg', 'kertas', '2021-04-25'),
(24, 3, 'Jaket B', 18900, '1.jpg', 'kertas', '2021-04-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `ukuran_stok` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sub_judul` varchar(255) NOT NULL,
  `tentang_toko` text NOT NULL,
  `background` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `url_maps` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `twitter` varchar(20) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(20) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `ussername` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id`, `nama_toko`, `logo`, `judul`, `sub_judul`, `tentang_toko`, `background`, `alamat`, `url_maps`, `no_hp`, `no_wa`, `no_telp`, `email`, `twitter`, `facebook`, `instagram`, `youtube`, `ussername`, `password`) VALUES
(1, 'Nama Toko', 'apple-touch-icon.png', 'Judul', 'Sub Judul', 'Tentang Toko', 'bg.jpg', 'Alamat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9007141960737!2d107.61662131431699!3d-6.902475869467324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c5e8866e5%3A0x37be7ac9d575f7ed!2sGedung%20Sate!5e0!3m2!1sen!2sid!4v1619306650062!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'No Hp', 'No Wa', 'No Telp', 'Email', 'Twitter', 'Faceboo', 'Instagram', 'Youtube', 'ussername', '$2y$10$cR3QScmM.djzxvVKl0R42urixz0obbSnX.mOvLNa51D/6rMB/x.ze');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar_produk`
--
ALTER TABLE `gambar_produk`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambar_produk`
--
ALTER TABLE `gambar_produk`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
