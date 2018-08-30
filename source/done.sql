-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 04:22 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `done`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'Administrator'),
(2, 'Keuangan'),
(3, 'Kearsipan');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(400) NOT NULL,
  `jam` time NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `id_user`, `id_divisi`, `judul`, `keterangan`, `gambar`, `jam`, `tanggal_surat`, `tanggal_upload`) VALUES
(49, 29, 2, 'Surat Mantan', 'MAKAN YUK', 'adasds.jpg', '20:11:11', '2018-08-09', '2018-08-26'),
(50, 29, 2, 'S', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. L', 'contoh-surat-permohonan-peserta-lkti-1-728.jpg', '21:56:25', '2018-08-02', '2018-08-26'),
(51, 30, 2, 'Surat Tugas Presiden Republik Indonesia', 'Lorem Ipsum is simply dummy te', 'cgbgbgb.jpg', '21:58:27', '2018-08-09', '2018-08-26'),
(52, 30, 2, 'Surat Keterangan Keputusan Presiden Republik Indonesia 2018', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum ha', 'diakuikemenkesdiknas.jpg', '22:02:10', '2018-08-10', '2018-08-26'),
(53, 30, 2, 'XXXX', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'surat-pinjam-dewan-1-638.jpg', '22:03:39', '2018-08-09', '2018-08-26'),
(54, 30, 2, 'XXXX', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'surat-pinjam-dewan-1-638.jpg', '22:03:46', '2018-08-09', '2018-08-26'),
(57, 30, 2, 'Surat Tes Satu Saja', 'usahdjklsahdjkahdjkahdajkshdjjkdhjalksdhjkadsadsad', 'contoh-surat-permohonan-peserta-lkti-1-728.jpg', '23:53:44', '2018-08-16', '2018-08-26'),
(58, 31, 2, 'Surat Pinjaman Hewan XXX', 'Pinjam Hewan Kurban 3 Ekor', 'surat-pengantar-media-partner-uiyea-2012-1-638.jpg', '11:31:49', '2018-08-03', '2018-08-27'),
(64, 31, 2, 'Surat Tidak Penting ', 'Surat Ini sangat Tidak Penting Sekali\r\n', 'COVER done.jpg', '19:11:29', '2018-08-08', '2018-08-27'),
(66, 29, 2, 'Surat Makan Kerupuk Bareng JOKOWI', 'Baren Jokowi DODO', '39442819_1265800180237364_4419777705591963648_n.jpg', '20:15:07', '2018-08-09', '2018-08-27'),
(67, 30, 2, 'Surat Keterangan makan nasi', 'Keterangan Makan Nasi Bareng Jokowi Dodod Dan Jusuf Kalla', 'I-never-took-a-day-off-in-my-twenties.-Not-one..jpg', '22:16:48', '2018-08-09', '2018-08-27'),
(68, 30, 2, 'Surat Keterangan Ganteng', 'GILO', 'Motivasi.jpg', '22:18:18', '2018-08-13', '2018-08-27'),
(69, 31, 2, 'Surat Brosur', 'Brosure Biasa Saja', '66BROSUR SMK BACK.jpg', '22:42:26', '2018-08-27', '2018-08-27'),
(70, 29, 2, 'Surat Makan Kerupuk Bareng MEDIUM', 'asdasd ', '36417478_10156425593341797_6547412883788005376_n.jpg', '23:04:51', '2018-08-11', '2018-08-27'),
(71, 29, 2, 'Surat Keputusan Tes Terakhir ', 'Lorem Upsum makan nasi dak pake sambar', 'Creative-Agency-Website-Template-Free-PSD (1).jpg', '23:20:16', '2018-08-22', '2018-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_level`, `id_divisi`, `nama`, `username`, `email`, `jk`, `hp`, `alamat`, `password`, `foto`) VALUES
(29, 1, 1, 'Aldi Pranata', 'aldipee', 'aldipeee@gmail.com', 'Laki-Laki', '082185142048', 'JL. Kemang Manis 2', '0cc175b9c0f1b6a831c399e269772661', 'aldipee'),
(30, 2, 2, 'Rahayu Oktaviani ', 'ayu', 'ayu@gmail.com', 'Perempuan', '081367946763', 'Jl. Pagar Dewa', '0cc175b9c0f1b6a831c399e269772661', 'ayu'),
(31, 2, 3, 'Abi Daniela ', 'abi', 'lala@gmail.com', 'Perempuan', '0813648484', 'Jl. Jati No 41 Sawah Lebar, Ratu Agung', '0cc175b9c0f1b6a831c399e269772661', 'abi'),
(38, 2, 2, 'Andini', 'demo', 'andini@gmail.com', 'Perempuan', '1223132', 'Jl. Jati No 41 Sawah Lebar, Ratu Agung', '0cc175b9c0f1b6a831c399e269772661', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `surat_ibfk_2` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
