-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2021 pada 06.40
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

--
-- Dumping data untuk tabel `gambar_produk`
--

INSERT INTO `gambar_produk` (`id_gambar`, `id_produk`, `gambar_produk`) VALUES
(1, 16, '20210502054754.jpg'),
(2, 21, '20210502055636.jpg'),
(3, 18, '20210502055703.jpg'),
(6, 16, '20210502111254.jpg'),
(7, 16, '20210502111459.jpg'),
(8, 16, '20210502111516.jpg'),
(9, 16, '20210502111538.jpg'),
(10, 16, '20210502111552.jpg'),
(11, 16, '20210502111625.jpg');

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
  `deskripsi` text NOT NULL,
  `harga_produk` double NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `bahan` varchar(100) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `deskripsi`, `harga_produk`, `gambar_produk`, `bahan`, `date_create`) VALUES
(16, 2, 'Kebaya Rombeng Putih', '', 10000, '20210501214202.png', 'Kain KAVAN', '2021-04-25'),
(17, 1, 'Batik B', '', 12000, '2.jpg', 'kertas', '2021-04-25'),
(18, 1, 'Batik C', '', 10400, '3.jpg', 'kertas', '2021-04-25'),
(19, 2, 'Kebaya A', '', 12000, '1.jpg', 'kertas', '2021-04-25'),
(21, 2, 'Kebaya C', '', 15000, '3.jpg', 'kertas', '2021-04-25'),
(22, 2, 'Kebaya D', '', 17000, '4.jpg', 'kertas', '2021-04-25'),
(23, 3, 'Jaket A', '', 10800, '4.jpg', 'kertas', '2021-04-25'),
(24, 3, 'Jaket B', '', 18900, '5.jpg', 'kertas', '2021-04-25'),
(26, 3, 'Jaket Kulit', 'Cuci sebelum di pakai', 0, '20210501213548.jpg', 'Kulit Kadal', '0000-00-00'),
(27, 6, 'Kutang Panas', 'Naha', 0, '20210502062602.jpg', 'kutang', '0000-00-00'),
(28, 1, 'IUkkkk', 'V', 0, '20210502063100.jpg', 'sfs', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `ukuran_stok` varchar(11) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id_stok`, `id_produk`, `jumlah_stok`, `ukuran_stok`, `harga`) VALUES
(76, 16, 10, 'S', 15000),
(77, 16, 10, 'M', 15000),
(78, 16, 10, 'L', 15000),
(79, 16, 10, 'XL', 15000),
(80, 16, 10, 'XLL', 15000),
(84, 17, 11, 'XL', 30000),
(85, 17, 13, 'XLL', 30000),
(86, 18, 12, 'S', 45000),
(87, 18, 12, 'M', 45000),
(88, 18, 12, 'L', 45000),
(89, 18, 12, 'XL', 45000),
(90, 18, 12, 'XLL', 45000),
(91, 19, 13, 'S', 60000),
(92, 19, 13, 'M', 60000),
(93, 19, 13, 'L', 60000),
(94, 19, 13, 'XL', 60000),
(95, 19, 13, 'XLL', 60000),
(96, 20, 14, 'S', 75000),
(97, 20, 14, 'M', 75000),
(98, 20, 14, 'L', 75000),
(99, 20, 14, 'XL', 75000),
(100, 20, 14, 'XLL', 75000),
(101, 21, 15, 'S', 90000),
(102, 21, 15, 'M', 90000),
(103, 21, 15, 'L', 90000),
(104, 21, 15, 'XL', 90000),
(105, 21, 15, 'XLL', 90000),
(106, 22, 16, 'S', 105000),
(107, 22, 16, 'M', 105000),
(108, 22, 16, 'L', 105000),
(109, 22, 16, 'XL', 105000),
(110, 22, 16, 'XLL', 105000),
(111, 23, 17, 'S', 120000),
(112, 23, 17, 'M', 120000),
(113, 23, 17, 'L', 120000),
(114, 23, 17, 'XL', 120000),
(115, 23, 17, 'XLL', 120000),
(116, 26, 1, '1', 1),
(117, 16, 20, 'XL', 2000),
(118, 16, 300, 'XXL', 3000),
(119, 17, 90, 'W', 9000);

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
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id`, `nama_toko`, `logo`, `judul`, `sub_judul`, `tentang_toko`, `background`, `alamat`, `url_maps`, `no_hp`, `no_wa`, `no_telp`, `email`, `twitter`, `facebook`, `instagram`, `youtube`, `username`, `password`) VALUES
(1, 'Toko saya', '20210428083842.png', 'Judulna', 'Sub Judulna', 'Kami adalah toko pakaian terbaik sejagat raya', '20210428085336.jpg', 'Alamat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9007141960737!2d107.61662131431699!3d-6.902475869467324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c5e8866e5%3A0x37be7ac9d575f7ed!2sGedung%20Sate!5e0!3m2!1sen!2sid!4v1619306650062!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'No Hp', '082317994353', 'No Telp', 'Email', 'Twitter', 'Faceboo', '', 'Youtube', 'tokosaya', '$2y$10$cR3QScmM.djzxvVKl0R42urixz0obbSnX.mOvLNa51D/6rMB/x.ze');

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
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
