-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Januari 2019 jam 10:42
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `loker_buku` varchar(25) NOT NULL,
  `no_rak` int(5) NOT NULL,
  `no_laci` int(5) NOT NULL,
  `no_boks` int(5) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `loker_buku`, `no_rak`, `no_laci`, `no_boks`, `judul_buku`, `nama_pengarang`, `tahun_terbit`, `penerima`, `penerbit`, `status`, `keterangan`) VALUES
(20, 'Buku Akuntansi', 19, 01, 01, 'Pengantar Akuntansi', ' Syaiful bahri, S.E., M.S.A', '2005-01-01', 'Raffi', 'Penerbit Andi', 'Available', '10'),
(22, 'Buku Akuntansi', 19, 01, 02, 'Pengantar Akuntansi 1', 'Alexander Hery, S.E.,MSi.', '2022-02-17', 'Marvel', 'Yrama Widya', 'Available', '12'),
(24, 'Buku Akuntansi', 19, 01, 03, 'Pengantar Akuntansi 2', 'V.wiratna Sujarweni', '2016-02-16', 'Sekar', 'pustaka baru pres', 'Available', '20'),
(25, 'Buku Akuntansi', 19, 02, 01, 'Akuntansi Sektor Publik: Teori, Konsep, Aplikasi', 'V Wiratna Sujarweni', '2015-05-20', 'Marvel', 'Pustaka Baru', 'Available', '12345'),
(26, 'Buku Akuntansi', 19, 02, 02, 'Praktikum Akuntansi Perusahaan Jasa', 'Rahmat Hidayat Lubis, S.E., Ak.', '2018-04-26', 'Raffi', 'Citra Aditya Bakti', 'Available', '12345'),
(27, 'Buku Akuntansi', 19, 01, 04, 'Akuntansi Dasar: Siklus Akuntansi Perusahaan Jasa Dan Perusahaan Dagang', 'Thomas Sumarsan', '2022-10-18', 'Sekar', 'campustaka', 'Available', '12345'),
(28, 'Buku Akuntansi', 19, 02, 03, 'Akuntansi Biaya: Teori & Penerapannya', 'V Wiratna Sujarweni', '2014-10-29', 'Raul', 'Pustaka Baru Press', 'Available', '12345'),
(29, 'Buku Akuntansi', 19, 02, 04, 'Akuntansi Biaya 1', 'RATNA SARI DEWI,S.E.S.PD.M.SI', '2019-07-15', 'Marvel', 'Pt Citra Aditya Bakti', 'Available', '12345'),
(30, 'Buku Akuntansi', 19, 03, 01, 'Intermediate Accounting', 'Donald E. Kieso, Jerry J. Weygandt', '1969-01-01', 'Raul', 'Wiley', 'Available', '12345'),
(31, 'Buku Akuntansi', 19, 03, 02, 'Akuntansi Keuangan Menengah Volume 1 Edisi IFRS', 'Keiso', '2019-09-07', 'Sekar', 'Salemba Empat', 'Available', '12345'),
(32, 'Buku Akuntansi', 19, 03, 03, 'Akuntansi Keuangan Menengah', 'Fransisca Marito Sihombing', '2024-03-01', 'Raffi', 'CV. Gita Lentera', 'Ada', '12345'),
(33, 'Buku Akuntansi', 19, 04, 01, 'Akuntansi Keuangan Lanjutan I', 'Rina Andriani, S.E., M.Si.', '2018-10-01', 'Raul', 'Deepublish', 'Available', '12345'),
(34, 'Buku Akuntansi', 19, 04, 02, 'Akuntansi Keuangan Lanjutan Jilid 1', 'Ira Septriana, SE., M.Si., Ak., CA.', '2023-09-19', 'Raffi', 'Penerbit NEM', 'Available', '12345'),
(35, 'Buku Akuntansi', 19, 04, 03, 'AKUNTANSI KEUANGAN LANJUTAN', 'Dr. Drs. H. Pandoyo, S.E, M.M', '2020-12-24', 'Sekar', 'Swedia', 'Available', '12345'),
(36, 'Buku Akuntansi', 19, 05, 01, 'Advanced Financial Accounting', 'Baker', '1989-01-01', 'Raul', 'McGraw-Hill Ryerson, Limited', 'Available', '12346'),
(37, 'Buku Akuntansi', 19, 05, 02, 'Advanced Financial Accounting', 'Richard E. Baker', '2004-01-01', 'Marvel', 'McGraw-Hill/Irwin', 'Available', '1234567'),
(38, 'Buku Akuntansi', 19, 05, 03, 'Advanced Financial Accounting', 'Theodore E. Christensen', '2015-01-15', 'Sekar', 'McGraw-Hill Education', 'Available', '1234567'),
(39, 'Buku Akuntansi', 19, 06, 01, 'Financial and Managerial Accounting for Undergraduates', 'James Stuart Wallace', '2018-02-01', 'Raffi', 'Cambridge Business Publishers', 'Available', '12345678'),
(40, 'Buku Akuntansi', 19, 07, 01, '111 Kode HTML untuk Belajar Kilat', 'Arista Prasetyo Adi', '2019-04-08', 'Raul', 'Elex Media Komputindo', 'Available', '12345678'),
(41, 'Buku Akuntansi', 19, 08, 01, 'Financial Accounting for Executives', 'Kenneth R. Ferris', '2007-01-08', 'Marvel', 'Cambridge Business Publishers', 'Available', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `judul_buku` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`judul_buku`, `peminjam`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('111 Kode HTML untuk Belajar Kilat', 'Pandu', '2024-04-17', '2024-04-19', 2, 'Untuk Remaja', 12345678),
('Akuntansi Sektor Publik: Teori, Konsep, Aplikasi', 'Jamal', '2024-04-19', '2019-01-22', 3, 'untuk Remaja', 12345);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'auliamuhammadrizqy@gmail.com', 'Muhammad Rizqy Aulia', 1, 'Staff Perpustakaan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
