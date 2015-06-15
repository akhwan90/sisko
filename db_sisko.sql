-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 10 Jun 2015 pada 05.43
-- Versi Server: 5.5.42-cll
-- Versi PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `bumiagr2_sisko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `idGaleri` int(4) NOT NULL AUTO_INCREMENT,
  `file` varchar(200) NOT NULL,
  `kategori` int(2) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `oleh` int(2) NOT NULL,
  `tgl` datetime NOT NULL,
  `view` int(50) NOT NULL,
  PRIMARY KEY (`idGaleri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`idGaleri`, `file`, `kategori`, `keterangan`, `oleh`, `tgl`, `view`) VALUES
(1, 'MU_13_13.jpg', 1, 'United vs Australia', 1, '2013-07-25 05:29:04', 1),
(2, 'Chrysanthemum.jpg', 1, 'Sample 1', 1, '2013-07-25 05:29:23', 1),
(3, 'Desert.jpg', 1, 'Sample 2', 1, '2013-07-25 05:29:35', 1),
(4, 'Jellyfish.jpg', 1, 'Sample 3', 1, '2013-07-25 05:29:48', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galerikategori`
--

CREATE TABLE IF NOT EXISTS `galerikategori` (
  `idKategori` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`idKategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `galerikategori`
--

INSERT INTO `galerikategori` (`idKategori`, `nama`) VALUES
(1, 'album');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tg_data`
--

CREATE TABLE IF NOT EXISTS `tg_data` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nuptk` varchar(25) NOT NULL,
  `nrg` varchar(20) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `tmp_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `panggol` varchar(25) NOT NULL,
  `stat` enum('Kawin','Belum Kawin') NOT NULL,
  `gol_drh` enum('A','B','O','AB','-') NOT NULL,
  `agama` enum('Islam','Krist. Protestan','Krist. Katolik','Hindu','Budha','Konghucu') NOT NULL,
  `nope` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `klg_ay` varchar(200) NOT NULL,
  `klg_ibu` varchar(200) NOT NULL,
  `klg_suami_istri` varchar(200) NOT NULL,
  `klg_anak` int(3) NOT NULL,
  `klg_nope_isuam` varchar(20) NOT NULL,
  `mapel_1` varchar(100) NOT NULL,
  `mapel_2` varchar(100) NOT NULL,
  `mapel_3` varchar(100) NOT NULL,
  `mapel_4` varchar(100) NOT NULL,
  `jml_jam` int(4) NOT NULL,
  `tgs_1` varchar(100) NOT NULL,
  `tgs_2` varchar(100) NOT NULL,
  `tgs_3` varchar(100) NOT NULL,
  `tgs_4` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status_aktif` enum('Aktif','Non Aktif') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tg_data`
--

INSERT INTO `tg_data` (`id`, `nama`, `nip`, `nuptk`, `nrg`, `npwp`, `tmp_lhr`, `tgl_lhr`, `jk`, `panggol`, `stat`, `gol_drh`, `agama`, `nope`, `alamat`, `klg_ay`, `klg_ibu`, `klg_suami_istri`, `klg_anak`, `klg_nope_isuam`, `mapel_1`, `mapel_2`, `mapel_3`, `mapel_4`, `jml_jam`, `tgs_1`, `tgs_2`, `tgs_3`, `tgs_4`, `foto`, `status_aktif`) VALUES
(1, 'AHWAN AQBAR', '19900326 201401 1 002', '12090672', '12090672', '', 'Kulon Progo', '2012-11-12', 'L', '', '', 'A', 'Islam', '', 'Sumoroto, Sidoharjo, Samigaluh, Kulon PRogo', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', 'Chrysanthemum.jpg', 'Aktif'),
(2, 'DRS. NUR AKHWAN', '19900326 201401 1 002', '123456789', '-', '-', 'Kulon Progo', '1990-03-26', 'L', 'IIIa', 'Belum Kawin', 'O', 'Islam', '085292747190', 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo', '', '', '', 0, '', '1', '2', '10', '13', 0, '', '', '', '', 'Nur_Akhwan1.jpg', 'Aktif'),
(3, 'WAYNE ROONEY', '12090672', '12090672', '12090672', '12090672', 'Kulon Progo', '1990-03-26', 'L', 'IIIa', 'Kawin', 'O', 'Islam', '085202747190', 'Sumoroto, Sidoharjo, Samigaluh, Kulon PRogo', 'Suparji', 'Sumiyati', 'Masih Tandatanya', 2, '080000000', '1', '13', '', '', 24, 'Waka Bidang Kurikulum', '', '', '', 'chicarito_doa3.jpg', 'Aktif'),
(4, 'RIO FERDINAND', '12090672', '12090672', '12090672', '12090672', 'Kulon Progo', '1990-03-26', 'L', 'IIIa', 'Belum Kawin', 'O', 'Islam', '085202747190', 'Sumoroto, Sidoharjo, Samigaluh, Kulon PRogo', 'Suparji', 'Sumiyati', 'Masih Tandatanya', 2, '080000000', '1', '13', '', '', 24, '', '', '', '', 'chicarito_doa2.jpg', 'Aktif'),
(5, 'UMEE', '19900326 201401 1 002', '', '', '', '', '0000-00-00', 'P', 'IVd', 'Belum Kawin', 'A', 'Islam', '98509328532852', 'sljdfklsjfdskl', 'dskjfhsdkj', 'eklfjsdkl', 'kldsfjsdkl', 43, '4583409309', '', '', '', '', 0, '', '', '', '', 'Koala.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tg_duk`
--

CREATE TABLE IF NOT EXISTS `tg_duk` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `id_pegawe` int(4) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `gol` int(3) NOT NULL,
  `gol_tmt` date NOT NULL,
  `angka_kredit` double NOT NULL,
  `jab_nama` varchar(75) NOT NULL,
  `jab_tmt` date NOT NULL,
  `mk_tmt` date NOT NULL,
  `mk_th_terakhir` int(2) NOT NULL,
  `mk_bl_terakhir` int(2) NOT NULL,
  `latjab_nama` varchar(100) NOT NULL,
  `latjab_blth` varchar(100) NOT NULL,
  `latjab_jam` varchar(4) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `thn_lulus` year(4) NOT NULL,
  `tkt` varchar(5) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tg_duk`
--

INSERT INTO `tg_duk` (`no`, `id_pegawe`, `nama`, `nip`, `gol`, `gol_tmt`, `angka_kredit`, `jab_nama`, `jab_tmt`, `mk_tmt`, `mk_th_terakhir`, `mk_bl_terakhir`, `latjab_nama`, `latjab_blth`, `latjab_jam`, `prodi`, `lembaga`, `thn_lulus`, `tkt`, `cat`, `ket`) VALUES
(1, 1, 'AHWAN AQBAR', '19900326 201401 1 002', 13, '2007-10-01', 0, 'Guru', '2012-11-04', '0000-00-00', 3, 0, '', '', '', '- (-)', 'SDN Meringin Putih 2', 1976, 'SD', 'SD', ''),
(2, 2, 'DRS. NUR AKHWAN', '19900326 201401 1 002', 13, '2012-10-04', 0, 'Guru', '2012-11-04', '0000-00-00', 3, 0, '', '', '', 'MIPA (Teknik Informatika)', 'STMIK El Rahma', 2013, 'S1', 'S1', ''),
(3, 3, 'DRS. AKHWAN NUR', '12090672', 13, '2009-10-01', 0, 'Guru', '2012-11-01', '0000-00-00', 5, 6, '', '', '', '- (-)', 'SMK Negeri 1 Pangkalan Banteng', 2001, 'SMA', 'SMA', ''),
(4, 4, 'DRS. AKHWAN NUR', '12090672', 12, '2012-03-01', 0, 'Guru', '2012-11-19', '0000-00-00', 2, 0, '', '', '', 'Ekonomi (Akuntansi)', 'Universitas Gadjah Mada', 2012, 'S1', 'S1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tg_gaji`
--

CREATE TABLE IF NOT EXISTS `tg_gaji` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_guru` int(4) NOT NULL,
  `panggol` varchar(10) NOT NULL,
  `gapok` double NOT NULL,
  `tunj_isum` double NOT NULL,
  `tunj_anak` double NOT NULL,
  `tunj_jab` double NOT NULL,
  `tunj_lain` double NOT NULL,
  `jml_pot` double NOT NULL,
  `gaji_bersih` double NOT NULL,
  `norek_gaji` varchar(75) NOT NULL,
  `bank` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tg_gaji`
--

INSERT INTO `tg_gaji` (`id`, `id_guru`, `panggol`, `gapok`, `tunj_isum`, `tunj_anak`, `tunj_jab`, `tunj_lain`, `jml_pot`, `gaji_bersih`, `norek_gaji`, `bank`) VALUES
(1, 1, 'IIIa', 2300000.4, 0, 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tg_kepeg`
--

CREATE TABLE IF NOT EXISTS `tg_kepeg` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_guru` int(5) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `sk_no` varchar(100) NOT NULL,
  `sk_tgl` date NOT NULL,
  `tmt` date NOT NULL,
  `mk_th` int(2) NOT NULL,
  `mk_bl` int(2) NOT NULL,
  `panggol` varchar(5) NOT NULL,
  `gapok` double NOT NULL,
  `di` varchar(100) NOT NULL,
  `sbg` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tg_kepeg`
--

INSERT INTO `tg_kepeg` (`id`, `id_guru`, `tipe`, `sk_no`, `sk_tgl`, `tmt`, `mk_th`, `mk_bl`, `panggol`, `gapok`, `di`, `sbg`) VALUES
(1, 2, 'CPNS', 'Kd.12.01.04', '2012-10-03', '2012-10-01', 23, 2, 'IIIa', 5000000, 'SMKN 1 Pangkalan Banteng', 'Kepala Sekolah'),
(2, 2, 'PNS', 'Kd.12.01.05', '2012-10-20', '2012-10-01', 1, 0, 'IIIa', 5000000, 'MTs N Sidoharjo', 'Staff TU'),
(3, 1, 'CPNS', 'Kd.12.01/MP2/2012', '2012-10-08', '2012-10-01', 1, 0, 'IIIa', 3000000, '', ''),
(4, 1, 'PNS', 'Kd.13.01/MP3/2012', '2012-10-21', '2012-10-01', 2, 0, 'IIIa', 3200000, '', ''),
(5, 1, 'Kenaikan Pangkat', 'Kd.13.01/MP3/2012', '2012-10-22', '2012-10-01', 3, 0, 'IIIa', 3500000, '', ''),
(6, 2, 'Kenaikan Pangkat', 'MTs.12.01', '2012-10-01', '2012-10-02', 2, 1, 'IIIb', 2000000, '', ''),
(7, 2, 'Kenaikan Pangkat', 'MTs.12.01', '2012-10-03', '2012-10-04', 3, 0, 'IVa', 2000000, '', ''),
(8, 3, 'CPNS', 'Kd.12.01/MP2/2012', '2008-03-01', '2008-03-01', 1, 0, 'IIIa', 3000000, '', ''),
(9, 3, 'PNS', 'Kd.12.01/MP2/2012', '2009-10-01', '2009-10-01', 2, 3, 'IIIa', 0, '', ''),
(10, 4, 'CPNS', 'Kd.12.01/MP2/2012', '2012-03-01', '2012-03-01', 2, 0, 'IIIa', 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tg_panggol`
--

CREATE TABLE IF NOT EXISTS `tg_panggol` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `gol` varchar(10) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `tg_panggol`
--

INSERT INTO `tg_panggol` (`id`, `gol`, `pangkat`, `jabatan`) VALUES
(1, 'I/A', 'Juru Muda', ''),
(2, 'I/B', 'Juru Muda Tk. I', ''),
(3, 'I/C', 'Juru', ''),
(4, 'I/D', 'Juru Tk. I', ''),
(5, 'II/A', 'Pengatur Muda', ''),
(6, 'II/B', 'Pengatur Muda Tk. I', ''),
(7, 'II/C', 'Pengatur', ''),
(8, 'II/D', 'Pengatur Tk. I', ''),
(9, 'III/A', 'Penata Muda', 'Guru Madya'),
(10, 'III/B', 'Penata Muda Tk. I', 'Guru Madya Tk.I'),
(11, 'III/C', 'Penata', 'Guru Dewasa'),
(12, 'III/D', 'Penata Tk. I', 'Guru Dewasa Tk. I'),
(13, 'IV/A', 'Pembina', 'Guru Pembina'),
(14, 'IV/B', 'Pembina Tk. I', ''),
(15, 'IV/C', 'Pembina Utama Madya', ''),
(16, 'IV/D', 'Pembina Utama Madya', ''),
(17, 'IV/E', 'Pembina Utama', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tg_pend`
--

CREATE TABLE IF NOT EXISTS `tg_pend` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_guru` varchar(5) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `th_lulus` year(4) NOT NULL,
  `fak` varchar(100) NOT NULL,
  `jur` varchar(100) NOT NULL,
  `jenjang` enum('SD','SMP','SMA','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tg_pend`
--

INSERT INTO `tg_pend` (`id`, `id_guru`, `nama`, `kota`, `th_lulus`, `fak`, `jur`, `jenjang`) VALUES
(1, '1', 'SDN Meringin Putih 2', 'Kotawaringin Barat', 1976, '-', '-', 'SD'),
(3, '2', 'SDN Sumoroto', 'Yogyakarta', 2001, '-', '-', 'SD'),
(4, '2', 'SMPN 1 Samigaluh', 'Yogyakarta', 2004, '-', '-', 'SMP'),
(5, '2', 'SMKN 1 Pengasih', 'Yogyakarta', 2007, '-', 'Administrasi', 'SMA'),
(6, '2', 'STMIK El Rahma', 'Yogyakarta', 2013, 'MIPA', 'Teknik Informatika', 'S1'),
(7, '3', 'SMK Negeri 1 Pangkalan Banteng', 'Kotawaringin Barat', 2001, '-', '-', 'SMA'),
(8, '4', 'Universitas Gadjah Mada', 'Yogyakarta', 2012, 'Ekonomi', 'Akuntansi', 'S1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tg_ref_panggol`
--

CREATE TABLE IF NOT EXISTS `tg_ref_panggol` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `gol` varchar(5) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `tg_ref_panggol`
--

INSERT INTO `tg_ref_panggol` (`id`, `gol`, `pangkat`, `jabatan`) VALUES
(1, 'Ia', 'Juru Muda', ''),
(2, 'Ib', 'Juru Muda Tk.I', ''),
(3, 'Ic', 'Juru', ''),
(4, 'Id', 'Juru Tk.I', ''),
(5, 'IIa', 'Pengatur Muda', ''),
(6, 'IIb', 'Pengatur Muda Tk.I', ''),
(7, 'IIc', 'Pengatur', ''),
(8, 'IId', 'Pengatur Tk.I', ''),
(9, 'IIIa', 'Penata Muda', 'Guru Pertama'),
(10, 'IIIb', 'Penata Muda Tk. I', 'Guru Pertama'),
(11, 'IIIc', 'Penata', 'Guru Muda'),
(12, 'IIId', 'Penata Tk. I', 'Guru Muda'),
(13, 'IVa', 'Pembina', 'Guru Madya'),
(14, 'IVb', 'Pembina Tk. I', 'Guru Madya'),
(15, 'IVc', 'Pembina Utama Muda', 'Guru Madya'),
(16, 'IVd', 'Pembina Utama Madya', 'Guru Utama'),
(17, 'IVe', 'Pembina Utama', 'Guru Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ti_bangunan`
--

CREATE TABLE IF NOT EXISTS `ti_bangunan` (
  `id_bgn` int(6) NOT NULL AUTO_INCREMENT,
  `kd_brg` varchar(10) NOT NULL,
  `no_aset` int(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `luas` int(6) NOT NULL,
  `jml_lt` int(2) NOT NULL,
  `thn_sls` year(4) NOT NULL,
  `thn_pake` year(4) NOT NULL,
  `no_imb` varchar(50) NOT NULL,
  `tgl_imb` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `sumber_dana` varchar(15) NOT NULL,
  `harga` decimal(15,0) NOT NULL,
  `rekanan` varchar(100) NOT NULL,
  `no_bukti` varchar(100) NOT NULL,
  `tgl_buku` date NOT NULL,
  `kondisi` enum('B','RR','RB','H') NOT NULL,
  `status` varchar(20) NOT NULL,
  `lantai` varchar(20) NOT NULL,
  `tembok` varchar(20) NOT NULL,
  `atap` varchar(20) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `by` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bgn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `ti_bangunan`
--

INSERT INTO `ti_bangunan` (`id_bgn`, `kd_brg`, `no_aset`, `nama`, `luas`, `jml_lt`, `thn_sls`, `thn_pake`, `no_imb`, `tgl_imb`, `alamat`, `asal`, `sumber_dana`, `harga`, `rekanan`, `no_bukti`, `tgl_buku`, `kondisi`, `status`, `lantai`, `tembok`, `atap`, `tgl_input`, `by`) VALUES
(2, 'BA-001', 2, 'Bangunan Ruang Kelas', 100, 2, 2008, 2008, 'IMB.002', '2008-10-22', 'Sumoroto, Sidoharjo, Samigaluh', 'Pembelian', 'APBN', '78000000', 'PT. Karya Persada', '-', '2012-10-04', 'B', 'Dikuasai Sendiri', 'Keramik', 'Beton', 'Genteng', '2012-10-04 19:26:26', 'admin'),
(3, 'BG-002', 1, 'Bangunan', 200, 1, 2010, 2010, 'MTs.12.01.04', '2012-10-23', 'Sumoroto, Sidoharjo, Samigaluh, Kulon PRogo', 'Pembelian', 'APBN', '1000000000', 'PT. Adi Cahaya', 'CC.001', '2012-10-17', 'B', '', 'Keramik', 'Beton', 'Genteng', '2012-10-12 19:41:29', 'admin'),
(4, 'BG-002', 2, 'Bangunan', 300, 2, 2012, 2012, 'MTs.12.01.05', '2012-10-18', 'Sumoroto, Sidoharjo, Samigaluh, Kulon PRogo', 'Pembelian', 'APBN', '2000000000', 'PT. Adi Cahaya', 'CC.001', '2012-10-18', 'RB', '', 'Keramik', 'Beton', 'Genteng', '2012-10-12 19:42:05', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ti_invent`
--

CREATE TABLE IF NOT EXISTS `ti_invent` (
  `id_brg` int(15) NOT NULL AUTO_INCREMENT,
  `kd_brg` varchar(15) NOT NULL,
  `no_aset` int(5) NOT NULL,
  `nama_brg` varchar(200) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `tgl_dapat` date NOT NULL,
  `letak` varchar(15) NOT NULL,
  `kondisi` enum('B','RR','RB','H') NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `rekanan` varchar(100) NOT NULL,
  `no_bukti` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `by` varchar(25) NOT NULL,
  PRIMARY KEY (`id_brg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `ti_invent`
--

INSERT INTO `ti_invent` (`id_brg`, `kd_brg`, `no_aset`, `nama_brg`, `satuan`, `tgl_dapat`, `letak`, `kondisi`, `penggunaan`, `asal`, `harga`, `merk`, `tipe`, `rekanan`, `no_bukti`, `ket`, `tgl_input`, `by`) VALUES
(1, 'PM-00000001', 1, 'PC Unit', 'unit', '2012-10-01', 'R-0002', 'B', 'KBM', 'Pembelian', '4500000', 'Acer', 'PX-300', 'UD EL''S', 'CC.001', '', '2012-10-13 09:03:15', 'admin'),
(2, 'JI-00000001', 1, 'Jaringan Telepon Flexi', 'unit', '2012-10-01', 'R-0005', 'B', 'Alat Kantor', 'Pembelian', '1000000', 'Flexi', 'PX-300', 'PT. Adi Cahaya', 'CC.001', '', '2012-10-13 09:03:51', 'admin'),
(3, 'AT-00000001', 1, 'Buku Paket IPS', 'eksemplar', '2012-10-01', 'R-0001', 'B', 'KBM', 'Pembelian', '25000', '-', '-', 'Erlangga', 'CA-001', '', '2012-10-13 09:05:18', 'admin'),
(4, 'AT-00000002', 1, 'Buku Paket IPA', 'eksemplar', '2012-10-01', 'R-0001', 'RR', 'KBM', 'Pembelian', '23000', '-', '-', 'Erlangga', 'CA-001', '', '2012-10-13 09:09:46', 'admin'),
(6, 'AT-00000003', 1, 'Buku Paket Bahasa Indonesia', 'eksemplar', '2012-10-01', 'R-0005', 'H', '', '', '0', '', '', '', '', '', '2012-10-13 09:15:39', 'admin'),
(8, 'AT-00000004', 1, 'Buku Paket Bahasa Inggris', 'eksemplar', '2012-10-15', 'R-0001', 'B', 'KBM', '', '0', '', '', '', '', '', '2012-10-13 09:18:32', 'admin'),
(9, 'PM-00000002', 1, 'Printer', 'unit', '2012-10-01', 'R-0002', 'B', 'Alat Kantor', 'Pembelian', '1000000', 'HP', 'Laserjet 1020', 'UD EL''S', 'CC.001', '', '2012-10-13 09:21:10', 'admin'),
(10, 'PM-00000003', 1, 'Speaker', 'unit', '2012-10-01', 'R-0006', 'B', '', '', '0', '', '', '', '', '', '2012-10-13 09:23:22', 'admin'),
(11, 'JI-00000002', 1, 'Jaringan Air Bersih', 'unit', '2012-10-01', 'R-0001', 'B', '', '', '0', '', '', '', '', '', '2012-10-13 09:23:53', 'admin'),
(13, 'PM-00000001', 2, 'PC Unit', 'unit', '2012-10-01', 'R-0001', 'B', '', '', '0', '', '', '', '', '', '2012-10-13 09:30:10', 'admin'),
(14, 'BR-00000001', 1, 'Gelas Minum', 'unit', '2012-10-01', 'R-0001', 'B', 'Alat Kantor', '', '0', '', '', '', '', '', '2012-10-13 10:08:36', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ti_ruang`
--

CREATE TABLE IF NOT EXISTS `ti_ruang` (
  `id` varchar(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgg_jwb` varchar(100) NOT NULL,
  `nip_tgg_jwb` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ti_ruang`
--

INSERT INTO `ti_ruang` (`id`, `nama`, `tgg_jwb`, `nip_tgg_jwb`) VALUES
('R-0007', 'Ume.PhD', 'Umee', '12131');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ti_tanah`
--

CREATE TABLE IF NOT EXISTS `ti_tanah` (
  `id_tnh` int(3) NOT NULL AUTO_INCREMENT,
  `kd_brg` varchar(10) NOT NULL,
  `no_aset` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `luas` decimal(9,0) NOT NULL,
  `uk_bangunan` decimal(9,0) NOT NULL,
  `uk_kosong` decimal(9,0) NOT NULL,
  `letak` varchar(75) NOT NULL,
  `bts_u` varchar(75) NOT NULL,
  `bts_t` varchar(75) NOT NULL,
  `bts_s` varchar(75) NOT NULL,
  `bts_b` varchar(75) NOT NULL,
  `asal_dpt` varchar(50) NOT NULL,
  `dana_dari` varchar(25) NOT NULL,
  `stfk_hak` varchar(15) NOT NULL,
  `stfk_no` varchar(100) NOT NULL,
  `stfk_tgl` date NOT NULL,
  `njop_m2` decimal(15,0) NOT NULL,
  `tgl_dapat` date NOT NULL,
  `nilai_aset` decimal(15,0) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `by` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tnh`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `ti_tanah`
--

INSERT INTO `ti_tanah` (`id_tnh`, `kd_brg`, `no_aset`, `nama`, `luas`, `uk_bangunan`, `uk_kosong`, `letak`, `bts_u`, `bts_t`, `bts_s`, `bts_b`, `asal_dpt`, `dana_dari`, `stfk_hak`, `stfk_no`, `stfk_tgl`, `njop_m2`, `tgl_dapat`, `nilai_aset`, `tgl_input`, `by`) VALUES
(12, 'TN-002', 1, 'Tanah', '430', '230', '200', 'Sumoroto, Sidoharjo, Samigaluh', 'Jalan', 'Tanah Kas Desa', 'Tanah Kas Desa', 'Jalan', 'Pembelian', 'APBN', 'Pakai', 'BPN-RI. 12345678', '2012-10-09', '390000', '2012-10-02', '2300000000', '2012-10-09 14:41:42', 'admin'),
(13, 'TN-003', 1, 'Tanah 2', '498', '299', '199', 'Sumoroto, Sidoharjo, Samigaluh', 'Jalan', 'Tanah Kas Desa', 'Tanah Kas Desa', 'Jalan', 'Pembelian', 'APBN', 'Pakai', 'BPN-RI. 12345678', '2013-07-24', '390000', '2013-07-24', '100000000', '2013-07-24 18:49:39', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tl_kelas`
--

CREATE TABLE IF NOT EXISTS `tl_kelas` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(6) NOT NULL,
  `tkt` varchar(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kapasitas` int(3) NOT NULL,
  `wali` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data untuk tabel `tl_kelas`
--

INSERT INTO `tl_kelas` (`id`, `prodi`, `tkt`, `nama`, `kapasitas`, `wali`) VALUES
(1, 'IPA', 'X', 'X.IPA', 30, '-'),
(4, 'IPS', 'X', 'X.IPS', 30, '-'),
(7, 'IPA', 'XI', 'XI.IPA', 30, '-'),
(9, 'IPS', 'XI', 'XI.IPS', 30, '-'),
(11, 'IPA', 'XII', 'XII.IPA', 30, '-'),
(13, 'IPS', 'XII', 'XII.IPS', 30, '-'),
(99, '-', '-', 'LULUS', 0, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tl_mapel`
--

CREATE TABLE IF NOT EXISTS `tl_mapel` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(5) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `nama_mapel` varchar(200) NOT NULL,
  `semester` int(1) NOT NULL,
  `kkm` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tl_mapel`
--

INSERT INTO `tl_mapel` (`id`, `prodi`, `jenis`, `nama_mapel`, `semester`, `kkm`) VALUES
(4, 'IPA', '', 'Biologi', 1, 70),
(5, 'IPA', '', 'Kimia', 1, 70),
(6, 'IPA', '', 'Matematika', 1, 70),
(7, 'IPA', '', 'Bahasa Indonesia', 1, 70),
(8, 'IPA', '-', 'Bahasa Inggris', 1, 70),
(9, 'IPS', '-', 'Pendidikan Agama', 1, 70),
(10, 'IPA', '-', 'robi', 1, 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tl_nilai`
--

CREATE TABLE IF NOT EXISTS `tl_nilai` (
  `id_siswa` varchar(5) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_mapel` varchar(5) NOT NULL,
  `nilai` double NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `semester` int(1) NOT NULL,
  `ta` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tl_nilai`
--

INSERT INTO `tl_nilai` (`id_siswa`, `id_kelas`, `id_mapel`, `nilai`, `nama_guru`, `semester`, `ta`) VALUES
('1', '1', '1', 87, 'Drs. Agung', 1, 2013),
('2', '13', '1', 86, 'Drs. Agung', 1, 2013),
('1', '1', '2', 98, 'Drs. Agung', 1, 2013),
('2', '13', '2', 89, 'Drs. Agung', 1, 2013),
('1', '1', '3', 89, 'Drs. Agung', 1, 2013),
('2', '13', '3', 87, 'Drs. Agung', 1, 2013),
('1', '1', '4', 78, 'Drs. Budi', 1, 2013),
('2', '13', '4', 78, 'Drs. Budi', 1, 2013),
('1', '1', '5', 90, 'Drs. Budi', 1, 2013),
('2', '13', '5', 89, 'Drs. Budi', 1, 2013),
('1', '1', '6', 78, 'Drs. Budi', 1, 2013),
('2', '13', '6', 82, 'Drs. Budi', 1, 2013),
('1', '1', '7', 89, 'Drs. Joni', 1, 2013),
('2', '13', '7', 87, 'Drs. Joni', 1, 2013),
('1', '1', '8', 89, 'Drs. Toni', 1, 2013),
('2', '13', '8', 87, 'Drs. Toni', 1, 2013),
('3', '1', '1', 86, 'Drs. Agung', 1, 2013),
('4', '1', '1', 87, 'Drs. Agung', 1, 2013),
('6', '1', '1', 86, 'Drs. Agung', 1, 2013),
('3', '1', '2', 88, 'Drs. Agung', 1, 2013),
('4', '1', '2', 87, 'Drs. Agung', 1, 2013),
('6', '1', '2', 90, 'Drs. Agung', 1, 2013),
('3', '1', '3', 88, 'Drs. Agung', 1, 2013),
('4', '1', '3', 86, 'Drs. Agung', 1, 2013),
('6', '1', '3', 90, 'Drs. Agung', 1, 2013),
('3', '1', '4', 80, 'Drs. Budi', 1, 2013),
('4', '1', '4', 87, 'Drs. Budi', 1, 2013),
('6', '1', '4', 75, 'Drs. Budi', 1, 2013),
('3', '1', '5', 87, 'Drs. Budi', 1, 2013),
('4', '1', '5', 67, 'Drs. Budi', 1, 2013),
('6', '1', '5', 89, 'Drs. Budi', 1, 2013),
('3', '1', '6', 89, 'Drs. Budi', 1, 2013),
('4', '1', '6', 90, 'Drs. Budi', 1, 2013),
('6', '1', '6', 87, 'Drs. Budi', 1, 2013),
('3', '1', '7', 87, 'Drs. Joni', 1, 2013),
('4', '1', '7', 88, 'Drs. Joni', 1, 2013),
('6', '1', '7', 88, 'Drs. Joni', 1, 2013),
('3', '1', '8', 67, 'Drs. Toni', 1, 2013),
('4', '1', '8', 90, 'Drs. Toni', 1, 2013),
('6', '1', '8', 98, 'Drs. Toni', 1, 2013),
('1', '1', '4', 30, 'Drs. Budi', 1, 2013),
('2', '13', '4', 15, 'Drs. Budi', 1, 2013),
('6', '1', '2', 80, 'pajo', 1, 2014),
('6', '1', '3', 90, 'dindin', 1, 2014),
('2', '13', '3', 12, 'dindin', 1, 2014),
('1', '1', '3', 100, 'dindin', 1, 2014),
('3', '1', '3', 20, 'dindin', 1, 2014),
('4', '1', '3', 80, 'dindin', 1, 2014),
('8', '1', '3', 90, 'dindin', 1, 2014),
('6', '1', '8', 88, 'jajang', 2, 2014),
('1', '1', '8', 88, 'jajang', 2, 2014),
('3', '1', '8', 88, 'jajang', 2, 2014),
('4', '1', '8', 88, 'jajang', 2, 2014),
('8', '1', '8', 88, 'jajang', 2, 2014);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tl_siswa_kelas`
--

CREATE TABLE IF NOT EXISTS `tl_siswa_kelas` (
  `id_siswa` int(5) NOT NULL,
  `ta` varchar(4) NOT NULL,
  `kelas` int(5) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `prodi` varchar(5) NOT NULL,
  `tkt` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tl_siswa_kelas`
--

INSERT INTO `tl_siswa_kelas` (`id_siswa`, `ta`, `kelas`, `agama`, `jk`, `prodi`, `tkt`) VALUES
(1, '2013', 1, 'Islam', 'L', 'IPA', 'X'),
(2, '2013', 1, 'Islam', 'L', 'IPA', 'X'),
(3, '2013', 1, 'Islam', 'L', 'IPA', 'X'),
(4, '2013', 7, 'Islam', 'L', 'IPA', 'XI'),
(6, '2013', 7, 'Islam', 'L', 'IPA', 'XI'),
(2, '2012', 7, 'Islam', 'L', 'IPA', 'XI'),
(4, '2012', 13, 'Islam', 'L', 'IPS', 'XII'),
(1, '2012', 13, 'Islam', 'L', 'IPS', 'XII'),
(6, '2014', 1, 'Islam', 'L', 'IPA', 'X'),
(2, '2014', 13, 'Islam', 'L', 'IPS', 'XII'),
(1, '2014', 1, 'Islam', 'L', 'IPA', 'X'),
(3, '2014', 1, 'Islam', 'L', 'IPA', 'X'),
(4, '2014', 1, 'Islam', 'L', 'IPA', 'X'),
(8, '2014', 1, 'Islam', 'P', 'IPA', 'X'),
(7, '2014', 13, 'Kristen%20Protestan', 'P', 'IPS', 'XII');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_data_siswa`
--

CREATE TABLE IF NOT EXISTS `ts_data_siswa` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nama_pgl` varchar(200) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `warga_negara` enum('WNI','WNA') NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `sdr_kandung` int(2) NOT NULL,
  `sdr_tiri` int(2) NOT NULL,
  `sdr_angkat` int(2) NOT NULL,
  `stat_anak` enum('AK','AT','AA') NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `stat_aktif` enum('Aktif','Keluar','Pindah','Lulus') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_data_siswa`
--

INSERT INTO `ts_data_siswa` (`id`, `nama`, `nama_pgl`, `nis`, `nisn`, `jk`, `tmp_lahir`, `tgl_lahir`, `umur`, `agama`, `warga_negara`, `anak_ke`, `sdr_kandung`, `sdr_tiri`, `sdr_angkat`, `stat_anak`, `bahasa`, `foto`, `stat_aktif`) VALUES
('1', 'SYAM ARDY', 'Syam', '12090672', '9900009090', 'L', 'Bandung', '1996-12-06', 0, 'Islam', 'WNI', 2, 2, 0, 0, 'AK', 'Indonesia, Sunda', 'Sony-Vaio-HD-Wallpaper.jpg', 'Aktif'),
('2', 'AKHWAN NUR', 'Akhwan', '12090673', '1234567890', 'L', 'Kulon Progo', '1990-03-26', 0, 'Islam', 'WNI', 1, 1, 0, 0, 'AK', 'Jawa', 'MU-Liverpool_(9).jpg', 'Aktif'),
('3', 'Wayne Rooney', 'Wazza', '12090674', '9900990099', 'L', 'Kulon Progo', '2012-10-08', 22, 'Islam', 'WNI', 1, 1, 0, 0, 'AK', 'Jawa', 'MU-Liverpool_(6).jpg', 'Aktif'),
('4', 'Zlatan Akhwanokovic', 'zlatan', '12090674', '9900990099', 'L', 'Kulon Progo', '1991-10-08', 22, 'Islam', 'WNI', 1, 1, 0, 0, 'AK', 'Jawa', 'KTP.jpg', 'Aktif'),
('5', 'Cristiano Ronaldo', 'CR7', '2190', '209090', 'L', 'Kulon Progo', '1984-11-13', 0, 'Islam', 'WNI', 2, 3, 0, 0, 'AK', 'Jawa, Portugis', 'united_vs_fc_basel.jpg', 'Lulus'),
('6', 'Agus Akhwan Situmorang', 'Agus', '8193', '12090672', 'L', 'Kulon Progo', '1991-03-26', 0, 'Islam', 'WNI', 1, 1, 0, 0, 'AK', 'Indonesia, Jawa', 'chicarito_doa.jpg', 'Aktif'),
('7', 'ZEFANYA CELLIA P.', 'Zefa', '9999', '0839102830', 'P', 'Jakarta', '1995-11-22', 0, 'Kristen Protestan', 'WNI', 1, 2, 0, 0, 'AK', 'Indonesia', '13d33a387c0411e3a824121664af44a0_8.jpg', 'Aktif'),
('8', 'DESI RATNOSARI', 'Nosa', '1234', '0021231234', 'P', 'Bandung', '2002-02-02', 0, 'Islam', 'WNI', 1, 0, 0, 0, 'AK', 'Sunda', '', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_gemar`
--

CREATE TABLE IF NOT EXISTS `ts_gemar` (
  `id_siswa` varchar(10) NOT NULL,
  `seni` varchar(150) NOT NULL,
  `olahraga` varchar(150) NOT NULL,
  `organisasi` varchar(150) NOT NULL,
  `lain` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_gemar`
--

INSERT INTO `ts_gemar` (`id_siswa`, `seni`, `olahraga`, `organisasi`, `lain`) VALUES
('1', 'Jatilan', 'Baseball', '', 'Komputer'),
('2', 'Musik', 'Sepakbola', '-', '-'),
('3', '', '', '', ''),
('4', '', '', '', ''),
('5', '', '', '', ''),
('6', '', '', '', ''),
('7', 'Menyanyi, Menari(Dance)', 'Renang, Badminton', 'OSIS, dll.', '-'),
('8', 'VOCAL', 'BASKET, VOLY', 'OSIS', 'WALL CLIMBING');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_kembang_siswa`
--

CREATE TABLE IF NOT EXISTS `ts_kembang_siswa` (
  `id_siswa` varchar(10) NOT NULL,
  `bs_1` varchar(150) NOT NULL,
  `bs_2` varchar(150) NOT NULL,
  `bs_3` varchar(150) NOT NULL,
  `tgl_tggl_sek` date NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `tamat_tgl` date NOT NULL,
  `ijazah_tgl` date NOT NULL,
  `ijazah_no` varchar(50) NOT NULL,
  `skhu_tgl` date NOT NULL,
  `skhu_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_kembang_siswa`
--

INSERT INTO `ts_kembang_siswa` (`id_siswa`, `bs_1`, `bs_2`, `bs_3`, `tgl_tggl_sek`, `alasan`, `tamat_tgl`, `ijazah_tgl`, `ijazah_no`, `skhu_tgl`, `skhu_no`) VALUES
('1', 'Supersemar-2011', 'Djarum-2012', '-', '0000-00-00', '0000-00-00', '2012-10-03', '2012-10-03', 'Dd-0000001', '2012-10-03', 'Dd-0000001'),
('2', 'Supersemar-2010', 'BSM-2010', '-', '0000-00-00', '0000-00-00', '2012-10-03', '2012-10-03', 'Dn. 01. 010101010', '2012-10-03', 'Dn. 01. 010101010'),
('3', '-', '-', '-', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', ''),
('4', '-', '-', '-', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', ''),
('5', '-', '-', '-', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', ''),
('6', '-', '-', '-', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', ''),
('7', '-', '-', '-', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', ''),
('8', '-', '-', '-', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_kesehatan`
--

CREATE TABLE IF NOT EXISTS `ts_kesehatan` (
  `id_siswa` varchar(10) NOT NULL,
  `gol_darah` enum('A','B','O','AB') NOT NULL,
  `penyakit` varchar(150) NOT NULL,
  `kelainan` varchar(150) NOT NULL,
  `tgg_bdn` decimal(6,0) NOT NULL,
  `brt_bdn` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_kesehatan`
--

INSERT INTO `ts_kesehatan` (`id_siswa`, `gol_darah`, `penyakit`, `kelainan`, `tgg_bdn`, `brt_bdn`) VALUES
('1', '', '', '', '0', '0'),
('2', 'O', '-', '-', '167', '56'),
('3', 'O', '-', '-', '178', '89'),
('4', 'O', '-', '-', '178', '89'),
('5', 'O', '-', '-', '186', '90'),
('6', 'O', '', '', '167', '56'),
('7', 'O', 'Vertigo', '-', '167', '55'),
('8', 'B', '', '', '145', '48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_ortu_ayah`
--

CREATE TABLE IF NOT EXISTS `ts_ortu_ayah` (
  `id_siswa` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kwarga` enum('WNI','WNA') NOT NULL,
  `pddk` varchar(10) NOT NULL,
  `pkj` varchar(30) NOT NULL,
  `phasilan` decimal(10,0) NOT NULL,
  `stat` varchar(20) NOT NULL,
  `alamat_telp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_ortu_ayah`
--

INSERT INTO `ts_ortu_ayah` (`id_siswa`, `nama`, `tmp_lahir`, `tgl_lahir`, `agama`, `kwarga`, `pddk`, `pkj`, `phasilan`, `stat`, `alamat_telp`) VALUES
('1', 'Syam Ardy', 'Bandung', '1996-12-06', 'Islam', 'WNI', 'SMA', 'Programer', '50000', 'Masih Hidup', 'Bandung'),
('2', 'Suparji', 'Kulon Progo', '1963-02-13', 'Kristen Protestan', 'WNI', 'SMP', 'Tani', '1000000', 'Sudah Meninggal', 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo'),
('3', 'Mark Wayne', '', '0000-00-00', 'Islam', 'WNI', 'Tidak Seko', 'Tani', '1000000', '', 'Sumoroto'),
('4', 'Mark Wayne', 'Kulon Progo', '2012-10-01', 'Islam', 'WNI', 'SMA', 'Tani', '1000000', 'Masih Hidup', 'Sumoroto'),
('5', 'Suparji', 'Kulon Progo', '2012-11-05', 'Islam', 'WNI', 'SMP', 'Tani', '1000000', 'Masih Hidup', 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo'),
('6', 'Suparji', 'Kulon Progo', '1966-11-01', 'Islam', 'WNI', 'SMP', 'Tani', '1000000', '', 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo'),
('7', 'SM', '', '0000-00-00', 'Kristen Protestan', 'WNI', 'S-2', 'Pegawai Swasta', '4000000', 'Masih Hidup', 'sndaosdmoawswd'),
('8', 'NONAME', 'UNKNOWN', '0000-00-00', 'Islam', 'WNI', 'Tidak Seko', 'UNKNOWN', '0', 'Sudah Meninggal', 'UNKNOWN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_ortu_ibu`
--

CREATE TABLE IF NOT EXISTS `ts_ortu_ibu` (
  `id_siswa` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kwarga` enum('WNI','WNA') NOT NULL,
  `pddk` varchar(10) NOT NULL,
  `pkj` varchar(30) NOT NULL,
  `phasilan` decimal(10,0) NOT NULL,
  `stat` varchar(20) NOT NULL,
  `alamat_telp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_ortu_ibu`
--

INSERT INTO `ts_ortu_ibu` (`id_siswa`, `nama`, `tmp_lahir`, `tgl_lahir`, `agama`, `kwarga`, `pddk`, `pkj`, `phasilan`, `stat`, `alamat_telp`) VALUES
('1', 'Sumiyati', 'Kulon Progo', '1960-01-01', 'Lainnya', 'WNA', 'SMA', 'Tani', '1000000', 'Masih Hidup', 'Sumoroto, Sidoharjo, Samigaluh'),
('2', 'Sumiyati', 'Kulon Progo', '2012-10-16', 'Islam', 'WNI', 'SMP', 'Tani', '10000000', 'Masih Hidup', 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo'),
('3', 'Jil', 'Kulon Progo', '2012-10-02', 'Islam', 'WNI', 'Tidak Seko', 'Tani', '1000000', '', 'Sumoroto'),
('4', 'Jil', 'Kulon Progo', '2012-10-01', 'Islam', 'WNI', 'Diploma', 'Tani', '1000000', 'Masih Hidup', 'Sumoroto'),
('5', 'Suminem', 'Kulon Progo', '2012-11-01', 'Islam', 'WNI', 'SMA', 'Tani', '1000000', 'Masih Hidup', 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo'),
('6', 'Sumiyati', 'Kulon Progo', '1966-11-27', 'Islam', 'WNI', 'SMP', 'Tani', '1000000', 'Masih Hidup', 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo'),
('7', 'UG', '', '0000-00-00', 'Kristen Protestan', 'WNI', 'Diploma', 'Ibu Rumah Tangga', '0', 'Masih Hidup', 'vfvdsgvrfvarff'),
('8', 'Desi Ratnasari', 'Bandung', '1975-05-07', 'Islam', 'WNI', 'SMA', 'PNS', '5000000', 'Masih Hidup', '085253545556');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_ortu_wali`
--

CREATE TABLE IF NOT EXISTS `ts_ortu_wali` (
  `id_siswa` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kwarga` enum('WNI','WNA') NOT NULL,
  `pddk` varchar(10) NOT NULL,
  `pkj` varchar(30) NOT NULL,
  `phasilan` decimal(10,0) NOT NULL,
  `stat` varchar(20) NOT NULL,
  `alamat_telp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_ortu_wali`
--

INSERT INTO `ts_ortu_wali` (`id_siswa`, `nama`, `tmp_lahir`, `tgl_lahir`, `agama`, `kwarga`, `pddk`, `pkj`, `phasilan`, `stat`, `alamat_telp`) VALUES
('1', 'Suparji', 'Kulon Progo', '1964-02-05', 'Islam', 'WNA', 'SMA', 'Tani', '100000', 'Masih Hidup', 'Sumoroto, Sidoharjo, Samigaluh'),
('2', '-', '-', '0000-00-00', 'Islam', 'WNI', 'Tidak Seko', '-', '0', 'Masih Hidup', '-'),
('3', '', '', '0000-00-00', 'Islam', 'WNI', 'Tidak Seko', '', '0', '', ''),
('4', '', '', '0000-00-00', 'Islam', 'WNI', 'Tidak Seko', '', '0', '', ''),
('5', '', '', '0000-00-00', 'Islam', 'WNI', 'Tidak Seko', '', '0', '', ''),
('6', '', '', '0000-00-00', 'Islam', 'WNI', 'Tidak Seko', '', '0', '', ''),
('7', '-', '', '0000-00-00', 'Islam', 'WNI', 'Tidak Seko', '', '0', '', ''),
('8', '', '', '0000-00-00', 'Islam', 'WNI', 'Tidak Seko', '', '0', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_pend_sebelum`
--

CREATE TABLE IF NOT EXISTS `ts_pend_sebelum` (
  `id_siswa` varchar(10) NOT NULL,
  `lulus_dari` varchar(100) NOT NULL,
  `tgl_ijazah` date NOT NULL,
  `no_ijazah` varchar(50) NOT NULL,
  `tgl_stl` date NOT NULL,
  `no_stl` varchar(50) NOT NULL,
  `no_un_asal` varchar(50) NOT NULL,
  `lama_bljr` varchar(2) NOT NULL,
  `status_sasal` enum('N','S') NOT NULL,
  `pndh_dari` varchar(100) NOT NULL,
  `alasan` varchar(150) NOT NULL,
  `msk_kelas` int(2) NOT NULL,
  `msk_tgl` date NOT NULL,
  `bid_studi` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kompetensi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_pend_sebelum`
--

INSERT INTO `ts_pend_sebelum` (`id_siswa`, `lulus_dari`, `tgl_ijazah`, `no_ijazah`, `tgl_stl`, `no_stl`, `no_un_asal`, `lama_bljr`, `status_sasal`, `pndh_dari`, `alasan`, `msk_kelas`, `msk_tgl`, `bid_studi`, `prodi`, `kompetensi`) VALUES
('1', 'SMPN 1 Samigaluh', '2012-10-09', '33333', '2012-10-16', '9999', '', '3', 'N', '', 'tidak ada', 0, '0000-00-00', '', '', ''),
('2', 'SMPN 1 Samigaluh', '2004-07-16', 'Dn.04 12345676', '2004-07-16', 'Dn.04 12345676', '04.03.062.113.01', '3', 'N', '-', '0000-00-00', 0, '2004-07-21', 'Bisnis Manajemen', 'Administrasi Perkantoran', 'Administrasi Perkantora'),
('3', 'SMPIT Al Hikmah', '2012-10-01', 'Dd.12345', '2012-10-01', 'Dn.12345', '02-03-04-062-343-5', '3', 'N', '', '0000-00-00', 0, '2012-10-01', 'ATP', 'ATP', 'ATP'),
('4', 'SMPIT Al Hikmah', '2012-10-01', 'Dd.12345', '2012-10-01', 'Dn.12345', '02-03-04-062-343-5', '3', 'N', '', '', 0, '2012-10-01', 'ATP', 'ATP', 'ATP'),
('5', 'SMPN 1 Samigaluh', '2012-11-01', 'Dd - 123456', '2012-11-05', 'Dd - 123456', '04.03.062.113.01', '3', 'N', '-', 'tidak ada', 0, '2012-11-04', '', '', ''),
('6', 'SMPN 1 Samigaluh', '2012-11-01', 'Dd - 123456', '0000-00-00', '', '', '3', '', '', '', 0, '0000-00-00', '', '', ''),
('7', 'SMP Thomas', '2011-06-16', 'DN-20913812', '2011-06-16', 'D-129221', '293102938201983', '3', 'S', '-', '-', 0, '2011-07-15', 'IPA', 'IPA', 'IPA'),
('8', 'SDN 56 Bandung', '2014-06-17', 'DN00000000', '2014-07-17', '00000000', '1-14-03-01-037-007-4', '6', 'N', '', '', 0, '2014-06-27', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_setelah`
--

CREATE TABLE IF NOT EXISTS `ts_setelah` (
  `id_siswa` varchar(10) NOT NULL,
  `klh_tmp` varchar(75) NOT NULL,
  `klh_jrs` varchar(75) NOT NULL,
  `klh_kota` varchar(50) NOT NULL,
  `krj_tgl_mulai` date NOT NULL,
  `krj_namapt` varchar(75) NOT NULL,
  `krj_lembaga` varchar(75) NOT NULL,
  `krj_mandiri` varchar(75) NOT NULL,
  `krj_lainnya` varchar(75) NOT NULL,
  `krj_hasil` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_setelah`
--

INSERT INTO `ts_setelah` (`id_siswa`, `klh_tmp`, `klh_jrs`, `klh_kota`, `krj_tgl_mulai`, `krj_namapt`, `krj_lembaga`, `krj_mandiri`, `krj_lainnya`, `krj_hasil`) VALUES
('1', 'STMIK El Rahma', 'Teknik Informatika', 'Yogyakarta', '2007-01-01', '-', 'Sidoharjo', '-', '-', '1000000'),
('2', 'STMIK El Rahma', 'Teknik Informatika', 'Yogyakarta', '2007-01-01', '', 'MTs N Sidoharjo', '', '', '0'),
('3', '', '', '', '0000-00-00', '', '', '', '', '0'),
('4', '', '', '', '0000-00-00', '', '', '', '', '0'),
('5', '', '', '', '0000-00-00', '', '', '', '', '0'),
('6', '', '', '', '0000-00-00', '', '', '', '', '0'),
('7', '', '', '', '0000-00-00', '', '', '', '', '0'),
('8', '', '', '', '0000-00-00', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_tmp_tinggal`
--

CREATE TABLE IF NOT EXISTS `ts_tmp_tinggal` (
  `id_siswa` int(10) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `ket_tinggal` varchar(20) NOT NULL,
  `kos_di` varchar(100) NOT NULL,
  `jarak` int(3) NOT NULL,
  `transport` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ts_tmp_tinggal`
--

INSERT INTO `ts_tmp_tinggal` (`id_siswa`, `alamat`, `no_tlp`, `ket_tinggal`, `kos_di`, `jarak`, `transport`) VALUES
(1, 'Sumoroto, Sidoharjo, Samigaluh, Kulon PRogo', '', 'Orang Tua', '', 0, 'Bus'),
(2, 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo', '085292747190', 'Orang Tua', '-', 20, 'Bus'),
(3, 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo', '085292747190', 'Orang tua', '', 30, 'Bus'),
(4, 'Sumoroto, Sidoharjo, Samigaluh, Kulon Progo', '085292747190', 'Orang tua', '', 30, 'Bus'),
(5, 'Sumoroto, Sidoharjo, Samigaluh, Kulon PRogo', '085292747190', 'Orang Tua', '-', 23, 'Bus'),
(6, 'Sumoroto, Sidoharjo, Samigaluh, Kulon PRogo', '085292747190', 'Orang Tua', '-', 23, 'Bus'),
(7, 'Jakarta', '09238193', 'Orang Tua', '-', 15, 'Mobil'),
(8, 'Bandung', '', 'Orang Tua', '', 5, 'Taxi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jadwal`
--

CREATE TABLE IF NOT EXISTS `t_jadwal` (
  `id_jadwal` int(4) NOT NULL AUTO_INCREMENT,
  `hari` varchar(15) NOT NULL,
  `id_jam_ke` int(3) NOT NULL,
  `id_guru` int(3) NOT NULL,
  `id_mapel` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `id_ruang` varchar(10) NOT NULL,
  `ta` year(4) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data untuk tabel `t_jadwal`
--

INSERT INTO `t_jadwal` (`id_jadwal`, `hari`, `id_jam_ke`, `id_guru`, `id_mapel`, `id_kelas`, `id_ruang`, `ta`) VALUES
(1, 'Senin', 1, 1, 1, 1, 'R-0003', 2012),
(2, 'Senin', 2, 1, 1, 1, 'R-0003', 2012),
(3, 'Senin', 3, 1, 1, 1, 'R-0003', 2012),
(4, 'Senin', 4, 1, 1, 1, 'R-0003', 2012),
(5, 'Senin', 5, 3, 10, 1, 'R-0003', 2012),
(6, 'Senin', 6, 3, 9, 1, 'R-0003', 2012),
(7, 'Senin', 7, 3, 10, 1, 'R-0003', 2012),
(8, 'Senin', 8, 3, 10, 1, 'R-0003', 2012),
(9, 'Selasa', 1, 2, 6, 1, 'R-0005', 2012),
(10, 'Selasa', 2, 2, 6, 1, 'R-0005', 2012),
(11, 'Selasa', 3, 2, 6, 1, 'R-0005', 2012),
(12, 'Selasa', 4, 4, 11, 1, 'R-0005', 2012),
(13, 'Selasa', 5, 4, 11, 1, 'R-0005', 2012),
(14, 'Selasa', 6, 4, 5, 1, 'R-0005', 2012),
(15, 'Selasa', 7, 4, 14, 1, 'R-0005', 2012),
(16, 'Selasa', 8, 4, 14, 1, 'R-0005', 2012),
(17, 'Rabu', 1, 1, 1, 1, 'R-0003', 2012),
(18, 'Rabu', 2, 1, 1, 1, 'R-0003', 2012),
(19, 'Rabu', 3, 1, 1, 1, 'R-0003', 2012),
(20, 'Rabu', 4, 1, 1, 1, 'R-0003', 2012),
(21, 'Rabu', 5, 3, 19, 1, 'R-0004', 2012),
(22, 'Rabu', 6, 3, 19, 1, 'R-0004', 2012),
(23, 'Rabu', 7, 3, 19, 1, 'R-0004', 2012),
(24, 'Rabu', 8, 3, 19, 1, 'R-0004', 2012),
(25, 'Senin', 1, 4, 4, 2, 'R-0003', 2012),
(26, 'Senin', 2, 4, 4, 2, 'R-0003', 2012),
(27, 'Senin', 3, 2, 14, 2, 'R-0003', 2012),
(28, 'Senin', 4, 2, 14, 2, 'R-0003', 2012),
(29, 'Senin', 5, 1, 15, 2, 'R-0003', 2012),
(30, 'Senin', 6, 1, 15, 2, 'R-0003', 2012),
(31, 'Senin', 7, 1, 15, 2, 'R-0003', 2012),
(32, 'Senin', 8, 1, 15, 2, 'R-0003', 2012),
(33, 'Senin', 1, 1, 1, 1, 'R-0002', 2013),
(34, 'Senin', 2, 1, 1, 1, 'R-0002', 2013),
(35, 'Senin', 3, 1, 2, 1, 'R-0002', 2013),
(36, 'Senin', 4, 1, 2, 1, 'R-0002', 2013),
(37, 'Senin', 5, 3, 3, 1, 'R-0002', 2013),
(38, 'Senin', 6, 3, 3, 1, 'R-0002', 2013),
(39, 'Senin', 7, 3, 3, 1, 'R-0002', 2013),
(40, 'Senin', 8, 3, 3, 1, 'R-0002', 2013),
(41, 'Selasa', 1, 4, 6, 1, 'R-0002', 2013),
(42, 'Selasa', 2, 4, 6, 1, 'R-0002', 2013),
(43, 'Selasa', 3, 4, 6, 1, 'R-0002', 2013),
(44, 'Selasa', 4, 4, 6, 1, 'R-0002', 2013),
(45, 'Selasa', 5, 4, 6, 1, 'R-0002', 2013),
(46, 'Selasa', 6, 4, 6, 1, 'R-0002', 2013),
(47, 'Selasa', 7, 4, 6, 1, 'R-0002', 2013),
(48, 'Selasa', 8, 4, 6, 1, 'R-0002', 2013),
(49, 'Selasa', 1, 4, 6, 1, 'R-0002', 2013),
(50, 'Selasa', 2, 4, 6, 1, 'R-0002', 2013),
(51, 'Selasa', 3, 4, 6, 1, 'R-0002', 2013),
(52, 'Selasa', 4, 4, 6, 1, 'R-0002', 2013),
(53, 'Selasa', 5, 4, 6, 1, 'R-0002', 2013),
(54, 'Selasa', 6, 4, 6, 1, 'R-0002', 2013),
(55, 'Selasa', 7, 4, 6, 1, 'R-0002', 2013),
(56, 'Selasa', 8, 4, 6, 1, 'R-0002', 2013),
(57, 'Senin', 1, 4, 7, 1, 'R-0004', 2014),
(58, 'Senin', 2, 4, 7, 1, 'R-0004', 2014),
(59, 'Senin', 3, 1, 2, 1, 'R-0004', 2014),
(60, 'Senin', 4, 1, 2, 1, 'R-0004', 2014),
(61, 'Senin', 5, 2, 6, 1, 'R-0004', 2014),
(62, 'Senin', 6, 2, 6, 1, 'R-0004', 2014),
(63, 'Senin', 7, 3, 9, 1, 'R-0004', 2014),
(64, 'Senin', 8, 3, 9, 1, 'R-0004', 2014),
(65, 'Selasa', 1, 2, 6, 11, 'R-0005', 2014),
(66, 'Selasa', 2, 2, 6, 11, 'R-0005', 2014),
(67, 'Selasa', 3, 3, 8, 11, 'R-0004', 2014),
(68, 'Selasa', 4, 3, 8, 11, 'R-0004', 2014),
(69, 'Selasa', 5, 4, 5, 11, 'R-0006', 2014),
(70, 'Selasa', 6, 4, 5, 11, 'R-0006', 2014),
(71, 'Selasa', 7, 1, 10, 11, 'R-0002', 2014),
(72, 'Selasa', 8, 1, 10, 11, 'R-0002', 2014),
(73, 'Rabu', 1, 1, 2, 1, 'R-0005', 2014),
(74, 'Rabu', 2, 1, 2, 1, 'R-0005', 2014),
(75, 'Rabu', 3, 2, 3, 1, 'R-0004', 2014),
(76, 'Rabu', 4, 2, 3, 1, 'R-0004', 2014),
(77, 'Rabu', 5, 4, 6, 1, 'R-0005', 2014),
(78, 'Rabu', 6, 4, 6, 1, 'R-0005', 2014),
(79, 'Rabu', 7, 5, 9, 1, 'R-0004', 2014),
(80, 'Rabu', 8, 5, 9, 1, 'R-0004', 2014);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sekolah`
--

CREATE TABLE IF NOT EXISTS `t_sekolah` (
  `id` int(2) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nss` varchar(25) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `npsn` varchar(25) NOT NULL,
  `prov` varchar(30) NOT NULL,
  `kab` varchar(30) NOT NULL,
  `kec` varchar(30) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `jl` varchar(50) NOT NULL,
  `kd_pos` varchar(10) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `daerah` enum('Perkotaan','Pedesaan') NOT NULL,
  `status` enum('Negeri','Swasta') NOT NULL,
  `prodi` varchar(150) NOT NULL,
  `kompetensi` varchar(255) NOT NULL,
  `akre` enum('A','B','C','-') NOT NULL,
  `akre_th` year(4) NOT NULL,
  `npwp_rutin` varchar(40) NOT NULL,
  `npwp_bop` varchar(40) NOT NULL,
  `sk` varchar(40) NOT NULL,
  `sk_tgl` date NOT NULL,
  `sk_ttd` varchar(50) NOT NULL,
  `jml_guru` int(4) NOT NULL,
  `th_berdiri` year(4) NOT NULL,
  `th_negeri` year(4) NOT NULL,
  `waktu_kbm` enum('Pagi','Siang','Pagi dan Siang') NOT NULL,
  `stat_gedung` enum('Milik Sendiri','Bukan Milik Sendiri') NOT NULL,
  `jrk_kec` int(3) NOT NULL,
  `jrk_kab` int(3) NOT NULL,
  `lintasan` enum('Desa','Kecamatan','Kabupaten','Provinsi') NOT NULL,
  `lintang` varchar(25) NOT NULL,
  `bujur` varchar(25) NOT NULL,
  `penyelenggara` enum('Pemerintah','Yayasan','Ormas') NOT NULL,
  `kepsek_nama` varchar(100) NOT NULL,
  `kepsek_nip` varchar(50) NOT NULL,
  `kepsek_pkt` varchar(50) NOT NULL,
  `kepsek_gol` varchar(5) NOT NULL,
  `kepsek_pkt_tmt` date NOT NULL,
  `kepsek_pend` varchar(50) NOT NULL,
  `kepsek_jur` varchar(50) NOT NULL,
  `kepsek_sk` varchar(50) NOT NULL,
  `kepsek_tmt` date NOT NULL,
  `kepsek_nope1` varchar(20) NOT NULL,
  `kepsek_nope2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_sekolah`
--

INSERT INTO `t_sekolah` (`id`, `nama`, `nss`, `nis`, `npsn`, `prov`, `kab`, `kec`, `desa`, `jl`, `kd_pos`, `telp`, `fax`, `daerah`, `status`, `prodi`, `kompetensi`, `akre`, `akre_th`, `npwp_rutin`, `npwp_bop`, `sk`, `sk_tgl`, `sk_ttd`, `jml_guru`, `th_berdiri`, `th_negeri`, `waktu_kbm`, `stat_gedung`, `jrk_kec`, `jrk_kab`, `lintasan`, `lintang`, `bujur`, `penyelenggara`, `kepsek_nama`, `kepsek_nip`, `kepsek_pkt`, `kepsek_gol`, `kepsek_pkt_tmt`, `kepsek_pend`, `kepsek_jur`, `kepsek_sk`, `kepsek_tmt`, `kepsek_nope1`, `kepsek_nope2`) VALUES
(1, 'SMPN 5', '401140508001', '400010', '30204256', 'SULAWESI UTARA', 'KEPULAUAN TALAUD', 'ESSANG SELATAN', '', 'JL. PAHLAWAN', '74183', '0', '0', 'Pedesaan', 'Negeri', 'UMUM', '1. ILMU PENGETAHUAN ALAM (IPA)<br>\n2. ILMU PENGETAHUAN SOSIAL (IPS)', 'C', 2009, '-', '-', '-', '2009-04-01', '-', 19, 2009, 2009, 'Pagi', 'Milik Sendiri', 0, 0, 'Kecamatan', '2.26.466', '', 'Pemerintah', 'Nur Akhwan', '198001012010121001', 'Pembina', 'IVa', '2012-11-04', 'S1', 'Fisika', '820.2/bkd-4/2012', '2012-10-01', '081234567890', '081112131415');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id` int(1) NOT NULL,
  `u` varchar(20) NOT NULL,
  `p` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id`, `u`, `p`, `nama`, `level`) VALUES
(1, 'udman', 'udman', 'Administrator Super', 'admin_super');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
