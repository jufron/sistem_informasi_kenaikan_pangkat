-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2023 pada 08.01
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
-- Database: `kenaikan_pangkat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Kristen protestan', '2023-09-02 21:19:39', '2023-09-02 21:19:39'),
(2, 'Katholik', '2023-09-02 21:19:39', '2023-09-02 21:19:39'),
(3, 'Islam', '2023-09-02 21:19:39', '2023-09-02 21:19:39'),
(4, 'Hinduh', '2023-09-02 21:19:39', '2023-09-02 21:19:39'),
(5, 'Budha', '2023-09-02 21:19:39', '2023-09-02 21:19:39'),
(6, 'Budha', '2023-09-02 21:19:39', '2023-09-02 21:19:39'),
(7, 'Konghuchu', '2023-09-02 21:19:39', '2023-09-02 21:19:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_usulan`
--

CREATE TABLE `catatan_usulan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `pangkat_lama` varchar(80) NOT NULL,
  `pangkat_baru` varchar(80) NOT NULL,
  `catatan` text DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catatan_usulan`
--

INSERT INTO `catatan_usulan` (`id`, `pegawai_id`, `pangkat_lama`, `pangkat_baru`, `catatan`, `file`, `created_at`, `updated_at`) VALUES
(3, 564, 'dfwjqeoijw', 'jioepwqjd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'note_usulan/d6OUCPVVomULCroO6kvOruPl4AtFbHGqfFqnYhRd.docx', '2023-10-07 20:40:49', '2023-10-07 20:40:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `pangkat_lama` varchar(80) NOT NULL,
  `pangkat_baru` varchar(80) NOT NULL,
  `catatan` text DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`id`, `pegawai_id`, `pangkat_lama`, `pangkat_baru`, `catatan`, `file`, `created_at`, `updated_at`) VALUES
(2, 529, 'afjeailfjali', 'abcdefg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'disposisi/BshgLddjYx8vHCI5YUDzzK2TDkNrHzYV2fn6fDX4.docx', '2023-10-05 02:46:45', '2023-10-05 06:17:13'),
(3, 531, 'dweo;fwajho', 'j;cwaeiojcvaw;o', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'disposisi/HITFVoI9293AYrJrmn5DuNyde312VNgSHL1RNkAq.docx', '2023-10-06 00:30:06', '2023-10-06 00:30:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'PNS golongan I', '2023-09-02 23:13:02', '2023-09-02 23:13:02'),
(2, 'PNS golongan II', '2023-09-02 23:13:02', '2023-09-02 23:13:02'),
(3, 'PNS golongan III', '2023-09-02 23:13:02', '2023-09-02 23:13:02'),
(4, 'PNS golongan IV', '2023-09-02 23:13:02', '2023-09-02 23:13:02'),
(5, 'ADS gologan I', '2023-09-02 23:13:02', '2023-09-02 23:13:02'),
(6, 'ADS gologan II', '2023-09-02 23:13:02', '2023-09-02 23:13:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(3, 'skertaris', '2023-09-02 02:41:06', '2023-09-02 02:41:06'),
(5, 'bendahara', '2023-09-02 02:56:35', '2023-09-02 02:56:35'),
(6, 'PENATA MUDA TINGKAT 1', '2023-09-16 06:59:56', '2023-09-16 06:59:56'),
(7, 'PENATA MUDA', '2023-09-16 06:59:56', '2023-09-16 06:59:56'),
(8, 'PENGATUR TINGKAT 1', '2023-09-16 06:59:56', '2023-09-16 06:59:56'),
(9, 'PENGATUR', '2023-09-16 06:59:56', '2023-09-16 06:59:56'),
(10, 'PENGATUR MUDA TINGKAT 1', '2023-09-16 06:59:56', '2023-09-16 06:59:56'),
(11, 'PENGATUR MUDA', '2023-09-16 06:59:56', '2023-09-16 06:59:56'),
(12, 'JURU MUDA TINGKAT 1', '2023-09-16 06:59:56', '2023-09-16 06:59:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kenaikan_pangkat`
--

CREATE TABLE `kenaikan_pangkat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `biodata_file` varchar(255) DEFAULT NULL,
  `sk_pangkat_terakhir_file` varchar(255) DEFAULT NULL,
  `sk_mutasi_file` varchar(255) DEFAULT NULL,
  `sk_pengangkatan_file` varchar(255) DEFAULT NULL,
  `pembebasan_sementara_file` varchar(255) DEFAULT NULL,
  `ijasah_file` varchar(255) DEFAULT NULL,
  `surat_tanda_lulus_file` varchar(255) DEFAULT NULL,
  `uraian_tugas_file` varchar(255) DEFAULT NULL,
  `sertifikat_ujian_dinas_file` varchar(255) DEFAULT NULL,
  `penilaian_prestasi_kerja_file` varchar(255) DEFAULT NULL,
  `sasaran_kerja_pegawai_file` varchar(255) DEFAULT NULL,
  `penilaian_capaian_sasaran_kerja_file` varchar(255) DEFAULT NULL,
  `penilaian_perilaku_kerja_file` varchar(255) DEFAULT NULL,
  `sk_jabatan_atasan_file` varchar(255) DEFAULT NULL,
  `kartu_pegawai_file` varchar(255) DEFAULT NULL,
  `nip_file` varchar(255) DEFAULT NULL,
  `sk_cpns_file` varchar(255) DEFAULT NULL,
  `sk_pns_file` varchar(255) DEFAULT NULL,
  `pangkat_lama` varchar(50) NOT NULL,
  `pangkat_baru` varchar(50) NOT NULL,
  `disetujui_staf_pegawai` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kenaikan_pangkat`
--

INSERT INTO `kenaikan_pangkat` (`id`, `biodata_file`, `sk_pangkat_terakhir_file`, `sk_mutasi_file`, `sk_pengangkatan_file`, `pembebasan_sementara_file`, `ijasah_file`, `surat_tanda_lulus_file`, `uraian_tugas_file`, `sertifikat_ujian_dinas_file`, `penilaian_prestasi_kerja_file`, `sasaran_kerja_pegawai_file`, `penilaian_capaian_sasaran_kerja_file`, `penilaian_perilaku_kerja_file`, `sk_jabatan_atasan_file`, `kartu_pegawai_file`, `nip_file`, `sk_cpns_file`, `sk_pns_file`, `pangkat_lama`, `pangkat_baru`, `disetujui_staf_pegawai`, `created_at`, `updated_at`) VALUES
(6, 'dokument/WMAeDGdYiprHYV5hi29uflzPMDMe9iKD6iDwuzME.pdf', 'dokument/6aAM3ptKWKlT8HrPPTQw7zPsJzXCRlqQE4XGyV5E.pdf', 'dokument/c6xIfvIvSiK2fzjxNvS8yHvzvSLp26pVKBe5mcKJ.pdf', 'dokument/6KGgSfrT6GsDJg2oegLOjoQhk2zcHAiVMAZSMhcc.pdf', 'dokument/iQhasJ3BP1ys8w0FCqKK8Lgz41RjAvTSOOizLjgX.pdf', 'dokument/pnEuMvrSXAH6nU4jrkkgN4iTkD98AQNiX8RKx2yH.pdf', 'dokument/dKae3mKoygAy4aGGKYMpqhQBRnmJ7KjijGCLpP20.pdf', 'dokument/hdrEm3AvqnfdaMR5b54cJ5WzU4nD2j8UPNqJhJo6.pdf', 'dokument/7Ycy8aZkMTte01RpM94HtNHylZGY948jLPBUE2Ix.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asd', 'asdf', 1, '2023-09-14 00:07:32', '2023-10-06 23:23:45'),
(7, 'dokument/U7FdH7DjIXit41P2xGPCL5Abi3c4weYN4GUrEH1o.pdf', 'dokument/HtRa3TimWV6xnQnFFUh725111FK1J6eoo8bDIT1L.pdf', 'dokument/iAXntzLZxmS52JjQmTzuxOl9VvOOYHy18ah8YQWa.pdf', 'dokument/AVghur33ZcETozTzZmLYm0VFaTbbBNsn7Vu7CUFh.pdf', 'dokument/EIGm8CfxO6LOTwkmm4MNdp46FMeAydtyktGPQD5d.pdf', 'dokument/xHxiSmycNVreWggHBLmB0XQvdSR6T0FCu35N4PGW.pdf', 'dokument/dmskJNPrLpqhpkUccHSjAZ6DfpQPd6c8H5KHCOlQ.pdf', 'dokument/LNqEsQiULO9bmF0o26BVy3r99CMkWAsFW9HjnuCN.pdf', 'dokument/RpUecTzhHejuejftHcEae8UCz5ZYuyuW8PejXdws.pdf', 'dokument/IB5zgCN3Fi82ZyJOEb1FLOzF5ak20I8k1EmLGyKf.pdf', 'dokument/i3O3hrtLKZsMuMxltjng4sXi2ieiJlYaG58pRNAO.pdf', 'dokument/iH7toOVHWYE7rScAzztZ29SD7zyrD8AE66e9R8jv.pdf', 'dokument/KmJP9ewOCXjJ5r23KE08lutl0WzSsFFuXXwg3JCj.pdf', 'dokument/dERshxCSqRrzW8jpx5d4lKdgdgLOU4AMhSD1R5Jd.pdf', 'dokument/mUoplA7vcCGXKOPo5eqjU66BUepycLdmLkQ9Flxk.pdf', 'dokument/5bGHcw85YIDKQBc3a4JLw3xKYK9KRJNOMicTxX1p.pdf', 'dokument/wR4N9GksfuoTp1nCwOPefMcnt2JOxhbthGzdQUCK.pdf', 'dokument/l9sjIaz1uxndOcMNGVQsmtgzJI8VZuxlt3U5BfPz.pdf', 'asdfg', 'asdfgh', 0, '2023-09-14 00:10:31', '2023-10-07 21:03:35'),
(8, 'dokument/Laq5SPDRVo56cmFq0tzD3BhgTV1YlP4qHxOokixJ.pdf', 'dokument/F0NMpGrTCuJDGTG7cwSaHpUtdESQhhGnW5KWvVu4.pdf', 'dokument/0m9MavtU5LXWxUYPpGTJcBZRfmfAw85forjVAegW.pdf', 'dokument/wifCbuNskFxQ7HR3OnGvgRvFAXgtyajw52HJ9WtL.pdf', 'dokument/YZRMWKgYUa5xMU6dslL2aYLHd9LjxNG7UG2y1gkN.pdf', 'dokument/aypArUk0Q1nUwX8PyB22GIqQ64sKXsmWXcAE4sI7.pdf', 'dokument/V4ZI3Fh9ZGLxhXNXSu6dvvCh9Aj3kKRhidmfYIIU.pdf', 'dokument/mRMOrFSo0ATboEGTYdawBBiYDlALS5Gghl6OB6FK.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'xcvb', 'mnasd', 0, '2023-09-14 00:14:27', '2023-10-07 20:42:26'),
(10, 'dokument/MxQz6jeeXh9QVYhB1t4haIWTHXwq0shDs0kpcbmA.pdf', 'dokument/wzBM5vmAD0qZ6AWPLpsbDrKka7NQ0UafK5G5AzKk.pdf', 'dokument/EdsbmN8bAHxzpLFU9lNLpe761DEm4Vxb8YDB8ES5.pdf', 'dokument/ME6V7AJbDEOuq9r0545A8a1D3c1UsXz2BYBCkxC0.pdf', 'dokument/OP67CJDgz9FJYd2ZJ6ssicdP7T1iBWxY5IIK1Xas.pdf', 'dokument/rT7HKV6inqAvHMczctHwYXSshcjishdBG05lFtVv.pdf', 'dokument/02HsNSeyueZBjMTlgH70eSIHPOtFB0arZJNAUlDs.pdf', 'dokument/IUf7NyhwPutSmzGhl84tWlYJUKJhLzqUWBqeHDKu.pdf', 'dokument/ExNbRYx70QdDglEeTt2qtgizNrR1AsWaLv0N9KQG.pdf', 'dokument/pTJ7gKVXiXt1wANQ2BIMMheCu99mOGDtgUMDXqLr.pdf', 'dokument/DY2UMUXmKTkw14EX1EKTTTD5uupf3nmjDvZqiVaQ.pdf', 'dokument/S6IGb5dnjSWEDXI5k0qpzVbO36h0mUtz91WuJbup.pdf', 'dokument/ilZriZC6DnSl7AEb35GgtkgeZdmTg27Yw2P0tkET.pdf', 'dokument/DzOYdHMiQCcBJvSdKNkNsQRMkwhDpHM1qcY2n2UB.pdf', 'dokument/5EGHoIwZwQDHZJsbtuvka1uqajz5ahPTW6CV3lMG.pdf', 'dokument/foPajCG85euWS9qKjOyW8MFK53DUZUbJCmxeAFn7.pdf', 'dokument/6uHrjEAet2IVuInOv8GZZveCfDNiXtF7zlxbj1Op.pdf', 'dokument/Ulyl0wySl6y0bkiU3xQE4q4ycHZFVJxFbEwPxpZ4.pdf', 'djoeawifjaweof', 'jcopewafvnrwepo', 0, '2023-10-07 21:06:21', '2023-10-07 21:06:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kenaikan_pangkat_pegawai`
--

CREATE TABLE `kenaikan_pangkat_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kenaikan_pangkat_id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kenaikan_pangkat_pegawai`
--

INSERT INTO `kenaikan_pangkat_pegawai` (`id`, `kenaikan_pangkat_id`, `pegawai_id`, `created_at`, `updated_at`) VALUES
(6, 6, 513, '2023-09-14 00:07:32', '2023-09-14 00:07:32'),
(7, 7, 514, '2023-09-14 00:10:31', '2023-09-14 00:10:31'),
(8, 8, 515, '2023-09-14 00:14:28', '2023-09-14 00:14:28'),
(10, 10, 501, '2023-10-07 21:06:21', '2023-10-07 21:06:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_09_02_051435_create_jabatan_table', 2),
(13, '2023_09_02_111706_create_unit_kerja_table', 3),
(14, '2023_09_03_051143_create_agama_table', 4),
(15, '2023_09_03_065600_create_golongan_table', 5),
(18, '2023_09_03_082029_create_pegawai_table', 6),
(24, '2023_09_08_153100_create_kenaikan_pangkat_table', 7),
(25, '2023_09_10_142109_create_kenaikan_pangkat_pegawai_table', 7),
(26, '2023_10_04_122022_create_catatan_usulan_table', 8),
(27, '2023_10_05_094856_create_disposisi_table', 9),
(28, '2023_10_05_142129_create_sk_kenaikan_pangkat_table', 10),
(29, '2023_10_06_093852_drop_column_from_kenaikan_pangkat_table', 11),
(30, '2023_10_06_095446_add_disetujui_staf_pegawai_to_kenaikan_pangkat_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `agama_id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `gelar` varchar(10) DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `jabatan_id` bigint(20) UNSIGNED NOT NULL,
  `golongan_id` bigint(20) UNSIGNED NOT NULL,
  `unit_kerja_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_telepon` varchar(13) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_lengkap`, `jenis_kelamin`, `agama_id`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `status_perkawinan`, `pendidikan_terakhir`, `gelar`, `tanggal_masuk`, `jabatan_id`, `golongan_id`, `unit_kerja_id`, `nomor_telepon`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(465, '69982685', 'Ottilie Pagac', 'laki-laki', 2, '8639 Witting Points\nAlanisview, MD 13303-1325', 'South Dayneshire', '2016-02-01', 'Duda', 'S3', 'S.Ip', '1981-08-15', 5, 3, 4, '+17726805813', 'demond92@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(466, '43317010', 'Katlynn O\'Kon', 'perempuan', 3, '146 Terry Neck\nBernhardfurt, AL 69819-6364', 'Faustinoberg', '1976-07-29', 'Sudah menikah', 'SMP', 'Ph.D', '1993-03-26', 5, 3, 4, '+12707852520', 'estevan.dickens@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(467, '86490470', 'Hoyt Collins II', 'perempuan', 3, '667 Herzog Knoll\nStreichview, MD 54210', 'Lake Orrinville', '1972-02-06', 'Duda', 'S1', 'S.Kom', '1993-04-13', 5, 4, 5, '+15634607209', 'giovani67@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(468, '58170458', 'Kariane Boyle', 'perempuan', 2, '387 Junior Pines\nAllenland, NH 43807-9047', 'West Wilhelm', '1986-10-19', 'Sudah menikah', 'D4', 'Ph.D', '1981-05-24', 3, 2, 5, '+18154838752', 'deborah.weber@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(469, '23591731', 'Mr. Jamaal Schroeder', 'laki-laki', 3, '1360 McLaughlin Lake Apt. 291\nHarriston, IL 24391-7744', 'New Maureen', '2008-11-01', 'Sudah menikah', 'S3', 'S.Ip', '2022-04-02', 3, 2, 5, '+15205333078', 'angelita92@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(470, '55720526', 'Amelia Pfeffer', 'laki-laki', 1, '205 Carter Circle Suite 183\nEast Allison, WA 28265-8888', 'Manleyfort', '1999-04-26', 'Duda', 'S1', 'Ph.D', '1978-01-23', 5, 5, 1, '+17324146891', 'mann.annette@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(471, '79697699', 'Dr. Devonte Klein', 'laki-laki', 5, '129 Kozey Parks\nBrownport, LA 37718', 'West Chad', '1997-07-17', 'Belum menikah', 'D3', 'Ph.D', '1987-10-20', 5, 1, 4, '+15049583306', 'antonia26@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(472, '34672368', 'Mr. Colt Wunsch', 'perempuan', 5, '3941 Veum Run Apt. 302\nHanebury, AL 93893-5336', 'South Jenaburgh', '1995-09-14', 'Sudah menikah', 'D2', 'S.Ip', '2001-08-27', 5, 4, 5, '+18148217140', 'lela68@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(473, '42162039', 'Willa Lynch', 'perempuan', 4, '28022 Frami Prairie Apt. 177\nAmiyafurt, FL 81244-1880', 'Ernsermouth', '1993-08-13', 'Sudah menikah', 'D4', 'M.A', '2006-04-18', 5, 3, 1, '+18575069001', 'enrique.johnston@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(474, '70407809', 'Ayden Wisoky', 'laki-laki', 7, '60331 Harmon Hollow Apt. 208\nJohnsonport, ID 53469-8196', 'Leuschketon', '2019-03-21', 'Belum menikah', 'S2', 'M.A', '1980-09-26', 5, 4, 4, '+13472655698', 'gaston30@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(475, '58783535', 'Randy Rosenbaum', 'laki-laki', 1, '387 Deven Land\nSouth August, LA 96890-5969', 'Osinskiview', '1973-12-14', 'Janda', 'S1', 'S.Ip', '2012-02-26', 3, 4, 4, '+17812520930', 'eleanora28@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(476, '70250399', 'Lucienne Barton', 'laki-laki', 3, '93670 Pfeffer Causeway\nPort Jean, RI 94646', 'Amanitown', '1998-01-31', 'Duda', 'D1', 'S.Kom', '1982-02-14', 5, 5, 4, '+18068763254', 'lavinia.strosin@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(477, '52070273', 'Prof. Maximus Heller', 'laki-laki', 2, '1265 Shawna Groves\nOrvilleside, OK 69776-3372', 'South Lorainefort', '1983-11-09', 'Duda', 'S1', 'Ph.D', '1976-06-30', 3, 3, 1, '+19479883308', 'wmetz@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(478, '77260207', 'Dashawn Schuster III', 'laki-laki', 7, '7785 Heller Stravenue Suite 222\nSouth Marcushaven, CO 29365', 'Dovieport', '2002-09-29', 'Duda', 'S2', 'S.Kom', '2020-06-13', 5, 3, 1, '+19174981142', 'lisandro47@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(479, '30453766', 'Miss Ivory Armstrong I', 'laki-laki', 1, '61748 Nathanael Locks\nCamdenmouth, VT 08535', 'Christineton', '1982-01-29', 'Duda', 'D4', 'S.Kom', '1978-09-23', 3, 5, 5, '+12605773824', 'justine07@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(480, '66837868', 'Cade Walsh MD', 'perempuan', 2, '241 Stroman Oval\nPort Lilliana, NJ 75704', 'New Jaquan', '2005-01-30', 'Sudah menikah', 'D4', 'S.Ip', '2009-06-05', 3, 1, 5, '+15409314316', 'runolfsdottir.yasmeen@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(481, '35280274', 'Lexie Reilly MD', 'laki-laki', 3, '662 Leif Stravenue\nNorth Tanner, WV 43879-0856', 'New Katrine', '2011-08-23', 'Duda', 'D4', 'S.Ip', '2007-04-19', 5, 5, 1, '+15412786705', 'ana86@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(482, '19371675', 'Stephan Schmitt', 'laki-laki', 1, '725 Fredy Manors\nJerdefort, TN 09084', 'Darefurt', '1973-08-09', 'Sudah menikah', 'S1', 'S.Kom', '2007-06-12', 3, 5, 4, '+19253432905', 'crist.josiah@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(483, '67282416', 'Hillard Tromp', 'laki-laki', 1, '899 Becker Forks\nHomenicktown, OR 66747-8414', 'Lake Genesis', '1983-04-02', 'Duda', 'SMP', 'S.Ip', '2020-10-14', 3, 4, 5, '+17866900830', 'blueilwitz@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(484, '57863180', 'Osvaldo Lynch II', 'perempuan', 4, '27212 Rosie Fall\nNorth Adaline, NV 49689-8414', 'Heaneyport', '2018-11-21', 'Sudah menikah', 'D2', 'Ph.D', '1976-04-05', 3, 4, 4, '+12108890617', 'chadrick33@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(485, '83656360', 'Mr. Cornell Conn', 'perempuan', 6, '3263 Nasir Spring\nLynchfort, TX 43943', 'Hesselfort', '2011-06-06', 'Sudah menikah', 'D3', 'S.Kom', '1980-02-18', 3, 5, 5, '+14844981511', 'ivory06@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(486, '74437052', 'Jayne Brakus', 'laki-laki', 6, '845 Keeling Drive Suite 220\nGreenholtmouth, PA 04171', 'Pfannerstillbury', '1979-12-23', 'Duda', 'S3', 'S.Kom', '1973-09-30', 5, 5, 4, '+15178471356', 'yschamberger@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(487, '74165023', 'Paolo Marks', 'laki-laki', 5, '8304 Richmond Shore Suite 822\nWest Hettiehaven, NV 75884-4015', 'Neomastad', '1992-08-11', 'Janda', 'S3', 'M.A', '2014-10-06', 3, 6, 4, '+14245703413', 'jayson.ullrich@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(488, '55977018', 'Mario Heathcote', 'laki-laki', 7, '7913 Herzog Circles Apt. 185\nSophietown, LA 88847', 'Lueilwitzfurt', '2008-02-12', 'Janda', 'SMP', 'M.A', '1980-09-19', 5, 4, 4, '+17348855669', 'noelia.hand@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(489, '96795070', 'Joan Kuhic', 'perempuan', 2, '1717 Ratke Radial Suite 582\nLake Brigitte, OH 99723-8654', 'North Bertramburgh', '2017-11-12', 'Belum menikah', 'SMA', 'Ph.D', '2008-09-19', 5, 5, 1, '+12674479136', 'jessy.fisher@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(490, '35607222', 'Kory Cummings', 'laki-laki', 7, '3263 Gleichner Island Suite 579\nNienowshire, ME 67257', 'New Carrie', '1984-05-03', 'Duda', 'S1', 'S.Ip', '1995-05-11', 3, 3, 5, '+17404131150', 'desiree76@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(491, '79542881', 'Elvie Keeling', 'laki-laki', 4, '74222 Jake Mission Suite 701\nSouth Creola, NH 82396-2732', 'Jedchester', '1999-05-03', 'Janda', 'D2', 'Ph.D', '2016-12-29', 5, 1, 5, '+16027640773', 'frances98@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(492, '79196206', 'Esmeralda Waelchi', 'laki-laki', 3, '136 Pansy Plaza\nWest Pattie, KY 77606-4656', 'New Rozellaton', '1979-05-05', 'Sudah menikah', 'S2', 'S.Ip', '2022-04-02', 3, 2, 4, '+15414010030', 'ebergnaum@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(493, '31085318', 'Tanya Berge Jr.', 'perempuan', 7, '2816 Towne Mills\nWisokyfurt, MS 55363', 'West Lylaport', '2012-04-07', 'Sudah menikah', 'SMA', 'Ph.D', '1999-05-11', 3, 3, 1, '+17268476666', 'tritchie@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(494, '18860879', 'Ole Sanford', 'laki-laki', 1, '296 Bernier Parkway\nSouth Orlandotown, NV 37525', 'Reyesville', '1984-05-21', 'Belum menikah', 'D2', 'Ph.D', '1978-06-16', 5, 1, 5, '+17378890727', 'urban86@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(495, '96417824', 'Arvilla Stehr', 'laki-laki', 2, '2792 Jacques Squares Suite 041\nGarretfurt, WY 94737', 'Port Carolinaton', '1989-01-29', 'Janda', 'S3', 'S.Ip', '1997-08-01', 5, 3, 1, '+13477666189', 'savannah.doyle@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(496, '54137121', 'Prof. Yazmin Homenick', 'perempuan', 1, '61478 Blair Hill Suite 069\nMertzbury, IN 49522', 'Borerburgh', '1995-04-06', 'Duda', 'SMP', 'M.A', '2013-08-03', 5, 6, 4, '+18509272339', 'fschultz@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(497, '25042692', 'Anya Altenwerth V', 'perempuan', 6, '168 Barton Burg Suite 583\nWest Devin, OR 10835-6174', 'North Brooksport', '2008-07-01', 'Sudah menikah', 'SMP', 'S.Ip', '2010-07-18', 5, 2, 1, '+15646092763', 'pdibbert@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(498, '25969392', 'Santino Veum', 'laki-laki', 7, '1819 Koelpin Isle Apt. 335\nDarbyfort, MD 89727', 'East Lisettefurt', '2012-04-02', 'Sudah menikah', 'D1', 'M.A', '2017-11-21', 5, 5, 5, '+15399688999', 'fisher.kamryn@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(499, '75970969', 'Dr. Samir Von Jr.', 'perempuan', 6, '226 Dare Crest Suite 705\nJaydenberg, AZ 98116', 'Devonteborough', '2005-01-23', 'Janda', 'SMA', 'M.A', '1974-11-01', 5, 4, 4, '+18786680538', 'lind.tatum@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(500, '58116153', 'Austen Kub', 'laki-laki', 3, '6279 Kirk Crescent Suite 523\nLake Kurt, DC 15024', 'Lake Delores', '1996-01-02', 'Duda', 'D1', 'Ph.D', '1978-03-27', 3, 5, 1, '+18548652757', 'jkunde@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(501, '67378793', 'Prof. Sedrick Schmeler DVM', 'perempuan', 3, '880 Miller Trafficway\nAntwanbury, KS 14541-8446', 'Buckmouth', '1982-02-16', 'Janda', 'D3', 'Ph.D', '2014-06-15', 5, 5, 4, '+16619004961', 'lubowitz.amya@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(502, '46747981', 'Edmund Dare', 'laki-laki', 3, '15603 Letha Dale\nAnsleyborough, OK 40358', 'South Antwanmouth', '2016-02-15', 'Janda', 'S1', 'S.Kom', '2011-02-10', 5, 6, 4, '+12482922504', 'damore.bryce@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(503, '62719058', 'Gabrielle Langosh', 'perempuan', 4, '19937 Dee Well Apt. 357\nWest Golda, AK 30880-7305', 'Stracketown', '2020-04-19', 'Belum menikah', 'S1', 'Ph.D', '2013-01-16', 5, 3, 1, '+17603727868', 'granville19@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(504, '70377218', 'Mr. Kody Schuppe MD', 'laki-laki', 7, '85055 Armstrong Divide\nAudrachester, MO 28818', 'North Michaelton', '2022-09-05', 'Sudah menikah', 'S3', 'Ph.D', '2018-09-14', 3, 1, 5, '+15624930571', 'amira09@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(505, '95207399', 'Alexanne Kemmer', 'laki-laki', 4, '4468 Lilliana Tunnel Apt. 792\nAdonisburgh, HI 46073', 'Jadaport', '1996-09-14', 'Janda', 'D2', 'S.Kom', '2013-10-13', 3, 3, 5, '+15854607024', 'grohan@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(506, '61356715', 'Skye Bernhard', 'laki-laki', 2, '713 Carmel Shores Suite 873\nBarrowsbury, DC 55093', 'Lake Ellsworth', '1986-01-18', 'Duda', 'SMA', 'Ph.D', '1995-06-26', 3, 2, 4, '+16574852020', 'felix.swift@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(507, '71110226', 'Charlotte Steuber', 'perempuan', 1, '6993 Kaley Island\nWhiteborough, NY 08807-2331', 'East Zoe', '1984-10-17', 'Sudah menikah', 'D3', 'Ph.D', '1978-04-18', 3, 5, 4, '+14133745752', 'keira.botsford@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(508, '47558111', 'Darryl Hauck DDS', 'perempuan', 5, '34762 Stoltenberg Forge Suite 196\nWest Josefaburgh, NY 16236-5615', 'New Eulahside', '1981-01-30', 'Sudah menikah', 'D1', 'S.Kom', '2002-08-30', 5, 4, 1, '+13239940951', 'leopold25@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(509, '77801429', 'Maye Rowe', 'perempuan', 2, '39899 Armstrong Common\nNew Doloresville, WY 38924-2377', 'Ashlynnport', '1980-02-02', 'Janda', 'S1', 'Ph.D', '2011-01-27', 5, 6, 4, '+18457797781', 'lloyd.toy@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(510, '87348485', 'Dr. Frederic Lueilwitz DDS', 'perempuan', 5, '58676 Gibson View Apt. 829\nArdithfurt, NM 88394-5752', 'East Madisen', '2008-02-18', 'Duda', 'S1', 'S.Kom', '1996-07-10', 3, 4, 5, '+14128007462', 'oliver09@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(511, '89901782', 'Magnolia Cummerata', 'perempuan', 4, '6358 Camila Forest\nNathanport, SD 58149', 'Bergstromhaven', '2021-08-13', 'Janda', 'SMA', 'S.Ip', '1987-05-23', 5, 6, 5, '+13859725456', 'nitzsche.twila@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(512, '84069336', 'Mr. Kurt Zulauf', 'perempuan', 6, '6209 Schimmel MountainIsmaelville, WV 01431', 'Vivienburgh', '2009-05-11', 'Belum menikah', 'D1', 'S.Ip', '2009-05-11', 5, 1, 5, '+19254696358', 'krista16@example.net', 'foto/Z3WsQvTIerXCEd3CdV7xIIIAVapLwTMlng4Whaua.png', '2023-09-13 23:44:35', '2023-09-14 01:20:16'),
(513, '40517416', 'Dr. Brody Kuvalis PhD', 'perempuan', 5, '930 Kuvalis ShoalEast Blair, TX 18106', 'Cliffordtown', '2014-12-11', 'Duda', 'D1', 'S.Ip', '2014-12-11', 5, 1, 4, '+13646650873', 'lupe51@example.net', 'foto/pGeScIqk7XgxKbbYoNC2ATBfmvYryg4FzFoNNt6Q.png', '2023-09-13 23:44:35', '2023-09-14 00:52:47'),
(514, '31054524', 'Freeda Douglas', 'laki-laki', 5, '4061 Spinka View Apt. 861Anissaburgh, NJ 75349-6764', 'South Bartholome', '1986-09-08', 'Janda', 'D2', 'S.Ip', '1986-09-08', 5, 2, 4, '+13857346534', 'xreichel@example.org', 'foto/TBGCYf5u6c0e3L7i9GUCt5U6NGn6aCgQpknE6eEF.png', '2023-09-13 23:44:35', '2023-09-14 01:21:43'),
(515, '87903204', 'Johnnie Anderson', 'perempuan', 7, '249 Greyson CoveLeslyfort, PA 25568-0964', 'West Saigechester', '1993-12-17', 'Duda', 'S2', 'S.Kom', '1993-12-17', 5, 3, 1, '+16158183305', 'mosciski.otha@example.com', 'foto/so0O6mhgMX3yxIIxFk3sHK0LXx8L5vy1H04c85gu.png', '2023-09-13 23:44:35', '2023-09-14 01:24:53'),
(516, '41131133', 'Nathan Predovic', 'perempuan', 3, '934 Torey FlatPort Willaborough, WY 43539', 'New Jerald', '1972-03-18', 'Belum menikah', 'SMP', 'S.Kom', '1972-03-18', 5, 5, 5, '+15094620454', 'watsica.paris@example.com', 'foto/3wSnjx0s8E9HeIls7zceYMbG6OxhWnJJC7Y27po3.png', '2023-09-13 23:44:35', '2023-09-14 01:25:41'),
(517, '75530398', 'Prof. Jerod Lowe IV', 'laki-laki', 3, '3157 Cole MountainsWest Van, NE 54579-4597', 'East Idella', '2007-05-28', 'Belum menikah', 'SMP', 'M.A', '2007-05-28', 3, 5, 4, '+18458669810', 'xpollich@example.net', 'foto/eEFyPAn59AFGm6Yas6Ogk68Fv8FlPFtqBU1YM3s0.png', '2023-09-13 23:44:35', '2023-09-17 05:33:58'),
(518, '93921253', 'Ms. Adrienne Feeney DVM', 'laki-laki', 7, '612 Swaniawski Mount Suite 862South Lorichester, WV 07052-1276', 'North Tod', '1988-08-04', 'Duda', 'SMA', 'M.A', '1988-08-04', 5, 1, 4, '+18703141961', 'beth.hettinger@example.com', 'foto/ZUGZGlqxz6czfWjqjXRt1zzbc6YLimYG045E6cpQ.png', '2023-09-13 23:44:35', '2023-09-14 01:26:55'),
(519, '41914565', 'Brionna Johns', 'perempuan', 1, '8949 Brannon IslePort Gaetano, AR 84960', 'East Adammouth', '1993-04-06', 'Duda', 'D2', 'M.A', '1993-04-06', 5, 5, 1, '+18284759501', 'jovani.walter@example.net', 'foto/LsPnqYnsqqehjOWrxnW9aQ4wV1yyu6ovREIQdeVg.png', '2023-09-13 23:44:35', '2023-09-29 18:41:06'),
(520, '58273622', 'Claire Buckridge', 'perempuan', 7, '78865 Junius CrestWest Dominicbury, OR 90398', 'West Liamburgh', '2021-12-01', 'Janda', 'SMA', 'S.Ip', '2021-12-01', 5, 1, 4, '+15348495446', 'coty.hermiston@example.com', 'foto/lvxRGeAyOzMCETy4rthTdtKMtgFwlPbqKF9ffQPP.png', '2023-09-13 23:44:35', '2023-09-29 18:47:54'),
(522, '31096768', 'Toni Stoltenberg', 'perempuan', 3, '618 Hackett Lake Apt. 442Rosalindland, NV 58510', 'South Marcelport', '1982-06-02', 'Belum menikah', 'S2', 'M.A', '1982-06-02', 3, 3, 1, '+13093482717', 'marshall.littel@example.org', 'foto/63pE7yoKHErGLqvOArAHqaUbSCMFqMSCkfg3tzlS.png', '2023-09-13 23:44:35', '2023-09-29 18:48:21'),
(523, '80982247', 'Eve Willms', 'laki-laki', 3, '9832 Casimer Fall\nWest Laurine, DC 72764', 'Lake Twila', '2016-05-17', 'Janda', 'S2', 'S.Kom', '1983-10-08', 3, 1, 1, '+17279161908', 'wtromp@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(524, '73200108', 'Ernestina Ullrich Sr.', 'perempuan', 6, '35044 Janie Islands\nSouth Alejandratown, DE 02829', 'South Vivianne', '2005-06-13', 'Duda', 'D4', 'M.A', '1996-06-10', 3, 2, 4, '+19513188344', 'ubaldo.donnelly@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(525, '62902751', 'Albert Stiedemann', 'laki-laki', 4, '306 Ernestina Burg\nNew Germanland, OR 54355-3993', 'West Willa', '1978-07-06', 'Janda', 'SMA', 'S.Kom', '1976-12-18', 5, 1, 4, '+12015393492', 'irwin92@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(526, '24314773', 'Breana Kuhn MD', 'laki-laki', 5, '21835 Volkman Locks\nKunzemouth, NM 71413-7620', 'West Francis', '2005-09-25', 'Belum menikah', 'S2', 'S.Kom', '2000-02-07', 5, 2, 4, '+16075532409', 'ross.kuhic@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(527, '11981560', 'Owen Russel MD', 'perempuan', 6, '669 Leffler Islands Suite 466\nGerlachtown, OR 28132-6466', 'New Carmel', '1995-04-25', 'Duda', 'S1', 'S.Kom', '2018-09-30', 3, 1, 1, '+17089398225', 'wdibbert@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(528, '44803159', 'Dr. Quinten Emmerich V', 'laki-laki', 6, '1500 Karson Manors\nPort Rooseveltbury, NH 89188', 'Rowlandstad', '2007-07-13', 'Duda', 'S1', 'S.Ip', '1991-11-09', 3, 4, 1, '+17545553492', 'zachary38@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(529, '61128501', 'Bruce Hansen', 'perempuan', 1, '31172 Wolf Valleys Suite 564\nSouth Shanelton, ID 70872', 'North Sheilaview', '2006-08-12', 'Duda', 'SMP', 'Ph.D', '1974-09-23', 3, 4, 4, '+16679409920', 'achristiansen@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(530, '48111795', 'Mr. Peter Mueller IV', 'perempuan', 6, '13621 Alanis Points Suite 749\nNew Allen, KS 78689', 'West Stuartshire', '2006-12-24', 'Janda', 'SMP', 'M.A', '2000-10-07', 5, 3, 1, '+14329483281', 'aliyah.reilly@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(531, '75655322', 'Erich Gutkowski', 'perempuan', 6, '91551 Harry Oval Suite 516\nBertrandmouth, WV 49420', 'Stephonside', '2005-04-26', 'Duda', 'D1', 'M.A', '1973-05-29', 3, 4, 5, '+12727106805', 'uhayes@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(532, '54624032', 'Dusty Bosco', 'perempuan', 7, '2384 Miller Way\nEmeliashire, UT 80677-6527', 'Willmsbury', '2014-11-16', 'Janda', 'D4', 'Ph.D', '1993-09-26', 3, 1, 5, '+16366580956', 'mcassin@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(533, '65290292', 'Muriel Ondricka', 'perempuan', 3, '13102 Emard Motorway Suite 034\nKundetown, ME 62167-0920', 'East Jimmie', '2009-01-25', 'Duda', 'SMA', 'S.Ip', '1982-02-25', 3, 1, 1, '+16024868264', 'alexandro92@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(534, '29278596', 'Romaine Homenick', 'laki-laki', 6, '20153 Helena Forks\nLake Eddieburgh, AR 91534', 'Joanyburgh', '1994-12-13', 'Belum menikah', 'SMA', 'S.Kom', '1990-09-17', 3, 3, 4, '+18327539723', 'josie86@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(535, '65044167', 'Berneice Gislason', 'laki-laki', 2, '282 Bogisich Causeway Apt. 313\nNew Lionel, TX 41152', 'Lake Tyriquebury', '1993-05-27', 'Duda', 'S1', 'Ph.D', '2015-02-26', 3, 3, 4, '+13522306194', 'hlang@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(536, '97017119', 'Freeman Davis', 'perempuan', 7, '982 Lowe Rue\nWest Americaport, LA 78918-6993', 'Schimmelton', '2017-01-01', 'Belum menikah', 'D1', 'S.Ip', '2019-08-08', 5, 6, 4, '+14124439424', 'harold30@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(537, '13388780', 'Macy Pouros', 'laki-laki', 7, '165 Walsh Flats Suite 859\nWest Devynville, VT 96881-0233', 'Botsfordview', '2011-03-26', 'Duda', 'S2', 'S.Ip', '1983-11-26', 5, 1, 1, '+18384075741', 'doyle.jaqueline@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(538, '20075992', 'Elaina Rohan', 'perempuan', 6, '64079 Santino Burg Suite 258\nWest Reganstad, WA 11463-3255', 'Rosieburgh', '2002-08-05', 'Duda', 'D1', 'S.Ip', '2009-12-13', 3, 2, 4, '+17438358031', 'luis18@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(539, '52661546', 'Noah Wehner', 'laki-laki', 6, '371 Jermaine Stravenue\nWest Curtis, MO 69385-5539', 'Sherwoodchester', '2007-05-08', 'Sudah menikah', 'S1', 'M.A', '2009-09-11', 3, 1, 4, '+18503016188', 'dino90@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(540, '29304363', 'Rosalyn Hermiston', 'laki-laki', 3, '288 Gabrielle Roads Apt. 570\nAbernathyborough, NC 27856', 'Nicolasview', '1982-01-01', 'Janda', 'S3', 'Ph.D', '2018-11-14', 3, 3, 1, '+15134608129', 'lang.earline@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(541, '55453468', 'Retta Kessler', 'perempuan', 1, '8467 Jadon Loop\nWest Brennaport, IL 51787', 'Lake Rudolphmouth', '1980-12-13', 'Janda', 'S2', 'S.Kom', '2011-02-14', 5, 1, 1, '+12017447834', 'nikita.klocko@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(542, '22241736', 'Ronny Gottlieb', 'perempuan', 6, '1550 Carroll Summit Suite 575\nSouth Elyssashire, AR 30229-2899', 'Darrelville', '1990-09-07', 'Belum menikah', 'S3', 'S.Kom', '1981-10-04', 3, 3, 1, '+18577455837', 'dario84@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(543, '53604408', 'Mrs. Viviane Konopelski', 'perempuan', 4, '5063 Labadie Lodge Suite 916\nLake Gaylechester, AZ 16849-9448', 'New Leliaton', '1991-02-25', 'Belum menikah', 'D3', 'Ph.D', '1987-04-21', 3, 5, 4, '+16783335449', 'jordyn73@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(544, '56519626', 'Ernie Wuckert', 'perempuan', 6, '4932 Liliana Cliff\nNorth Skylar, NH 32602', 'Carleymouth', '1975-11-06', 'Sudah menikah', 'D1', 'S.Ip', '1990-12-23', 3, 6, 4, '+18082319094', 'ilindgren@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(545, '72282469', 'Dan Von DDS', 'perempuan', 1, '71452 Rick Plains\nBeershire, LA 90246', 'Wolfmouth', '2017-07-06', 'Janda', 'SMP', 'Ph.D', '1974-08-30', 5, 1, 5, '+15205376984', 'francesca82@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(546, '71204827', 'Whitney Lynch Sr.', 'laki-laki', 2, '525 Jordy Pines Suite 385\nVernonborough, MI 81640-3948', 'Omerland', '1978-02-27', 'Duda', 'S1', 'M.A', '1987-08-17', 3, 6, 4, '+13083916262', 'jordi00@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(547, '94106025', 'Lupe Carter V', 'laki-laki', 7, '90514 Price Views\nEast Christine, UT 64002', 'O\'Konberg', '2022-09-23', 'Sudah menikah', 'SMP', 'M.A', '2021-02-26', 5, 3, 4, '+19299857336', 'rosemary.reinger@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(548, '28653274', 'Miss Rahsaan Langosh DVM', 'perempuan', 5, '80570 Sibyl Cliffs\nNolamouth, WY 01302-6935', 'New Granville', '2011-03-01', 'Janda', 'SMA', 'S.Ip', '1981-07-08', 5, 6, 1, '+19209026157', 'evan87@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(549, '84280667', 'Veda Brakus', 'laki-laki', 6, '951 Jaron Walk Apt. 830\nHaneberg, MN 33464-5646', 'Murphytown', '1996-12-18', 'Janda', 'SMP', 'Ph.D', '1984-03-05', 5, 5, 1, '+14844492932', 'winston.maggio@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(550, '36672483', 'Daija Medhurst', 'perempuan', 2, '97231 Bryana Row\nGoldnermouth, IA 05161', 'Whitemouth', '1999-04-10', 'Sudah menikah', 'S3', 'S.Kom', '1980-01-09', 5, 1, 4, '+16416653446', 'feil.kody@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(551, '14860242', 'Lesly Padberg', 'laki-laki', 1, '23415 Obie Meadow\nPort Bailey, PA 40236-1553', 'Kingshire', '1985-08-11', 'Duda', 'S2', 'S.Ip', '2017-01-03', 5, 3, 4, '+18016524370', 'bettye.sawayn@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(552, '53438422', 'Sadye Kunde', 'perempuan', 3, '149 Harvey Bridge\nDurwardbury, WV 18231-5140', 'Isadoreshire', '2003-04-03', 'Belum menikah', 'D1', 'Ph.D', '1974-07-09', 3, 4, 4, '+18705342361', 'diamond.upton@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(553, '49649127', 'Nyah Kiehn Jr.', 'laki-laki', 7, '68201 Maymie Crescent Suite 504\nLynchburgh, MA 05535-7484', 'Rolfsonview', '1974-07-05', 'Janda', 'SMP', 'M.A', '1999-11-27', 5, 1, 5, '+12098842010', 'ggreenfelder@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(554, '12582086', 'Royce Gorczany', 'perempuan', 4, '84298 Ward Causeway Apt. 980\nSouth Carolton, RI 42283-7880', 'Shanahanberg', '2013-08-12', 'Sudah menikah', 'S3', 'M.A', '2010-06-18', 5, 1, 4, '+16164098931', 'dietrich.aglae@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(555, '54658571', 'Evalyn Swaniawski', 'perempuan', 3, '521 Lockman Trail\nTravisport, WV 20819', 'Cecilview', '2013-12-05', 'Sudah menikah', 'D1', 'Ph.D', '2002-09-19', 5, 4, 5, '+15596697695', 'ofriesen@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(556, '85491711', 'Velma Wiegand', 'perempuan', 6, '5479 Johns Drive Suite 327\nLake Adriannashire, TX 72508', 'Fritschborough', '1980-04-16', 'Duda', 'S3', 'Ph.D', '2021-04-25', 5, 4, 4, '+13053550507', 'gerlach.mertie@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(557, '32189061', 'Augustine Kihn', 'laki-laki', 3, '4926 Jovanny Loaf\nNorth Garrisonburgh, RI 80502-5679', 'Mosciskiview', '2021-01-03', 'Janda', 'S2', 'S.Ip', '2005-09-02', 5, 5, 4, '+17756571899', 'dnitzsche@example.com', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(558, '14275214', 'Adam Kohler I', 'laki-laki', 2, '97717 Schaden Plaza Suite 380\nKautzerview, NY 72707', 'South Stefanieville', '2002-07-23', 'Sudah menikah', 'S1', 'Ph.D', '2007-06-19', 5, 1, 5, '+17856727442', 'tromp.moses@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(559, '24676562', 'Walton Cronin', 'perempuan', 6, '77380 Hank Island Apt. 151\nEast Dannie, GA 61067', 'East Hectorstad', '1978-04-15', 'Sudah menikah', 'D4', 'Ph.D', '1982-03-25', 5, 4, 4, '+19547340059', 'treutel.dianna@example.net', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(560, '81258999', 'Alvah Erdman', 'perempuan', 1, '1132 Hudson Lights Suite 647\nMagnoliaburgh, SC 23921-8673', 'West Pansy', '1992-04-27', 'Sudah menikah', 'D1', 'S.Ip', '1977-03-15', 3, 2, 4, '+14124200714', 'zieme.kane@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(562, '99657095', 'Dr. Lavern Conn', 'perempuan', 1, '833 White Prairie\nMorissettemouth, NH 44069', 'Port Retha', '2000-11-25', 'Duda', 'SMA', 'S.Ip', '1995-12-18', 5, 2, 5, '+14635895606', 'juanita.sporer@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(563, '79738371', 'Marta Hilpert', 'perempuan', 5, '190 Providenci Rapids\nWolffberg, NC 81714-7716', 'Rosenbaumborough', '1976-02-25', 'Sudah menikah', 'D1', 'S.Kom', '1997-01-15', 5, 2, 5, '+18454726555', 'alivia.wilderman@example.org', 'foto/avatar-3.png', '2023-09-13 23:44:35', '2023-09-13 23:44:35'),
(564, '123132131', 'james', 'laki-laki', 1, 'testing', 'testing', '2023-10-04', 'Belum menikah', 'D3', 's.pd', '2023-10-04', 6, 2, 5, '082147554549', 'james@gmail.com', 'foto/m8aW4xZXID1KvgjZLmFO3wPrJ5ZoH84EvKEHC94N.png', '2023-10-01 17:51:21', '2023-10-01 17:51:21'),
(565, '123123123', 'clara indah', 'perempuan', 2, 'testing testing testign', 'kupang', '2023-10-09', 'Belum menikah', 'S2', 'S.PD', '2023-10-09', 6, 1, 7, '081234444131', 'clara@gmail.com', 'foto/x7kIgl80XMKbdJ3IY31fdw4BK8y57PZmjBbCjlTe.jpg', '2023-10-07 20:50:49', '2023-10-07 20:50:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_kenaikan_pangkat`
--

CREATE TABLE `sk_kenaikan_pangkat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `pangkat_lama` varchar(80) NOT NULL,
  `pangkat_baru` varchar(80) NOT NULL,
  `catatan` text DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sk_kenaikan_pangkat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'testing', '2023-09-02 05:25:46', '2023-09-02 05:25:46'),
(4, 'abcdefghijkl', '2023-09-02 05:27:52', '2023-09-02 05:27:52'),
(5, 'abcdfghijklmn', '2023-09-02 05:28:44', '2023-09-02 05:28:44'),
(7, 'testing testing', '2023-10-07 20:46:32', '2023-10-07 20:46:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `rolle` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `deskripsi`, `rolle`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', 'adalah admin super yang memiliki keunggulan dibanding yang lain', 'super_admin', NULL, '$2y$10$aR0uYy2pIRgzIEbH5sOwOuNpEW4A9DfDnPADvLBIgePJP7bTPatRK', 'avatar/jKtvEnUumIOiSsdSo7Us86w4d5OlebLyU5DlrGsV.png', NULL, '2023-08-31 04:52:46', '2023-09-01 05:08:01'),
(2, 'sekertaris', 'sekertaris@gmail.com', 'tugas sekertaris untuk melakukan pengecekan dan penyetujuan kenaikan pangkat', 'sekertaris', NULL, '$2y$10$6ADNj/adhNgCMqsOY.9sEuN/WMk6N9hQATKm9sSHL0VexgSjIuS36', 'avatar/VlvijEZ48aCV6ra5wh6bhFNS0a360RJpvyxbsuQT.png', NULL, '2023-08-31 04:52:46', '2023-09-01 04:53:36'),
(4, 'pegawai', 'pegawai@gmail.com', 'tugas pegawai untuk melakukan penginputan data pegawai dan berkas pengajuan kenaikan pangkat', 'pegawai', NULL, '$2y$10$oI5tL28zxTXWA9B3Ou7Zke/bZaVFGubyN6p1BHodfPPO/bDcsc3eG', 'avatar/b7PsiCzo6C0TTWdLBcRFFIozGpPipPbfimTDmAh9.png', NULL, '2023-09-28 04:18:02', '2023-09-28 04:18:02'),
(5, 'staf_pegawai', 'staf_pegawai@gmail.com', 'tugas pegawai untuk melakukan penginputan data pegawai dan berkas pengajuan kenaikan pangkat', 'staf_pegawai', NULL, '$2y$10$hxK6pzU/QhJdh.GZR.gSFeMurW6Jx3IebjcHh/E5K5bE9witO8Szi', 'avatar/VlvijEZ48aCV6ra5wh6bhFNS0a360RJpvyxbsuQT.png', NULL, '2023-10-01 18:52:29', '2023-10-01 18:52:29'),
(7, 'kasubag', 'kasubag@gmail.com', 'tugas kasubag untuk melakukan penginputan data pegawai dan berkas pengajuan kenaikan pangkat', 'kasubag', NULL, '$2y$10$LLHa0LRXRyMS30H9/qbK4.BHGjgzhSB2NBL9ZEocaO.D..zjjZTHu', 'avatar-5.png', NULL, '2023-10-03 18:01:16', '2023-10-03 18:01:16'),
(8, 'pimpinan', 'pimpinan@gmail.com', 'pimpinan adalah yang memiliki keunggulan dibanding yang lain', 'pimpinan', NULL, '$2y$10$hj7wLZxLKZRFCDLvhOxZ1u7Q3LtSan/cLSZiPGnHYt/6qRV/RhHre', 'avatar-5.png', NULL, '2023-10-03 18:37:25', '2023-10-03 18:37:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `catatan_usulan`
--
ALTER TABLE `catatan_usulan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catatan_usulan_pegawai_id_foreign` (`pegawai_id`);

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disposisi_pegawai_id_foreign` (`pegawai_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kenaikan_pangkat`
--
ALTER TABLE `kenaikan_pangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kenaikan_pangkat_pegawai`
--
ALTER TABLE `kenaikan_pangkat_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kenaikan_pangkat_pegawai_kenaikan_pangkat_id_foreign` (`kenaikan_pangkat_id`),
  ADD KEY `kenaikan_pangkat_pegawai_pegawai_id_foreign` (`pegawai_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_nip_unique` (`nip`),
  ADD UNIQUE KEY `pegawai_email_unique` (`email`),
  ADD KEY `pegawai_agama_id_foreign` (`agama_id`),
  ADD KEY `pegawai_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `pegawai_golongan_id_foreign` (`golongan_id`),
  ADD KEY `pegawai_unit_kerja_id_foreign` (`unit_kerja_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sk_kenaikan_pangkat`
--
ALTER TABLE `sk_kenaikan_pangkat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sk_kenaikan_pangkat_pegawai_id_foreign` (`pegawai_id`);

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `catatan_usulan`
--
ALTER TABLE `catatan_usulan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kenaikan_pangkat`
--
ALTER TABLE `kenaikan_pangkat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kenaikan_pangkat_pegawai`
--
ALTER TABLE `kenaikan_pangkat_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=566;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sk_kenaikan_pangkat`
--
ALTER TABLE `sk_kenaikan_pangkat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `catatan_usulan`
--
ALTER TABLE `catatan_usulan`
  ADD CONSTRAINT `catatan_usulan_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kenaikan_pangkat_pegawai`
--
ALTER TABLE `kenaikan_pangkat_pegawai`
  ADD CONSTRAINT `kenaikan_pangkat_pegawai_kenaikan_pangkat_id_foreign` FOREIGN KEY (`kenaikan_pangkat_id`) REFERENCES `kenaikan_pangkat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kenaikan_pangkat_pegawai_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_agama_id_foreign` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`),
  ADD CONSTRAINT `pegawai_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongan` (`id`),
  ADD CONSTRAINT `pegawai_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`),
  ADD CONSTRAINT `pegawai_unit_kerja_id_foreign` FOREIGN KEY (`unit_kerja_id`) REFERENCES `unit_kerja` (`id`);

--
-- Ketidakleluasaan untuk tabel `sk_kenaikan_pangkat`
--
ALTER TABLE `sk_kenaikan_pangkat`
  ADD CONSTRAINT `sk_kenaikan_pangkat_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
