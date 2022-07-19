-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 15.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sakatadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_tari`
--

CREATE TABLE `jadwal_tari` (
  `id` int(255) NOT NULL,
  `pelatihid` int(11) NOT NULL,
  `matari_id` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `kelasid` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_tari`
--

INSERT INTO `jadwal_tari` (`id`, `pelatihid`, `matari_id`, `hari`, `jam`, `kelasid`, `created_at`, `updated_at`) VALUES
(38, 8, 10, 'Sabtu', '15.00-18.00', 1, '2022-07-19 14:36:59', '2022-07-19 14:36:59'),
(39, 8, 25, 'Minggu', '15.00-18.00', 1, '2022-07-19 14:37:27', '2022-07-19 14:37:27'),
(40, 16, 12, 'Jumat', '15.00-18.00', 2, '2022-07-19 14:41:32', '2022-07-19 14:41:32'),
(41, 16, 13, 'Sabtu', '15.00-18.00', 2, '2022-07-19 14:42:15', '2022-07-19 14:42:15'),
(42, 16, 25, 'Minggu', '15.00-18.00', 2, '2022-07-19 14:42:33', '2022-07-19 14:42:33'),
(43, 15, 15, 'Jumat', '15.00-18.00', 3, '2022-07-19 14:45:31', '2022-07-19 14:45:31'),
(44, 15, 16, 'Sabtu', '15.00-18.00', 3, '2022-07-19 14:45:56', '2022-07-19 14:45:56'),
(45, 15, 25, 'Minggu', '15.00-18.00', 3, '2022-07-19 14:46:25', '2022-07-19 14:46:25'),
(46, 9, 17, 'Jumat', '15.00-18.00', 4, '2022-07-19 14:47:14', '2022-07-19 14:47:14'),
(47, 9, 18, 'Sabtu', '15.00-18.00', 4, '2022-07-19 14:47:42', '2022-07-19 14:49:31'),
(48, 9, 25, 'Minggu', '15.00-18.00', 4, '2022-07-19 14:48:02', '2022-07-19 14:49:36'),
(49, 17, 20, 'Jumat', '15.00-18.00', 5, '2022-07-19 14:49:58', '2022-07-19 14:49:58'),
(50, 17, 21, 'Sabtu', '15.00-18.00', 5, '2022-07-19 14:50:19', '2022-07-19 14:50:19'),
(51, 17, 25, 'Minggu', '15.00-18.00', 5, '2022-07-19 14:50:35', '2022-07-19 14:50:35'),
(52, 8, 9, 'Jumat', '15.00-18.00', 1, '2022-07-19 19:02:57', '2022-07-19 19:02:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_tari_user`
--

CREATE TABLE `jadwal_tari_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jadwal_tari_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_tari_user`
--

INSERT INTO `jadwal_tari_user` (`id`, `user_id`, `jadwal_tari_id`) VALUES
(27, 37, 38),
(28, 37, 39),
(29, 37, 52),
(30, 139, 38),
(31, 139, 39);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_tingkatan`
--

CREATE TABLE `kelas_tingkatan` (
  `id` int(255) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas_tingkatan`
--

INSERT INTO `kelas_tingkatan` (`id`, `nama_kelas`) VALUES
(1, 'Dasar'),
(2, 'Pemula'),
(3, 'Terampil'),
(4, 'Mahir'),
(5, 'Khusus'),
(6, 'Semua Kelas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_tari`
--

CREATE TABLE `materi_tari` (
  `id` int(255) NOT NULL,
  `nama_tari` varchar(255) NOT NULL,
  `keting_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi_tari`
--

INSERT INTO `materi_tari` (`id`, `nama_tari`, `keting_id`) VALUES
(9, 'Tari Prawesti', 1),
(10, 'Tari Merak', 1),
(12, 'Tari Kandangan', 2),
(13, 'Tari Srikandi', 2),
(15, 'Tari Topeng Koncaran', 3),
(16, 'Tari Blantek', 3),
(17, 'Tari Badaya', 4),
(18, 'Tari Anjasmara', 4),
(20, 'Tari Topeng menak jinggon', 5),
(21, 'Tari Jenyepan', 5),
(25, 'Tari Jaipong', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatih`
--

CREATE TABLE `pelatih` (
  `id` int(255) NOT NULL,
  `nama_pelatih` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` int(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelatih`
--

INSERT INTO `pelatih` (`id`, `nama_pelatih`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(8, 'Jajat Sudrajat', 'Jalan Sindangsari II', 822123434, '2022-06-28 15:29:24', '2022-07-19 12:46:06'),
(9, 'Puput Agustin', 'Bandung', 89271, '2022-06-28 23:03:13', '2022-07-19 12:46:28'),
(15, 'Nur WulanSari', 'Bandung', 89271, '2022-06-28 23:04:54', '2022-07-19 12:46:43'),
(16, 'Anggisti', 'Jalan SindangSari 2', 892, '2022-07-14 23:50:01', NULL),
(17, 'Juniar Sugih', 'Bandung', 832913213, '2022-07-19 12:47:06', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `pendaftaran_id` varchar(255) NOT NULL,
  `userid` int(255) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `nominal` int(255) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `bank` varchar(20) DEFAULT NULL,
  `waktu_konfirmasi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `pendaftaran_id`, `userid`, `tanggal`, `nominal`, `bukti_pembayaran`, `status`, `created_at`, `updated_at`, `bank`, `waktu_konfirmasi`) VALUES
(66, 'PDF-09', 139, '2022-07-19', 450000, 'post-images/2XQWgKy7VFKohnhPL9YNpT6acrJiz0hxbx8k1D71.jpg', 1, '2022-07-19 19:42:46', '2022-07-19 19:43:56', 'BCA', '2022-07-19 07:43:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role_nama`) VALUES
(1, 'Sekertaris'),
(2, 'Peserta'),
(3, 'Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `pendaftaran_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matari_id` int(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `pas_foto` varchar(255) DEFAULT NULL,
  `foto_kk` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `ttl` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `role_id` int(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `status_pendidikan` varchar(255) DEFAULT NULL,
  `keting_id` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `ortu` varchar(255) DEFAULT NULL,
  `ttlo` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `alamat_ortu` varchar(255) DEFAULT NULL,
  `telp_ortu` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `tgl_lahir` date DEFAULT NULL,
  `tgl_lahir_ortu` date DEFAULT NULL,
  `status_bayar` varchar(2) DEFAULT NULL,
  `status_pilih_jadwal` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `pendaftaran_id`, `matari_id`, `images`, `pas_foto`, `foto_kk`, `nama`, `alamat`, `ttl`, `agama`, `no_telp`, `jenis_kelamin`, `role_id`, `kota`, `nisn`, `status_pendidikan`, `keting_id`, `email`, `email_verified_at`, `token`, `remember_token`, `password`, `ortu`, `ttlo`, `pendidikan`, `pekerjaan`, `alamat_ortu`, `telp_ortu`, `created_at`, `updated_at`, `tgl_lahir`, `tgl_lahir_ortu`, `status_bayar`, `status_pilih_jadwal`) VALUES
(2, NULL, 0, 'OFAZgbykTreIZ5IDPPCoe87n8tekxMls0lWwwaYy.png', '', '', 'legawa  pamungkas', 'Jakarta', 'Bandung 7 Juni 2000', 'Islam', '08923234324', 'Laki-Laki', 1, 'Bandung', '2467213', 'S 1', NULL, 'legpaw@gmail.com', '2022-07-13 11:00:52', NULL, NULL, '$2y$10$sKxssXR5Y0F3PPts9IcnuexFm3qs28xcGELwO6jRNmauvlQR6YAEy', 'Jajat', 'Bandung', 'S 1', 'Guru', 'Jalan Subang', NULL, '2022-06-28 10:06:36', '2022-07-18 09:54:00', NULL, NULL, NULL, NULL),
(32, 'PDF-01', 0, 'CZXNJgVXjBetusMR905EoAfLG9BQa3StL9qLG85P.jpg', NULL, NULL, 'Akew', 'Jakarta', 'Bandung 16 juli 2000', 'Kristen', '0832913213', 'Laki-Laki', 3, NULL, NULL, NULL, 4, 'Akew@gmail.com', '2022-07-13 11:00:52', NULL, NULL, '$2y$10$3veWifXoPGDI/wa7FFJoxOyXzlTfnT88IkrpM2OVTugZzh2RixeFK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-09 09:46:35', '2022-07-18 10:39:18', NULL, NULL, NULL, NULL),
(37, 'PDF-02', 0, 'wHyPgIOXkmswP9jQNv4FjQXGKQGY051Ewp41SNVC.jpg', 'post-images/3bxtMN3DmvWLPcfQsYRZRBKrdJL0mac7RMujZeBj.jpg', 'post-images/PeK9qM7o2daSiPBdaWu3lMz2R2MJRMJf1D01mxwp.jpg', 'Brody', 'Jakarta', 'Bandung 16 Februari 2000', 'Islam', '0839231323', 'Laki-Laki', 2, NULL, '781239', NULL, 1, 'Brody@gmail.com', '2022-07-13 11:00:52', NULL, NULL, '$2y$10$5X0Q9uX0GVoWfvYuJURgWOY/RUpLg2SQJ.yZ5yN72Tyw7VZC5vK/2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-09 12:55:17', '2022-07-19 19:11:47', NULL, NULL, '1', '1'),
(128, 'PDF-06', NULL, NULL, NULL, NULL, 'ibnu sina', 'test', 'bandung', 'Islam', '0855462464', 'Laki-Laki', 2, 'test', '54542434', 'S1', 1, 'mibnusna@gmail.com', '2022-07-16 10:19:27', NULL, '', '$2y$10$DigRddojuCR0LUxEkkBXm.s1lQ/q143q3S4oK3HXmHJjOClzoUk2a', 'test', 'bandung', 'SMA', 'Mahasiswa', 'test', '0855465422', '2022-07-16 17:19:04', '2022-07-16 22:27:05', '2022-07-15', '2022-07-12', '1', '1'),
(136, 'PDF-07', NULL, 'auDyLlzP9azulryWub5bjbEvgqTkxMPkikc79Jso.jpg', 'post-images/3nKek9qis57J3gAAxQs4xi8ekY5HItMnnfLbpKc3.jpg', 'post-images/JnLFt8CWrdbOFf9pZfVQAV64l0Y4JQBF4hYVCfcl.jpg', 'Sendra abdul', 'Jalan SindangSari 2', 'Jalan SindangSari 2', 'Islam', '0823813943', 'Laki-Laki', 2, 'Jalan SindangSari 2', 'Sendra abdul', 'Sendra abdul', 1, 'sendraabdulfatah@gmail.com', '2022-07-18 13:44:02', NULL, '', '$2y$10$VWpOlUKCBGV/Lq9FSaFMaO8bazNP/D34lrx8/yEY6PJE6ceLmTn3C', 'sutisna', 'Bandung', 'SMK', 'guru', 'jalan jakarta', '0281383', '2022-07-18 20:42:15', '2022-07-18 22:03:23', '2022-07-08', '2022-07-16', '0', '1'),
(137, 'PDF-08', NULL, NULL, 'post-images/vuoO36AE8xvcBLX0CJulpUiztwNV5awjlz0ncmP9.jpg', 'post-images/UklBq9rlyTY8jC8F6ZxHVj4JDDCT8RT1uDsoqGeu.jpg', 'Sendra', 'Jalan Buahbatu', 'Bandung', 'Islam', '082271364556', 'Laki-Laki', 2, 'Bandung', '25362174', 'SMA', 1, 'senihambaallah@gmail.com', '2022-07-19 01:16:41', NULL, '', '$2y$10$lBaDXK6L0L03KvUZEBzzeubrshyowbn7AMbRf6g5XaMwT.9SqRdX6', 'Sudra', 'Bandung', 'S1', 'Guru', 'Jalan Terusan Jakarta', '0928371364', '2022-07-19 08:14:42', '2022-07-19 10:37:41', '2001-02-22', '1970-07-19', '1', NULL),
(139, 'PDF-09', NULL, NULL, NULL, NULL, 'Arta', 'Jalan Sindangsari II', 'Bandung', 'Islam', '0821323', 'Laki-Laki', 2, 'Bandung', '23421334', 'SMA', 1, 'artheless8@gmail.com', '2022-07-19 12:41:25', NULL, '', '$2y$10$RWlzzeFdIGC2dRvA7taLbO4sfOeykAqEOt.wzyjix3CfeaQmOwC.K', 'sutisna', 'Bandung', 'S1', 'Guru', 'Jakarta', '080932', '2022-07-19 19:40:33', '2022-07-19 19:45:23', '2022-07-07', '2022-07-22', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal_tari`
--
ALTER TABLE `jadwal_tari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelatihid` (`pelatihid`),
  ADD KEY `matari_id` (`matari_id`),
  ADD KEY `kelasid` (`kelasid`);

--
-- Indeks untuk tabel `jadwal_tari_user`
--
ALTER TABLE `jadwal_tari_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas_tingkatan`
--
ALTER TABLE `kelas_tingkatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi_tari`
--
ALTER TABLE `materi_tari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keting_id` (`keting_id`);

--
-- Indeks untuk tabel `pelatih`
--
ALTER TABLE `pelatih`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `matari_id` (`matari_id`),
  ADD KEY `keting_id` (`keting_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal_tari`
--
ALTER TABLE `jadwal_tari`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `jadwal_tari_user`
--
ALTER TABLE `jadwal_tari_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `kelas_tingkatan`
--
ALTER TABLE `kelas_tingkatan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `materi_tari`
--
ALTER TABLE `materi_tari`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pelatih`
--
ALTER TABLE `pelatih`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
