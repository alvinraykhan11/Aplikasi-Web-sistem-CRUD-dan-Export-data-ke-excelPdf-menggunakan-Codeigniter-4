-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 01.22
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_trash_v1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `itemtransactions`
--

CREATE TABLE `itemtransactions` (
  `id` int(5) NOT NULL,
  `price` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `type_trash` varchar(50) NOT NULL,
  `status_item_transaction` int(1) NOT NULL,
  `operator_id` int(5) DEFAULT NULL,
  `code_transaction` varchar(100) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `email_mahasiswa` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `deskripsi_company` text NOT NULL,
  `years_company` varchar(20) NOT NULL,
  `jobdesk` varchar(60) NOT NULL,
  `skill_deskripsi` text NOT NULL,
  `master_skill` varchar(50) NOT NULL,
  `cabangskill` varchar(50) NOT NULL,
  `masterduaskill` varchar(50) NOT NULL,
  `cabangduaskill` varchar(50) NOT NULL,
  `education_name` varchar(50) NOT NULL,
  `years_edu` varchar(20) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `deskripsi_jurusan` varchar(60) NOT NULL,
  `photo` text NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `email_mahasiswa`, `nama_mahasiswa`, `alamat`, `no_hp`, `jk`, `company_name`, `deskripsi_company`, `years_company`, `jobdesk`, `skill_deskripsi`, `master_skill`, `cabangskill`, `masterduaskill`, `cabangduaskill`, `education_name`, `years_edu`, `jurusan`, `deskripsi_jurusan`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 'alvinraykhan02@gmail.com', 'Alvin Raykhan', 'Jalan Cendrawasih Gg.Musholla Al-hidayah', '0857-7617-1735', 'laki-laki', 'Elbee Course', 'Membuat aplikasi web', '2022', 'Web Developer', 'Saya seorang web developer', 'PHP', 'Java Script', 'Phyton', 'Node.js', 'Universitas Mercu Buana', '2022', 'Teknik Informatika', 'Belajar yang rajin', '1654900271_bb2bc432d54d5d34b6f4.png', NULL, '2022-06-11 05:31:11', '2022-06-11 05:31:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-03-25-144310', 'App\\Database\\Migrations\\Users', 'default', 'App', 1654562148, 1),
(2, '2022-04-02-185224', 'App\\Database\\Migrations\\Transaction', 'default', 'App', 1654562148, 1),
(3, '2022-04-02-192607', 'App\\Database\\Migrations\\ItemTransactions', 'default', 'App', 1654562148, 1),
(4, '2022-06-04-133253', 'App\\Database\\Migrations\\Mahasiswa', 'default', 'App', 1654562148, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` int(5) NOT NULL,
  `code_transaction` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `consumer_id` int(5) NOT NULL,
  `operator_id` int(5) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code_member` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `role` varchar(50) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `code_member`, `username`, `password`, `telephone`, `address`, `role`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'qiter@mailinator.com', 'SA00001', 'qiter', '$2y$10$t4rhW0TlpFPCf4vpu2OcA.k64fLNzwL7YRkW.YrR/lx1TNuBDennS', '082155511121', 'Jakarta 1', 'super_admin', NULL, '2022-06-09 18:48:32', '2022-06-09 18:48:32'),
(6, 'soro@mailinator.com', 'A00001', 'soro', '$2y$10$lL8n46E9PXXEMt8WmNkszO61Ir6mCjo389NltlzyihMp794GWatfG', '082155511122', 'Jakarta 2', 'admin', NULL, '2022-06-09 18:48:32', '2022-06-09 18:48:32'),
(7, 'megecile@mailinator.com', 'M00001', 'megecile', '$2y$10$7M/FYi9C9hBOKQPcrrAsde9Kn5J8NIuuzR6serb53NJYD2Ys6w2fq', '082155511123', 'Jakarta 3', 'user', NULL, '2022-06-09 18:48:32', '2022-06-09 18:48:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `itemtransactions`
--
ALTER TABLE `itemtransactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `itemtransactions`
--
ALTER TABLE `itemtransactions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
