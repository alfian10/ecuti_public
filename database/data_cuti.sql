-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Oct 26, 2021 at 02:36 AM
-- Server version: 5.7.35
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_cuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_form_dosen`
--

CREATE TABLE `tb_form_dosen` (
  `id` int(10) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `nip_dosen` int(20) NOT NULL,
  `nama_dosen` varchar(225) NOT NULL,
  `tgl` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `awal_cuti` date NOT NULL,
  `akhir_cuti` date NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_cuti` enum('besar','tahunan','sakit','bersalin','penting') NOT NULL,
  `ket_cuti` text NOT NULL,
  `status` text NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_form_dosen`
--

INSERT INTO `tb_form_dosen` (`id`, `no_surat`, `nip_dosen`, `nama_dosen`, `tgl`, `email`, `awal_cuti`, `akhir_cuti`, `no_hp`, `jenis_cuti`, `ket_cuti`, `status`, `alasan`) VALUES
(4, 'K001', 51148, 'Adi Kusjani', '2021-10-25', 'adikusjani@akakom.ac.id', '2021-10-26', '2021-10-29', '089766611223', 'tahunan', 'cuti keluarga', 'Diterima', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_form_mhs`
--

CREATE TABLE `tb_form_mhs` (
  `id_mhs` int(10) NOT NULL,
  `nim_mhs` int(20) NOT NULL,
  `nama_mhs` varchar(225) NOT NULL,
  `tgl` date NOT NULL,
  `email` text NOT NULL,
  `prodi` enum('TI','SI','MI','TK') NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `cuti` enum('Ganjil','Genap') NOT NULL,
  `ta` enum('2019/2020','2020/2021') NOT NULL,
  `keterangan_cuti` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_form_mhs`
--

INSERT INTO `tb_form_mhs` (`id_mhs`, `nim_mhs`, `nama_mhs`, `tgl`, `email`, `prodi`, `no_hp`, `alamat`, `cuti`, `ta`, `keterangan_cuti`, `status`, `alasan`) VALUES
(1, 165410006, 'Alfian Adi Wirawan', '2021-07-08', 'adiwalfian22@gmail.com', 'TI', '02147483647', 'Yogyakarta', 'Ganjil', '2019/2020', '', 'Diterima', ''),
(2, 165410003, 'Reno Aji', '2021-07-16', 'renoaji@gmail.com', 'SI', '089767564', 'Yogyakarta', 'Ganjil', '2019/2020', 'Penempatan Kerja di Kota Lain', 'Diterima', 'Cuti Kuliah TA 2019/2020 Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_form_sk`
--

CREATE TABLE `tb_form_sk` (
  `id` int(10) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `nip` int(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `deskripsi` text NOT NULL,
  `status` text NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_form_sk`
--

INSERT INTO `tb_form_sk` (`id`, `no_surat`, `nip`, `nama`, `email`, `no_hp`, `tgl`, `deskripsi`, `status`, `alasan`) VALUES
(1, 'K001', 2147483647, 'Reno', 'reno@gmail.com', '089654444', '2021-07-08', 'Pengajuan tugas', 'Diterima', '-'),
(2, 'K002', 2147483647, 'Rina', 'rina@coba.com', '08978686', '2021-07-16', 'PENGABDIAN PADA MASYARAKAT', 'Diterima', ''),
(3, 'K003', 151188, 'Agung', 'm.agung.n@akakom.ac.id', '0876655', '2021-08-27', 'Tugas Luar Kota', 'Diterima', ''),
(4, 'K004', 151188, 'Agung', 'm.agung.n@akakom.ac.id', '0897666', '2021-09-06', 'Tugas diluar', 'Diterima', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `nipm` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role_id` int(4) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nipm`, `nama`, `username`, `role_id`, `password`) VALUES
(1, 12, 'Admin', 'admin', 1, '123'),
(2, 123, 'User', 'user', 2, '123'),
(3, 1234, 'Aka', 'akademik', 3, '123'),
(4, 12345, 'SDM', 'sdm', 4, '123'),
(5, 165410006, 'Alfian Adi Wirawan', 'Alfian', 2, '123'),
(7, 911031, 'A. Budi Sugiharjo', 'Budi Sugiharjo', 2, 'Budi Sugiharjo'),
(8, 51148, 'Adi Kusjani', 'Adi Kusjani', 2, 'Adi Kusjani'),
(9, 91155, 'Adiyuda Prayitna', 'Adiyuda Prayitna', 2, 'Adiyuda Prayitna'),
(10, 141179, 'Agnes Nora Eko Wahyu Utami', 'Agnes Nora Eko Wahyu Utami', 2, 'Agnes Nora'),
(11, 2005011, 'Agung Budi Prasetyo', 'Agung Budi Prasetyo', 2, 'Agung Budi Prasetyo'),
(12, 981108, 'Al. Agus Subagyo', 'Al. Agus Subagyo', 2, 'Agus Subagyo'),
(13, 2005012, 'Ariesta Damayanti', 'Ariesta Damayanti', 2, 'Ariesta Damayanti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_form_dosen`
--
ALTER TABLE `tb_form_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_form_mhs`
--
ALTER TABLE `tb_form_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_form_sk`
--
ALTER TABLE `tb_form_sk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_form_dosen`
--
ALTER TABLE `tb_form_dosen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_form_mhs`
--
ALTER TABLE `tb_form_mhs`
  MODIFY `id_mhs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_form_sk`
--
ALTER TABLE `tb_form_sk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
