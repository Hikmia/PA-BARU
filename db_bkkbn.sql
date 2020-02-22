-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 03:00 AM
-- Server version: 10.4.11-MariaDB
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
-- Database: `db_bkkbn`
--

-- --------------------------------------------------------

--
-- Table structure for table `binakeluargabalita`
--

CREATE TABLE `binakeluargabalita` (
  `BKB` int(30) NOT NULL,
  `narasumber` varchar(50) NOT NULL,
  `diskusi` varchar(50) NOT NULL,
  `nm_kelKegiatan` varchar(50) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `KKI` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `kel_umur` varchar(30) NOT NULL,
  `tanggalKegiatan` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_kader` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datatribina`
--

CREATE TABLE `datatribina` (
  `BKR` int(30) NOT NULL,
  `narasumber` varchar(50) NOT NULL,
  `nm_kelKegiatan` varchar(50) NOT NULL,
  `diskusi` varchar(50) NOT NULL,
  `jml_kegiatan` varchar(30) NOT NULL,
  `KKI` varchar(50) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `tanggalkegiatan` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_kader` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datatribina`
--

INSERT INTO `datatribina` (`BKR`, `narasumber`, `nm_kelKegiatan`, `diskusi`, `jml_kegiatan`, `KKI`, `materi`, `namalengkap`, `tanggalkegiatan`, `status`, `id_kader`) VALUES
(9, 'PPKBD', 'Kelompok mawar', 'Tidak Ada', '23', '5676', 'Nilai gender dalam keluarga', 'yulia ulfatul hikmia', '2020-02-13', 'Approved', 17);

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `kd_dataKeluarga` int(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `TglLahir` date NOT NULL,
  `hubungan` varchar(30) NOT NULL,
  `jeniskelamin` varchar(25) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `statuskawin` varchar(25) NOT NULL,
  `desa` varchar(25) NOT NULL,
  `dusun` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `RT` varchar(25) NOT NULL,
  `RW` varchar(25) NOT NULL,
  `jkn` varchar(25) NOT NULL,
  `JmlJiwa` varchar(25) NOT NULL,
  `JmlPUS` varchar(25) NOT NULL,
  `NoRumah` varchar(25) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `id_kader` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_keluarga`
--

INSERT INTO `data_keluarga` (`kd_dataKeluarga`, `NIK`, `nama`, `umur`, `TglLahir`, `hubungan`, `jeniskelamin`, `pendidikan`, `pekerjaan`, `statuskawin`, `desa`, `dusun`, `kecamatan`, `RT`, `RW`, `jkn`, `JmlJiwa`, `JmlPUS`, `NoRumah`, `provinsi`, `id_kader`) VALUES
(6, '123456', 'yusril wahyuda', '23 tahun', '2020-02-20', 'Lajang', 'Laki-Laki', 'SMA', 'Mahasiswa', 'Belum Kawin', 'cingklak', 'Balongkebek', 'Gudo', '03', '03', 'BPJS', '2 Jiwa', '2', '12B', 'Jawa Timur', 17);

-- --------------------------------------------------------

--
-- Table structure for table `fotokegiatan`
--

CREATE TABLE `fotokegiatan` (
  `id_foto` int(30) NOT NULL,
  `tglKegiatan` date NOT NULL,
  `judul` varchar(30) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kader` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `input_informasi`
--

CREATE TABLE `input_informasi` (
  `id_info` int(30) NOT NULL,
  `tglinformasi` date NOT NULL,
  `tglberakhir` date NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_penyuluh` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kaderppkbd`
--

CREATE TABLE `kaderppkbd` (
  `id_kader` int(30) NOT NULL,
  `NoKK` int(30) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kodepetugas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kaderppkbd`
--

INSERT INTO `kaderppkbd` (`id_kader`, `NoKK`, `desa`, `kodepetugas`) VALUES
(17, 12345667, 'gambang', 18),
(18, 0, '', 19),
(19, 0, '', 20);

-- --------------------------------------------------------

--
-- Table structure for table `keluargaberencana`
--

CREATE TABLE `keluargaberencana` (
  `kodeKB` int(30) NOT NULL,
  `u_kawinsuami` varchar(25) NOT NULL,
  `u_kawinistri` varchar(25) NOT NULL,
  `prnhDilahirkanLaki` varchar(25) NOT NULL,
  `prnhDilahirkanCewek` varchar(25) NOT NULL,
  `dilahirkanHidupLaki` varchar(25) NOT NULL,
  `dilahirkanHidupCewek` varchar(25) NOT NULL,
  `kesertaanKB` varchar(50) NOT NULL,
  `metodekon` varchar(50) NOT NULL,
  `jangkawaktu` varchar(25) NOT NULL,
  `rencanaPnyAnak` varchar(25) NOT NULL,
  `tmptPel` varchar(50) NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `id_kader` int(30) NOT NULL,
  `kd_dataKeluarga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluargaberencana`
--

INSERT INTO `keluargaberencana` (`kodeKB`, `u_kawinsuami`, `u_kawinistri`, `prnhDilahirkanLaki`, `prnhDilahirkanCewek`, `dilahirkanHidupLaki`, `dilahirkanHidupCewek`, `kesertaanKB`, `metodekon`, `jangkawaktu`, `rencanaPnyAnak`, `tmptPel`, `alasan`, `id_kader`, `kd_dataKeluarga`) VALUES
(2, '23 tahun', '23 tahun', '2 Anak', '2 Anak', '2 Anak', '1 Anak', 'Sedang', 'Suntik', '5 Tahun', 'Ya, Kemudian (lebih dari ', 'RS SWASTA', 'Takut Efek Samping', 17, 6);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `kodeLKB` int(30) NOT NULL,
  `namaIstri` varchar(50) NOT NULL,
  `umurIstri` varchar(50) NOT NULL,
  `nmSuami` varchar(50) NOT NULL,
  `jmlAnak` varchar(50) NOT NULL,
  `KB` varchar(50) NOT NULL,
  `alkon` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `dokumen` varchar(1000) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_kader` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`kodeLKB`, `namaIstri`, `umurIstri`, `nmSuami`, `jmlAnak`, `KB`, `alkon`, `alamat`, `desa`, `kecamatan`, `bulan`, `kabupaten`, `dokumen`, `status`, `id_kader`) VALUES
(11, 'rukyah', '21 tahun', 'darsim', '2', 'ya', 'pil', 'jombang', 'cingklak', 'gudo', 'januari', 'jombang', '20181018_094651.jpg', 'Approved', 17);

-- --------------------------------------------------------

--
-- Table structure for table `pemb_keluarga`
--

CREATE TABLE `pemb_keluarga` (
  `kodePK` int(30) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `makan` varchar(30) NOT NULL,
  `berobat` varchar(30) NOT NULL,
  `pakaian` varchar(30) NOT NULL,
  `jenismakanan` varchar(30) NOT NULL,
  `ibadah` varchar(30) NOT NULL,
  `usiasubur` varchar(30) NOT NULL,
  `tabungan` varchar(30) NOT NULL,
  `komunikasi` varchar(30) NOT NULL,
  `kegiatansosial` varchar(30) NOT NULL,
  `aksesinformasi` varchar(30) NOT NULL,
  `anggotapengurus` varchar(30) NOT NULL,
  `kegPosyandu` varchar(30) NOT NULL,
  `kegBKB` varchar(30) NOT NULL,
  `kegBKR` varchar(30) NOT NULL,
  `kegPIKR` varchar(30) NOT NULL,
  `kegBKL` varchar(30) NOT NULL,
  `kegUPPKS` varchar(30) NOT NULL,
  `jenisatap` varchar(50) NOT NULL,
  `jenisdinding` varchar(50) NOT NULL,
  `jenislantai` varchar(50) NOT NULL,
  `smbrpenerangan` varchar(50) NOT NULL,
  `sumberair` varchar(50) NOT NULL,
  `smbrbhnbakar` varchar(50) NOT NULL,
  `mck` varchar(50) NOT NULL,
  `tmptTinggal` varchar(50) NOT NULL,
  `luasrumah` varchar(50) NOT NULL,
  `jmlOrgTinggal` varchar(50) NOT NULL,
  `id_kader` int(30) NOT NULL,
  `kd_dataKeluarga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemb_keluarga`
--

INSERT INTO `pemb_keluarga` (`kodePK`, `jawaban`, `makan`, `berobat`, `pakaian`, `jenismakanan`, `ibadah`, `usiasubur`, `tabungan`, `komunikasi`, `kegiatansosial`, `aksesinformasi`, `anggotapengurus`, `kegPosyandu`, `kegBKB`, `kegBKR`, `kegPIKR`, `kegBKL`, `kegUPPKS`, `jenisatap`, `jenisdinding`, `jenislantai`, `smbrpenerangan`, `sumberair`, `smbrbhnbakar`, `mck`, `tmptTinggal`, `luasrumah`, `jmlOrgTinggal`, `id_kader`, `kd_dataKeluarga`) VALUES
(2, 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Lainnya', 'Bambu', 'Lainnya', 'Lainnya', 'Sumur Terlindung/Pompa', 'Arang/Kayu', 'Jamban Umum', 'Sewa/Kontrak', '234 h', '25 m', 17, 6);

-- --------------------------------------------------------

--
-- Table structure for table `penyuluhkb`
--

CREATE TABLE `penyuluhkb` (
  `id_penyuluh` int(30) NOT NULL,
  `NIK` int(30) NOT NULL,
  `kodepetugas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyuluhkb`
--

INSERT INTO `penyuluhkb` (`id_penyuluh`, `NIK`, `kodepetugas`) VALUES
(13, 0, 18),
(14, 123456, 19),
(15, 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `kodepetugas` int(30) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`kodepetugas`, `namalengkap`, `email`, `jk`, `jabatan`) VALUES
(18, 'suhartini', 'suhartini@gmail.com', 'Perempuan', '3'),
(19, 'suharto', 'suharto@gmail.com', 'Laki-Laki', '4'),
(20, 'lastri', 'lastri@gmail.com', 'Perempuan', '2');

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_puskesmas` int(30) NOT NULL,
  `namaPuskesmas` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `id_pPuskesmas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `p_puskesmas`
--

CREATE TABLE `p_puskesmas` (
  `id_pPuskesmas` int(30) NOT NULL,
  `NIP` int(30) NOT NULL,
  `kodepetugas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_puskesmas`
--

INSERT INTO `p_puskesmas` (`id_pPuskesmas`, `NIP`, `kodepetugas`) VALUES
(17, 0, 18),
(18, 0, 19),
(19, 123456, 20);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kodepetugas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`, `jabatan`, `kodepetugas`) VALUES
(16, 'suhartini', '12345', '3', 18),
(17, 'suharto', '12345', '4', 19),
(18, 'lastri', '12345', '2', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binakeluargabalita`
--
ALTER TABLE `binakeluargabalita`
  ADD PRIMARY KEY (`BKB`),
  ADD KEY `noKK` (`id_kader`);

--
-- Indexes for table `datatribina`
--
ALTER TABLE `datatribina`
  ADD PRIMARY KEY (`BKR`),
  ADD KEY `noKK` (`id_kader`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`kd_dataKeluarga`),
  ADD UNIQUE KEY `NIK` (`NIK`),
  ADD KEY `id_kader` (`id_kader`);

--
-- Indexes for table `fotokegiatan`
--
ALTER TABLE `fotokegiatan`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_kader` (`id_kader`);

--
-- Indexes for table `input_informasi`
--
ALTER TABLE `input_informasi`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `kodepenyuluh` (`id_penyuluh`);

--
-- Indexes for table `kaderppkbd`
--
ALTER TABLE `kaderppkbd`
  ADD PRIMARY KEY (`id_kader`),
  ADD KEY `kodepetugas` (`kodepetugas`);

--
-- Indexes for table `keluargaberencana`
--
ALTER TABLE `keluargaberencana`
  ADD PRIMARY KEY (`kodeKB`),
  ADD KEY `noKK` (`kd_dataKeluarga`),
  ADD KEY `id_kader` (`id_kader`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`kodeLKB`),
  ADD KEY `id_kader` (`id_kader`);

--
-- Indexes for table `pemb_keluarga`
--
ALTER TABLE `pemb_keluarga`
  ADD PRIMARY KEY (`kodePK`),
  ADD KEY `noKK` (`kd_dataKeluarga`),
  ADD KEY `id_kader` (`id_kader`);

--
-- Indexes for table `penyuluhkb`
--
ALTER TABLE `penyuluhkb`
  ADD PRIMARY KEY (`id_penyuluh`),
  ADD KEY `kodepetugas` (`kodepetugas`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`kodepetugas`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`),
  ADD KEY `id_pPuskesmas` (`id_pPuskesmas`);

--
-- Indexes for table `p_puskesmas`
--
ALTER TABLE `p_puskesmas`
  ADD PRIMARY KEY (`id_pPuskesmas`),
  ADD KEY `kodepetugas` (`kodepetugas`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodepetugas` (`kodepetugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binakeluargabalita`
--
ALTER TABLE `binakeluargabalita`
  MODIFY `BKB` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datatribina`
--
ALTER TABLE `datatribina`
  MODIFY `BKR` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `kd_dataKeluarga` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fotokegiatan`
--
ALTER TABLE `fotokegiatan`
  MODIFY `id_foto` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `input_informasi`
--
ALTER TABLE `input_informasi`
  MODIFY `id_info` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kaderppkbd`
--
ALTER TABLE `kaderppkbd`
  MODIFY `id_kader` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `keluargaberencana`
--
ALTER TABLE `keluargaberencana`
  MODIFY `kodeKB` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `kodeLKB` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pemb_keluarga`
--
ALTER TABLE `pemb_keluarga`
  MODIFY `kodePK` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyuluhkb`
--
ALTER TABLE `penyuluhkb`
  MODIFY `id_penyuluh` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `kodepetugas` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id_puskesmas` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_puskesmas`
--
ALTER TABLE `p_puskesmas`
  MODIFY `id_pPuskesmas` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binakeluargabalita`
--
ALTER TABLE `binakeluargabalita`
  ADD CONSTRAINT `binakeluargabalita_ibfk_1` FOREIGN KEY (`id_kader`) REFERENCES `kaderppkbd` (`id_kader`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `datatribina`
--
ALTER TABLE `datatribina`
  ADD CONSTRAINT `datatribina_ibfk_1` FOREIGN KEY (`id_kader`) REFERENCES `kaderppkbd` (`id_kader`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD CONSTRAINT `data_keluarga_ibfk_1` FOREIGN KEY (`id_kader`) REFERENCES `kaderppkbd` (`id_kader`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fotokegiatan`
--
ALTER TABLE `fotokegiatan`
  ADD CONSTRAINT `fotokegiatan_ibfk_1` FOREIGN KEY (`id_kader`) REFERENCES `kaderppkbd` (`id_kader`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `input_informasi`
--
ALTER TABLE `input_informasi`
  ADD CONSTRAINT `input_informasi_ibfk_1` FOREIGN KEY (`id_penyuluh`) REFERENCES `penyuluhkb` (`id_penyuluh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kaderppkbd`
--
ALTER TABLE `kaderppkbd`
  ADD CONSTRAINT `kaderppkbd_ibfk_1` FOREIGN KEY (`kodepetugas`) REFERENCES `profile` (`kodepetugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keluargaberencana`
--
ALTER TABLE `keluargaberencana`
  ADD CONSTRAINT `keluargaberencana_ibfk_2` FOREIGN KEY (`id_kader`) REFERENCES `kaderppkbd` (`id_kader`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keluargaberencana_ibfk_3` FOREIGN KEY (`kd_dataKeluarga`) REFERENCES `data_keluarga` (`kd_dataKeluarga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`id_kader`) REFERENCES `kaderppkbd` (`id_kader`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemb_keluarga`
--
ALTER TABLE `pemb_keluarga`
  ADD CONSTRAINT `pemb_keluarga_ibfk_2` FOREIGN KEY (`id_kader`) REFERENCES `kaderppkbd` (`id_kader`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemb_keluarga_ibfk_3` FOREIGN KEY (`kd_dataKeluarga`) REFERENCES `data_keluarga` (`kd_dataKeluarga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penyuluhkb`
--
ALTER TABLE `penyuluhkb`
  ADD CONSTRAINT `penyuluhkb_ibfk_1` FOREIGN KEY (`kodepetugas`) REFERENCES `profile` (`kodepetugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_puskesmas`
--
ALTER TABLE `p_puskesmas`
  ADD CONSTRAINT `p_puskesmas_ibfk_1` FOREIGN KEY (`kodepetugas`) REFERENCES `profile` (`kodepetugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`kodepetugas`) REFERENCES `profile` (`kodepetugas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
