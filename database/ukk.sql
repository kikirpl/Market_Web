-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2023 pada 07.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `nama`, `harga`, `gambar`) VALUES
(1, 'Ankle Boots', 77000, 'img/product/product-6.jpg'),
(2, 'Polo shirt', 77000, 'img/product/product-8.jpg'),
(3, 'Wood Bag', 299000, 'img/product/product-7.jpg'),
(4, 'Salomon bag', 500000, 'img/product/product-13.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `gambar`, `nama`, `harga`) VALUES
(1, 'img/product/product-2.jpg', 'Dengklok jacket', 130000),
(2, 'img/product/product-3.jpg', 'Logic shoes', 330000),
(3, 'img/product/product-4.jpg', 'Mayers jacket', 90000),
(4, 'img/product/product-6.jpg', 'Ankle Boots', 77000),
(5, 'img/product/product-7.jpg', 'Wood Bag', 299000),
(6, 'img/product/product-8.jpg', 'Polo shirt', 77000),
(7, 'img/product/product-9.jpg', 'Butterflies shirt', 55000),
(8, 'img/product/product-10.jpg', 'Authentica frag', 23000),
(9, 'img/product/product-11.jpg', 'Silverstone Bag', 420000),
(10, 'img/product/product-12.jpg', 'Army hoodie', 123000),
(11, 'img/product/product-13.jpg', 'Salomon bag', 500000),
(12, 'img/product/product-14.jpg', 'Basic Flowing Scarf', 75000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'kiki', '$2y$10$f6k0.xEAwPYy2E5Is2eb3.FqOPTBx2zehgwWQXP67Zud9kGUyTa9C', 2),
(3, 'cug', '$2y$10$2ciCCvU8rsKiYpGtikwkaOE8tVzx0oozVLUnN7va1m6mHI25Vfhgi', 0),
(4, 'cukk', '$2y$10$4chQ0Co/9INbXEAqO/33Lu4IF8DD.dKE1a1yr49RnqavUbkcJBTt2', 0),
(5, 'ki', '$2y$10$iSyBEjY76hrB5iFq9D0n3uC6fo1X9Tfti8Pqz0qq1/fVJVWCVCkaS', 0),
(6, 'cuki', '$2y$10$Eo7PTD.EId97pRkg5ACZ5u9NtiBshw7a3ggYWNvJ3B0lgxJV/8VGG', 0),
(7, 'ko', '$2y$10$8NUdz0Jxxp8gZrZQrA7nZ.NBmMYYdlfRSlZu94.73x5DRvNGc43SC', 2),
(8, 'mk', '$2y$10$KOn6/LfYpSD3yv4o68FSH.T.2HR0iHhbcVNTi2IARGe/TNbhinOn.', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
