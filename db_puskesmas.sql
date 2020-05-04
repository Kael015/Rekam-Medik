-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2020 pada 17.00
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keluar`
--

CREATE TABLE `tb_keluar` (
  `no_keluar` varchar(15) NOT NULL,
  `kode_pegawai` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keluar_detail`
--

CREATE TABLE `tb_keluar_detail` (
  `auto` int(11) NOT NULL,
  `no_keluar` varchar(15) NOT NULL,
  `kode_obat` varchar(15) NOT NULL,
  `nama_obat` varchar(35) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kunjungan`
--

CREATE TABLE `tb_kunjungan` (
  `no_reg` varchar(15) NOT NULL,
  `tgl_reg` date NOT NULL,
  `unit_tujuan` varchar(25) NOT NULL,
  `nama_pasien` varchar(200) NOT NULL,
  `kode_pasien` varchar(15) NOT NULL,
  `Diangnosa` varchar(200) NOT NULL,
  `Tindakan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kunjungan`
--

INSERT INTO `tb_kunjungan` (`no_reg`, `tgl_reg`, `unit_tujuan`, `nama_pasien`, `kode_pasien`, `Diangnosa`, `Tindakan`) VALUES
('REG-001', '2020-05-04', 'Poli Umum', '', 'PSN0020', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kwitansi`
--

CREATE TABLE `tb_kwitansi` (
  `no_kwitansi` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_pasien` varchar(15) NOT NULL,
  `kode_pegawai` varchar(15) NOT NULL,
  `b_administrasi` double NOT NULL,
  `b_lain` double NOT NULL,
  `total_bayar` double NOT NULL,
  `tunai` double NOT NULL,
  `kembali` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kwitansi`
--

INSERT INTO `tb_kwitansi` (`no_kwitansi`, `tanggal`, `kode_pasien`, `kode_pegawai`, `b_administrasi`, `b_lain`, `total_bayar`, `tunai`, `kembali`) VALUES
('KWT-0001', '2015-05-19', 'PSN0001', 'PGW0001', 25000, 5000, 30000, 50000, 20000),
('KWT-0002', '2015-05-24', 'PSN0001', 'PGW0001', 25000, 15000, 40000, 100000, 60000),
('KWT-0003', '2016-02-13', 'PSN0005', 'PGW0002', 50000, 20000, 70000, 0, -70000),
('KWT-0004', '2016-03-22', 'PSN0008', 'PGW0001', 50000, 10000, 60000, 100000, 40000),
('KWT-0005', '2016-03-26', 'PSN0009', 'PGW0001', 50000, 10000, 60000, 100000, 40000),
('KWT-0006', '2016-04-08', 'PSN0011', 'PGW0001', 30000, 10000, 40000, 100000, 60000),
('KWT-0007', '2016-04-17', 'PSN0011', 'PGW0001', 50000, 0, 50000, 0, -50000),
('KWT-0008', '2016-04-20', 'PSN0013', 'PGW0001', 50000, 10000, 60000, 100000, 40000),
('KWT-0009', '2016-04-26', 'PSN0004', 'PGW0001', 100000, 0, 100000, 100000, 0),
('KWT-0010', '2016-04-27', 'PSN0014', 'PGW0002', 30000, 0, 30000, 50000, 20000),
('KWT-0011', '2016-04-27', 'PSN0015', 'PGW0001', 50000, 0, 50000, 100000, 50000),
('KWT-0012', '2016-04-27', 'PSN0016', 'PGW0001', 100000, 0, 100000, 100000, 0),
('KWT-0013', '2016-04-29', 'PSN0017', 'PGW0001', 30000, 10000, 40000, 100000, 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `level`) VALUES
('admin', 'admin', 'admin'),
('apotik', 'admin', 'apotik'),
('medis', 'admin', 'medis'),
('tatausaha', 'admin', 'TU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `kode_obat` varchar(15) NOT NULL,
  `nama_obat` varchar(35) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`kode_obat`, `nama_obat`, `jenis`, `satuan`, `jumlah`, `harga`) VALUES
('OBT-0001', 'Panadol', 'GENERIK', 'TABLET', 180, 6500),
('OBT-0002', 'Bodrex', 'GENERIK', 'TABLET', 147, 5500),
('OBT-0003', 'paramex', 'GENERIK', 'TABLET', 215, 10000),
('OBT-0004', 'ANTALGIN', 'GENERIK', 'TABLET', 180, 12000),
('OBT-0005', 'FLUSTAMOL', 'GENERIK', 'TABLET', 240, 50000),
('OBT-0006', 'AMOXSISILIN', 'GENERIK', 'TABLET', 250, 7500),
('OBT-0007', 'MIRASIK', 'GENERIK', 'TABLET', 147, 6000),
('OBT-0008', 'ALPARA', 'GENERIK', 'TABLET', 447, 5600),
('OBT-0009', 'ALBAENZAZOLE', 'GENERIK', 'TABLET', 300, 12000),
('OBT-0010', 'DANAZOL', 'GENERIK', 'TABLET', 500, 13000),
('OBT-0011', 'CETRIZIN', 'GENERIK', 'TABLET', 115, 18000),
('OBT-0012', 'SEFADROKSIL', 'GENERIK', 'TABLET', 270, 8000),
('OBT-0013', 'METIL PREDNISOLON', 'GENERIK', 'TABLET', 650, 9700),
('OBT-0014', 'AMBROKSOL', 'GENERIK', 'TABLET', 220, 6000),
('OBT-0015', 'AMINOPHILIN', 'GENERIK', 'SPREI', 100, 70000),
('OBT-0016', 'INSULIN', 'GENERIK', 'TABLET', 197, 20000),
('OBT-0017', 'HIDROKORTISON', 'GENERIK', 'TABLET', 100, 30000),
('OBT-0018', 'BETAMETASON', 'GENERIK', 'TABLET', 200, 50000),
('OBT-0019', 'OKSITOSIN', 'GENERIK', 'TABLET', 150, 15000),
('OBT-0020', 'NEOSTIGMIN', 'GENERIK', 'TABLET', 200, 25000),
('OBT-0021', 'BISAKODIL', 'GENERIK', 'TABLET', 500, 30000),
('OBT-0022', 'DOMPERIDON', 'GENERIK', 'TABLET', 100, 20000),
('OBT-0023', 'TERAZOSIN', 'GENERIK', 'TABLET', 200, 15000),
('OBT-0024', 'DIGOKSIN', 'GENERIK', 'TABLET', 300, 20000),
('OBT-0025', 'SINVASTATIN', 'GENERIK', 'TABLET', 100, 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `kode_pasien` varchar(15) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `pekerjaan` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`kode_pasien`, `nama_pasien`, `tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `alamat`, `telpon`, `tanggal`) VALUES
('PSN0018', 'kiki', '1997-12-20', 'Laki-laki', '-', '-', '-', '2020-03-19'),
('PSN0019', 'wong bawel', '1996-11-03', '', '-', '-', '', '2020-03-21'),
('PSN0020', 'aaaa', '2020-04-01', '', '-', 'disini', '123456', '2020-04-20'),
('PSN0021', 'qwqw', '2020-05-04', 'Laki-laki', 'qqqq', 'qqqq', '123456', '2020-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `kode_pegawai` varchar(15) NOT NULL,
  `nama_pegawai` varchar(35) NOT NULL,
  `nama_bagian` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`kode_pegawai`, `nama_pegawai`, `nama_bagian`, `tanggal_lahir`, `alamat`, `telpon`) VALUES
('PGW0001', 'Yahya Hamida', 'Apotik', '1988-09-13', 'Jl. Rambutan, No.5', '081276374849'),
('PGW0002', 'Halim Kusuma', 'Tata Usaha', '1990-05-12', 'Pekanbaru', '082388992119');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekmed`
--

CREATE TABLE `tb_rekmed` (
  `no_rekmed` varchar(15) NOT NULL,
  `kode_pasien` varchar(15) NOT NULL,
  `id_unitmedis` varchar(15) NOT NULL,
  `diagnosa1` varchar(50) NOT NULL,
  `diagnosa2` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rekmed`
--

INSERT INTO `tb_rekmed` (`no_rekmed`, `kode_pasien`, `id_unitmedis`, `diagnosa1`, `diagnosa2`, `keterangan`, `tanggal`) VALUES
('RM-0001', 'PSN0018', 'DOK0001', '', '', '', '2020-03-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_resep`
--

CREATE TABLE `tb_resep` (
  `no_resep` varchar(15) NOT NULL,
  `no_rekmed` varchar(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_resep`
--

INSERT INTO `tb_resep` (`no_resep`, `no_rekmed`, `tanggal`) VALUES
(' RSP-0002', 'RM-0001', '2015-06-03'),
('RSP-0001', 'RM-0001', '2015-05-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_resep_detail`
--

CREATE TABLE `tb_resep_detail` (
  `auto` int(11) NOT NULL,
  `no_resep` varchar(15) NOT NULL,
  `kode_obat` varchar(15) NOT NULL,
  `nama_obat` varchar(35) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `aturan_pakai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_resep_detail`
--

INSERT INTO `tb_resep_detail` (`auto`, `no_resep`, `kode_obat`, `nama_obat`, `jumlah`, `aturan_pakai`) VALUES
(28, 'RSP-0003', 'OBT-0001', 'Panadol', 20, '2x sehari'),
(29, 'RSP-0003', 'OBT-0002', 'Bodrex', 20, '2x sehari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_unitmedis`
--

CREATE TABLE `tb_unitmedis` (
  `id_unitmedis` varchar(15) NOT NULL,
  `nama_unitmedis` varchar(35) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_unitmedis`
--

INSERT INTO `tb_unitmedis` (`id_unitmedis`, `nama_unitmedis`, `spesialis`, `alamat`, `telpon`) VALUES
('DOK0001', 'Farhat Abbass', 'Dokter Umum', 'Jl. Tamrin Bertumpuk, No. 007', '081276374849'),
('DOK0002', 'abdurahman', 'gigi', 'jl. purwodadi', '085233456678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_keluar`
--
ALTER TABLE `tb_keluar`
  ADD PRIMARY KEY (`no_keluar`);

--
-- Indexes for table `tb_keluar_detail`
--
ALTER TABLE `tb_keluar_detail`
  ADD PRIMARY KEY (`auto`);

--
-- Indexes for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indexes for table `tb_kwitansi`
--
ALTER TABLE `tb_kwitansi`
  ADD PRIMARY KEY (`no_kwitansi`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`kode_pasien`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`kode_pegawai`);

--
-- Indexes for table `tb_rekmed`
--
ALTER TABLE `tb_rekmed`
  ADD PRIMARY KEY (`no_rekmed`);

--
-- Indexes for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD PRIMARY KEY (`no_resep`);

--
-- Indexes for table `tb_resep_detail`
--
ALTER TABLE `tb_resep_detail`
  ADD PRIMARY KEY (`auto`),
  ADD KEY `auto` (`auto`);

--
-- Indexes for table `tb_unitmedis`
--
ALTER TABLE `tb_unitmedis`
  ADD PRIMARY KEY (`id_unitmedis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_resep_detail`
--
ALTER TABLE `tb_resep_detail`
  MODIFY `auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
