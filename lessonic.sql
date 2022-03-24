-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 09:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lessonic`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `tanggal_edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `judul`, `deskripsi`, `gambar`, `tanggal_edit`) VALUES
(1, '6 Corporate Value Kami', '<b>1.Secret Formula : </b><br>\r\nkami memiliki secret formula dalam memecahkan soal yag berbasiskan pada pemikiran logis dan pendalaman konsep. Kami sangat menghindari pemecahan masalah dengan menghafalkan rumus maupun membiasakan anak untuk berfikir secara bertele - tele.\r\n<br>\r\n<b>2. Pengajar Unggulan :</b> <br>\r\nPengajar kami terdiri dari mahasiswa dan alumni dari Universitas IT ternama di Bali seperti STIKOM, STIKI serta universitas ternama lainnya yang telah kami saring melalui berbagai tahapan sleksi yang meliputi interview, microteaching, serta pembekalan hingga memenuhi kualitas kami.\r\n<br>\r\n<b>3. Pendalaman Soal :</b><br> \r\nUntuk meningkatkan pemahaman dan sebagai bahan evaluasi, kami mempunyai database bank soal yang telah dikelompokan berdasarkan level demi level untuk kami berikan kepada siswa sesuai dengan titik progress masing-masing untuk mempercepat pencapaian target.\r\n<br>\r\n<b>4. Two Way Communication :</b><br>\r\nKami akan selalu menjaga hubungan dengan orang tua untuk ikut mendengar, merasakan, dan mengalami permasalahan yang sedang dihadapi siswa. Dengan dimikian, besar harapan kami bisa mengerti permasalahan yang sedang dihadapi masing-masing siswa sehingga bisa memberikan solusi terbaik.\r\n<br>\r\n<b>5. High Technology Support :</b><br>\r\nUntuk menunjang kualitas pembelajaran dan pelayanan, kami menggunakan teknologi terkini baik untuk menunjang proses pembelajaran, evaluasi, maupun management tim.\r\n<br>\r\n<b>6. Customer Satisfaction :</b><br>\r\nTarget terbesar kami adalah untuk membuat orang tua tersenyum melihat anaknya berhasil meraih prestasi. Kami segenap tim akan senantiasa berupaya untuk mewujudkan target ini kepada seluruh siswa kami.', 'about.jpg', '2019-09-17 11:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `tanggal_ditambahkan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `tanggal_edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `judul`, `deskripsi`, `gambar`, `tanggal_edit`) VALUES
(1, 'Les Privat IT', 'Lessonic merupakan lembaga yang bergerak dibidang jasa penyedia les privat untuk SD,SMP,SMA/SMK berbasis IT. didirikan sejak tahun 2011 oleh seorang alumni mahasiswa lulusan STIKOM BALI jurusan ilmu komputer.Les privat ini memiliki metode belajar yang smart, fun, dan logic. Bertujuan untuk mencetak generasi juara, generasi yang mampu memanfaatkan teknologi untuk hal positif serta mampu membangun dan mengelola lapangan pekerjaan berbasis IT.', '5.png', '2019-09-17 11:04:53'),
(5, 'Tes banana', 'Tes 123123', 'tes-123123.jpg', '2019-10-21 05:58:45'),
(6, 'Tes 123123123 Tes ', '1123tes', 'tes-123123123-tes-.jpg', '2019-10-21 05:59:44'),
(7, 'dsa', 'adsaa', 'dsa.jpg', '2019-10-23 08:41:35'),
(8, 'hafsjhga', 'nasvfa', 'hafsjhga.jpg', '2019-10-23 08:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `judul`, `deskripsi`, `tanggal_edit`) VALUES
(1, 'Paket SD', 'Nasional : \r\nSD kelas 1-3 \r\n(2.750.000/10 sesi)\r\nSD kelas 4-6 \r\n(2.860.0000/se10 sesi)\r\nInternasional :\r\nSD kelas 1-3\r\n(3.410.000/10 sesi)\r\nSD kelas 4-6\r\n(2.560.0000/10 sesi)', '2019-09-17 11:05:27'),
(2, 'Paket SMP', 'Nasional :\r\nSMP (3.520.000/10 sesi)\r\nInternasional :\r\nSMP (4.180.000/10 sesi)', '2019-09-17 11:05:27'),
(3, 'Paket SMA/SMK', 'Nasional :\r\nSMA/SMK (4.280.000/10 sesi)\r\nInternasional :\r\nSMA/SMK (5.840.000/10 sesi)', '2019-09-17 11:05:27'),
(4, 'Paket UMUM', 'Nasional :(5.500.000/10 sesi)Internasional :(10.000.000/10 sesi)', '2019-09-17 11:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `tangga_ edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `judul`, `gambar`, `tangga_ edit`) VALUES
(1, 'Pemrograman Web', '', '2019-09-17 11:06:04'),
(2, 'PHP, HTML, CSS', '', '2019-09-17 11:06:04'),
(3, 'Desain Grafis', '', '2019-09-17 11:06:04'),
(4, 'C/C++', '', '2019-09-17 11:06:04'),
(5, 'Java', '', '2019-09-17 11:06:04'),
(6, 'Mc.Office (Word, Excel, Power Point)', '19.png', '2019-09-17 11:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(80) NOT NULL,
  `tangga_ edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `judul`, `deskripsi`, `tangga_ edit`) VALUES
(1, '4.png', 'Let\'s study together!', 'Privat lessons with smart, fun, and logic methods', '2019-09-17 11:06:33'),
(2, '5.jpg', 'Let\'s study together!', 'Privat lessons with smart, fun, and logic methods', '2019-09-17 11:06:33'),
(3, '6.jpg', 'Let\'s study together!', 'Privat lessons with smart, fun, and logic methods', '2019-09-17 11:06:33'),
(4, '7.jpg', 'Let\'s study together!', 'Privat lessons with smart, fun, and logic methods', '2019-09-17 11:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(30) NOT NULL,
  `tanggal_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id`, `nama_gambar`, `tanggal_edit`) VALUES
(1, '11.jpg', 0),
(2, '5.png', 0),
(3, '2.png', 0),
(4, '4.png', 0),
(5, '8.jpg', 0),
(6, '9.jpg', 0),
(7, '12.jpg', 0),
(8, '10.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(9, 'Andin Mariyana', 'andinmariyana29@gmail.com', '35_Cool_Easy_Whimsical_Drawing_Ideas.png', '$2y$10$EZnRTLmBzSPeY6LqReonHuV03mSAEI2mg6PeFUmAlZR5r8crPpUxK', 1, 1, 1567584608),
(10, 'Maiya', 'maiya@yahoo.com', 'default.jpg', '$2y$10$qkURqGjORvDrlmw9X05sy.HADFdeebOhc3idXk6v1bGY6Eh7Ov3Sa', 2, 1, 1567584721),
(11, 'Andin Mariyana', 'andinmariyana29@yahoo.com', 'default.jpg', '$2y$10$V2LqAPXMNkoLO98/a4MZf.YicBKNOFa0QA96sKUXGua0VZIa1VaoS', 2, 1, 1568862611);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `tanggal ditambahkan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`, `tanggal ditambahkan`) VALUES
(1, 1, 1, '2019-09-17 11:09:32'),
(2, 1, 2, '2019-09-17 11:09:32'),
(3, 2, 2, '2019-09-17 11:09:32'),
(4, 1, 3, '2019-09-17 11:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal ditambahkan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `tanggal ditambahkan`) VALUES
(1, 1, 'Home', 'admin/home', 'fas fa-fw fa-home', 1, '2019-09-17 11:10:32'),
(2, 2, 'MY Profile', 'user', 'fas fa-fw fa-user', 1, '2019-09-17 11:10:32'),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1, '2019-09-17 11:10:32'),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1, '2019-09-17 11:10:32'),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1, '2019-09-17 11:10:32'),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1, '2019-09-17 11:10:32'),
(9, 1, 'Pricing', 'admin/pricing', 'fas fa-fw fa-tag', 1, '2019-09-24 15:06:16'),
(10, 1, 'Service', 'admin/service', 'fas fa-fw fa-headset', 1, '2019-09-24 15:06:16'),
(11, 1, 'Portfolio', 'admin/portfolio', 'far fa-fw fa-images', 1, '2019-09-24 15:11:28'),
(12, 1, 'About Us', 'admin/about_us', 'fas fa-fw fa-users', 1, '2019-09-24 15:11:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
