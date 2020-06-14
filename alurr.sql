-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2020 pada 14.25
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alurr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bahan`
--

CREATE TABLE `tb_bahan` (
  `id_bahan` int(10) NOT NULL,
  `nm_bahan` text NOT NULL,
  `alias` varchar(30) NOT NULL,
  `waktu` decimal(4,2) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `derajat_keasaman_bhn` varchar(30) NOT NULL,
  `konsentrasi_radioaktif_bhn` varchar(30) NOT NULL,
  `kem_rdnu_bhn` varchar(30) NOT NULL,
  `kem_rdkm_bhn` varchar(30) NOT NULL,
  `nosop_bhn` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bahan_na`
--

CREATE TABLE `tb_bahan_na` (
  `id_bahan_na` int(10) NOT NULL,
  `nm_bahan_na` varchar(50) NOT NULL,
  `ditambahi` varchar(50) NOT NULL,
  `bentuk_fisik` text NOT NULL,
  `der_keas_na` varchar(50) NOT NULL,
  `kem_rdkm_na` varchar(50) NOT NULL,
  `endotoksin` text NOT NULL,
  `pemerian` text NOT NULL,
  `sterilitas` varchar(50) NOT NULL,
  `pirogenitas` text NOT NULL,
  `jenis_produk` int(3) NOT NULL,
  `status_na` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penandatangan`
--

CREATE TABLE `tb_penandatangan` (
  `id_p` int(2) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penandatangan`
--

INSERT INTO `tb_penandatangan` (`id_p`, `nip`, `nama`, `jabatan`) VALUES
(1, 'Maskur, S.ST', 'Manajer Teknis/ Penyelia,', '19691103 199203 1 004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_serti`
--

CREATE TABLE `tb_serti` (
  `id_lap` int(10) NOT NULL,
  `no_lap` varchar(70) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `jenis_smpl` varchar(30) NOT NULL,
  `id_bahan` int(10) NOT NULL,
  `no_batch` varchar(100) NOT NULL,
  `no_batch_kf` varchar(100) NOT NULL,
  `jumlah_smpl` varchar(30) NOT NULL,
  `k_ling` varchar(50) NOT NULL,
  `tgl_pn` datetime NOT NULL,
  `tgl_an` datetime NOT NULL,
  `tgl_in` datetime NOT NULL,
  `akt_awal` double NOT NULL,
  `akt_kal` double NOT NULL,
  `tgl_akt_kal` datetime NOT NULL,
  `k_rdk` double NOT NULL,
  `volume` double NOT NULL,
  `t_akt` double NOT NULL,
  `ktdk_akt` text NOT NULL,
  `tgl_peng` datetime NOT NULL,
  `kejernihan` varchar(30) NOT NULL,
  `der_keas` varchar(10) NOT NULL,
  `ktdk_der` varchar(10) NOT NULL,
  `kem_rdnu` varchar(10) NOT NULL,
  `ktdk_k_rdnu` varchar(10) NOT NULL,
  `kem_rdkm` varchar(10) NOT NULL,
  `ktdk_k_rdkm` varchar(10) NOT NULL,
  `fraksi` varchar(30) NOT NULL,
  `pengguna` varchar(50) NOT NULL,
  `r_w_pel` double NOT NULL,
  `f_decay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_serti_na`
--

CREATE TABLE `tb_serti_na` (
  `id_lap_na` int(10) NOT NULL,
  `id_bahan_na` int(10) NOT NULL,
  `no_lap_na` varchar(70) NOT NULL,
  `pemilik_na` varchar(50) NOT NULL,
  `tgl_pn_na` datetime NOT NULL,
  `tgl_an_na` datetime NOT NULL,
  `jumlah_smpl_na` varchar(30) NOT NULL,
  `no_batch_na` text NOT NULL,
  `no_batchkf_na` text NOT NULL,
  `k_ling_na` varchar(50) NOT NULL,
  `bentuk_fisik_lp` text NOT NULL,
  `der_keas_na_lp` varchar(50) NOT NULL,
  `kem_rdkm_na_lp` varchar(50) NOT NULL,
  `ktdk_bntg_der` varchar(50) NOT NULL,
  `ktdk_bntg_rdkm` varchar(50) NOT NULL,
  `sterilitas_lp` varchar(50) NOT NULL,
  `pirogenitas_lp` text NOT NULL,
  `jenis_na_lp` text NOT NULL,
  `tgl_in_na` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(2) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `nama_user` text NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email`, `password`, `nama_user`, `level`) VALUES
(1, '', '21232f297a57a5a743894a0e4a801fc3', '', 'admin'),
(2, 'su@alurr.com', '$2y$10$tkNYpouaDiiISKyYTZiko.QAphDkSr9HK9JNRBpkyR.moAzWu84NK', 'SU Admin', 'admin'),
(6, 'yayan@batan.go.id', '$2y$10$r5PliFQZyh67Wz8.3M11kOHvGoFfMrdRMz.9ReXXhr3vRUhSLAQhy', 'Yayan', 'operator'),
(7, 'fikri.ahsanal@gmail.com', '$2y$10$TNynTZpuE8Jr5LeRtEfLRuMS0OoNKRIf5dRi9dfOMlWKDi1PbMhFO', 'Fikri', 'operator'),
(8, 'lira.aprilia@batan.go.id', '$2y$10$rz1S..lF.nDtPrP7oB25FOhy7Ul5ROnOGukfQk4xY0rKPM982Vaiy', 'Lira', 'operator'),
(10, 'fahmi@gmail.com', '$2y$10$m.I/dWBCMwf2xT23UzQnYO9p4iAdD3K/q3o4FgsAY8hKvhJWdug9m', 'Muhammad Fahmi', 'operator'),
(11, 'abidin.halim@gmail.com', '$2y$10$0OxCYML.rpf7lriKJttzFuzC4H.7pVRHw1X4pV8y7PE2Mp/J.ttra', 'Abidin Halim', 'operator'),
(12, 'faris@gmail.com', '$2y$10$Mra55EK9oviM1MrxYUkuTu1YO6vz8Apsu.PAK91dWG55HBWpSdzvm', 'Faris Shalahuddin', 'operator'),
(14, 'fath@batan.go.id', '$2y$10$ZoPKtsRCpyXlVeWWEcsd1eMfAB.wFGK8yjtl/pWzX2x5vUo72P4Am', 'Fath Priyadi', 'operator'),
(15, 'danto@batan.go.id', '$2y$10$6yNv5UfCSHyzgWE5jOVFiOlC2U1VgxqiGDNiWGvStS7U1Dchuhjr.', 'Agus Ariyanto', 'operator'),
(16, 'antoapu@gmail.com', '$2y$10$xvnYp8kmDTndPwBETr5IAOcxmQHcydUE2gslWTG232M1oeTew4GOu', 'Anung Pujiyanto', 'operator'),
(17, 'maskur@batan.go.id', '$2y$10$mPht1sPzXhYwbllvz7T.oe1Z9kMyihmmrxL9pAzRI5KZs5tM49ejC', 'Maskur', 'operator'),
(18, 'amal.reska@gmail.com', '$2y$10$jm2CjPKba5Ra4NBAgbGwX.kNYmL8aq9Q7eaQ7mh/IN77judJgXw8G', 'Amal ', 'operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_log_bahan`
--

CREATE TABLE `_log_bahan` (
  `id_log` int(20) NOT NULL,
  `log_id_bahan` int(10) NOT NULL,
  `log_item` text NOT NULL,
  `log_aksi` varchar(50) NOT NULL,
  `log_user` text NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_log_bahan-na`
--

CREATE TABLE `_log_bahan-na` (
  `id_log` int(20) NOT NULL,
  `log_id_bahanNa` int(10) NOT NULL,
  `log_item` text NOT NULL,
  `log_aksi` varchar(50) NOT NULL,
  `log_user` text NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_log_serti`
--

CREATE TABLE `_log_serti` (
  `id_log` int(20) NOT NULL,
  `log_id_lap` int(10) NOT NULL,
  `log_item` varchar(70) NOT NULL,
  `log_aksi` varchar(50) NOT NULL,
  `log_user` text NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `_log_sertina`
--

CREATE TABLE `_log_sertina` (
  `id_log` int(20) NOT NULL,
  `log_id_lapNa` int(10) NOT NULL,
  `log_item` varchar(70) NOT NULL,
  `log_aksi` varchar(50) NOT NULL,
  `log_user` text NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bahan`
--
ALTER TABLE `tb_bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indeks untuk tabel `tb_bahan_na`
--
ALTER TABLE `tb_bahan_na`
  ADD PRIMARY KEY (`id_bahan_na`);

--
-- Indeks untuk tabel `tb_penandatangan`
--
ALTER TABLE `tb_penandatangan`
  ADD PRIMARY KEY (`id_p`);

--
-- Indeks untuk tabel `tb_serti`
--
ALTER TABLE `tb_serti`
  ADD PRIMARY KEY (`id_lap`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indeks untuk tabel `tb_serti_na`
--
ALTER TABLE `tb_serti_na`
  ADD PRIMARY KEY (`id_lap_na`),
  ADD KEY `id_bahan_na` (`id_bahan_na`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `_log_bahan`
--
ALTER TABLE `_log_bahan`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `_log_bahan-na`
--
ALTER TABLE `_log_bahan-na`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `_log_serti`
--
ALTER TABLE `_log_serti`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `_log_sertina`
--
ALTER TABLE `_log_sertina`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bahan`
--
ALTER TABLE `tb_bahan`
  MODIFY `id_bahan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_bahan_na`
--
ALTER TABLE `tb_bahan_na`
  MODIFY `id_bahan_na` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_penandatangan`
--
ALTER TABLE `tb_penandatangan`
  MODIFY `id_p` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_serti`
--
ALTER TABLE `tb_serti`
  MODIFY `id_lap` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_serti_na`
--
ALTER TABLE `tb_serti_na`
  MODIFY `id_lap_na` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `_log_bahan`
--
ALTER TABLE `_log_bahan`
  MODIFY `id_log` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `_log_bahan-na`
--
ALTER TABLE `_log_bahan-na`
  MODIFY `id_log` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `_log_serti`
--
ALTER TABLE `_log_serti`
  MODIFY `id_log` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `_log_sertina`
--
ALTER TABLE `_log_sertina`
  MODIFY `id_log` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
