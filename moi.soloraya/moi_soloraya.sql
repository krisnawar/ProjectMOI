-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 03:38 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moi_soloraya`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `img`, `judul_berita`, `isi`, `author`, `date_time`) VALUES
(1, 'img_src/6.jpg', 'Penggalangan Dana untuk Adek Isron, Penderita Penyakit Langka', '<p>Penyakit ini jarang sekali terjadi di Indonesia, apalagi di wilayah Sumatera. Nasib malang menimpa adek Isron sehingga dia harus menderita penyakit yang sangat berbahaya tersebut. Adek Isron pernah berobat ke RS. Simpang Bukit Sarolangun Jambi, namun ditolak dan langsung dirujuk untuk berobat ke Kota Padang Sumatera Barat. Akhirnya pihak keluarga membawa Isron beberapa hari yang lalu ke RS. M. Jamil Padang untuk segera melakukan pengobatan.</p>\r\n									<p>\"Kami melakukan aksi penggalangan dana untuk memberikan donasi kepada adek Isron, warga Sarolangun yang berobat ke Padang melawan penyakit yang ganas dan langka. Dia menderita penyakit leukimia, hal ini membuat kami ikut prihatin karena penyakit yang dideritanya juga sangat serius. Sebagai organisasi mahasiswa dari Sarolangun yang berada di Sumbar kami ikut membantu untuk meringankan beban orang tua Isron yang juga berasal dari Sarolangun Jambi,\" ujar Eqi, Kamis (29/03/2018).</p>\r\n									<p>Aksi tersebut dilakukuan di Simpang Empat, depan Masjid Raya Padang. Lokasi yang sangat strategis dan merupakan salah satu titik ramai di Kota Padang. Mereka sangat mengharapkan bantuan dari segala pihak, dan mereka memberikan informasi bagaimana caranya jika ingin membantu donasi untuk adek Isron.</p>\r\n									<blockquote>\r\n										Sangat diharapkan bantuan dari siapapun yang bersedia. Dapat menghubungi nomor hp orang tua Isron yaitu 082289874257 (Husnil Aqili) atau langsung melalui nomor rekening BRI 060401025025506 an. Ismanto (ayah dari adek Isron_Red).\r\n									</blockquote>', 'krisna', '2018-03-29 13:37:15'),
(2, 'img_src/4.jpg', 'Kebakaran Pasar Klewer, Solo', '<p>Berdasarkan pantauan BBC Indonesia, asap hitam masih terlihat membumbung dari pusat perdagangan tekstil dan batik tersebut hingga pukul 12.00 WIB, Minggu (28/12).</p>\r\n									<p>Sebanyak 30 mobil pemadam kebakaran dikerahkan untuk memadamkan api. Namun, api masih terlihat berkobar di sisi tengah pasar tersebut.</p>\r\n									<p>Sementara itu, para pedagang di pasar tersebut terlihat sibuk mengevakuasi barang dagangan mereka yang masih bisa diselamatkan.</p>\r\n									<p>Salah satu pedagang di Pasar Klewer, Umi Markhamah, mengaku hanya bisa pasrah. Diperkirakan kios miliknya yang terdapat di lantai dua Blok CC ludes dilalap api mengingat awal kobaran api pada Sabtu (27/12) malam berasal dari lantai dua.</p>\r\n									<p>\"Saya belum bisa mengecek kondisi kios saya karena oleh petugas polisi tidak diperbolehkan masuk. Semoga saja ada keajaiban,\" kata Umi. Dia menduga menderita kerugian hingga ratusan juta rupiah. Pasalnya, semua dagangannya tidak bisa dievakuasi keluar. \"Tahu ada informasi kebakaran, saya langsung ke pasar, tetapi ya tidak bisa mengamankan barang dagangannya,\" ucapnya.</p>\r\n									<blockquote>\r\n										Hal senada juga diungkapkan oleh Ibrahim, pemilik toko kain Aneka Jaya. Ia menyebutkan dua kiosnya yang terletak di dalam pasar luder terbakar. Tidak ada satu pun barang dagangannya yang bisa diselamatkan.\r\n									</blockquote>\r\n									<p>\"Dua kios saya habis terbakar. Total kerugiannya mencapai Rp500 juta. Karena barang dagangannya semalam tidak bisa dievakuasi,\" ujar dia. Fatum Al Katiri, seorang pedagang busana muslim di Pasar Klewer, memperkirakan total kerugian para pedagang mencapai miliaran rupiah. Sebab, jumlah pedagang yang berjualan mencapai 2.000 orang. Fatum berharap Pemerintah Kota Solo segera membuatkan pasar darurat. Sebab, sebagian pedagang di Pasar Klewer menggantungkan hidupnya dari berjualan di pasar ini. \"Secepatnya harus segera dibuatkan pasar darurat. Pemerintah harus cepat membuatkan tempat untuk berjualan. Para pedagang itu hidupnya ya dari sini. Saya juga punyanya toko hanya satu yang terbakar itu, keluhnya.</p>', 'krisna', '2017-12-28 07:18:17'),
(3, 'img_src/5.jpg', '7 Desa di Kebumen Terendam Banjir', '<p>Kebumen - Hujan deras yang mengguyur Kabupaten Kebumen, Jawa Tengah sejak 2 hari terakhir menyebabkan beberapa desa dalam satu kecamatan terendam banjir. Untuk sementara, aktifitas warga pun menjadi terganggu.</p>\r\n									<p>Sebanyak 7 desa di Kecamatan Bulus Pesantren terendam banjir pada Sabtu (6/1/2018). Adapun ke 7 desa tersebut adalah Desa Banjurpasar, Waluyo, Setrojenar, Brecong, Maduretno, Ayamputih, dan Desa Banjurmukadam.</p>\r\n									<p>\"Karena hujan sudah 2 hari terus banjir. Ada 7 desa di Kecamatan Bulus Pesantren yang terendam banjir mas antara lain Desa Banjurpasar, Waluyo, Setrojenar, Brecong, Maduretno, Ayamputih, dan Desa Banjurmukadam,\" kata Camat Bulus Pesantren, Suis Idawati ketika dihubungi detikcom, Sabtu (6/1/2018).</p>\r\n									<p>Ketinggian air yang merendam desa-desa tersebut berkisar antara 70 cm hingga 1 meter. Aktifitas warga pun menjadi terganggu. \"Air sudah masuk rumah warga karena ketinggian bisa mencapai 1 meter. Warga nggak bisa masak karena mayoritas menggunakan kayu bakar. Untuk beraktifitas pun juga terkendala,\" lanjutnya.</p>\r\n									<blockquote>\r\n										Sementara itu Kasi Kedaruratan dan Logistik BPBD Kabupaten Kebumen, Basori mengatakan bahwa saat ini pihaknya telah menerjunkan 1 perahu untuk menyisir lokasi dan membantu warga. Untuk sementara hingga saat ini belum ada warga yang diungsikan. Warga masih bertahan di rumah masing-masing.\r\n									</blockquote>\r\n									<p>\"Untuk personel dan 1 perahu sudah kami terjunkan. Warga sementara belum ada yang mengungsi, namun kami tetap pantau dan lakukan patroli di lokasi. Sedangkan logistik kami masih berkoordinasi dengan pihak desa, nantinya mau dibuka dapur umum atau tidak,\" katanya.</p>', 'krisna', '2018-01-07 17:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `data_komunitas`
--

CREATE TABLE `data_komunitas` (
  `id_anggota` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `nama_perusahaan` varchar(10) NOT NULL,
  `plat_nomor` varchar(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_komunitas`
--

INSERT INTO `data_komunitas` (`id_anggota`, `username`, `nama_perusahaan`, `plat_nomor`, `jabatan`) VALUES
(1, 'baru', 'Gojek', 'AD 2345 KL', 'Anggota'),
(4, 'cobakk', 'GOJEK', 'AA 4567 BD', 'Anggota'),
(5, 'krisna', 'OPANG', 'B 9351 MLM', 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `donasi_detail`
--

CREATE TABLE `donasi_detail` (
  `id_donasi_detail` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `img_src` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `target_donasi` bigint(20) NOT NULL,
  `terkumpul` bigint(20) NOT NULL,
  `campaigner` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi_detail`
--

INSERT INTO `donasi_detail` (`id_donasi_detail`, `judul`, `img_src`, `keterangan`, `isi`, `target_donasi`, `terkumpul`, `campaigner`) VALUES
(4, 'Bantu Pembebasan Tanah Pesantren Ini Ya bro..', 'img_src/1.png', 'Mari Kita Bantu Pesantren membebaskan hak milik tanahnya dari para cukong biadab', 'Pesantren ini terkendala proses pembangunannya blaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaa  aaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaa aaaaaaaaaa aaaaaaaaa aaaaaaaaaaaaa aaaaaaaa aaaaaaaaaaa aaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaa aaaaaa aaaaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaaaaaaa aaaaaaaaaa aaaaaaaaa aaaaaaaaa aaaaaaaaaaaaaa aaaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaaaaaaa aaaaaaaa aaaaaaa aaaaaaaa aaaaaaa aaaaaaa aaaaaaaaaa aaaaaaaaa aaaaaaaaaaa aaaaaaaa aaaaaaa aaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaa aaaaaaa aaaaaaaaaaaa aaaaaaaa aaaaaaaaa aaaaaa aaaaaaaaaaa aaaaaaa', 30500000, 25175251, 'berbagi'),
(5, 'Bantu Peppy Berbagi', 'img_src/2.jpg', 'Mari bantu saya (Peppy) Berbagi', 'Ayo guys berbagi', 10000000, 7652000, 'peppy'),
(6, 'Dukung Mereka Memahami ISLAM', 'img_src/3.png', 'Ayo Kita Dukung Mereka memahami Islam', 'Ayoo guys Bantuuu. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ', 3500000, 1683042, 'yayasanIslam'),
(8, 'Ini Judul Judulan', 'img_src/4.jpg', 'Ini hanya keterangan', 'Mbloooo', 25000, 55000, 'krisna'),
(9, 'Suatu judul b', 'img_src/5.jpg', 'Keterangan Berita', 'ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ini adalah isi dari suatu berita. silakan baca dengan detail agar Anda bisa memahaminya dengan saksama. Semoga isi berita ini dapat memberikan kita pengetahuan ke depan. ', 75000, 52750, 'krisna');

-- --------------------------------------------------------

--
-- Table structure for table `donasi_master`
--

CREATE TABLE `donasi_master` (
  `id_donasi_master` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `amount` bigint(20) NOT NULL,
  `id_donasi_detail` int(11) NOT NULL,
  `tanggal_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi_master`
--

INSERT INTO `donasi_master` (`id_donasi_master`, `username`, `amount`, `id_donasi_detail`, `tanggal_waktu`) VALUES
(20, 'krisna', 76000, 5, '2018-07-02 02:17:44'),
(21, 'krisna', 75000, 6, '2018-07-02 02:26:56'),
(22, 'krisna', 34500, 8, '2018-07-02 03:11:54'),
(23, 'baru', 75000, 5, '2018-07-02 11:42:52'),
(24, 'baru', 250, 5, '2018-07-02 11:43:56'),
(25, 'krisna', 17500, 4, '2018-07-04 14:29:21'),
(26, 'krisna', 157000, 4, '2018-09-25 20:11:51'),
(27, 'cobakk', 12500, 5, '2018-11-09 19:40:49'),
(28, 'krisna', 32342, 6, '2018-11-22 14:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `kas_donasi`
--

CREATE TABLE `kas_donasi` (
  `id_kas_donasi` int(11) NOT NULL,
  `donatur` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tanggal_waktu` datetime NOT NULL,
  `amount` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas_donasi`
--

INSERT INTO `kas_donasi` (`id_kas_donasi`, `donatur`, `tanggal_waktu`, `amount`, `total`) VALUES
(4, 'krisna', '2018-07-02 11:18:16', 125000, 125000),
(5, 'krisna', '2018-07-02 11:18:33', 75000, 200000),
(6, 'krisna', '2018-07-02 11:19:02', 76000, 276000),
(7, 'krisna', '2018-07-02 11:21:04', 76000, 352000),
(8, 'baru', '2018-07-02 11:41:08', 300000, 652000),
(9, 'krisna', '2018-11-09 15:57:55', 10000000, 10652000),
(10, 'cobakk', '2018-11-09 19:34:09', 0, 10652000);

-- --------------------------------------------------------

--
-- Table structure for table `temp_donasi`
--

CREATE TABLE `temp_donasi` (
  `id_temp` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `target_donasi` bigint(20) NOT NULL,
  `terkumpul` bigint(20) NOT NULL,
  `campaigner` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_donasi`
--

INSERT INTO `temp_donasi` (`id_temp`, `judul`, `keterangan`, `isi`, `target_donasi`, `terkumpul`, `campaigner`) VALUES
(1, 'Bantu Krisna Membeli ROG', 'Krisna Ingin Sekali Membeli ROG, Ayo Bantu Dia', 'BANTUUU', 20500000, 0, 'krisna'),
(2, 'Bantu Korban', 'Ada keterangan', 'deskripsi berita', 1250000, 0, 'baru'),
(3, 'Masjid kswdw', 'Kurang /.....', 'dasdwda', 10000000, 0, 'krisna'),
(4, 'Bantu Krisna Membeli MSI LAPTOP', 'Krisna Ingin Sekali Membeli LAPTOP MSI, Ayo Bantu Dia', 'KUY lah bantu', 38000000, 0, 'cobakk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `full_name`, `email`, `phone`, `role`) VALUES
('baru', '5ef035d11d74713fcb36f2df26aa7c3d', 'baru', 'baru@gmail.com', '090908989898', 'user'),
('berbagi', '4ab01ebaa36f44dfd9d42c9f9b2b0e78', 'Berbagi Kebahagiaan', 'berbagi@gmail.com', '089888678512', 'user'),
('cobakk', 'b0852e14a8a49d28888e509df610e7ea', 'cobakah', 'cobakah@email.com', '088678567456', 'user'),
('krisna', '948f5cc9f8c6c3b86a070beaca7d20bf', 'Krisna Wardhana', 'krisna@email.com', '085672345666', 'superadmin'),
('krisnawar', 'b29fa404ef47e8a90a8bdadfe7c39dc0', 'Krisna Wardhana', 'krisna_wardhana20@yahoo.co.id', '085647099449', 'user'),
('peppy', '5ab8b1aba49959c6c1d4d09a677885b7', 'Peppy Artis', 'peppy@gmail.com', '08131967810', 'user'),
('yayasanIslam', '00017990b74213b99bee67fdfa0965c4', 'Yayasan ISLAM', 'yayasanIslam@gmail.com', '085678567456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `data_komunitas`
--
ALTER TABLE `data_komunitas`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `donasi_detail`
--
ALTER TABLE `donasi_detail`
  ADD PRIMARY KEY (`id_donasi_detail`),
  ADD KEY `campaigner` (`campaigner`);

--
-- Indexes for table `donasi_master`
--
ALTER TABLE `donasi_master`
  ADD PRIMARY KEY (`id_donasi_master`),
  ADD KEY `username` (`username`),
  ADD KEY `id_donasi_detail` (`id_donasi_detail`);

--
-- Indexes for table `kas_donasi`
--
ALTER TABLE `kas_donasi`
  ADD PRIMARY KEY (`id_kas_donasi`),
  ADD KEY `donatur` (`donatur`);

--
-- Indexes for table `temp_donasi`
--
ALTER TABLE `temp_donasi`
  ADD PRIMARY KEY (`id_temp`),
  ADD KEY `campaigner` (`campaigner`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_komunitas`
--
ALTER TABLE `data_komunitas`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donasi_detail`
--
ALTER TABLE `donasi_detail`
  MODIFY `id_donasi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donasi_master`
--
ALTER TABLE `donasi_master`
  MODIFY `id_donasi_master` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kas_donasi`
--
ALTER TABLE `kas_donasi`
  MODIFY `id_kas_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `temp_donasi`
--
ALTER TABLE `temp_donasi`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`username`);

--
-- Constraints for table `data_komunitas`
--
ALTER TABLE `data_komunitas`
  ADD CONSTRAINT `data_komunitas_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `donasi_detail`
--
ALTER TABLE `donasi_detail`
  ADD CONSTRAINT `donasi_detail_ibfk_2` FOREIGN KEY (`campaigner`) REFERENCES `user` (`username`);

--
-- Constraints for table `donasi_master`
--
ALTER TABLE `donasi_master`
  ADD CONSTRAINT `donasi_master_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `donasi_master_ibfk_2` FOREIGN KEY (`id_donasi_detail`) REFERENCES `donasi_detail` (`id_donasi_detail`);

--
-- Constraints for table `kas_donasi`
--
ALTER TABLE `kas_donasi`
  ADD CONSTRAINT `kas_donasi_ibfk_1` FOREIGN KEY (`donatur`) REFERENCES `user` (`username`);

--
-- Constraints for table `temp_donasi`
--
ALTER TABLE `temp_donasi`
  ADD CONSTRAINT `temp_donasi_ibfk_1` FOREIGN KEY (`campaigner`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
