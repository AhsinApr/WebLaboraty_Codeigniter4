-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 09:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboraty`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `akses_ruskdesk` varchar(50) NOT NULL,
  `ruskfullacc_distribusi` varchar(100) NOT NULL,
  `ruskss_distribusi` varchar(100) NOT NULL,
  `akses_anydesk` varchar(30) NOT NULL,
  `distribusi_fullacc` varchar(100) NOT NULL,
  `distribusi_ss` varchar(100) NOT NULL,
  `idanydesk_testing` varchar(100) NOT NULL,
  `anydeskfullacc_testing` varchar(100) NOT NULL,
  `anydeskss_testing` varchar(100) NOT NULL,
  `idanydesk_proccesing` varchar(100) NOT NULL,
  `fullacc_proccesing` varchar(100) NOT NULL,
  `anydeskss_proccesing` varchar(100) NOT NULL,
  `idanydesk_handling` varchar(100) NOT NULL,
  `fullacc_handling` varchar(100) NOT NULL,
  `anydeskss_handling` varchar(100) NOT NULL,
  `ruskdesk_testing` varchar(100) NOT NULL,
  `fullaccrusk_testing` varchar(100) NOT NULL,
  `ssrusk_testing` varchar(100) NOT NULL,
  `idruskdesk_proccesing` varchar(100) NOT NULL,
  `fullaccrusk_proccesing` varchar(100) NOT NULL,
  `ssrusk_proccesing` varchar(110) NOT NULL,
  `idruskdesk_handling` varchar(100) NOT NULL,
  `fullaccrusk_handling` varchar(100) NOT NULL,
  `ssrusk_handling` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `updated_at`, `created_at`, `akses_ruskdesk`, `ruskfullacc_distribusi`, `ruskss_distribusi`, `akses_anydesk`, `distribusi_fullacc`, `distribusi_ss`, `idanydesk_testing`, `anydeskfullacc_testing`, `anydeskss_testing`, `idanydesk_proccesing`, `fullacc_proccesing`, `anydeskss_proccesing`, `idanydesk_handling`, `fullacc_handling`, `anydeskss_handling`, `ruskdesk_testing`, `fullaccrusk_testing`, `ssrusk_testing`, `idruskdesk_proccesing`, `fullaccrusk_proccesing`, `ssrusk_proccesing`, `idruskdesk_handling`, `fullaccrusk_handling`, `ssrusk_handling`) VALUES
(0, '2022-07-04 02:16:59', '0000-00-00 00:00:00', ' dalkdladk rust 990aas', 'fwfwf 778', '', 'any 99000aa', '    anhy 99000aasssaafsfg', 'any 99000aasssaafsfg', 'asssddany 99000aasssaafsfg', '           coba coabasssdd', '0any 99000aasssaafsfg56667', 'kodesk233 bisalo', '   99000aasssaafsfg56667', '99000aasssaafsfg56667', '99000aasssaafsfg56667', '   99000aasssaafsfg56667', '99000aasssaafsfg56667', '   uiiulul', 'coba coabasssdd', '', '    99000aasssaafsfg56667', '99000aasssaafsfg56667', '', '   9000aasssaafsfg56667', '99000aasssaafsfg56667', '');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(5) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `nim` varchar(500) NOT NULL,
  `berkas` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `nama`, `nim`, `berkas`, `created_at`, `updated_at`) VALUES
(7, 'Agus', '5180211265', '1650574242_d657f8abfb6a4aa1dd93.pdf', '2022-04-21 15:50:42', '2022-04-21 15:50:42'),
(8, 'apri yaqin', '290099', '1653070878_72a4c7ac11bfcbae6a95.pdf', '2022-05-21 01:21:18', '2022-05-21 01:21:18'),
(9, 'apri yaqin', '290099', '1653140043_6fdedfdc83751a3117e2.rar', '2022-05-21 20:34:03', '2022-05-21 20:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id_task` int(5) NOT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `kelas` varchar(10) NOT NULL,
  `nama_dosen` varchar(500) NOT NULL,
  `taks` varchar(500) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id_task`, `keterangan`, `kelas`, `nama_dosen`, `taks`, `updated_at`, `created_at`) VALUES
(9, 'module 12', 'D', 'Ahsin Apri .S. Kom,.M.sc', '5180411265_ahsin apri aenul_P14stastitic.pdf', '2022-04-21 15:14:24', '2022-04-21 15:14:24'),
(11, 'video', 'Mekatronik', 'ahsunak ahhkkn', '1653123969_ab8d6abd4fad8b771076.mp4', '2022-05-21 16:06:09', '2022-05-21 16:06:09'),
(12, 'fdgdfgs', 'r', 'dsgsg', '1653139954_9caaa86ee3b2d3b753e5.pdf', '2022-05-21 20:32:34', '2022-05-21 20:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `salt` varchar(500) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `salt`, `role`) VALUES
(1, 'Ahsin Apri Aenul Yaqin', 'ahsinapri', 'a7ea66b2598d683e32a3dd9c09e51575626195a8756a81.06826470', '626195a8756a81.06826470', 2),
(2, 'Fahmi Aziz Syamsudin', 'fahmi', '41851c2c39e9729d51870dc74e098950626195d923b386.87657484', '626195d923b386.87657484', 1),
(3, 'rohmana jaya kusuma', 'rohmana', 'a208f47c041d59ca01d0ebdf69c2a37f62619749070902.15197083', '62619749070902.15197083', 2),
(4, 'Aldefa', 'aldefa', '1a1aadd06cd9d2f53e055f0b8d873ae0628ca508b07bb6.42688150', '628ca508b07bb6.42688150', 2),
(5, 'Stefanus Joy', 'stefanus', 'dcd77bfb4f33c913c46eadebd61e711d628ca5e27143b1.76876906', '628ca5e27143b1.76876906', 2),
(6, 'ayela', 'ayela', '9c404614ddec75383488ac11e224b943628cd509aa3610.30301120', '628cd509aa3610.30301120', 2),
(7, 'Zul Fahmi Hidayatullah', 'zulfahmy', '9234ec5efc6f0a66a7670dea0932be65628f8ea5516395.98504497', '628f8ea5516395.98504497', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
