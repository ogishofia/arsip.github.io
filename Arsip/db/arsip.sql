-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2021 pada 03.24
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_preservasi`
--

CREATE TABLE `arsip_preservasi` (
  `id` int(5) NOT NULL,
  `nomor_berkas` int(5) NOT NULL,
  `no_item` int(5) NOT NULL,
  `uraian_arsip` text NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jumlah` varchar(55) NOT NULL,
  `jenis_arsip` varchar(55) NOT NULL,
  `tindakan_preservasi` varchar(55) NOT NULL,
  `lokasi_simpan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsip_preservasi`
--

INSERT INTO `arsip_preservasi` (`id`, `nomor_berkas`, `no_item`, `uraian_arsip`, `tanggal`, `jumlah`, `jenis_arsip`, `tindakan_preservasi`, `lokasi_simpan`) VALUES
(5, 1, 1, 'Salinan Surat Perintah Pelaksanaan Pemberangkatan Transmigrasi dalam Triwulan II dan Triwulan III tahun 1972-1974', '23 Juli 1973', '6 Lembar', 'Tekstual', 'Enkapsulasi', 'V.185'),
(6, 1, 1, 'Salinan Surat Perintah Pelaksanaan Pemberangkatan Transmigrasi dalam Triwulan II dan Triwulan III tahun 1972-1974', '25 Juli 1973', '4 Lembar', 'Tekstual', 'Laminasi', 'V.185'),
(7, 2, 1, 'Lokasi Penempatan Transmigrasi Jawa Tengah\r\nTahun 1973/1974', '3 Sept 1973', '2 Llembar', 'Tekstual', 'Laminasi', 'S.256'),
(8, 3, 1, 'Daftar Pemberangkatan transmgrasi sejak tahun 1950 – April 1969 dari wilayah Karisidenan Surakarta', '15 Sept 1973', '1 Lembar', 'Tekstual', 'Laminasi', 'D.462'),
(9, 4, 1, 'Lokasi penempatan Transmigrasi Jawa Tengah Tahun 1973/1974', '3 Sept 1973', '2 Lembar', 'Tekstual', 'Laminasi', 'S.256'),
(10, 5, 1, 'Pelaksanaan Pengerahan, pengiriman dan pengumpulan Transmigran tahun 1975/1976', '24 Mei 1976', '1 Lembar', 'Tekstual', 'Laminasi', 'A.176');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_statis`
--

CREATE TABLE `arsip_statis` (
  `idarsip` int(5) NOT NULL,
  `no_arsip` int(5) NOT NULL,
  `uraian_statis` text NOT NULL,
  `tanggal_statis` varchar(255) NOT NULL,
  `jumlah_statis` varchar(25) NOT NULL,
  `jenis_media` varchar(25) NOT NULL,
  `metode_tindakan` varchar(25) NOT NULL,
  `lokasi_simpan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsip_statis`
--

INSERT INTO `arsip_statis` (`idarsip`, `no_arsip`, `uraian_statis`, `tanggal_statis`, `jumlah_statis`, `jenis_media`, `metode_tindakan`, `lokasi_simpan`) VALUES
(2, 1, 'Petunjuk pelaksanaan pemberian bantuan pangan/jaminan hidup beras/jaminan hidup beras untuk transmigrasi swakarsa calon petani peserta PIR perkebunan\r\n6 November 1985', '4 Januari 2021', '1 Sampul', 'kertas', 'Scanning', ''),
(3, 2, 'Daftar nama kartu seleksi dan surat keterangan pindah transmigrasi swakarsa asal Jatiroto an. Kromontono, dkk tujuan Plaju Palembangg Sumatera Selatan Tahun 1985\r\n19 November 1985\r\n', '4 Januari 2021', '1 Sampul', 'kertas', 'scaning', ''),
(4, 3, 'Daftar rombongan transmigrasi swakarsa tanpa bantuan biaya an. Jarno, dkk proyek Binjai, Medan, Tapanuli, Asahan, Sumatera Selatan Tahun 1985\r\n26 November 1985', '4 Januari 2021', '1 Sampul', 'Kertas', 'Scaning', ''),
(5, 4, 'Daftar nama rombongan transmigrasi swakarsa asal Sidoharjo an. Sugeng, dkk tujuan Lahat dan Pematang Panggang Sumatera Selatan Tahun 1985\r\n29 November 1985', '4 Januari 2021', '1 sampul', 'kertas ', 'scaning', ''),
(6, 5, 'Daftar rombongan transmigrasi swakarsa dari Kabupaten Dati II Wonogiri ke Provnsi Dati I Kalimantan Barat Tahun 1985\r\n5 Desember 1985', '4 Januari 2021', '1 sampul', 'kertas', 'scaning', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin1', 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsip_preservasi`
--
ALTER TABLE `arsip_preservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `arsip_statis`
--
ALTER TABLE `arsip_statis`
  ADD PRIMARY KEY (`idarsip`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip_preservasi`
--
ALTER TABLE `arsip_preservasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `arsip_statis`
--
ALTER TABLE `arsip_statis`
  MODIFY `idarsip` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
