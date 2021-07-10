-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Jul 2021 pada 17.45
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expertsystem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'wandy', 'wandy'),
(3, 'pakar', 'pakar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kesimpulan`
--

CREATE TABLE `tb_kesimpulan` (
  `kode_kesimpulan` int(11) NOT NULL,
  `solusi` varchar(1000) NOT NULL,
  `fakta` varchar(500) NOT NULL,
  `oleh` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kesimpulan`
--

INSERT INTO `tb_kesimpulan` (`kode_kesimpulan`, `solusi`, `fakta`, `oleh`, `status`) VALUES
(1, 'visual', 'Cenderung berfikir dengan menggunakan gambar', 'pakar', 'setuju'),
(2, 'visual', 'Suka dengan warna, garis, dan seni', 'pakar', 'setuju'),
(3, 'visual', 'Suka bekerja diruangan sendiri', 'pakar', 'setuju'),
(4, 'visual', 'Tidak mudah terganggu oleh keributan', 'pakar', 'setuju'),
(5, 'visual', 'pasif dalam berdiskusi', 'pakar', 'setuju'),
(6, 'visual', 'Tidak pandai mengarang kata-kata', 'pakar', 'setuju'),
(8, 'Audio', 'Berbicara dengan irama yang terpola', 'pakar', 'setuju'),
(9, 'Audio', 'Senang berbicara keras dan mendengarkan', 'pakar', 'setuju'),
(10, 'Audio', 'Suka berbicara kepada diri sendiri', 'pakar', 'setuju'),
(11, 'Audio', 'Lebih suka seni musik dari pada seni gambar', 'pakar', 'setuju'),
(12, 'Audio', 'Kurang mahir dalam tugas mengarang', 'pakar', 'setuju'),
(13, 'Audio', 'Sering lupa saat berbicara', 'pakar', 'setuju'),
(14, 'Kinestetik', 'Memiliki kemampuan dalam memodifikasi objek', 'pakar', 'setuju'),
(15, 'Kinestetik', 'Menyukai aktivitas pembelajaran yang melibatkan tubuh', 'pakar', 'setuju'),
(16, 'Kinestetik', 'Suka pelajaran yang berkelompok', 'pakar', 'setuju'),
(17, 'Kinestetik', 'Bosan dengan pelajaran yang hanya duduk diam', 'pakar', 'setuju'),
(18, 'Kinestetik', 'Cenderung kesulitan dalam menulis', 'pakar', 'setuju'),
(19, 'Kinestetik', 'Tidak dapat mengingat geografis, kecuali jika mereka memang telah pernah berada di tempat itu', 'pakar', 'setuju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(50) NOT NULL,
  `isi_pertanyaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`kode_pertanyaan`, `isi_pertanyaan`) VALUES
('m1', 'cenderung berfikir menggunakan gambar'),
('m10-a', 'Bosan dengan pelajaran yang hanya duduk diam'),
('m11-a', 'Cenderung kesulitan dalam menulis'),
('m12-a', 'Tidak dapat mengingat geografis, Kecuali jika mereka memang telah pernah berada di tempat itu'),
('m14', 'Berbicara dengan irama yang berpola'),
('m15', 'senang berbicara keras dan mendengarkan'),
('m16', 'Suka berbicara dengan diri sendiri'),
('m17', 'Lebih suka dengan seni musik dari pada seni gambar'),
('m18', 'Kurang mahir dalam tugas mengarang'),
('m2', 'suka dengan warna, garis dan seni'),
('m3-a', 'suka bekerja diruangan sendirian'),
('m4-a', 'Tidak mudah terganggu oleh keributan'),
('m5-a', 'pasif dalam berdiskusi'),
('m6-a', 'tidak pandai merangkai kata-kata'),
('m7-a', 'memiliki kemampuan dalam memodifikasi objek'),
('m8-a', 'menyukai aktivitas pembelajaran yang melibatkan tubuh'),
('m9-a', 'Suka pelajaran yang berkelompok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `kode_solusi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `isi_solusi` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_solusi`
--

INSERT INTO `tb_solusi` (`kode_solusi`, `isi_solusi`) VALUES
('s1', 'VISUAL\r\n\r\nGaya belajar visual berfokus pada penglihatan.\r\nSaat mempelajari hal baru, biasanya tipe ini perlu melihat sesuatu secara visual untuk lebih mudah mengerti dan memahami.\r\nSelain itu, tipe visual juga lebih nyaman belajar dengan pengunaan warna-warna, garis, maupun bentuk. Itulah mengapa,\r\norang yang memiliki tipe visual biasanya memiliki pemahaman yang mendalam dengan nilai artistik seperti paduan warna dan lainnya'),
('s11', 'x-1'),
('s12', 'x-2'),
('s2', 'AUDITORI\r\n\r\nGaya belajar auditori, mengandalkan pendengaran sebagai menerima informasi dan pengetahuan. Orang tipe tidak masalah dengan tampilan visual saat mengajar, yang penting adalah mendengarkan pembicaraan guru dengan baik dan jelas. Nah, makanya tipe auditori biasanya paling peka dan hafal dari setiap ucapan yang pernah didengar bukan apa yang dilihat. Psst, kalau ada teman yang hobi untuk mengingatkan kelas untuk tenang bisa jadi teman kamu tipe auditori'),
('s23', 'x-3'),
('s24', 'x-4'),
('s3', 'READ/WRITE\r\n\r\nGaya belajar visual berfokus pada penglihatan.\r\nSaat mempelajari hal baru, biasanya tipe ini perlu melihat sesuatu secara visual untuk lebih mudah mengerti dan memahami.\r\nSelain itu, tipe visual juga lebih nyaman belajar dengan pengunaan warna-warna, garis, maupun bentuk. Itulah mengapa,\r\norang yang memiliki tipe visual biasanya memiliki pemahaman yang mendalam dengan nilai artistik seperti paduan warna dan lainnya'),
('s31', 'x-5'),
('s4', 'KINESTETIK\r\n\r\nGaya belajar ini menyenangi belajar yang melibatkan gerakan. Biasanya orang yang tipe ini, merasa lebih mudah mempelajari sesuatu tidak hanya sekadar membaca buku tetapi juga mempraktikkanya. Dengan melakukan atau menyentuh objek yang dipelajari akan memberikan pengalaman tersendiri bagi tipe kinestetik. Makanya, orang yang memiliki gaya belajar tipe kinestetik biasanya tidak betah berdiam lama-lama di kelas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  ADD PRIMARY KEY (`kode_kesimpulan`);

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- Indeks untuk tabel `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`kode_solusi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  MODIFY `kode_kesimpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
