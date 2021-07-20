-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 04:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `no` int(11) NOT NULL,
  `kode_dokter` varchar(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `gaji` decimal(10,0) NOT NULL,
  `aksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`no`, `kode_dokter`, `nama`, `jk`, `alamat`, `gaji`, `aksi`) VALUES
(1, 'D001', 'dr. Abdul Hamid', 'L', 'mataram', '3000', 0),
(13, 'D002', 'dr. endang', 'P', 'jempong', '6000', 0),
(14, 'D003', 'dr. mirza', 'L', 'baremayung ', '8000', 0),
(15, 'D004', 'dr. onik', 'P', 'jontlak', '8000', 0),
(18, 'D005', 'dr. teti', 'P', 'karang sidemen', '6000', 0),
(19, 'D006', 'dr. mila', 'P', 'pegading', '6000', 0),
(20, 'D007', 'dr. reni', 'P', 'batu apit', '8000', 0),
(21, 'D008', 'dr. putra', 'L', 'motong batu', '6000', 0),
(22, 'D009', 'dr. reza', 'L', 'mataram', '6000', 0),
(23, 'D010', 'dr. mesi', 'P', 'batu putik', '6000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `kd_jadwal` char(5) NOT NULL DEFAULT '',
  `hari` varchar(11) NOT NULL,
  `shift` varchar(11) NOT NULL,
  `kd_dokter` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`kd_jadwal`, `hari`, `shift`, `kd_dokter`) VALUES
('1', 'senin', '1', 'D001'),
('10', 'kamis', '2', 'D010'),
('2', 'selasa', '1', 'D002'),
('3', 'rabu', '2', 'D003'),
('4', 'kamis', '2', 'D004'),
('5', 'jumat', '1', 'D005'),
('6', 'sabtu', '2', 'D006'),
('7', 'senin', '1', 'D007'),
('8', 'selasa', '1', 'D008'),
('9', 'rabu', '2', 'D009');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `no` int(11) NOT NULL,
  `nama_obat` varchar(15) NOT NULL,
  `kd_obat` varchar(11) NOT NULL,
  `aksi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`no`, `nama_obat`, `kd_obat`, `aksi`) VALUES
(1, 'babycyup', 'O111', 0),
(2, 'caviplex', 'O112', 0),
(3, 'grafachlor', 'O113', 0),
(4, 'beneuron', 'O114', 0),
(5, 'vitamin AB', 'O115', 0),
(6, 'migrain', 'O116', 0),
(7, 'grafaxilx', 'O117', 0),
(8, 'mixagfriksc', 'O118', 0),
(9, 'firkasgrib', 'O119', 0),
(10, 'caviplexs', 'O120', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no` int(5) NOT NULL,
  `kd_pasien` varchar(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `periksa` varchar(35) NOT NULL,
  `aksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no`, `kd_pasien`, `nama`, `jk`, `alamat`, `periksa`, `aksi`) VALUES
(3, 'P013', 'marisa', 'P', 'praya', 'telinga', 0),
(4, 'P014', 'budi utomo', 'L', 'dasan baru', 'mata', 0),
(5, 'P015', 'khadijah', 'P', 'montong desa', 'telinga', 0),
(6, 'P016', 'ferdian', 'L', 'perbawe', 'mata', 0),
(7, 'P017', 'melani', 'P', 'bodak', 'lambung', 0),
(8, 'P018', 'putra hermawan', 'L', 'montong gamang', 'mata', 0),
(14, 'P019', 'tanesaa', 'P', 'jelantik', 'telinga', 0),
(16, 'P020', 'miskah', 'P', 'paok tawah', 'mata', 0),
(17, 'P021', 'suhaili', 'L', 'kuta', 'telinga', 0),
(18, 'P022', 'nazeera', 'P', 'jempong', 'tenggorokan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(5) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('petugas','administrator','dokter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'petugas', '12345', 'petugas'),
(2, 'administrator', '12345', 'administrator'),
(3, 'dokter', '12345', 'dokter');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `no` int(5) NOT NULL,
  `kd_penyakit` varchar(11) NOT NULL,
  `nama_penyakit` varchar(20) NOT NULL,
  `aksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`no`, `kd_penyakit`, `nama_penyakit`, `aksi`) VALUES
(2, 'P001', 'kencing manis', 0),
(3, 'P003', 'kencing batu', 0),
(4, 'P004', 'lambung', 0),
(5, 'P005', 'demam', 0),
(6, 'P006', 'asma', 0),
(8, 'P007', 'alergi', 0),
(9, 'P008', 'alergi', 0),
(10, 'P009', 'demam berdarah', 0),
(11, 'P010', 'covid-19', 0),
(12, 'P011', 'asam urat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `no` int(11) NOT NULL,
  `kd_resep` varchar(11) NOT NULL,
  `hari` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kd_pasien` varchar(15) NOT NULL,
  `kd_penyakit` varchar(15) NOT NULL,
  `kd_dokter` varchar(15) NOT NULL,
  `kd_obat` varchar(15) NOT NULL,
  `aksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`no`, `kd_resep`, `hari`, `tanggal`, `kd_pasien`, `kd_penyakit`, `kd_dokter`, `kd_obat`, `aksi`) VALUES
(1, 'R111', 'senin', '2021-07-01', 'P013', 'P022', 'D001', 'O111', 0),
(2, 'R112', 'selasa', '2021-07-02', 'P014', 'P033', 'D002', 'O112', 0),
(3, 'R113', 'rabu', '2021-07-03', 'P015', 'P044', 'D003', 'O113', 0),
(4, 'R114', 'kamis', '2021-07-04', 'P016', 'P055', 'D004', 'O114', 0),
(5, 'R115', 'jumat', '2021-07-08', 'P017', 'P055', 'D005', 'O115', 0),
(6, 'R116', 'sabtu', '2021-07-08', 'P018', 'P006', 'D006', 'O116', 0),
(7, 'R117', 'senin', '2021-07-09', 'P019', 'P007', 'D007', 'O117', 0),
(8, 'R118', 'selasa', '2021-07-09', 'P020', 'P008', 'D008', 'O118', 0),
(9, 'R119', 'rabu', '2021-07-10', 'P021', 'P009', 'D008', 'O119', 0),
(10, 'R120', 'kamis', '2021-07-20', 'P022', 'P010', 'D009', 'O120', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`kd_jadwal`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `kd_pasien` (`kd_pasien`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
