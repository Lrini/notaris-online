-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 08.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_cv`
--

CREATE TABLE `akta_cv` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `direktur` varchar(100) NOT NULL,
  `nama_persero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_hak`
--

CREATE TABLE `akta_hak` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `aktanikah` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `PBB` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_hibah`
--

CREATE TABLE `akta_hibah` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `PBB` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_jualbeli`
--

CREATE TABLE `akta_jualbeli` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `akta_lahir` varchar(100) NOT NULL,
  `PBB` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_kuasa`
--

CREATE TABLE `akta_kuasa` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `suratnikah` varchar(100) NOT NULL,
  `kwintansi` varchar(100) NOT NULL,
  `PBB` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_nikah`
--

CREATE TABLE `akta_nikah` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `aktanikah` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_perusahaan`
--

CREATE TABLE `akta_perusahaan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `aktanikah` varchar(100) NOT NULL,
  `akta_pt` varchar(100) NOT NULL,
  `PBB` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_pt`
--

CREATE TABLE `akta_pt` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `modal` int(100) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `komisaris` varchar(100) NOT NULL,
  `direktur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dok` int(11) NOT NULL,
  `nama_dok` varchar(12) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `penerima` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id_dok`, `nama_dok`, `dokumen`, `penerima`, `downloads`) VALUES
(3, 'cv ibu meggy', 'coba.docx', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `klien`
--

CREATE TABLE `klien` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `status` enum('aktif','pasif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `klien`
--

INSERT INTO `klien` (`id`, `nama`, `alamat`, `no_hp`, `user`, `pass`, `status`) VALUES
(1, 'Immanuel', 'kuanino', '6281339467610', 'user', 'user', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notaris`
--

CREATE TABLE `notaris` (
  `id_notris` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notaris`
--

INSERT INTO `notaris` (`id_notris`, `nama`, `no_hp`, `jk`, `user`, `pass`, `status`) VALUES
(2, 'irled leda', '6281339467610', 'L', 'admin', 'admin', 'aktif'),
(7, 'aldi', '081390657610', 'P', 'aldi', 'hofni', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `nama_rek` int(11) NOT NULL,
  `dari_bank` varchar(30) NOT NULL,
  `ke_bank` int(11) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL,
  `jumlah_bayar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `nama_rek`, `dari_bank`, `ke_bank`, `bukti_bayar`, `jumlah_bayar`) VALUES
(1, 1, 'BRI', 6, 'binguts6.JPG', 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `pengirim` int(11) NOT NULL,
  `id_notaris` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `pengirim`, `id_notaris`, `judul`, `isi`, `waktu`) VALUES
(14, 2, 2, 'Permohonan ', 'Permohonan sedang dikerjakan mohon menunggu waktu ', '2020-12-03 06:05:57'),
(17, 1, 2, 'test pengirim', 'sudah selesai untuk bagian akta', '2020-12-18 15:19:25'),
(18, 1, 2, 'akta', 'berhasil membuat akta yang anda minta', '2020-12-20 03:37:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `rekening` int(30) NOT NULL,
  `nama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id`, `bank`, `rekening`, `nama`) VALUES
(6, 'BRI', 322212, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akta_cv`
--
ALTER TABLE `akta_cv`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akta_hak`
--
ALTER TABLE `akta_hak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akta_hibah`
--
ALTER TABLE `akta_hibah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akta_jualbeli`
--
ALTER TABLE `akta_jualbeli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akta_kuasa`
--
ALTER TABLE `akta_kuasa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akta_nikah`
--
ALTER TABLE `akta_nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akta_perusahaan`
--
ALTER TABLE `akta_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akta_pt`
--
ALTER TABLE `akta_pt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notaris`
--
ALTER TABLE `notaris`
  ADD PRIMARY KEY (`id_notris`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akta_cv`
--
ALTER TABLE `akta_cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akta_hak`
--
ALTER TABLE `akta_hak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akta_hibah`
--
ALTER TABLE `akta_hibah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `akta_jualbeli`
--
ALTER TABLE `akta_jualbeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `akta_kuasa`
--
ALTER TABLE `akta_kuasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `akta_nikah`
--
ALTER TABLE `akta_nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `akta_perusahaan`
--
ALTER TABLE `akta_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akta_pt`
--
ALTER TABLE `akta_pt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `notaris`
--
ALTER TABLE `notaris`
  MODIFY `id_notris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
