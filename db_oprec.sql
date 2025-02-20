-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2025 at 12:02 PM
-- Server version: 8.0.41-0ubuntu0.22.04.1
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_oprec`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(5, 'pemrograman@2024', '$2y$10$G8CJD2vEQAQeMp5EjctyL.nN7Sxuhn1pn7LUZGf/DIFTjNIJZ8U1G');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nim` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tglLahir` date NOT NULL,
  `tempatLahir` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `thnKelulusan` int NOT NULL,
  `nomer_tlp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ss_ig` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ss_yt` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ktm` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `projectFile1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `projectFile2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `projectFile3` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `projectFile4` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Description1` text COLLATE utf8mb4_general_ci,
  `Description2` text COLLATE utf8mb4_general_ci,
  `Description3` text COLLATE utf8mb4_general_ci,
  `Description4` text COLLATE utf8mb4_general_ci,
  `alasan` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`id`, `nama`, `nim`, `kelas`, `alamat`, `tglLahir`, `tempatLahir`, `jenis_kelamin`, `thnKelulusan`, `nomer_tlp`, `email`, `ss_ig`, `ss_yt`, `ktm`, `ijazah`, `foto`, `cv`, `projectFile1`, `projectFile2`, `projectFile3`, `projectFile4`, `Description1`, `Description2`, `Description3`, `Description4`, `alasan`, `created_at`, `update_at`) VALUES
(40, 'Hanif', '241080200112', 'A2', 'Fadhlullah Hanif Nur Caturangga ', '2005-03-16', 'Sidoarjo', 'Laki-laki', 2023, '081334099160', 'hanif.sakurasao@gmail.com', 'Hanif_IG_1727109591.jpg', 'Hanif_YT_1727109591.jpg', 'Hanif_ktm_1727109591.jpeg', 'Hanif_ijazah_1727109591.jpg', 'Hanif_foto_1727109591.jpg', 'Hanif_cv_1727109591.pdf', 'Hanif_Project1_1727109591.pdf', NULL, NULL, NULL, 'Kumpulan screenshot project yang pernah saya kerjaan di sekolah ', '', '', '', 'Alasan saya ingin daftar di aslab adalah untuk mengembangkan Ilmu IT yang sudah saya miliki dan ingin mendalami lebih lanjut serta lebih mendalami dalam hal pemrograman dan coding ', '2024-09-23 23:39:51', '2024-09-23 23:39:51'),
(59, ' Akhmad Fabiyan Alimul Muntafian Muarif ', '241080200091', 'A2', 'Jl. Kamboja III, Dsn. Gareman, Ds. Babadan, Kec. Patianrowo  ', '2005-10-21', 'Jombang', 'Laki-laki', 2024, '082224133386', 'akhmadfabiyanmail@gmail.com', '_Akhmad_Fabiyan_Alimul_Muntafian_Muarif___IG_1727172802.png', '_Akhmad_Fabiyan_Alimul_Muntafian_Muarif___YT_1727172802.png', '_Akhmad_Fabiyan_Alimul_Muntafian_Muarif___ktm_1727172802.png', '_Akhmad_Fabiyan_Alimul_Muntafian_Muarif___ijazah_1727172802.png', '_Akhmad_Fabiyan_Alimul_Muntafian_Muarif___foto_1727172802.jpg', '_Akhmad_Fabiyan_Alimul_Muntafian_Muarif___cv_1727172802.pdf', '_Akhmad_Fabiyan_Alimul_Muntafian_Muarif__Project1_1727176538.zip', '_Akhmad_Fabiyan_Alimul_Muntafian_Muarif__Project2_1727176538.zip', NULL, NULL, '  Teknologi yang Digunakan: HTML, CSS, JavaScript, PHP  \r\nWebsite ini menampilkan portofolio profesional saya dengan fitur interaktif, termasuk:\r\n- Animasi Interaktif: Menambah elemen dinamis untuk pengalaman pengguna yang lebih baik.\r\n- Form Pengiriman Email: Dibuat menggunakan PHP, memungkinkan pengunjung untuk menghubungi melalui email langsung dari website.\r\n- Efek Mengetik (Typing Effect): Menambah elemen animasi yang menarik, memberi kesan modern dan profesional.\r\n\r\nPeran dan Tanggung Jawab:\r\n- Mendesain dan membangun website secara menyeluruh.\r\n- Mengintegrasikan form email berbasis PHP.\r\n- Mengimplementasikan animasi dan efek visual untuk meningkatkan estetika serta UX.\r\n', '  Teknologi yang Digunakan: HTML, CSS, JavaScript  \r\nWebsite ini adalah proyek untuk mengeksplorasi tren viral di TikTok tentang \"Cek Khodam\", yang bertujuan untuk memperkuat keterampilan pemrograman. Fokus proyek ini adalah membuat website menarik dan fungsional menggunakan teknologi front-end tanpa PHP.\r\n\r\nFitur Utama:\r\n- Pengalaman Pengguna yang Menarik: Menggabungkan elemen visual yang sederhana namun efektif untuk memberikan pengalaman yang unik.\r\n- Fokus pada Responsivitas dan Desain: Website ini dioptimalkan agar mudah diakses di berbagai perangkat, termasuk desktop dan mobile.\r\n\r\nPeran dan Tanggung Jawab:\r\n- Mendesain dan mengembangkan website dari awal menggunakan HTML, CSS, dan JavaScript.\r\n- Menciptakan antarmuka yang responsif dan ramah pengguna.\r\n', '', '', ' Saya sangat tertarik untuk melamar posisi Asisten Laboratorium di Universitas Muhammadiyah Sidoarjo karena saya ingin mendalami aspek teknis di lingkungan laboratorium dan berkontribusi dalam mendukung pembelajaran praktis. Posisi ini juga memberikan kesempatan bagi saya untuk terus mengembangkan keterampilan teknis dan komunikasi dalam lingkungan akademik yang dinamis.\n\nSaya yakin pengalaman saya di bidang pengembangan web dan teknologi dapat memberikan kontribusi yang positif di laboratorium, terutama dalam membantu mahasiswa dan staf pengajar.', '2024-09-24 18:15:38', '2024-09-24 18:15:38'),
(60, 'DETASANDE BAWA PUTRA PARDOMUAN', '241080200086', 'A1', 'Griya Kebraon Selatan 8/H-17', '2005-05-15', 'Surabaya ', 'Laki-laki', 2024, '085648578667', 'bdt150505@gmail.com', 'DETASANDE_BAWA_PUTRA_PARDOMUAN_IG_1727331147.jpeg', 'DETASANDE_BAWA_PUTRA_PARDOMUAN_YT_1727331147.jpeg', 'DETASANDE_BAWA_PUTRA_PARDOMUAN_ktm_1727331147.jpeg', 'DETASANDE_BAWA_PUTRA_PARDOMUAN_ijazah_1727331147.jpeg', 'DETASANDE_BAWA_PUTRA_PARDOMUAN_foto_1727331147.jpeg', 'DETASANDE_BAWA_PUTRA_PARDOMUAN_cv_1727331147.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Karena saya ingin mencari ilmu dan pengalaman sebanyak banyaknya', '2024-09-26 13:12:27', '2024-09-26 13:12:27'),
(61, 'RACHMAT ALFIAN AKBAR', '241080200102', 'A2', 'Jl. Anggrek RT 02 RW 03 Ds. Kepunten Kec. Tulangan', '2005-01-21', 'Sidoarjo', 'Laki-laki', 2023, '087711308041', 'aljabargtx1090@gmail.com', 'RACHMAT_ALFIAN_AKBAR_IG_1727338252.png', 'RACHMAT_ALFIAN_AKBAR_YT_1727338252.png', 'RACHMAT_ALFIAN_AKBAR_ktm_1727338252.jpg', 'RACHMAT_ALFIAN_AKBAR_ijazah_1727338252.jpg', 'RACHMAT_ALFIAN_AKBAR_foto_1727338252.jpg', 'RACHMAT_ALFIAN_AKBAR_cv_1727338252.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Karena saya ingin mengetahui lebih dalam lagi mengenai it support', '2024-09-26 15:10:52', '2024-09-26 15:10:52'),
(62, 'ROCHMAD ALIF WINARTO PUTRA', '241080200107', 'A2', 'suko,sidoarjo rt09 rw 02', '2004-03-08', 'sidoarjo', 'Laki-laki', 2023, '082329087296', 'rochmadalif668@gmail.com', 'ROCHMAD_ALIF_WINARTO_PUTRA_IG_1727404300.jpg', 'ROCHMAD_ALIF_WINARTO_PUTRA_YT_1727404300.jpg', 'ROCHMAD_ALIF_WINARTO_PUTRA_ktm_1727404300.jpg', 'ROCHMAD_ALIF_WINARTO_PUTRA_ijazah_1727404300.jpg', 'ROCHMAD_ALIF_WINARTO_PUTRA_foto_1727404300.png', 'ROCHMAD_ALIF_WINARTO_PUTRA_cv_1727404300.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'saya tertarik dengan kegiatan yg ada di dalam organisasi aslab dan saya juga tertarik di acara live coding karena kebetulan saya ingin menjadi programing/web development ', '2024-09-27 09:31:40', '2024-09-27 09:31:40'),
(63, 'MUCHAMMAD FIQY EFFENDY', '241080200108', 'A2', 'PRABAN BARAT RT. 02 RW. 02', '2005-07-15', 'Sidoarjo', 'Laki-laki', 2023, '085234112469', 'fiqyeffendy123@gmail.com', 'MUCHAMMAD_FIQY_EFFENDY_IG_1727625833.jpg', 'MUCHAMMAD_FIQY_EFFENDY_YT_1727625833.jpg', 'MUCHAMMAD_FIQY_EFFENDY_ktm_1727625833.jpg', 'MUCHAMMAD_FIQY_EFFENDY_ijazah_1727625833.jpg', 'MUCHAMMAD_FIQY_EFFENDY_foto_1727625833.JPG', 'MUCHAMMAD_FIQY_EFFENDY_cv_1727625833.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Alasan utama saya memilih bergabung Aslab adalah untuk menambah dan memperluas hard skill maupun soft skill. ', '2024-09-29 23:03:53', '2024-09-29 23:03:53'),
(64, 'Muhamad Maulana Musafir', '241080200093', 'A2', 'Desa Wunut RT.05 RW.01', '2006-04-08', 'Sidoarjo', 'Laki-laki', 2024, '895335709844', 'mmaulanamusafir@gmail.com', 'Muhamad_Maulana_Musafir_IG_1727625855.png', 'Muhamad_Maulana_Musafir_YT_1727625855.png', 'Muhamad_Maulana_Musafir_ktm_1727625855.jpg', 'Muhamad_Maulana_Musafir_ijazah_1727625855.jpg', 'Muhamad_Maulana_Musafir_foto_1727625855.jpeg', 'Muhamad_Maulana_Musafir_cv_1727625855.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Saya ingin mempelajari hal lebih dalam mengenai informatika serta memperluas relasi dan meningkatkan prestasi.', '2024-09-29 23:04:15', '2024-09-29 23:04:15'),
(65, 'ADRIANSYAH MANFI ', '241080200110', 'A1', 'GRAHA POS PROPERINDO CF-14 ', '2005-11-30', 'SIDOARJO ', 'Laki-laki', 2024, '081249616750', 'adrig996@gmail.com', 'ADRIANSYAH_MANFI__IG_1728026901.jpg', 'ADRIANSYAH_MANFI__YT_1728026901.jpg', 'ADRIANSYAH_MANFI__ktm_1728026901.jpg', 'ADRIANSYAH_MANFI__ijazah_1728026901.jpg', 'ADRIANSYAH_MANFI__foto_1728026901.jpg', 'ADRIANSYAH_MANFI__cv_1728026901.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Yang pastinya Karena ingin meningkatkan skill', '2024-10-04 14:28:21', '2024-10-04 14:28:21'),
(66, 'RADOVA ALENTA YOGASMARA', '241080200010', 'A1', 'Tulangan, Kebaron RT 01 RW 01', '2006-04-25', 'Sidoarjo', 'Laki-laki', 2024, '085785334247', 'peachanimal7690@gmail.com', 'RADOVA_ALENTA_YOGASMARA_IG_1728892902.jpg', 'RADOVA_ALENTA_YOGASMARA_YT_1728892902.jpg', 'RADOVA_ALENTA_YOGASMARA_ktm_1728892902.jpg', 'RADOVA_ALENTA_YOGASMARA_ijazah_1728892902.jpg', 'RADOVA_ALENTA_YOGASMARA_foto_1728892902.jpeg', 'RADOVA_ALENTA_YOGASMARA_cv_1728892902.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Bergabung dengan ASLAB dapat menjadi langkah  tepat untuk berkembang dan mempersiapkan masa depan yang lebih baik.', '2024-10-14 15:01:42', '2024-10-14 15:01:42'),
(67, 'Renata Maymamuroh ', '241080200060', 'A1', 'Ds. Sebani Rt. 20 Rw. 03 Kec. Tarik Kab. Sidoarjo ', '2006-01-17', 'Sidoarjo ', 'Perempuan', 2024, '089675891149', 'reenvma@gmail.com', 'Renata_Maymamuroh__IG_1728893437.', 'Renata_Maymamuroh__YT_1728893437.', 'Renata_Maymamuroh__ktm_1728893437.jpg', 'Renata_Maymamuroh__ijazah_1728893437.jpg', 'Renata_Maymamuroh__foto_1728893437.', 'Renata_Maymamuroh__cv_1728893437.', NULL, NULL, NULL, NULL, '', '', '', '', 'Dengan bergabung dalam keanggotaan Aslab, keuntungan yang kemungkinan bisa saya dapatkan adalah relasi yang terjangkau lebih luas, meningkatkan performa dan pengetahuan yang lebih mendalam pada keorganisasian dan keinformatikaan, serta dapat menentukan skala prioritas dan menjadi pribadi yang lebih dewasa.', '2024-10-14 15:10:37', '2024-10-14 15:10:37'),
(68, 'Nadya Mulya Islami ', '241080200054', 'A1', 'Dusun Mojo, RT004/RW 008, Sumberejo, Kec. Pandaan, Kab. Pasuruan, Jawa Timur 67156', '2005-09-05', 'Pasuruan ', 'Perempuan', 2024, '085736668906', 'nadyamulyaislami@gmail.com', 'Nadya_Mulya_Islami__IG_1728956050.jpg', 'Nadya_Mulya_Islami__YT_1728956050.jpg', 'Nadya_Mulya_Islami__ktm_1728956050.jpg', 'Nadya_Mulya_Islami__ijazah_1728956050.jpg', 'Nadya_Mulya_Islami__foto_1728956050.jpg', 'Nadya_Mulya_Islami__cv_1728956050.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Saya sangat amat berminat untuk bergabung dengan aslab karena saya memiliki ketertarikan yang besar terhadap teknologi dan pemrograman. Di aslab juga saya bisa belajar mulai dari nol. Meskipun saya belum memiliki pengalaman langsung di lingkungan laboratorium, saya aktif belajar melalui kursus online dan proyek yang saya kerjakan. Saya yakin dengan bergabung dengan aslab ini akan memberikan saya kesempatan untuk memperdalam pengetahuan saya, berkontribusi, dan bekerja dengan rekan-rekan yang memiliki minat yang sama dalam bidang informatika.', '2024-10-15 08:34:10', '2024-10-15 08:34:10'),
(69, 'Ghea Dewantari ', '241080200030', 'A1', 'Puri Surya Jaya A6/08 Gedangan', '2005-07-20', 'Sidoarjo ', 'Perempuan', 2024, '082126697876', 'gheadewantari05@gmail.com', 'Ghea_Dewantari__IG_1729044269.jpg', 'Ghea_Dewantari__YT_1729044269.jpg', 'Ghea_Dewantari__ktm_1729044269.jpg', 'Ghea_Dewantari__ijazah_1729044269.jpg', 'Ghea_Dewantari__foto_1729044269.jpg', 'Ghea_Dewantari__cv_1729044269.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Saya berminat untuk mengembangkan pengetahuan tentang pemrograman lebih dalam lagi dan juga meningkatkan keterampilan pemrograman', '2024-10-16 09:04:29', '2024-10-16 09:04:29'),
(70, 'APRIZA WAHYU SETIAWAN', '241080200065', 'A1', 'RT 23 RW 10 DSN.WINONG DES.NGULANWETAN KEC.POGALAN KAB.TRENGGALEK', '2005-04-11', 'TRENGGALEK', 'Laki-laki', 2024, '089663155588', 'aprisawahyu80@gmail.com', 'APRIZA_WAHYU_SETIAWAN_IG_1729254041.jpeg', 'APRIZA_WAHYU_SETIAWAN_YT_1729254041.jpeg', 'APRIZA_WAHYU_SETIAWAN_ktm_1729254041.jpeg', 'APRIZA_WAHYU_SETIAWAN_ijazah_1729254041.jpeg', 'APRIZA_WAHYU_SETIAWAN_foto_1729254041.JPG', 'APRIZA_WAHYU_SETIAWAN_cv_1729254041.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'INGIN MENDALAMI TENTANG PEMOGRAMAN BIAR DAPAT PENGETAHUAN YANG LUAS DAN BISA SALING MEMBANTU TEMAN YANG MEMBUTUHKAN,SERTA INGIN MENJALIN SILATURAHMI SESAMA ANGGOTA ASLAB BIAR SALING KOMPAK DALAM MENJALANKAN TUGAS YANG DITENTUKAN  ', '2024-10-18 19:20:41', '2024-10-18 19:20:41'),
(72, 'RAYHAN RADE IRSYAD', '241080200009', 'A1', 'Kahuripan nirwana sidoarjo,jawa timur', '2006-07-22', 'Sidoarjo', 'Laki-laki', 2024, '081344019541', 'rr9072240@gmail.com', 'RAYHAN_RADE_IRSYAD_IG_1729847200.jpg', 'RAYHAN_RADE_IRSYAD_YT_1729847200.jpg', 'RAYHAN_RADE_IRSYAD_ktm_1729847200.jpg', 'RAYHAN_RADE_IRSYAD_ijazah_1729847200.jpg', 'RAYHAN_RADE_IRSYAD_foto_1729847200.png', 'RAYHAN_RADE_IRSYAD_cv_1729847200.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Untuk mengembangkan skill dalam bidang informatika, agar dapat pengalam dalam berorganisasi dan dapat aktif berkerja dalam bentuk tim', '2024-10-25 16:06:40', '2024-10-25 16:06:40'),
(73, 'BINTANG RANGGA SAPUTRA', '241080200140', 'A2', 'JL. Singokarso, Ganggang Panjang, Rt 12 Rw 04, Tanggulangin', '2006-04-23', 'SIDOARJO ', 'Laki-laki', 2024, '085746113335', 'bintangrangga2006@gmail.com', 'BINTANG_RANGGA_SAPUTRA_IG_1730338097.jpg', 'BINTANG_RANGGA_SAPUTRA_YT_1730338097.jpg', 'BINTANG_RANGGA_SAPUTRA_ktm_1730338097.jpg', 'BINTANG_RANGGA_SAPUTRA_ijazah_1730338097.jpg', 'BINTANG_RANGGA_SAPUTRA_foto_1730338097.jpg', 'BINTANG_RANGGA_SAPUTRA_cv_1730338097.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Di ajak teman sekelas dan agar tidak menjadi mahasiswa kupu-kupu.', '2024-10-31 08:28:17', '2024-10-31 08:28:17'),
(74, 'Dery Marendi Fauzi', '241080200119', 'A2', 'Jln Merah delima regency Blok G30', '2005-12-06', 'Gresik', 'Laki-laki', 2024, '089687958804', 'deryfauzi8@gmail.com', 'Dery_Marendi_Fauzi_IG_1731602281.jpg', 'Dery_Marendi_Fauzi_YT_1731602281.jpg', 'Dery_Marendi_Fauzi_ktm_1731602281.jpg', 'Dery_Marendi_Fauzi_ijazah_1731602281.jpg', 'Dery_Marendi_Fauzi_foto_1731602281.jpg', 'Dery_Marendi_Fauzi_cv_1731602281.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Karena saya ingin mengejar ketertingalan saya dalam kemajuan tehnologi karna itu saya ingin mendaftar aslab supaya saya bisa belajar dari sini untuk mengembangkan diri saya dalam bidang tehnologi', '2024-11-14 23:38:01', '2024-11-14 23:38:01'),
(75, 'Arya Dwi Rahendra', '241080200097', 'A2', 'Dusun Kedungrejo Desa Wedoro Klurak RT.01/RW.01 Candi Sidoarjo', '2005-04-30', 'Sidoarjo', 'Laki-laki', 2024, '0881026375152', 'ardira1011@gmail.com', 'Arya_Dwi_Rahendra_IG_1732343265.jpeg', 'Arya_Dwi_Rahendra_YT_1732343265.jpeg', 'Arya_Dwi_Rahendra_ktm_1732343265.jpeg', 'Arya_Dwi_Rahendra_ijazah_1732343265.jpeg', 'Arya_Dwi_Rahendra_foto_1732343265.jpeg', 'Arya_Dwi_Rahendra_cv_1732343265.pdf', 'Arya_Dwi_Rahendra_Project1_1732343265.pdf', 'Arya_Dwi_Rahendra_Project2_1732343265.pdf', NULL, NULL, '', '', '', '', 'Saya ingin daftar aslab karena ingin mengembangkan skill dan kreatifitas saya, serta ingin belajar hal baru yang akan saya dapatkan nantinya.', '2024-11-23 13:27:45', '2024-11-23 13:27:45'),
(77, 'SALSABILA DWI MARSYA', '241080200073', 'A2', 'BRANGSI LAREN LAMONGAN', '2006-07-20', 'LAMONGAN', 'Perempuan', 2024, '085850178269', 'salsabila.marsya94@gmail.com', 'SALSABILA_DWI_MARSYA_IG_1732536063.jpg', 'SALSABILA_DWI_MARSYA_YT_1732536063.jpg', 'SALSABILA_DWI_MARSYA_ktm_1732536063.jpg', 'SALSABILA_DWI_MARSYA_ijazah_1732536063.jpg', 'SALSABILA_DWI_MARSYA_foto_1732536063.jpg', 'SALSABILA_DWI_MARSYA_cv_1732536063.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Alasan saya, karena saya ingin mendalami materi informatika secara lebih mendalam dengan menguatkan pemahaman konsep dan memperseiapkan diri untuk jenjang akademik selanjutnya. Selain itu, saya juga ingin berinteraksi dengan mahasiswa lain dalam menjelaskan konsep atau menjawab pertanyaan akan melatih kemampuan komunikasi dan presentasi saya.', '2024-11-25 19:01:03', '2024-11-25 19:01:03'),
(78, 'EMILIA VEGA AURA WIDYANTARY ', '241080200059', 'A1', 'Lebanisuko Wringinanom gresik ', '2006-08-26', 'Gresik ', 'Perempuan', 2024, '085746008954', 'vegaemilia43@gmail.com', 'EMILIA_VEGA_AURA_WIDYANTARY__IG_1732544645.jpg', 'EMILIA_VEGA_AURA_WIDYANTARY__YT_1732544645.jpg', 'EMILIA_VEGA_AURA_WIDYANTARY__ktm_1732544645.jpg', 'EMILIA_VEGA_AURA_WIDYANTARY__ijazah_1732544645.jpg', 'EMILIA_VEGA_AURA_WIDYANTARY__foto_1732544645.jpg', 'EMILIA_VEGA_AURA_WIDYANTARY__cv_1732544645.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Ingin menambah wawasan dan ilmu  tentang  IT dan memperdalamnya.', '2024-11-25 21:24:05', '2024-11-25 21:24:05'),
(79, 'AULIA RISKA ROMADHONA', '241080200099', 'A2', 'RT 01 / RW 02 Ds. Pliwetan, Kec. Palang - Kab. Tuban - Jawa Timur', '2005-10-16', 'TUBAN', 'Perempuan', 2024, '089613541860', 'auliariska1612@gmail.com', 'AULIA_RISKA_ROMADHONA_IG_1732835508.png', 'AULIA_RISKA_ROMADHONA_YT_1732835508.png', 'AULIA_RISKA_ROMADHONA_ktm_1732835508.jpg', 'AULIA_RISKA_ROMADHONA_ijazah_1732835508.jpg', 'AULIA_RISKA_ROMADHONA_foto_1732835508.jpeg', 'AULIA_RISKA_ROMADHONA_cv_1732835508.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'saya ingin mengetahui dan mempelajari lebih dalam lagi tentang dunia teknologi informasi, karena saya yakin, dengan menjadi bagian dari asisten laboratorium saya akan mendapatkan ilmu baru dan wawasan baru yang mungkin tidak saya dapatkan jika tidak menjadi bagian dari asisten laboratorium.', '2024-11-29 06:11:48', '2024-11-29 06:11:48'),
(80, 'Rahma Auliya Hasanah', '241080200103', 'A2', 'Perum Puspa Garden CG/25, Kedungkendo, Candi, Sidoarjo', '2005-08-29', 'Sidoarjo', 'Perempuan', 2024, '085704126340', 'raahmaauliyaa@gmail.com', 'Rahma_Auliya_Hasanah_IG_1732847343.jpg', 'Rahma_Auliya_Hasanah_YT_1732847343.jpg', 'Rahma_Auliya_Hasanah_ktm_1732847343.jpg', 'Rahma_Auliya_Hasanah_ijazah_1732847343.jpg', 'Rahma_Auliya_Hasanah_foto_1732847343.jpg', 'Rahma_Auliya_Hasanah_cv_1732847343.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Agar bisa menambah ilmu tentang materi perkuliahan serta mengembangkan kemampuan dan keterampilan saya di prodi informatika. Untuk membangun relasi dan persiapan ke Dunia Kerja juga.', '2024-11-29 09:29:03', '2024-11-29 09:29:03'),
(81, 'AHMAD FAIZUL ABID FIDDAROINI', '241080200106', 'A2', 'Dsn. Grajakan, Ds. Wangkal, Kec. Krembung, Kab. Sidoarjo rt15 rw08', '2005-08-19', 'SIDOARJO', 'Laki-laki', 2023, '089614182090', 'abidfarel54321@gmail.com', 'AHMAD_FAIZUL_ABID_FIDDAROINI_IG_1732862690.jpg', 'AHMAD_FAIZUL_ABID_FIDDAROINI_YT_1732862690.jpg', 'AHMAD_FAIZUL_ABID_FIDDAROINI_ktm_1732862690.jpg', 'AHMAD_FAIZUL_ABID_FIDDAROINI_ijazah_1732862690.jpg', 'AHMAD_FAIZUL_ABID_FIDDAROINI_foto_1732862690.jpg', 'AHMAD_FAIZUL_ABID_FIDDAROINI_cv_1732862690.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'alasan mendaftar aslab adalah ingin menjadikan aslab sebagai wadah ilmu bagi saya', '2024-11-29 13:44:50', '2024-11-29 13:44:50'),
(82, 'Zianisa Azzahra', '241080200041', 'A1', 'Dsn Simo rt 08 rw 04, Mojoruntut, Krembung', '2006-04-17', 'Sidoarjo', 'Perempuan', 2024, '0895336208004', 'zianisaazzahra27@gmail.com', 'Zianisa_Azzahra_IG_1732863611.jpeg', 'Zianisa_Azzahra_YT_1732863611.jpeg', 'Zianisa_Azzahra_ktm_1732863611.jpeg', 'Zianisa_Azzahra_ijazah_1732863611.jpeg', 'Zianisa_Azzahra_foto_1732863611.jpeg', 'Zianisa_Azzahra_cv_1732863611.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'Karena saya ingin belajar lebih dalam tentang hal-hal yang menyangkut informatika, agar mendapat ilmu lebih banyak (tidak dari dalam kelas aja), dan agar bisa lebih memahami bagaimana cara beradaptasi dengan lingkungan baru', '2024-11-29 14:00:11', '2024-11-29 14:00:11'),
(83, 'Adzra Aniqoh', '241080200067', 'A2', 'Durung Bedug RT25 RW06 CANDI SIDOARJO', '2006-02-12', 'Sidoarjo', 'Perempuan', 2024, '085707183116', 'adzrnqh7@gmail.com', 'Adzra_Aniqoh_IG_1732985064.jpg', 'Adzra_Aniqoh_YT_1732985064.jpg', 'Adzra_Aniqoh_ktm_1732985064.jpg', 'Adzra_Aniqoh_ijazah_1732985064.jpg', 'Adzra_Aniqoh_foto_1732985064.jpg', 'Adzra_Aniqoh_cv_1732985064.pdf', NULL, NULL, NULL, NULL, '', '', '', '', 'saya ingin menjadikan aslab sebagai wadah untuk mengembangkan diri, seperti mengembakan skill mengoding, belajar bekerjasama, dan berbagi pandangan dengan orang orang yang lebih paham. ', '2024-11-30 23:44:24', '2024-11-30 23:44:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
