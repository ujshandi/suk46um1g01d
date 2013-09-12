-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2013 at 08:50 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sukabumi`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(12) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `author` varchar(30) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tgl`, `kegiatan`, `author`) VALUES
(1, '2011-05-19', 'test agenda', 'superadmin'),
(2, '2011-05-21', 'Halal Bihalal', 'superadmin'),
(5, '2013-08-14', 'Buka bareng bersama RT/RW', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `belajar`
--

CREATE TABLE IF NOT EXISTS `belajar` (
  `id_belajar` int(12) NOT NULL AUTO_INCREMENT,
  `tgl` datetime NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` enum('publish','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_belajar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `belajar`
--


-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `judul_berita` varchar(255) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `status` enum('publish','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `judul_berita`, `deskripsi_singkat`, `isi`, `gambar`, `author`, `status`) VALUES
(7, '2013-09-12 18:54:20', 'Peringatan HUT RI Ke 68', 'Seluruh komponen bangsa Indonesia, termasuk warga masyarakat Kota Sukabumi, pada hari ini, Sabtu 17 Agustus 2013, memperingati Hari Ulang Tahun (HUT) Ke-68 Proklamasi Kemerdekaan RI', '<p>Seluruh komponen bangsa Indonesia, termasuk warga masyarakat Kota Sukabumi, pada hari ini, Sabtu 17 Agustus 2013, memperingati Hari Ulang Tahun (HUT) Ke-68 Proklamasi Kemerdekaan RI, dengan menggelar Upacara Pengibaran Bendera Kebangsaan Sang Merah Putih, dan berbagai kegiatan lainnya. Adapun Upacara Pengibaran Bendera Kebangsaan Sang Merah Putih, di Kota Sukabumi dilaksanakan di Lapangan Merdeka, pada hari ini, Sabtu 17 Agustus 2013.</p>', 'upacara2013.jpg', 'admin', 'publish'),
(8, '2013-09-08 12:36:22', 'Jalur Alternatif', 'Dinas Perhubungan Kota Sukabumi telah menyiapkan dua jalur alternatif, untuk perlintasan Bus Angkutan Kota Antar Provinsi (AKAP) dan Bus Angkutan Kota Dalam Provinsi (AKDP), dari arah tersebut menuju Terminal Type A Lingkar Selatan Kota Sukabumi', 'Kepala Bidang Lalu Lintas dan Angkutan (LLA) Dinas Perhubungan (Dishub) Kota Sukabumi, Ujang Hamdan, S.H., M.H. menjelaskan, sebelum selesai pembangunan tahap ketiga ruas Jalan Lingkar Selatan dari arah Bandung menuju Terminal Type A Lingkar Selatan Kota Sukabumi, Dinas Perhubungan Kota Sukabumi telah menyiapkan dua jalur alternatif, untuk perlintasan Bus Angkutan Kota Antar Provinsi (AKAP) dan Bus Angkutan Kota Dalam Provinsi (AKDP), dari arah tersebut menuju Terminal Type A Lingkar Selatan Kota Sukabumi. Karena sebagaimana yang diharapkan Walikota Sukabumi, selambat-lambatnya pada akhir tahun 2014 mendatang, terminal tersebut harus sudah mulai dioperasikan. Maksud dan tujuannya, untuk mengurangi kepadatan penduduk dan kemacetan lalu lintas, khususnya di pusat Kota Sukabumi. \r\n\r\nAdapun kedua alternatif jalur untuk perlintasan bus tersebut, antara lain, pertama masuk Jalan Pembangunan, Jalan Garuda, Jalan Sarasa, dan Jalan Baros, kedua masuk Jalan Otista dan Jalan RH Didi Sukardi. Ditandaskannya, kedua jalur alternatif tersebut, sebagai langkah persiapan dan antisipatif, apabila Terminal Type A Lingkar Selatan Kota Sukabumi mulai dioperasikan, dan pembangunan tahap ketiga ruas Jalan Lingkar Selatan dari arah Bandung menuju Terminal Type A Lingkar Selatan Kota Sukabumi belum selesai. \r\n\r\nDiungkapkannya, pembahasan kedua jalur alternatif tersebut sudah sejak lama dilakukan oleh Dinas Perhubungan Kota Sukabumi, dengan Polres Sukabumi Kota, Organisasi Angkutan Darat (Organda) Kota Sukabumi dan instansi terkait lainnya, termasuk dengan pengusaha dan awak bus jurusan tersebut. Dengan demikian, apabila kedua jalur alternatif tersebut digunakan sudah tidak ada masalah. \r\n\r\nDiungkapkan pula, pada tahun ini, menurut rencana pihak Bina Marga Provinsi Jawa Barat akan melakukan normalisasi jalan, khususnya tikungan yang ada di sepanjang ruas Jalan Pembangunan, Jalan Garuda dan Jalan Sarasa. Sedangkan untuk ruas Jalan Otista dan Jalan RH Didi Sukardi, hanya membutuhkan manajemen lalu lintas saja, untuk mengantisipasi kepadatan dan kemacetan lalu lintas.', NULL, NULL, 'publish'),
(9, '2013-09-12 18:55:02', 'AMIK BSI Sukabumi Selenggarakan ORMIK Dan SEMOT ', 'Akademi Manajemen Informatika dan Komputer Bina Sarana Informatika (AMIK BSI) dan Sekolah Tinggi Ilmu Manajemen Informatika dan Komputer NUSA MANDIRI (STMIK NURI) Sukabumi, menyelenggarakan Orientasi Akademik (Ormik) dan Seminar Motivasi (Semot) Tahun 201', 'Akademi Manajemen Informatika dan Komputer Bina Sarana Informatika (AMIK BSI) dan Sekolah Tinggi Ilmu Manajemen Informatika dan Komputer NUSA MANDIRI (STMIK NURI) Sukabumi, menyelenggarakan Orientasi Akademik (Ormik) dan Seminar Motivasi (Semot) Tahun 2013-2014. Kegiatan yang berlangsung hari Rabu, 11 September 2013, bertempat di Gedung BBAT Sukabumi ini, menampilkan 2 orang nara sumber atau motivator, yakni H. Yulikuspartono, M.Kom. dan Khoirun Nisa, dari BSI Jakarta. \r\n\r\nKoordinator Kampus AMIK BSI dan STIMIK NURI Sukabumi, Agung Wibowo, S.T., M.T. menjelaskan, kegiatan tersebut diikuti oleh 200 orang mahasiswa baru tahun akademik 2013-2014, yang terdiri dari program D-III AMIK BSI sebanyak 137 orang, dan program S-1 STIMIK NURI sebanyak 48 orang, serta yang mengambil 2 kampus AMIK BSI dan STMIK NURI sebanyak 25 orang. Dijelaskan pula, kegiatan tersebut dilaksanakan secara rutin setiap tahun sekali, tepatnya pada setiap penerimaan mahasiswa baru. \r\n\r\nAdapun maksud dan tujuan dilaksanannya Ormik ini, diantaranya untuk memperkenalkan lingkungan dan seluruh komponen kampus, aturan, norma, budaya, dan tata tertib yang berlaku di kampus, memperkenalkan keorganisasian, memperkenalkan dan melatih menyanyikan hymne dan mars AMIK BSI dan STMIK NURI, serta memperkenalkan seluruh kegiatan yang ada di kampus. \r\n\r\nSelain itu, juga menanamkan sikap mental, spiritual, budi pekerti yang baik, tanggung jawab, toleransi, dan berbagai nilai positif lainnya kepada seluruh mahasiswa baru, sebagai implementasi penanaman konsep iman, ilmu, dan amal, serta menanamkan berbagai wawasan kepada mahasiswa baru, sebelum memasuki kegiatan perkuliahan secara formal di kampus. \r\n\r\nSedangkan dilaksanakannya Semot, untuk memberikan motivasi kepada seluruh mahasiswa baru, supaya memiliki semangat yang tinggi dalam melakukan perkuliahan dan kegiatan positif lainnya, baik di dalam maupun di luar kampus, seperti kegiatan entrepreneurship atau kewirausahaan di berbagai bidang. \r\n\r\nMenyinggung jumlah mahasiswa AMIK BSI dan STMIK NURI Sukabumi, saat ini sudah mencapai 1000 orang lebih. Sedangkan mahasiswa dan alumni AMIK BSI dan STMIK NURI Sukabumi yang terserap dunia kerja, dalam setiap melaksanakan bursa kerja dan entrepreneur expo yang diikuti oleh berbagai perusahaan dan industri, rata-rata mencapai antara 25 sampai dengan 30 persen, diantaranya sebagai Staf Informasi dan Teknologi (IT), Programmer, Data Entry, Teknisi Komputer, Pramugari, Staf Administrasi, Jurnalis, Sekretaris, Supervisor, Accounting, Marketing dan sebagainya. Selain itu, juga tidak sedikit yang membuka usaha sendiri, diantaranya bergerak dalam bidang IT, Busana, Tas, Makanan, Minuman, Jamur Tiram dan sebagainya', NULL, NULL, 'publish'),
(10, '2013-09-12 18:55:46', 'Wakil Walikota Menyerahkan Uang Kadedeuh', 'Wakil Walikota Sukabumi, H. Achmad Fahmi, S.Ag., M.M.Pd., menyerahkan Piagam Penghargaan dan Uang Kadeudeuh kepada puluhan Atlet, Pelatih, Pembina, dan Wasit Berprestasi, baik di Tingkat Jawa Barat maupun di Tingkat Nasional dan Internasional, serta kepad', 'Wakil Walikota Sukabumi, H. Achmad Fahmi, S.Ag., M.M.Pd., menyerahkan Piagam Penghargaan dan Uang Kadeudeuh kepada puluhan Atlet, Pelatih, Pembina, dan Wasit Berprestasi, baik di Tingkat Jawa Barat maupun di Tingkat Nasional dan Internasional, serta kepada Penggerak Olahraga Masyarakat dan Lembaga Pemerintah. Piagam Penghargaan dan Uang Kadeudeuh tersebut, diserahkan pada Upacara Puncak Peringatan Hari Olah Raga Nasional (Haornas) Ke-30 Tingkat Kota Sukabumi Tahun 2013, hari Rabu, 11 September 2013, bertempat di Lapangan Merdeka Kota Sukabumi. \r\n\r\nAdapun yang bertindak sebagai Pembina Upcara, Wakil Walikota Sukabumi, H. Achmad Fahmi, S.Ag., M.M.Pd., Pengatur Upacara, Kepala Seksi Bina dan Pengembangan Olahraga Dinas Pemuda, Olahraga, Pariwisata dan Ekonomi Kreatif (Disporaparekraf) Kota Sukabumi, Mohamad Zaelani, S.Pd., dan Pemimpin Upcara, dari unsur Cabang Olah Raga (Cabor) Yudo, Kompol Heri Cahyono, S.Pd. Sedangkan peserta upcara, terdiri dari para Pelajar, Mahasiswa, Pegawai Negeri Sipil (PNS), TNI, Polri, Masyarakat, Insan Olahraga, dan Pengurus Cabor Prestasi se Kota Sukabumi. \r\n\r\nSementara Tema Peringatan Haornas Ke-30 Tahun 2013 Tingkat Nasional, yakni Olahraga Membangun Karakter Bangsa, dan Tema Peringatan Haornas Ke-30 Tahun 2013 Tingkat Kota Sukabumi, yakni Melalui Hari Olahraga Nasional, Kita Dukung Olahraga Prestasi, Olahraga Masyarakat dan Olahraga Pendidikan, Menuju Kota Sukabumi yang Sehat dan Rahmatan Lil Alamin. \r\n\r\nHadir dalam kesempatan tersebut, Pimpinan dan Anggota DPRD, unsur Muspida, para Asisten dan Staf Ahli, para Kepala Organisasi Perangkat Daerah (OPD) dan Instansi Vertikal, para Camat dan Lurah, jajaran pengurus Organisasi Kemasyarakatan, Wanita dan Pemuda, serta Insan Pers dan Undangan Lainnya. \r\n\r\nUsai upacara, dilanjutkan pagelaran kolaborasi olahraga dan seni, senam masal bersama masyarakat, jalan sehat dan sepeda masal, serta go green atau tindakan penyelamatan bumi dengan penanaman pohon.', NULL, 'ENDANG SUMARDI', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_galeri`
--

CREATE TABLE IF NOT EXISTS `daftar_galeri` (
  `id_galeri` int(12) NOT NULL AUTO_INCREMENT,
  `nama_galeri` varchar(50) NOT NULL,
  `img_thubnail` varchar(50) NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `daftar_galeri`
--

INSERT INTO `daftar_galeri` (`id_galeri`, `nama_galeri`, `img_thubnail`) VALUES
(5, 'Sukabumi Tempo Doeloe', '20110519111028.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id_download` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `download`
--


-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `oleh` int(11) NOT NULL,
  `pertanyaan` longtext NOT NULL,
  `jawab` longtext NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `faq`
--


-- --------------------------------------------------------

--
-- Table structure for table `forum_kategori`
--

CREATE TABLE IF NOT EXISTS `forum_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `oleh` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `forum_kategori`
--

INSERT INTO `forum_kategori` (`id_kategori`, `nama_kategori`, `deskripsi`, `oleh`, `tanggal`) VALUES
(1, 'kategori pertama Oleh Superadmin', '<p>isi kategori pertama</p>', 1, '14-Jun-2011 | 20:55'),
(2, 'Kategori kedua oleh Administartor', '<p>tes kategori</p>', 2, '14-Jun-2011 | 20:54'),
(3, 'Kategori ketiga oleh manager', '<p>tes kategori</p>', 3, '14-Jun-2011 | 20:56');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE IF NOT EXISTS `forum_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `id_subkategori` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `email_pengirim` varchar(255) NOT NULL,
  `id_user` int(2) NOT NULL DEFAULT '0',
  `judul_post` varchar(255) NOT NULL,
  `isi_post` blob NOT NULL,
  `tanggal_post` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT '0.jpg',
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`id_post`, `id_kategori`, `id_subkategori`, `nama_pengirim`, `email_pengirim`, `id_user`, `judul_post`, `isi_post`, `tanggal_post`, `foto`) VALUES
(2, 1, 1, 'Mamiim', 'coco@La.com', 2, 'test post uung', 0x706f7374206b6520666f72756d, '05 Juni 2011 | 20:30', '0.jpg'),
(3, 2, 4, 'Papiip', 'coco@nut.com', 2, 'bingung deui', 0x62696e67756e67206168, '05 Juni 2011 | 20:30', '0.jpg'),
(4, 1, 1, '', '', 1, 'Tes posting oleh superadmin', 0x3c703e74657320706f7374696e673c2f703e, '16-Jun-2011 | 00:40', '0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post_reply`
--

CREATE TABLE IF NOT EXISTS `forum_post_reply` (
  `id_post_reply` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(255) NOT NULL,
  `email_pengirim` varchar(255) NOT NULL,
  `isi_post_reply` blob NOT NULL,
  `tanggal_post_reply` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT '0.jpg',
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id_post_reply`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `forum_post_reply`
--

INSERT INTO `forum_post_reply` (`id_post_reply`, `nama_pengirim`, `email_pengirim`, `isi_post_reply`, `tanggal_post_reply`, `foto`, `id_post`) VALUES
(1, 'Mamiim pos', 'coco@La.com', 0x676562656b2d676562656b2e2e, '05 Juni 2011 | 20:30', '0.jpg', 1),
(2, 'Mamiim pos', 'coco@La.com', 0x706f7374206b6520666f72756d2e2e207765772e2e, '05 Juni 2011 | 20:30', '0.jpg', 2),
(3, 'Papiip pos', 'coco@nut.com', 0x62696e67756e672061682e2e207072656565742e2e, '05 Juni 2011 | 20:30', '0.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_subkategori`
--

CREATE TABLE IF NOT EXISTS `forum_subkategori` (
  `id_subkategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subkategori` varchar(255) NOT NULL,
  `deskripsi_sub` varchar(255) NOT NULL,
  `oleh` int(11) NOT NULL,
  `tanggal_sub` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_subkategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `forum_subkategori`
--

INSERT INTO `forum_subkategori` (`id_subkategori`, `nama_subkategori`, `deskripsi_sub`, `oleh`, `tanggal_sub`, `id_kategori`) VALUES
(1, 'Sub Kategori pertama oleh Superadmin', '<p>tes sub kategori</p>', 1, '14-Jun-2011 | 21:22', 1),
(2, 'Sub Kategori pertama oleh Administrator', '<p>tes Sub kategori</p>', 2, '14-Jun-2011 | 21:24', 1),
(3, 'Sub Kategori pertama oleh Manager', '<p>tes sub kategori</p>', 3, '14-Jun-2011 | 21:28', 1),
(4, 'Sub Kategori pertama oleh Publisher', '<p>tes sub kategori</p>', 4, '14-Jun-2011 | 21:31', 1),
(5, 'Sub Kategori pertama oleh Author', '<p>tes sub kategori</p>', 5, '14-Jun-2011 | 21:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_img` int(12) NOT NULL AUTO_INCREMENT,
  `id_galeri` int(12) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_img`, `id_galeri`, `deskripsi`, `img`) VALUES
(6, 5, 'Gambar', '1.jpg'),
(7, 5, 'Gambar', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `isi` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `kategori`, `isi`) VALUES
(1, 'visi', '<p>Terwujudnya Kota Sukabumi sebagai pusat pelayanan berkualitas bidang pendidikan, kesehatan dan perdagangan di Jawa Barat berlandaskan iman dan taqwa</p>'),
(2, 'misi', '<p>1. Mewujudkan sumber daya manusia yang beriman, bertaqwa dan berbudaya<br />2. Mewujudkan pelayanan pendidikan yang berkualitas<br />3. Mewujudkan pelayanan kesehatan yang berkualitas<br />4. Mewujudkan pengembangan perdagangan dan sektor lapangan usaha lainnya yang berdaya saing tinggi<br />5. Mewujudkan tata kelola pemerintahan yang baik dengan aparatur pemerintahan daerah yang profesional dan amanah <br />6. Mewujudkan Kota Sukabumi yang nyaman dan indah</p>'),
(3, 'sejarah', '<p style="color: #000000; font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><span style="color: #000000; font-family: arial; font-size: x-small;"><span style="color: #006600; font-family: arial; font-size: x-small;"><img src="http://www.sukabumikota.go.id/gbr/balaikotadulu.jpg" alt="" width="200" height="109" align="left" /></span><br class="Apple-interchange-newline" />Kota Sukabumi berasal dari bahasa Sunda, yaitu Suka-bumen menurut keterangan mengingat udaranya yang sejuk dan nyaman, mereka yang datang ke daerah ini tidak ingin pindah lagi, karena suka atau senang bumen-bumen atau bertempat tinggal di daerah ini.<br />Pada tahun 1914 Pemerintah Hindia Belanda menjadikan Kota Sukabumi sebagai "Burgerlijjk Bestuur" dengan status "Gemeenteraad Van Sukabumi" dengan alasan bahwa di Kota ini banyak berdiam orang-orang Belanda dan Eropa pemilik perkebunan-perkebunan yang berada di daerah Kabupaten Sukabumi bagian Selatan yang harus mendapatkan pelayanan yang istimewa.</span></p>\n<p style="color: #000000; font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><span style="color: #000000; font-family: arial; font-size: x-small;">Sejak ditetapkannya Sukabumi menjadi Daerah Otonom pada bulan Mei 1926, maka resmi diangkat "Burgemeester" yaitu: Mr. GF.Rambonnet. Pada masa inilah dibangun sarana dan prasarana penting seperti Stasiun Kereta Api, Mesjid Agung, Gereja dan Pembangkit Listrik.</span></p>\n<p style="color: #000000; font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><span style="color: #000000;"><em><span style="font-family: arial; font-size: medium;">Perkembangan Pemerintahan</span></em></span></p>\n<p style="color: #000000; font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><span style="color: #000000; font-family: Arial,Helvetica,sans-serif; font-size: x-small;"><strong>Perubahan Nama Pemerintahan</strong></span></p>\n<p><span style="color: #000000;"> <span style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; font-family: Arial,Helvetica,sans-serif; font-size: x-small;">(1). Gemeente Soeka Boemi Tahun 1914-1942,<span class="Apple-converted-space">&nbsp;</span></span><span style="font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff;"><br /><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">(2). Soekaboemi SHI Tahun 1942-1945,<span class="Apple-converted-space">&nbsp;</span></span><br /><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">(3). Kota Kecil Sukabumi Undang-undang No. 17 Tahun 1950,<span class="Apple-converted-space">&nbsp;</span></span><br /><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">(4). Kota Praja Sukabumi Undang-undang No. 1 Tahun 1957,<span class="Apple-converted-space">&nbsp;</span></span><br /><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">(5). Kotamadya Sukabumi Undang-undang No. 18 Tahun 1965,<span class="Apple-converted-space">&nbsp;</span></span><br /><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">(6). Kotamadya Daerah Tingkat II Sukabumi Undang-undang No. 5 Tahun 1974,<span class="Apple-converted-space">&nbsp;</span></span><br /><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">(7). Kota Sukabumi Undang-undang No. 22 tahun 1999, UU No 32 Tahun 2003</span></span></span></p>\n<p style="color: #000000; font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><span style="color: #000000; font-family: arial; font-size: x-small;"><strong>Nama-Nama Pimpinan Pemerintahan Daerah Sukabumi</strong></span></p>\n<p style="color: #000000; font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><span style="color: #000000; font-family: arial; font-size: x-small;"><img src="http://www.sukabumikota.go.id/gbr/smidulu1.jpg" alt="" width="300" height="208" align="right" /></span></p>\n<p style="color: #000000; font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><span style="color: #000000; font-family: arial; font-size: x-small;">1. Mr. R. Syamsudin 1945-1946<br />2. Raden Mamur Soeria Hoedaja 1946-1948<br />3. Raden Ebo Adinegara 1948-1950<br />4. Raden Widjaja Soerija (Acting)<br />5. Raden S. Affandi Kartadjumena 1950-1952<br />6. Raden Soebandi Prawiranata 1952-1959<br />7. Mochamad Soelaeman 1959-1960<br />8. Raden Soewala 1960-1963<br />9. Raden Semeru (Acting)<br />10. Drs. Achmad Darmawan Adi 1963-1961<br />11. Raden Bidin Suryagunawan (Acting)<br />12. Saleh Wiradikarta, S.H. 1966-1978<br />13. Soejoed 1978-1988<br />14. H. Zaenudin Mulaebary, S.H. 1988-1993<br />15. H. Udin Koswara, S.H. 1993-1997<br />16. R. Nuriana (Gubernur Jabar) PJS<br />17. Dra. Hj. Molly Mulyahati Djubaedi, M.Sc. Plh<br />18. Dra. Hj. Molly Mulyahati Djubaedi, M.Sc. 1998-2003<br />19. H. Mokh. Muslikh Abdussyukur, S.H., M.Si. 2003-....</span></p>'),
(4, 'direktori', '<h2><span style="color: #000000;">Kedudukan</span></h2>\r\n<p>Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan dipimpin oleh seorang Kepala yang berada di bawah dan bertanggung jawab kepada Menteri Pendidikan Nasional.</p>\r\n<h2>Tugas</h2>\r\n<p>Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan mempunyai tugas melaksanakan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan.</p>\r\n<h2>Fungsi</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 664, Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan kebijakan teknis, rencana, dan program pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>b. pelaksanaan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>c. pemantauan, evaluasi, dan pelaporan pelaksanaan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan; dan</p>\r\n</li>\r\n<li>\r\n<p>d. pelaksanaan administrasi Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan.</p>\r\n</li>\r\n</ul>'),
(5, 'geografi', '<h2><span style="color: #000000;">Geografi dan Demografi</span></h2>\n<p>Kota Sukabumi terletak pada bagian selatan tengah Jawa barat pada koordinat 106o 45&rsquo; 50&rsquo;&rsquo; Bujur Timur dan 106o 45&rsquo; 10&rsquo;&rsquo; Bujur Timur, 6o 49&rsquo; 29&rsquo;&rsquo; Lintang Selatan dan 6o 50&rsquo; 44&rsquo;&rsquo; Lintang Selatan, terletak di kaki Gunung Gede dan Gunung Pangrango yang ketinggiannya 584 m diatas permukaan laut, dengan suhu maksimum 29 oC yang berjarak 120 Km dari Ibukota Negara (Jakarta) dan 96 Km dari Ibukota Propinsi (Bandung) dengan luas wilayah 4.800,231 Ha. Memiliki penduduk sampai akhir Tahun 2002 tercatat 269.142 jiwa, dengan kepadatan penduduk rata-rata 50 jiwa/Km2 yang tersebar.</p>\n<p><img src="http://www.sukabumikota.go.id/gbr/ftudara.jpg" alt="" /></p>\n<p>Wilayah Kota Sukabumi seluruhnya berbatasan dengan wilayah Kabupaten Sukabumi yakni: di Sebelah Utara berbatasan dengan Kecamatan Cisaat dan Kecamatan Sukabumi Kabupaten Sukabumi, Sebelah Selatan dengan Kecamatan Nyalindung Kabupaten Sukabumi, Sebelah Barat dengan Kecamatan Cisaat Kabupaten Sukabumi, Sebelah Timur dengan Kecamatan Sukaraja Kabupaten Sukabumi.</p>'),
(6, 'lambang', '<p><span style="color: #3366ff;"><img style="display: block; margin-left: auto; margin-right: auto;" src="http://www.sukabumikota.go.id/gbr/logokecil.png" alt="" /></span></p>\n<p style="text-align: center;"><span style="font-size: large;"><strong>LAMBANG KOTA SUKABUMI</strong></span></p>\n<p style="text-align: center;"><span style="color: #3366ff;"><br /></span></p>\n<p><strong>Dasar Hukum</strong> : Peraturan Daerah Kotamadya Sukabumi Nomor 12 Tahun 1993 Tentang Lambang Daerah Kotamadya Daerah Tingkat II Sukabumi.</p>\n<p>&nbsp;</p>\n<p><strong>Arti dari Lambang</strong> :<br />1. Perisai : Ketangguhan Fisik dan Mental.<br />2. Warna Hijau : Perlambang Kesuburan dan Kemakmuran.<br />3. Bintang Segi Lima : Perlambang PANCASILA yang merupakan Dasar Negara Republik Indonesia. <br />4. Kujang (Senjata Pusaka Luhur Bangsa Indonesia di Daerah Pasundan) : sebagai Lambang Keberanian.<br />5. Setangkai Padi dan Teh : Perlambang Ketentraman dan Perdamaian<br />6. Pita Merah Putih : Perlambang Kebangsaan Indonesia<br />7. Motto Reugreug Pageuh Repeh Rapih : Tangguh, Kukuh, Aman, Tentram dan Bersatu.</p>'),
(7, 'sosial', '<p><span style="font-size: medium;"><strong>KONDISI SOSIAL EKONOMI</strong></span></p>\n<p>&nbsp;</p>\n<p><span style="font-size: small;"><strong>Sarana Kesehatan</strong></span><br /><br />Rumah Sakit Pemerintah 1, Rumah Sakit Swasta 3, RS Bersalin 3, Puskesmas Dengan Tempat Perawatan 2, Puskesmas Tanpa Tempat. Perawatan 13, Puskesmas Pembantu 18, Posyandu 499, Apotik 20, Toko Obat 27, Pengobatan Alternatif/Tradisionil 68.<br /><br /><span style="font-size: small;"><strong>Sarana Keagamaan</strong></span><br /><br />Mesjid 369, Mushola / Langgar 702, Gereja 17, Vihara 3, Kelenteng 1<br /><br /><span style="font-size: small;"><strong>Sarana Ekonomi</strong></span></p>\n<p>&nbsp;</p>\n<p>- Perbankan dan Koperasi : <br />Bank Umum 23, Bank BPR 2, Bank Muamalat 4, Bank Syariah 1, Koperasi 66<br /><br />- Industri : <br />Industri Kecil Menengah 1502, Industri Rumah Tangga 224, yang bergerak di bidang Furniture, Box Jam, Kerajinan tangan, Elektronik dan Garmen<br /><br />- Perdagangan :<br />Super Market 6, Pasar Tradisional 8, Toko 879, Warung 3696, Warung Internet 10, Salon Kecantikan 138, Rental PS. 177, Rental Komputer 51, Rental Mobil 56, Persewaan VCD/LD 159, Menyewakan Alat Pesta 64.<br /><br />- Akomodasi :<br />Hotel / Penginapan 42, Restoran / Rumah Makan 169.<br /><br /><span style="font-size: small;"><strong>Sarana Pendidikan</strong></span><br /><br />TK 37, SD/MI 168, SLTP/MTSn. 36, SMU Negeri 5, SMU Swasta 12, SMK Negeri 3, SMK Swasta 14, Aliyah Negeri 2, Aliyah Swasta 7, Perguruan Tinggi 11.</p>'),
(8, 'angka', '<p style="text-align: center;"><span style="font-size: medium;"><strong>Indeks Pembangunan Manusia Kota Sukabumi Tahun 2011</strong></span></p>\n<p style="text-align: center;">&nbsp;</p>\n<table style="color: #000000; font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; width: 373px;" border="0" cellspacing="0" cellpadding="0" align="center">\n<tbody>\n<tr>\n<td><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">Jumlah Penduduk (Berdasarkan Disduk Capil 2011)</span></td>\n<td>\n<div align="center"><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">356.085</span></div>\n</td>\n</tr>\n<tr>\n<td bgcolor="#99FFCC"><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">IPM</span></td>\n<td bgcolor="#99FFCC">\n<div align="center"><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">75.33</span></div>\n</td>\n</tr>\n<tr>\n<td><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">Indeks Pendidikan</span></td>\n<td>\n<div align="center"><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">87.39</span></div>\n</td>\n</tr>\n<tr>\n<td bgcolor="#99FFCC"><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">Indeks Kesehatan</span></td>\n<td bgcolor="#99FFCC">\n<div align="center"><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">74.50</span></div>\n</td>\n</tr>\n<tr>\n<td><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">Indeks Daya Beli</span></td>\n<td>\n<div align="center"><span style="font-family: Arial,Helvetica,sans-serif; font-size: x-small;">64.10</span></div>\n</td>\n</tr>\n</tbody>\n</table>\n<p style="text-align: center;">&nbsp;</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://www.sukabumikota.go.id/gbr/lkpj1.jpg" alt="" /></p>'),
(9, 'ppmp', '<h2><span style="color: #3366ff;">Pasal 717</span></h2>\r\n<p>Pusat Penjaminan Mutu Pendidikan mempunyai tugas melaksanakan penyusunan bahan kebijakan teknis dan penjaminan mutu pendidikan.</p>\r\n<h2>Pasal 718</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 717, Pusat Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan bahan kebijakan teknis di bidang penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>b. penyusunan program penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>c. pelaksanaan pemetaan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>d. koordinasi dan fasilitasi pelaksanaan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>e. pengembangan dan pengelolaan sistem informasi mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>f. pemantauan, evaluasi, dan pelaporan pelaksanaan penjaminan mutu pendidikan; dan</p>\r\n</li>\r\n<li>\r\n<p>g. pelaksanaan administrasi Pusat Penjaminan Mutu Pendidikan.</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 719</h2>\r\n<p>Pusat Penjaminan Mutu Pendidikan terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>a. Bidang Penjaminan Mutu Pendidikan Anak Usia Dini, Nonformal, dan Informal;</p>\r\n</li>\r\n<li>\r\n<p>b. Bidang Penjaminan Mutu Pendidikan Dasar;</p>\r\n</li>\r\n<li>\r\n<p>c. Bidang Penjaminan Mutu Pendidikan Menengah dan Pendidikan Tinggi;</p>\r\n</li>\r\n<li>\r\n<p>d. Subbagian Tata Usaha; dan</p>\r\n</li>\r\n<li>\r\n<p>e. Kelompok Jabatan Fungsional.</p>\r\n</li>\r\n</ul>\r\n<center><input class="button" type="button" value="Website Pusat Penjaminan Mutu Pendidikan" /></center>'),
(10, 'sarpras', '<p><strong>Sarana &amp; Prasarana</strong></p>'),
(11, 'prestasi', '<p>&nbsp;</p>\n<p>&nbsp;</p>\n<table style="color: #000000; font-family: ''Times New Roman''; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; border-collapse: collapse; width: 600px; height: 1093px;" border="1" cellspacing="0" cellpadding="0">\n<tbody>\n<tr>\n<td align="center">\n<p>&nbsp;<strong><span style="color: #000000;"><span style="font-family: arial; font-size: x-small;">No.</span></span></strong></p>\n</td>\n<td align="center"><strong><span style="color: #000000;"><span style="font-family: arial; font-size: x-small;">Nama Prestasi</span></span></strong></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">1.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Peserta Pertukaran ke Jepang Tingkat Nasional</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">2.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Babak Penyisihan SMA Liga Fisika SMA Tingkat Nasional di wakili SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">3.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Finalis Tingkat Nasional Olimpiade Biologi Kedokteran Dendi A Zainul F dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">4.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Nasional Pemrograman Komputer oleh Abdurrahman Dihya dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">5.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Finalis tingkat nasional Olimpiade Sain(Komputer) oleh Abdurrahman Dihya dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">6.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Finalis Tingkat Nasional Olimpiade Sains(Biologi) oleh Angga Pratama dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">7.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Finalis Tingkat Nasional Olimpiade Sains(Astronomi) oleh Salat Fuadi dari Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">8.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Nasional Lomba Sekolah Sehat dari TK Negeri Pembina</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">9.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara Utama Tingkat Nasional Adiwiyata Utama SDN Pakujajar CBM</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">10.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara Utama Tingkat Nasional Adiwiyata Utama SDN Cipanengah CBM</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">11.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara Utama Tingkat Nasional Model Adiwiyata SMPN 10</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">12.</span>&nbsp;</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Nasional LCC PAI SMP oleh SMPN 5</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000;"><span style="font-family: arial; font-size: xx-small;">13</span>.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara V Tingkat Nasional Pidato SMP Oleh Azmi dari SMPN 1 Sukabumi</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">14.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara Harapan II Tingkat Nasional Lomba Keyboard oleh M.Rizki dari SMPN 8</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">15.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Nasional oleh Anggar dari SMA Mardi Yuana</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">16.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Wakil Propinsi Jawa Barat Tingkat Nasional Lomba MTQ SD dari SDN Sudajayahilir 4</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">17.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Wakil Propinsi Jawa Barat Tingkat Nasional Lomba pidatoPAI SD oleh Sungguh Pribadi dari SDN Dewi Sartika CBM.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">18.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Wakil Propinsi Jawa Barat Tingkat NasionalOlimpiade Sains oleh Sisca Fitriani dari SMAN 1</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">19.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Nasional O2SN Cabang Senam oleh Muhamad Faizal</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">20.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Siswa berprestasi SD oleh Sherlen dari SD MY 2</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">21.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Dokter kecil oleh Genta Maulana dari SDN Pakujajar CBM.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">22.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi KKR SMP oleh Fitriyani dari SMPN6</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">23.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Sekolah berbudaya lingkungan oleh SDN Gunung Puyuh CBM</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">24.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Komite SD Berprestasi oleh Drs.Siskamto dari Komite SDN Gunung Puyuh CBM.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">25.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Keyboard Sekolah Inklusi oleh M.Rizki dari SMPN 8</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">26.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Stand Pameran Pramuka SLB dari SLB Budi Nurani</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">27.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Nasional Solo Siswa Inklusi dari SLB Budi Nurani</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">28.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi LSS SD dari SD Dayeh Luhur SBM.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">29.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat PropinsiLSS SMP dari SMPN 10</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">30.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi MIPA Aksel SD dari SDN Sriwedari.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">31.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi MIPA Aksel SMP dari SMPN 10</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">32.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara VI Tingkat Propinsi Seni Lukis Siswa Inklusi dari SDN Cisarua.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">33.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi Bercerita Guru TK oleh Erningsih dari TK Sejahtera 2.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">34.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinnsi LCC dari SMPN 10.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">35.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi Siswa berprestasi SMA oleh Prully Handayani dari SMAN 3</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">36.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Olimpiade Sains oleh Sisca Fitrianidari SMAN 1.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">37.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi LTUB dari SMUN 1</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">38.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi O2SN oleh Mutia dari SMAN 3</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">39.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi Teknik Bubut oleh Rizpullah dari SMKN I</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">40.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat propinsi Wall and Floor Telling oleh Rendi Septian dari SMKN 1.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">41.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi Brick Laying oleh Saepudin dari SMKN 1</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">42.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi Mecanical CADD oleh Bangun Muhamad dari SMKN1</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">43.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Cabinet Making oleh Eko Sulistio dari SMKN I</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">44.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi Akuntansi oleh Bela Yuniarti dari SMKN 2</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">45.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Administrasi Perkantoran oleh Listia Dewi Andriyani dari SMKN 2</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">46.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi Tutor PAUD oleh Yayah Mardiyah</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">47.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi Lomba Karya Nyata oleh Kepala UPTD SKB Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">48.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi Lomba Karya Nyata Pamong SKB oleh Ir.Zidni Hasanah</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">49.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi Lomba Bintara Tingkat SD oleh Sungguh Ibadi Syakur</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">50.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi O2SN Cabang Senam oleh Muh.Faisal T dari SDN Cikole 1</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">51.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi O2SN Cabang Bulu Tangkis oleh Syakila Syifa''i dari SDN Lamping 3</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">52.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi O2SN Cabang Karate oleh Mufqi Maulana S dari SDN Cipanas</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">53.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi O2SN Cabang Karate Oleh SDN Cisarua</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">54.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi POPDA Cabang Senam oleh Sita Aji dari SDN Cikole 1</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">55.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi POPDA Cabang Senam oleh M Faisal T dari SDN Cikole 2</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">56.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Propinsi POPDA Cabang Senam oleh Yadi erliandi dari SMPN 2</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">57.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi POPDA Cabang Senam Beregu oleh SMAN 2</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">58.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi POPDA Cabang Renang oleh Florencia M dari Mardi Waluya</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">59.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi POPDA Cabang Atletik oleh Zaenul Dahlan dari SMAN 4</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">60.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Propinsi POPDA Cabang Silat oleh Billy D dari SMAN 1</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">61.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Lomba Gugus TK oleh TKN Pembina Baros</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">62.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Lomba gugus SD oleh SDN Gunung Puyuh CBM</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">63.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Lomba Matematika oleh Pasiad Yuniar Fajriyanii</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">64.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Harapan I Tingkat Propinsi lomba Matematika Pasiad oleh Fauzan Hilmi</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">65.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Tuntas Paripurna Tingkat Propinsi Wajar Dikdas Award oleh P dan K Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">66.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I Tingkat Propinsi Kepala SKB Teladan oleh Kepala UPTD SKB Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">67.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Wilayah II LTUB SD oleh SDN Gunung Puyuh CBM</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">68.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Wilayah II LTUB SMP oleh SMPN 10</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">69.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Tingkat Wilayah II LSS oleh TK Islam al Azhar</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">70.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara III Tingkat Wilayah II LSS SD oleh SDN Cipanas</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">71.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">SMPN 10Kota Sukabumi menjadi Duta Propinsi Jawa BaratDalam Lomba UKS Tingkat Nasional Tahun 2009</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">72.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Kota Sukabumi menjadi Duta Propinsi Jawa Barat Dalam Lomba UKS Tingkat Nasional Tahun 2009</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">73.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Kota Sukabumi Mendapatkan Piala Wahana Tata Nugraha(WTN) dari Pemerintah Pusat sebanyak 6 kali.</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">74.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Kota Sukabumi meraih Penghargaan Adiwiyata Tingkat Nasional</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">75.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara II Dokter Kecil Tingkat Nasional oleh Fauzan Hilmi Ramadhan dari SDN Benteng 1 Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">76.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I KKR SMP Tingkat Nasional oleh Yanuar Azhar Pratama dari MTS Syamsul Uluum Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">77.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I KKR SMA Tingkat Nasional Oleh Diah dari SMKN2 Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">78.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I LCC Tim Pembina UKS Tingkat Nasional oleh Eri Nasution dari Dinas Kesehatan Kota Sukabumi Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">79.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara Harapan II KKRSMP Tingkat Nasional oleh Monic Swandari dari SMPN 10</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">80.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I KKR SMA Tingkat Nasional oleh Yuni Anggia Purnama dari SMAN 3</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">81.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Juara I LCC TIm Pembina UKS Tingkat Nasional oleh Eri Nasution dari Dinas Kesehatan Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align="center"><span style="color: #000000; font-family: arial; font-size: xx-small;">82.</span></td>\n<td><span style="color: #000000; font-family: arial; font-size: xx-small;">Kota Sukabumi Meraih Peringkat Kedua Terbaik di Indonesia Dalam EVALUASI LAPORAN AKUNTABILITAS KINERJA INSTANSI PEMERINTAH (LAKIP)</span></td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
  `id_layanan` int(12) NOT NULL AUTO_INCREMENT,
  `kategori` int(2) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` longtext NOT NULL,
  `author` varchar(30) NOT NULL,
  `status` enum('publish','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_layanan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `layanan`
--


-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id_level`, `nama_level`) VALUES
(1, 'Superadmin'),
(2, 'Administrator'),
(3, 'Manager'),
(4, 'Publisher'),
(5, 'Author'),
(6, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `linkterkait`
--

CREATE TABLE IF NOT EXISTS `linkterkait` (
  `id_link` int(12) NOT NULL AUTO_INCREMENT,
  `singkatan` varchar(15) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL DEFAULT '#',
  PRIMARY KEY (`id_link`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `linkterkait`
--

INSERT INTO `linkterkait` (`id_link`, `singkatan`, `deskripsi`, `url`) VALUES
(8, 'LNK', 'Testing', 'http://192.168.0.100/suk46um1g01d');

-- --------------------------------------------------------

--
-- Table structure for table `panduan`
--

CREATE TABLE IF NOT EXISTS `panduan` (
  `id_panduan` int(12) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  PRIMARY KEY (`id_panduan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `panduan`
--


-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` datetime NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `tgl`, `judul`, `deskripsi`) VALUES
(4, '2011-05-04 00:00:00', 'tes kedua', '<table class="data" style="width: 100%;" border="1" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td>tes</td>\r\n<td>tes</td>\r\n</tr>\r\n<tr>\r\n<td>isi</td>\r\n<td>isi</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>dadasdasdsa dsadasdas</p>\r\n<p>dsadasdsadsad</p>\r\n<p><a href="../../../" target="_blank">dsadsadas</a></p>'),
(3, '2011-05-08 00:00:00', 'tes pengumuman pertama', '<p><span style="font-family: ''trebuchet ms'', geneva; font-size: small;">Style test pengumuman berdasrakan pada apa yang di drasa&nbsp;</span></p>\r\n<ol>\r\n<li style="text-align: left;"><span style="font-family: ''trebuchet ms'', geneva; font-size: small;">Isi tentang apa saja</span></li>\r\n<li style="text-align: left;"><span style="font-family: ''trebuchet ms'', geneva; font-size: small;">Apalagi ini&nbsp;</span></li>\r\n<li style="text-align: left;"><span style="font-family: ''trebuchet ms'', geneva; font-size: small;">ini apa</span></li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `peraturan`
--

CREATE TABLE IF NOT EXISTS `peraturan` (
  `id_peraturan` int(12) NOT NULL AUTO_INCREMENT,
  `kategori` enum('1','2','3','4','5','6') NOT NULL,
  `tahun` int(4) NOT NULL,
  `nama_peraturan` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link_file` varchar(100) NOT NULL,
  PRIMARY KEY (`id_peraturan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `peraturan`
--


-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` bigint(12) unsigned NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `email_pengirim` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `isi` blob NOT NULL,
  `tanggal` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '0000-00-00 | 00:00',
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pesan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pesan`
--


-- --------------------------------------------------------

--
-- Table structure for table `pesan_tanggapi`
--

CREATE TABLE IF NOT EXISTS `pesan_tanggapi` (
  `id_tanggapi` bigint(12) unsigned NOT NULL AUTO_INCREMENT,
  `id_pesan` bigint(12) unsigned NOT NULL DEFAULT '0',
  `oleh` bigint(12) unsigned NOT NULL DEFAULT '0',
  `isitanggapi` blob NOT NULL,
  `tanggaltanggapi` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '00-00-0000 | 00:00',
  PRIMARY KEY (`id_tanggapi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pesan_tanggapi`
--


-- --------------------------------------------------------

--
-- Table structure for table `polling`
--

CREATE TABLE IF NOT EXISTS `polling` (
  `id_polling` int(12) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(100) NOT NULL,
  `pilihan1` varchar(50) NOT NULL,
  `hasil1` int(4) NOT NULL,
  `pilihan2` varchar(50) NOT NULL,
  `hasil2` int(4) NOT NULL,
  `pilihan3` varchar(50) NOT NULL,
  `hasil3` int(4) NOT NULL,
  `pilihan4` varchar(50) NOT NULL,
  `hasil4` int(4) NOT NULL,
  `status` enum('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id_polling`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `polling`
--

INSERT INTO `polling` (`id_polling`, `pertanyaan`, `pilihan1`, `hasil1`, `pilihan2`, `hasil2`, `pilihan3`, `hasil3`, `pilihan4`, `hasil4`, `status`) VALUES
(1, 'Fitur apa yang paling anda sukai dari website ini?', 'Berita', 11, 'Agenda', 14, 'Pengumuman', 1, 'Galeri', 0, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `program_kerja`
--

CREATE TABLE IF NOT EXISTS `program_kerja` (
  `id_program` int(12) NOT NULL AUTO_INCREMENT,
  `tgl` datetime NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` enum('publish','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_program`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `program_kerja`
--


-- --------------------------------------------------------

--
-- Table structure for table `sistem_user`
--

CREATE TABLE IF NOT EXISTS `sistem_user` (
  `id_user` int(12) NOT NULL AUTO_INCREMENT,
  `nama_asli` varchar(150) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_level` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto_profil` varchar(50) NOT NULL DEFAULT '0.jpg',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sistem_user`
--

INSERT INTO `sistem_user` (`id_user`, `nama_asli`, `username`, `password`, `id_level`, `email`, `foto_profil`) VALUES
(1, 'Rezania Akbar', 'admin', 'admin', 1, '', '0.jpg'),
(2, 'Rezania Fajar Drajat', 'mamiim', 'papiip', 2, '', '0.jpg'),
(3, 'Didin', 'manager', 'manager', 3, '', '0.jpg'),
(4, 'Publisher', 'publisher', 'publisher', 4, '', '0.jpg'),
(5, 'author', 'author', 'author', 5, '', '0.jpg'),
(6, 'member', 'member', 'member', 6, '', '0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `id_statistik` int(12) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`id_statistik`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `statistik`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--

