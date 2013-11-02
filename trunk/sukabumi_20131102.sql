-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: sukabumi
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.10

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda` (
  `id_agenda` int(12) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `author` varchar(30) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` VALUES (1,'2011-05-19','test agenda','superadmin'),(2,'2011-05-21','Halal Bihalal','superadmin'),(5,'2013-08-14','Buka bareng bersama RT/RW','superadmin');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `belajar`
--

DROP TABLE IF EXISTS `belajar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `belajar` (
  `id_belajar` int(12) NOT NULL AUTO_INCREMENT,
  `tgl` datetime NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` enum('publish','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_belajar`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `belajar`
--

LOCK TABLES `belajar` WRITE;
/*!40000 ALTER TABLE `belajar` DISABLE KEYS */;
/*!40000 ALTER TABLE `belajar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `judul_berita` varchar(255) NOT NULL,
  `deskripsi_singkat` varchar(1000) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `status` enum('publish','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (7,'2013-09-12 11:54:20','Peringatan HUT RI Ke 68','Seluruh komponen bangsa Indonesia, termasuk warga masyarakat Kota Sukabumi, pada hari ini, Sabtu 17 Agustus 2013, memperingati Hari Ulang Tahun (HUT) Ke-68 Proklamasi Kemerdekaan RI','<p>Seluruh komponen bangsa Indonesia, termasuk warga masyarakat Kota Sukabumi, pada hari ini, Sabtu 17 Agustus 2013, memperingati Hari Ulang Tahun (HUT) Ke-68 Proklamasi Kemerdekaan RI, dengan menggelar Upacara Pengibaran Bendera Kebangsaan Sang Merah Putih, dan berbagai kegiatan lainnya. Adapun Upacara Pengibaran Bendera Kebangsaan Sang Merah Putih, di Kota Sukabumi dilaksanakan di Lapangan Merdeka, pada hari ini, Sabtu 17 Agustus 2013.</p>','upacara2013.jpg','admin','publish'),(8,'2013-09-08 05:36:22','Jalur Alternatif','Dinas Perhubungan Kota Sukabumi telah menyiapkan dua jalur alternatif, untuk perlintasan Bus Angkutan Kota Antar Provinsi (AKAP) dan Bus Angkutan Kota Dalam Provinsi (AKDP), dari arah tersebut menuju Terminal Type A Lingkar Selatan Kota Sukabumi','Kepala Bidang Lalu Lintas dan Angkutan (LLA) Dinas Perhubungan (Dishub) Kota Sukabumi, Ujang Hamdan, S.H., M.H. menjelaskan, sebelum selesai pembangunan tahap ketiga ruas Jalan Lingkar Selatan dari arah Bandung menuju Terminal Type A Lingkar Selatan Kota Sukabumi, Dinas Perhubungan Kota Sukabumi telah menyiapkan dua jalur alternatif, untuk perlintasan Bus Angkutan Kota Antar Provinsi (AKAP) dan Bus Angkutan Kota Dalam Provinsi (AKDP), dari arah tersebut menuju Terminal Type A Lingkar Selatan Kota Sukabumi. Karena sebagaimana yang diharapkan Walikota Sukabumi, selambat-lambatnya pada akhir tahun 2014 mendatang, terminal tersebut harus sudah mulai dioperasikan. Maksud dan tujuannya, untuk mengurangi kepadatan penduduk dan kemacetan lalu lintas, khususnya di pusat Kota Sukabumi. \r\n\r\nAdapun kedua alternatif jalur untuk perlintasan bus tersebut, antara lain, pertama masuk Jalan Pembangunan, Jalan Garuda, Jalan Sarasa, dan Jalan Baros, kedua masuk Jalan Otista dan Jalan RH Didi Sukardi. Ditandaskannya, kedua jalur alternatif tersebut, sebagai langkah persiapan dan antisipatif, apabila Terminal Type A Lingkar Selatan Kota Sukabumi mulai dioperasikan, dan pembangunan tahap ketiga ruas Jalan Lingkar Selatan dari arah Bandung menuju Terminal Type A Lingkar Selatan Kota Sukabumi belum selesai. \r\n\r\nDiungkapkannya, pembahasan kedua jalur alternatif tersebut sudah sejak lama dilakukan oleh Dinas Perhubungan Kota Sukabumi, dengan Polres Sukabumi Kota, Organisasi Angkutan Darat (Organda) Kota Sukabumi dan instansi terkait lainnya, termasuk dengan pengusaha dan awak bus jurusan tersebut. Dengan demikian, apabila kedua jalur alternatif tersebut digunakan sudah tidak ada masalah. \r\n\r\nDiungkapkan pula, pada tahun ini, menurut rencana pihak Bina Marga Provinsi Jawa Barat akan melakukan normalisasi jalan, khususnya tikungan yang ada di sepanjang ruas Jalan Pembangunan, Jalan Garuda dan Jalan Sarasa. Sedangkan untuk ruas Jalan Otista dan Jalan RH Didi Sukardi, hanya membutuhkan manajemen lalu lintas saja, untuk mengantisipasi kepadatan dan kemacetan lalu lintas.',NULL,NULL,'publish'),(9,'2013-09-12 11:55:02','AMIK BSI Sukabumi Selenggarakan ORMIK Dan SEMOT ','Akademi Manajemen Informatika dan Komputer Bina Sarana Informatika (AMIK BSI) dan Sekolah Tinggi Ilmu Manajemen Informatika dan Komputer NUSA MANDIRI (STMIK NURI) Sukabumi, menyelenggarakan Orientasi Akademik (Ormik) dan Seminar Motivasi (Semot) Tahun 201','Akademi Manajemen Informatika dan Komputer Bina Sarana Informatika (AMIK BSI) dan Sekolah Tinggi Ilmu Manajemen Informatika dan Komputer NUSA MANDIRI (STMIK NURI) Sukabumi, menyelenggarakan Orientasi Akademik (Ormik) dan Seminar Motivasi (Semot) Tahun 2013-2014. Kegiatan yang berlangsung hari Rabu, 11 September 2013, bertempat di Gedung BBAT Sukabumi ini, menampilkan 2 orang nara sumber atau motivator, yakni H. Yulikuspartono, M.Kom. dan Khoirun Nisa, dari BSI Jakarta. \r\n\r\nKoordinator Kampus AMIK BSI dan STIMIK NURI Sukabumi, Agung Wibowo, S.T., M.T. menjelaskan, kegiatan tersebut diikuti oleh 200 orang mahasiswa baru tahun akademik 2013-2014, yang terdiri dari program D-III AMIK BSI sebanyak 137 orang, dan program S-1 STIMIK NURI sebanyak 48 orang, serta yang mengambil 2 kampus AMIK BSI dan STMIK NURI sebanyak 25 orang. Dijelaskan pula, kegiatan tersebut dilaksanakan secara rutin setiap tahun sekali, tepatnya pada setiap penerimaan mahasiswa baru. \r\n\r\nAdapun maksud dan tujuan dilaksanannya Ormik ini, diantaranya untuk memperkenalkan lingkungan dan seluruh komponen kampus, aturan, norma, budaya, dan tata tertib yang berlaku di kampus, memperkenalkan keorganisasian, memperkenalkan dan melatih menyanyikan hymne dan mars AMIK BSI dan STMIK NURI, serta memperkenalkan seluruh kegiatan yang ada di kampus. \r\n\r\nSelain itu, juga menanamkan sikap mental, spiritual, budi pekerti yang baik, tanggung jawab, toleransi, dan berbagai nilai positif lainnya kepada seluruh mahasiswa baru, sebagai implementasi penanaman konsep iman, ilmu, dan amal, serta menanamkan berbagai wawasan kepada mahasiswa baru, sebelum memasuki kegiatan perkuliahan secara formal di kampus. \r\n\r\nSedangkan dilaksanakannya Semot, untuk memberikan motivasi kepada seluruh mahasiswa baru, supaya memiliki semangat yang tinggi dalam melakukan perkuliahan dan kegiatan positif lainnya, baik di dalam maupun di luar kampus, seperti kegiatan entrepreneurship atau kewirausahaan di berbagai bidang. \r\n\r\nMenyinggung jumlah mahasiswa AMIK BSI dan STMIK NURI Sukabumi, saat ini sudah mencapai 1000 orang lebih. Sedangkan mahasiswa dan alumni AMIK BSI dan STMIK NURI Sukabumi yang terserap dunia kerja, dalam setiap melaksanakan bursa kerja dan entrepreneur expo yang diikuti oleh berbagai perusahaan dan industri, rata-rata mencapai antara 25 sampai dengan 30 persen, diantaranya sebagai Staf Informasi dan Teknologi (IT), Programmer, Data Entry, Teknisi Komputer, Pramugari, Staf Administrasi, Jurnalis, Sekretaris, Supervisor, Accounting, Marketing dan sebagainya. Selain itu, juga tidak sedikit yang membuka usaha sendiri, diantaranya bergerak dalam bidang IT, Busana, Tas, Makanan, Minuman, Jamur Tiram dan sebagainya',NULL,NULL,'publish'),(10,'2013-09-12 11:55:46','Wakil Walikota Menyerahkan Uang Kadedeuh','Wakil Walikota Sukabumi, H. Achmad Fahmi, S.Ag., M.M.Pd., menyerahkan Piagam Penghargaan dan Uang Kadeudeuh kepada puluhan Atlet, Pelatih, Pembina, dan Wasit Berprestasi, baik di Tingkat Jawa Barat maupun di Tingkat Nasional dan Internasional, serta kepad','Wakil Walikota Sukabumi, H. Achmad Fahmi, S.Ag., M.M.Pd., menyerahkan Piagam Penghargaan dan Uang Kadeudeuh kepada puluhan Atlet, Pelatih, Pembina, dan Wasit Berprestasi, baik di Tingkat Jawa Barat maupun di Tingkat Nasional dan Internasional, serta kepada Penggerak Olahraga Masyarakat dan Lembaga Pemerintah. Piagam Penghargaan dan Uang Kadeudeuh tersebut, diserahkan pada Upacara Puncak Peringatan Hari Olah Raga Nasional (Haornas) Ke-30 Tingkat Kota Sukabumi Tahun 2013, hari Rabu, 11 September 2013, bertempat di Lapangan Merdeka Kota Sukabumi. \r\n\r\nAdapun yang bertindak sebagai Pembina Upcara, Wakil Walikota Sukabumi, H. Achmad Fahmi, S.Ag., M.M.Pd., Pengatur Upacara, Kepala Seksi Bina dan Pengembangan Olahraga Dinas Pemuda, Olahraga, Pariwisata dan Ekonomi Kreatif (Disporaparekraf) Kota Sukabumi, Mohamad Zaelani, S.Pd., dan Pemimpin Upcara, dari unsur Cabang Olah Raga (Cabor) Yudo, Kompol Heri Cahyono, S.Pd. Sedangkan peserta upcara, terdiri dari para Pelajar, Mahasiswa, Pegawai Negeri Sipil (PNS), TNI, Polri, Masyarakat, Insan Olahraga, dan Pengurus Cabor Prestasi se Kota Sukabumi. \r\n\r\nSementara Tema Peringatan Haornas Ke-30 Tahun 2013 Tingkat Nasional, yakni Olahraga Membangun Karakter Bangsa, dan Tema Peringatan Haornas Ke-30 Tahun 2013 Tingkat Kota Sukabumi, yakni Melalui Hari Olahraga Nasional, Kita Dukung Olahraga Prestasi, Olahraga Masyarakat dan Olahraga Pendidikan, Menuju Kota Sukabumi yang Sehat dan Rahmatan Lil Alamin. \r\n\r\nHadir dalam kesempatan tersebut, Pimpinan dan Anggota DPRD, unsur Muspida, para Asisten dan Staf Ahli, para Kepala Organisasi Perangkat Daerah (OPD) dan Instansi Vertikal, para Camat dan Lurah, jajaran pengurus Organisasi Kemasyarakatan, Wanita dan Pemuda, serta Insan Pers dan Undangan Lainnya. \r\n\r\nUsai upacara, dilanjutkan pagelaran kolaborasi olahraga dan seni, senam masal bersama masyarakat, jalan sehat dan sepeda masal, serta go green atau tindakan penyelamatan bumi dengan penanaman pohon.',NULL,'ENDANG SUMARDI','publish'),(11,'2013-09-18 07:45:23','penetapan 2 Rantus DPRD Tentang Pembentukan 2 Pansus','DPRD Kota Sukabumi sudah menetapkan 2 Rancangan Keputusan (Rantus) DPRD, Tentang Pembentukan 2 Panitia Khusus (Pansus) Pembahasan 2 Rancangan Peraturan Daerah (Raperda) Kota Sukabumi, Tentang Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kota Sukabum','DPRD Kota Sukabumi sudah menetapkan 2 Rancangan Keputusan (Rantus) DPRD, Tentang Pembentukan 2 Panitia Khusus (Pansus) Pembahasan 2 Rancangan Peraturan Daerah (Raperda) Kota Sukabumi, Tentang Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kota Sukabumi Tahun 2013-2018, serta Raperda Kota Sukabumi Tentang Perubahan Anggaran Pendapatan dan Belanja Daerah (PAPBD) Kota Sukabumi Tahun Anggaran 2013, menjadi Keputusan DPRD Kota Sukabumi yang definitif. \r\n\r\nPenetapan ke-2 Rantus tersebut, dilakukan dalam Rapat Paripurna, yang dipimpin oleh Wakil Ketua DPRD Kota Sukabumi, H. Yayan Suryana, S.Pdi., tepatnya pada tanggal 16 September 2013, bertempat di Ruangan Rapat Paripurna DPRD Kota Sukabumi. \r\n\r\nRapat Paripurna DPRD tersebut, diawali Pembukaan, yang terdiri dari Pengesahan Kuorum, Pengesahan Acara, dan Kata-Kata Pembukaan oleh Pimpinan Rapat. Selanjutnya Pokok-Pokok Kegiatan, yakni Pembacaan ke-2 Rantus tersebut, oleh Sekretaris DPRD Kota Sukabumi, Drs. H. Yudi Wiharsa, M.Si., yang diawali dengan rapat intern Pansus, penetapan dan penandatanganan ke-2 Rantus tersebut oleh Pimpinan DPRD, serta diakhiri Kata-Kata Penutupan oleh Pimpinan Rapat. \r\n\r\nAdapun Susunan Keanggotaan dan Komposisi Jabatan Pansus Pembahasan Raperda Tentang RPJMD Kota Sukabumi Tahun 2013-2018 ini, antara lain, Ketua, Syihabudin, S.Pdi., Wakil Ketua, Drs. Muniri Muchtar, serta Anggota, Insinyur Hendry Slamet, Noor Bani Hanifiah, S.Sos., Hera Herdiani, A.Md., Priatman Maman, Sm.Hk., S.Pd., Danny Ramdhani, S.H., Tatan Kustandi, dan Drs. Rachmat Purnama, M.M. \r\n\r\nSedangkan Susunan Keanggotaan dan Komposisi Jabatan Pansus Pembahasan Raperda Tentang PAPBD Kota Sukabumi Tahun Anggaran 2013 ini, antara lain, Ketua, Freddy, Wakil Ketua, Eeng Iwan Ruswandi, serta Anggota, H. Lili Solihin, Edi Gunawan, Mochamad Irwan Setiawan, H. Maman Mudjizat, S.IP., Alit Gunawan, Wawan Juanda, H. Wawan Marwan, dan Dra. Hajah Yanti Indri. \r\n\r\nWakil Ketua DPRD Kota Sukabumi, H. Yayan Suryana, S.Pdi. menjelaskan, ke-2 Pansus ini mempunyai tugas untuk membahas ke-2 Rantus tersebut, terhitung mulai tanggal 16 September 2013 sampai dengan tanggal 27 September 2013 mendatang, serta harus melaporkan hasil kerjanya kepada Pimpinan DPRD Kota Sukabumi. Dijelaskan pula, untuk menunjang kelancaran dan keberhasilan ke-2 Pansus tersebut, dibantu oleh pelaksana teknis administrasi, dari unsur Sekretariat DPRD Kota Sukabumi. Selain itu juga dijelaskan, keputusan ke-2 Pansus ini mulai berlaku sejak tanggal ditetapkan, dengan ketentuan akan diadakan perubahan dan perbaikan seperlunya, apabila di kemudian hari terdapat kekeliruan di dalamnya.',NULL,'Endang Sumardi','publish'),(12,'2013-09-18 07:45:35','Penetapan 2 Rantus DPRD Tentang Pembentukan 2 Pansus','DPRD Kota Sukabumi sudah menetapkan 2 Rancangan Keputusan (Rantus) DPRD, Tentang Pembentukan 2 Panitia Khusus (Pansus) Pembahasan 2 Rancangan Peraturan Daerah (Raperda) Kota Sukabumi, Tentang Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kota Sukabumi Tahun 2013-2018, serta Raperda Kota Sukabumi Tentang Perubahan Anggaran Pendapatan dan Belanja Daerah (PAPBD) Kota Sukabumi Tahun Anggaran 2013, menjadi Keputusan DPRD Kota Sukabumi yang definitif','DPRD Kota Sukabumi sudah menetapkan 2 Rancangan Keputusan (Rantus) DPRD, Tentang Pembentukan 2 Panitia Khusus (Pansus) Pembahasan 2 Rancangan Peraturan Daerah (Raperda) Kota Sukabumi, Tentang Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kota Sukabumi Tahun 2013-2018, serta Raperda Kota Sukabumi Tentang Perubahan Anggaran Pendapatan dan Belanja Daerah (PAPBD) Kota Sukabumi Tahun Anggaran 2013, menjadi Keputusan DPRD Kota Sukabumi yang definitif. \r\n\r\nPenetapan ke-2 Rantus tersebut, dilakukan dalam Rapat Paripurna, yang dipimpin oleh Wakil Ketua DPRD Kota Sukabumi, H. Yayan Suryana, S.Pdi., tepatnya pada tanggal 16 September 2013, bertempat di Ruangan Rapat Paripurna DPRD Kota Sukabumi. \r\n\r\nRapat Paripurna DPRD tersebut, diawali Pembukaan, yang terdiri dari Pengesahan Kuorum, Pengesahan Acara, dan Kata-Kata Pembukaan oleh Pimpinan Rapat. Selanjutnya Pokok-Pokok Kegiatan, yakni Pembacaan ke-2 Rantus tersebut, oleh Sekretaris DPRD Kota Sukabumi, Drs. H. Yudi Wiharsa, M.Si., yang diawali dengan rapat intern Pansus, penetapan dan penandatanganan ke-2 Rantus tersebut oleh Pimpinan DPRD, serta diakhiri Kata-Kata Penutupan oleh Pimpinan Rapat. \r\n\r\nAdapun Susunan Keanggotaan dan Komposisi Jabatan Pansus Pembahasan Raperda Tentang RPJMD Kota Sukabumi Tahun 2013-2018 ini, antara lain, Ketua, Syihabudin, S.Pdi., Wakil Ketua, Drs. Muniri Muchtar, serta Anggota, Insinyur Hendry Slamet, Noor Bani Hanifiah, S.Sos., Hera Herdiani, A.Md., Priatman Maman, Sm.Hk., S.Pd., Danny Ramdhani, S.H., Tatan Kustandi, dan Drs. Rachmat Purnama, M.M. \r\n\r\nSedangkan Susunan Keanggotaan dan Komposisi Jabatan Pansus Pembahasan Raperda Tentang PAPBD Kota Sukabumi Tahun Anggaran 2013 ini, antara lain, Ketua, Freddy, Wakil Ketua, Eeng Iwan Ruswandi, serta Anggota, H. Lili Solihin, Edi Gunawan, Mochamad Irwan Setiawan, H. Maman Mudjizat, S.IP., Alit Gunawan, Wawan Juanda, H. Wawan Marwan, dan Dra. Hajah Yanti Indri. \r\n\r\nWakil Ketua DPRD Kota Sukabumi, H. Yayan Suryana, S.Pdi. menjelaskan, ke-2 Pansus ini mempunyai tugas untuk membahas ke-2 Rantus tersebut, terhitung mulai tanggal 16 September 2013 sampai dengan tanggal 27 September 2013 mendatang, serta harus melaporkan hasil kerjanya kepada Pimpinan DPRD Kota Sukabumi. Dijelaskan pula, untuk menunjang kelancaran dan keberhasilan ke-2 Pansus tersebut, dibantu oleh pelaksana teknis administrasi, dari unsur Sekretariat DPRD Kota Sukabumi. Selain itu juga dijelaskan, keputusan ke-2 Pansus ini mulai berlaku sejak tanggal ditetapkan, dengan ketentuan akan diadakan perubahan dan perbaikan seperlunya, apabila di kemudian hari terdapat kekeliruan di dalamnya.',NULL,'Endang Sumardi','publish');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftar_galeri`
--

DROP TABLE IF EXISTS `daftar_galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftar_galeri` (
  `id_galeri` int(12) NOT NULL AUTO_INCREMENT,
  `nama_galeri` varchar(50) NOT NULL,
  `img_thubnail` varchar(50) NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_galeri`
--

LOCK TABLES `daftar_galeri` WRITE;
/*!40000 ALTER TABLE `daftar_galeri` DISABLE KEYS */;
INSERT INTO `daftar_galeri` VALUES (5,'Sukabumi Tempo Doeloe','20110519111028.jpg');
/*!40000 ALTER TABLE `daftar_galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `download`
--

DROP TABLE IF EXISTS `download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `download` (
  `id_download` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `download`
--

LOCK TABLES `download` WRITE;
/*!40000 ALTER TABLE `download` DISABLE KEYS */;
/*!40000 ALTER TABLE `download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `oleh` int(11) NOT NULL,
  `pertanyaan` longtext NOT NULL,
  `jawab` longtext NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_kategori`
--

DROP TABLE IF EXISTS `forum_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `oleh` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_kategori`
--

LOCK TABLES `forum_kategori` WRITE;
/*!40000 ALTER TABLE `forum_kategori` DISABLE KEYS */;
INSERT INTO `forum_kategori` VALUES (1,'kategori pertama Oleh Superadmin','<p>isi kategori pertama</p>',1,'14-Jun-2011 | 20:55'),(2,'Kategori kedua oleh Administartor','<p>tes kategori</p>',2,'14-Jun-2011 | 20:54'),(3,'Kategori ketiga oleh manager','<p>tes kategori</p>',3,'14-Jun-2011 | 20:56');
/*!40000 ALTER TABLE `forum_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_post`
--

DROP TABLE IF EXISTS `forum_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_post` (
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_post`
--

LOCK TABLES `forum_post` WRITE;
/*!40000 ALTER TABLE `forum_post` DISABLE KEYS */;
INSERT INTO `forum_post` VALUES (2,1,1,'Mamiim','coco@La.com',2,'test post uung','post ke forum','05 Juni 2011 | 20:30','0.jpg'),(3,2,4,'Papiip','coco@nut.com',2,'bingung deui','bingung ah','05 Juni 2011 | 20:30','0.jpg'),(4,1,1,'','',1,'Tes posting oleh superadmin','<p>tes posting</p>','16-Jun-2011 | 00:40','0.jpg');
/*!40000 ALTER TABLE `forum_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_post_reply`
--

DROP TABLE IF EXISTS `forum_post_reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_post_reply` (
  `id_post_reply` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(255) NOT NULL,
  `email_pengirim` varchar(255) NOT NULL,
  `isi_post_reply` blob NOT NULL,
  `tanggal_post_reply` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT '0.jpg',
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id_post_reply`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_post_reply`
--

LOCK TABLES `forum_post_reply` WRITE;
/*!40000 ALTER TABLE `forum_post_reply` DISABLE KEYS */;
INSERT INTO `forum_post_reply` VALUES (1,'Mamiim pos','coco@La.com','gebek-gebek..','05 Juni 2011 | 20:30','0.jpg',1),(2,'Mamiim pos','coco@La.com','post ke forum.. wew..','05 Juni 2011 | 20:30','0.jpg',2),(3,'Papiip pos','coco@nut.com','bingung ah.. preeet..','05 Juni 2011 | 20:30','0.jpg',1);
/*!40000 ALTER TABLE `forum_post_reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_subkategori`
--

DROP TABLE IF EXISTS `forum_subkategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_subkategori` (
  `id_subkategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subkategori` varchar(255) NOT NULL,
  `deskripsi_sub` varchar(255) NOT NULL,
  `oleh` int(11) NOT NULL,
  `tanggal_sub` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_subkategori`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_subkategori`
--

LOCK TABLES `forum_subkategori` WRITE;
/*!40000 ALTER TABLE `forum_subkategori` DISABLE KEYS */;
INSERT INTO `forum_subkategori` VALUES (1,'Sub Kategori pertama oleh Superadmin','<p>tes sub kategori</p>',1,'14-Jun-2011 | 21:22',1),(2,'Sub Kategori pertama oleh Administrator','<p>tes Sub kategori</p>',2,'14-Jun-2011 | 21:24',1),(3,'Sub Kategori pertama oleh Manager','<p>tes sub kategori</p>',3,'14-Jun-2011 | 21:28',1),(4,'Sub Kategori pertama oleh Publisher','<p>tes sub kategori</p>',4,'14-Jun-2011 | 21:31',1),(5,'Sub Kategori pertama oleh Author','<p>tes sub kategori</p>',5,'14-Jun-2011 | 21:33',1);
/*!40000 ALTER TABLE `forum_subkategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri` (
  `id_img` int(12) NOT NULL AUTO_INCREMENT,
  `id_galeri` int(12) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` VALUES (6,5,'Gambar','1.jpg'),(7,5,'Gambar','2.jpg');
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `industri`
--

DROP TABLE IF EXISTS `industri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industri` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `isi` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industri`
--

LOCK TABLES `industri` WRITE;
/*!40000 ALTER TABLE `industri` DISABLE KEYS */;
INSERT INTO `industri` VALUES (1,'rencana_strategis','<p>tes Perencanaan STrategis</p>\n'),(2,'daftar_rencana','<p>Cek Daftar Perencanaan</p>\n'),(3,'komoditi','<p>Testing Industri Per Komoditi</p>\n'),(4,'perkembangan','<p>Cek Perkembangan Industri</p>\n'),(5,'iujk','<p>Tes Daftar IUJK</p>\n'),(6,'koperasi','<p>Ceking Daftar Koperasi</p>\n'),(7,'ukm','<p>Setting Daftar UKM</p>\n');
/*!40000 ALTER TABLE `industri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informasi`
--

DROP TABLE IF EXISTS `informasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informasi` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `isi` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informasi`
--

LOCK TABLES `informasi` WRITE;
/*!40000 ALTER TABLE `informasi` DISABLE KEYS */;
INSERT INTO `informasi` VALUES (1,'visi','<p>Terwujudnya Kota Sukabumi sebagai pusat pelayanan berkualitas bidang pendidikan, kesehatan dan perdagangan di Jawa Barat berlandaskan iman dan taqwa</p>'),(2,'misi','<p>1. Mewujudkan sumber daya manusia yang beriman, bertaqwa dan berbudaya<br />2. Mewujudkan pelayanan pendidikan yang berkualitas<br />3. Mewujudkan pelayanan kesehatan yang berkualitas<br />4. Mewujudkan pengembangan perdagangan dan sektor lapangan usaha lainnya yang berdaya saing tinggi<br />5. Mewujudkan tata kelola pemerintahan yang baik dengan aparatur pemerintahan daerah yang profesional dan amanah <br />6. Mewujudkan Kota Sukabumi yang nyaman dan indah</p>'),(3,'sejarah','<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\"><span style=\"color: #006600; font-family: arial; font-size: x-small;\"><img src=\"http://www.sukabumikota.go.id/gbr/balaikotadulu.jpg\" alt=\"\" width=\"200\" height=\"109\" align=\"left\" /></span><br class=\"Apple-interchange-newline\" />Kota Sukabumi berasal dari bahasa Sunda, yaitu Suka-bumen menurut keterangan mengingat udaranya yang sejuk dan nyaman, mereka yang datang ke daerah ini tidak ingin pindah lagi, karena suka atau senang bumen-bumen atau bertempat tinggal di daerah ini.<br />Pada tahun 1914 Pemerintah Hindia Belanda menjadikan Kota Sukabumi sebagai \"Burgerlijjk Bestuur\" dengan status \"Gemeenteraad Van Sukabumi\" dengan alasan bahwa di Kota ini banyak berdiam orang-orang Belanda dan Eropa pemilik perkebunan-perkebunan yang berada di daerah Kabupaten Sukabumi bagian Selatan yang harus mendapatkan pelayanan yang istimewa.</span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\">Sejak ditetapkannya Sukabumi menjadi Daerah Otonom pada bulan Mei 1926, maka resmi diangkat \"Burgemeester\" yaitu: Mr. GF.Rambonnet. Pada masa inilah dibangun sarana dan prasarana penting seperti Stasiun Kereta Api, Mesjid Agung, Gereja dan Pembangkit Listrik.</span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000;\"><em><span style=\"font-family: arial; font-size: medium;\">Perkembangan Pemerintahan</span></em></span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: Arial,Helvetica,sans-serif; font-size: x-small;\"><strong>Perubahan Nama Pemerintahan</strong></span></p>\n<p><span style=\"color: #000000;\"> <span style=\"font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(1). Gemeente Soeka Boemi Tahun 1914-1942,<span class=\"Apple-converted-space\">&nbsp;</span></span><span style=\"font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff;\"><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(2). Soekaboemi SHI Tahun 1942-1945,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(3). Kota Kecil Sukabumi Undang-undang No. 17 Tahun 1950,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(4). Kota Praja Sukabumi Undang-undang No. 1 Tahun 1957,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(5). Kotamadya Sukabumi Undang-undang No. 18 Tahun 1965,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(6). Kotamadya Daerah Tingkat II Sukabumi Undang-undang No. 5 Tahun 1974,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(7). Kota Sukabumi Undang-undang No. 22 tahun 1999, UU No 32 Tahun 2003</span></span></span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\"><strong>Nama-Nama Pimpinan Pemerintahan Daerah Sukabumi</strong></span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\"><img src=\"http://www.sukabumikota.go.id/gbr/smidulu1.jpg\" alt=\"\" width=\"300\" height=\"208\" align=\"right\" /></span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\">1. Mr. R. Syamsudin 1945-1946<br />2. Raden Mamur Soeria Hoedaja 1946-1948<br />3. Raden Ebo Adinegara 1948-1950<br />4. Raden Widjaja Soerija (Acting)<br />5. Raden S. Affandi Kartadjumena 1950-1952<br />6. Raden Soebandi Prawiranata 1952-1959<br />7. Mochamad Soelaeman 1959-1960<br />8. Raden Soewala 1960-1963<br />9. Raden Semeru (Acting)<br />10. Drs. Achmad Darmawan Adi 1963-1961<br />11. Raden Bidin Suryagunawan (Acting)<br />12. Saleh Wiradikarta, S.H. 1966-1978<br />13. Soejoed 1978-1988<br />14. H. Zaenudin Mulaebary, S.H. 1988-1993<br />15. H. Udin Koswara, S.H. 1993-1997<br />16. R. Nuriana (Gubernur Jabar) PJS<br />17. Dra. Hj. Molly Mulyahati Djubaedi, M.Sc. Plh<br />18. Dra. Hj. Molly Mulyahati Djubaedi, M.Sc. 1998-2003<br />19. H. Mokh. Muslikh Abdussyukur, S.H., M.Si. 2003-....</span></p>'),(4,'direktori','<h2><span style=\"color: #000000;\">Kedudukan</span></h2>\r\n<p>Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan dipimpin oleh seorang Kepala yang berada di bawah dan bertanggung jawab kepada Menteri Pendidikan Nasional.</p>\r\n<h2>Tugas</h2>\r\n<p>Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan mempunyai tugas melaksanakan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan.</p>\r\n<h2>Fungsi</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 664, Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan kebijakan teknis, rencana, dan program pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>b. pelaksanaan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>c. pemantauan, evaluasi, dan pelaporan pelaksanaan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan; dan</p>\r\n</li>\r\n<li>\r\n<p>d. pelaksanaan administrasi Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan.</p>\r\n</li>\r\n</ul>'),(5,'geografi','<h2><span style=\"color: #000000;\">Geografi dan Demografi</span></h2>\n<p>Kota Sukabumi terletak pada bagian selatan tengah Jawa barat pada koordinat 106o 45&rsquo; 50&rsquo;&rsquo; Bujur Timur dan 106o 45&rsquo; 10&rsquo;&rsquo; Bujur Timur, 6o 49&rsquo; 29&rsquo;&rsquo; Lintang Selatan dan 6o 50&rsquo; 44&rsquo;&rsquo; Lintang Selatan, terletak di kaki Gunung Gede dan Gunung Pangrango yang ketinggiannya 584 m diatas permukaan laut, dengan suhu maksimum 29 oC yang berjarak 120 Km dari Ibukota Negara (Jakarta) dan 96 Km dari Ibukota Propinsi (Bandung) dengan luas wilayah 4.800,231 Ha. Memiliki penduduk sampai akhir Tahun 2002 tercatat 269.142 jiwa, dengan kepadatan penduduk rata-rata 50 jiwa/Km2 yang tersebar.</p>\n<p><img src=\"http://www.sukabumikota.go.id/gbr/ftudara.jpg\" alt=\"\" /></p>\n<p>Wilayah Kota Sukabumi seluruhnya berbatasan dengan wilayah Kabupaten Sukabumi yakni: di Sebelah Utara berbatasan dengan Kecamatan Cisaat dan Kecamatan Sukabumi Kabupaten Sukabumi, Sebelah Selatan dengan Kecamatan Nyalindung Kabupaten Sukabumi, Sebelah Barat dengan Kecamatan Cisaat Kabupaten Sukabumi, Sebelah Timur dengan Kecamatan Sukaraja Kabupaten Sukabumi.</p>'),(6,'lambang','<p><span style=\"color: #3366ff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://www.sukabumikota.go.id/gbr/logokecil.png\" alt=\"\" /></span></p>\n<p style=\"text-align: center;\"><span style=\"font-size: large;\"><strong>LAMBANG KOTA SUKABUMI</strong></span></p>\n<p style=\"text-align: center;\"><span style=\"color: #3366ff;\"><br /></span></p>\n<p><strong>Dasar Hukum</strong> : Peraturan Daerah Kotamadya Sukabumi Nomor 12 Tahun 1993 Tentang Lambang Daerah Kotamadya Daerah Tingkat II Sukabumi.</p>\n<p>&nbsp;</p>\n<p><strong>Arti dari Lambang</strong> :<br />1. Perisai : Ketangguhan Fisik dan Mental.<br />2. Warna Hijau : Perlambang Kesuburan dan Kemakmuran.<br />3. Bintang Segi Lima : Perlambang PANCASILA yang merupakan Dasar Negara Republik Indonesia. <br />4. Kujang (Senjata Pusaka Luhur Bangsa Indonesia di Daerah Pasundan) : sebagai Lambang Keberanian.<br />5. Setangkai Padi dan Teh : Perlambang Ketentraman dan Perdamaian<br />6. Pita Merah Putih : Perlambang Kebangsaan Indonesia<br />7. Motto Reugreug Pageuh Repeh Rapih : Tangguh, Kukuh, Aman, Tentram dan Bersatu.</p>'),(7,'sosial','<p><span style=\"font-size: medium;\"><strong>KONDISI SOSIAL EKONOMI</strong></span></p>\n<p>&nbsp;</p>\n<p><span style=\"font-size: small;\"><strong>Sarana Kesehatan</strong></span><br /><br />Rumah Sakit Pemerintah 1, Rumah Sakit Swasta 3, RS Bersalin 3, Puskesmas Dengan Tempat Perawatan 2, Puskesmas Tanpa Tempat. Perawatan 13, Puskesmas Pembantu 18, Posyandu 499, Apotik 20, Toko Obat 27, Pengobatan Alternatif/Tradisionil 68.<br /><br /><span style=\"font-size: small;\"><strong>Sarana Keagamaan</strong></span><br /><br />Mesjid 369, Mushola / Langgar 702, Gereja 17, Vihara 3, Kelenteng 1<br /><br /><span style=\"font-size: small;\"><strong>Sarana Ekonomi</strong></span></p>\n<p>&nbsp;</p>\n<p>- Perbankan dan Koperasi : <br />Bank Umum 23, Bank BPR 2, Bank Muamalat 4, Bank Syariah 1, Koperasi 66<br /><br />- Industri : <br />Industri Kecil Menengah 1502, Industri Rumah Tangga 224, yang bergerak di bidang Furniture, Box Jam, Kerajinan tangan, Elektronik dan Garmen<br /><br />- Perdagangan :<br />Super Market 6, Pasar Tradisional 8, Toko 879, Warung 3696, Warung Internet 10, Salon Kecantikan 138, Rental PS. 177, Rental Komputer 51, Rental Mobil 56, Persewaan VCD/LD 159, Menyewakan Alat Pesta 64.<br /><br />- Akomodasi :<br />Hotel / Penginapan 42, Restoran / Rumah Makan 169.<br /><br /><span style=\"font-size: small;\"><strong>Sarana Pendidikan</strong></span><br /><br />TK 37, SD/MI 168, SLTP/MTSn. 36, SMU Negeri 5, SMU Swasta 12, SMK Negeri 3, SMK Swasta 14, Aliyah Negeri 2, Aliyah Swasta 7, Perguruan Tinggi 11.</p>'),(8,'angka','<p style=\"text-align: center;\"><span style=\"font-size: medium;\"><strong>Indeks Pembangunan Manusia Kota Sukabumi Tahun 2011</strong></span></p>\n<p style=\"text-align: center;\">&nbsp;</p>\n<table style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; width: 373px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">Jumlah Penduduk (Berdasarkan Disduk Capil 2011)</span></td>\n<td>\n<div align=\"center\"><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">356.085</span></div>\n</td>\n</tr>\n<tr>\n<td bgcolor=\"#99FFCC\"><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">IPM</span></td>\n<td bgcolor=\"#99FFCC\">\n<div align=\"center\"><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">75.33</span></div>\n</td>\n</tr>\n<tr>\n<td><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">Indeks Pendidikan</span></td>\n<td>\n<div align=\"center\"><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">87.39</span></div>\n</td>\n</tr>\n<tr>\n<td bgcolor=\"#99FFCC\"><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">Indeks Kesehatan</span></td>\n<td bgcolor=\"#99FFCC\">\n<div align=\"center\"><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">74.50</span></div>\n</td>\n</tr>\n<tr>\n<td><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">Indeks Daya Beli</span></td>\n<td>\n<div align=\"center\"><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">64.10</span></div>\n</td>\n</tr>\n</tbody>\n</table>\n<p style=\"text-align: center;\">&nbsp;</p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://www.sukabumikota.go.id/gbr/lkpj1.jpg\" alt=\"\" /></p>'),(9,'ppmp','<h2><span style=\"color: #3366ff;\">Pasal 717</span></h2>\r\n<p>Pusat Penjaminan Mutu Pendidikan mempunyai tugas melaksanakan penyusunan bahan kebijakan teknis dan penjaminan mutu pendidikan.</p>\r\n<h2>Pasal 718</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 717, Pusat Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan bahan kebijakan teknis di bidang penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>b. penyusunan program penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>c. pelaksanaan pemetaan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>d. koordinasi dan fasilitasi pelaksanaan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>e. pengembangan dan pengelolaan sistem informasi mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>f. pemantauan, evaluasi, dan pelaporan pelaksanaan penjaminan mutu pendidikan; dan</p>\r\n</li>\r\n<li>\r\n<p>g. pelaksanaan administrasi Pusat Penjaminan Mutu Pendidikan.</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 719</h2>\r\n<p>Pusat Penjaminan Mutu Pendidikan terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>a. Bidang Penjaminan Mutu Pendidikan Anak Usia Dini, Nonformal, dan Informal;</p>\r\n</li>\r\n<li>\r\n<p>b. Bidang Penjaminan Mutu Pendidikan Dasar;</p>\r\n</li>\r\n<li>\r\n<p>c. Bidang Penjaminan Mutu Pendidikan Menengah dan Pendidikan Tinggi;</p>\r\n</li>\r\n<li>\r\n<p>d. Subbagian Tata Usaha; dan</p>\r\n</li>\r\n<li>\r\n<p>e. Kelompok Jabatan Fungsional.</p>\r\n</li>\r\n</ul>\r\n<center><input class=\"button\" type=\"button\" value=\"Website Pusat Penjaminan Mutu Pendidikan\" /></center>'),(10,'sarpras','<p><strong>Sarana &amp; Prasarana</strong></p>'),(11,'prestasi','<p>&nbsp;</p>\n<p>&nbsp;</p>\n<table style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; border-collapse: collapse; width: 600px; height: 1093px;\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td align=\"center\">\n<p>&nbsp;<strong><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: x-small;\">No.</span></span></strong></p>\n</td>\n<td align=\"center\"><strong><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: x-small;\">Nama Prestasi</span></span></strong></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">1.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Peserta Pertukaran ke Jepang Tingkat Nasional</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">2.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Babak Penyisihan SMA Liga Fisika SMA Tingkat Nasional di wakili SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">3.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Finalis Tingkat Nasional Olimpiade Biologi Kedokteran Dendi A Zainul F dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">4.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Nasional Pemrograman Komputer oleh Abdurrahman Dihya dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">5.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Finalis tingkat nasional Olimpiade Sain(Komputer) oleh Abdurrahman Dihya dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">6.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Finalis Tingkat Nasional Olimpiade Sains(Biologi) oleh Angga Pratama dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">7.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Finalis Tingkat Nasional Olimpiade Sains(Astronomi) oleh Salat Fuadi dari Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">8.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Nasional Lomba Sekolah Sehat dari TK Negeri Pembina</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">9.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Utama Tingkat Nasional Adiwiyata Utama SDN Pakujajar CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">10.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Utama Tingkat Nasional Adiwiyata Utama SDN Cipanengah CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">11.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Utama Tingkat Nasional Model Adiwiyata SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">12.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Nasional LCC PAI SMP oleh SMPN 5</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">13</span>.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara V Tingkat Nasional Pidato SMP Oleh Azmi dari SMPN 1 Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">14.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Harapan II Tingkat Nasional Lomba Keyboard oleh M.Rizki dari SMPN 8</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">15.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Nasional oleh Anggar dari SMA Mardi Yuana</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">16.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Wakil Propinsi Jawa Barat Tingkat Nasional Lomba MTQ SD dari SDN Sudajayahilir 4</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">17.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Wakil Propinsi Jawa Barat Tingkat Nasional Lomba pidatoPAI SD oleh Sungguh Pribadi dari SDN Dewi Sartika CBM.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">18.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Wakil Propinsi Jawa Barat Tingkat NasionalOlimpiade Sains oleh Sisca Fitriani dari SMAN 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">19.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Nasional O2SN Cabang Senam oleh Muhamad Faizal</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">20.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Siswa berprestasi SD oleh Sherlen dari SD MY 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">21.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Dokter kecil oleh Genta Maulana dari SDN Pakujajar CBM.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">22.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi KKR SMP oleh Fitriyani dari SMPN6</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">23.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Sekolah berbudaya lingkungan oleh SDN Gunung Puyuh CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">24.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Komite SD Berprestasi oleh Drs.Siskamto dari Komite SDN Gunung Puyuh CBM.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">25.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Keyboard Sekolah Inklusi oleh M.Rizki dari SMPN 8</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">26.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Stand Pameran Pramuka SLB dari SLB Budi Nurani</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">27.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Nasional Solo Siswa Inklusi dari SLB Budi Nurani</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">28.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi LSS SD dari SD Dayeh Luhur SBM.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">29.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat PropinsiLSS SMP dari SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">30.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi MIPA Aksel SD dari SDN Sriwedari.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">31.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi MIPA Aksel SMP dari SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">32.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara VI Tingkat Propinsi Seni Lukis Siswa Inklusi dari SDN Cisarua.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">33.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Bercerita Guru TK oleh Erningsih dari TK Sejahtera 2.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">34.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinnsi LCC dari SMPN 10.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">35.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Siswa berprestasi SMA oleh Prully Handayani dari SMAN 3</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">36.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Olimpiade Sains oleh Sisca Fitrianidari SMAN 1.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">37.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi LTUB dari SMUN 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">38.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi O2SN oleh Mutia dari SMAN 3</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">39.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Teknik Bubut oleh Rizpullah dari SMKN I</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">40.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat propinsi Wall and Floor Telling oleh Rendi Septian dari SMKN 1.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">41.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Brick Laying oleh Saepudin dari SMKN 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">42.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Mecanical CADD oleh Bangun Muhamad dari SMKN1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">43.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Cabinet Making oleh Eko Sulistio dari SMKN I</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">44.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Akuntansi oleh Bela Yuniarti dari SMKN 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">45.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Administrasi Perkantoran oleh Listia Dewi Andriyani dari SMKN 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">46.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi Tutor PAUD oleh Yayah Mardiyah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">47.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Lomba Karya Nyata oleh Kepala UPTD SKB Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">48.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Lomba Karya Nyata Pamong SKB oleh Ir.Zidni Hasanah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">49.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi Lomba Bintara Tingkat SD oleh Sungguh Ibadi Syakur</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">50.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi O2SN Cabang Senam oleh Muh.Faisal T dari SDN Cikole 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">51.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi O2SN Cabang Bulu Tangkis oleh Syakila Syifa\'i dari SDN Lamping 3</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">52.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi O2SN Cabang Karate oleh Mufqi Maulana S dari SDN Cipanas</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">53.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi O2SN Cabang Karate Oleh SDN Cisarua</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">54.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi POPDA Cabang Senam oleh Sita Aji dari SDN Cikole 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">55.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi POPDA Cabang Senam oleh M Faisal T dari SDN Cikole 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">56.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi POPDA Cabang Senam oleh Yadi erliandi dari SMPN 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">57.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi POPDA Cabang Senam Beregu oleh SMAN 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">58.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi POPDA Cabang Renang oleh Florencia M dari Mardi Waluya</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">59.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi POPDA Cabang Atletik oleh Zaenul Dahlan dari SMAN 4</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">60.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi POPDA Cabang Silat oleh Billy D dari SMAN 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">61.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Lomba Gugus TK oleh TKN Pembina Baros</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">62.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Lomba gugus SD oleh SDN Gunung Puyuh CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">63.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Lomba Matematika oleh Pasiad Yuniar Fajriyanii</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">64.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Harapan I Tingkat Propinsi lomba Matematika Pasiad oleh Fauzan Hilmi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">65.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Tuntas Paripurna Tingkat Propinsi Wajar Dikdas Award oleh P dan K Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">66.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Kepala SKB Teladan oleh Kepala UPTD SKB Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">67.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Wilayah II LTUB SD oleh SDN Gunung Puyuh CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">68.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Wilayah II LTUB SMP oleh SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">69.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Wilayah II LSS oleh TK Islam al Azhar</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">70.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Wilayah II LSS SD oleh SDN Cipanas</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">71.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">SMPN 10Kota Sukabumi menjadi Duta Propinsi Jawa BaratDalam Lomba UKS Tingkat Nasional Tahun 2009</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">72.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Kota Sukabumi menjadi Duta Propinsi Jawa Barat Dalam Lomba UKS Tingkat Nasional Tahun 2009</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">73.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Kota Sukabumi Mendapatkan Piala Wahana Tata Nugraha(WTN) dari Pemerintah Pusat sebanyak 6 kali.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">74.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Kota Sukabumi meraih Penghargaan Adiwiyata Tingkat Nasional</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">75.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Dokter Kecil Tingkat Nasional oleh Fauzan Hilmi Ramadhan dari SDN Benteng 1 Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">76.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I KKR SMP Tingkat Nasional oleh Yanuar Azhar Pratama dari MTS Syamsul Uluum Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">77.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I KKR SMA Tingkat Nasional Oleh Diah dari SMKN2 Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">78.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I LCC Tim Pembina UKS Tingkat Nasional oleh Eri Nasution dari Dinas Kesehatan Kota Sukabumi Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">79.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Harapan II KKRSMP Tingkat Nasional oleh Monic Swandari dari SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">80.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I KKR SMA Tingkat Nasional oleh Yuni Anggia Purnama dari SMAN 3</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">81.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I LCC TIm Pembina UKS Tingkat Nasional oleh Eri Nasution dari Dinas Kesehatan Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">82.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Kota Sukabumi Meraih Peringkat Kedua Terbaik di Indonesia Dalam EVALUASI LAPORAN AKUNTABILITAS KINERJA INSTANSI PEMERINTAH (LAKIP)</span></td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>');
/*!40000 ALTER TABLE `informasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `layanan`
--

DROP TABLE IF EXISTS `layanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `layanan` (
  `id_layanan` int(12) NOT NULL AUTO_INCREMENT,
  `kategori` int(2) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` longtext NOT NULL,
  `author` varchar(30) NOT NULL,
  `status` enum('publish','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_layanan`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `layanan`
--

LOCK TABLES `layanan` WRITE;
/*!40000 ALTER TABLE `layanan` DISABLE KEYS */;
/*!40000 ALTER TABLE `layanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level_user`
--

DROP TABLE IF EXISTS `level_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level_user` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level_user`
--

LOCK TABLES `level_user` WRITE;
/*!40000 ALTER TABLE `level_user` DISABLE KEYS */;
INSERT INTO `level_user` VALUES (1,'Superadmin'),(2,'Administrator'),(3,'Manager'),(4,'Publisher'),(5,'Author'),(6,'Member');
/*!40000 ALTER TABLE `level_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linkterkait`
--

DROP TABLE IF EXISTS `linkterkait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `linkterkait` (
  `id_link` int(12) NOT NULL AUTO_INCREMENT,
  `singkatan` varchar(15) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL DEFAULT '#',
  `img` varchar(100) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_link`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linkterkait`
--

LOCK TABLES `linkterkait` WRITE;
/*!40000 ALTER TABLE `linkterkait` DISABLE KEYS */;
INSERT INTO `linkterkait` VALUES (9,'BNK','Badan Narkotika Sukabumi','http://www.sukabumikota.go.id/bnk.asp','http://www.sukabumikota.go.id/gbr/logobnk.png','terkait'),(10,'PDAM','Tirta Bumi Wibawa','http://pdamtirtabumiwibawa.co.id/','http://www.sukabumikota.go.id/gbr/pdam.png','terkait'),(13,'Bappeda','Bappeda Kota Sukabumi','http://www.bappeda.sukabumikota.go.id','','opd'),(14,'PN','Pengadilan Negeri','http://www.pn-sukabumikota.go.id','','opd'),(15,'Dishub','Dinas Perhubugan','http://www.dishub.sukabumikota.go.id','','opd'),(16,'KPU','Komisi Pemilihan Umum','http://www.kpu-sukabumikota.go.id','','opd'),(17,'DPRD Sukabumi','Dewan Perwakilan Rakyat Daerah','http://www.dprd-sukabumikota.go.id','','opd'),(18,'KEMENAG','Kementrian Agama RI Kota Sukabumi','http://www.sukabumikota.kemenag.go.id','','opd'),(19,'PPDB','Siap PPDB','http://www.kotasukabumi.siap-ppdb.com','','opd'),(20,'RSPD','RSPD','http://www.rspdkotasukabumi.com','','opd'),(21,'Disdik Sukabumi','Dinas Pendidikan Kota Sukabumi','http://sukabumikota.siap.web.id','','opd');
/*!40000 ALTER TABLE `linkterkait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `panduan`
--

DROP TABLE IF EXISTS `panduan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `panduan` (
  `id_panduan` int(12) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  PRIMARY KEY (`id_panduan`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panduan`
--

LOCK TABLES `panduan` WRITE;
/*!40000 ALTER TABLE `panduan` DISABLE KEYS */;
/*!40000 ALTER TABLE `panduan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pemerintahan`
--

DROP TABLE IF EXISTS `pemerintahan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pemerintahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) DEFAULT NULL,
  `isi` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pemerintahan`
--

LOCK TABLES `pemerintahan` WRITE;
/*!40000 ALTER TABLE `pemerintahan` DISABLE KEYS */;
INSERT INTO `pemerintahan` VALUES (1,'dprd','<p><strong>SEKRETARIAT DPRD KOTA SUKABUMI</strong></p>\n\n<p><img src=\"http://sukabumikota.go.id/gbr/dprd.jpg\" style=\"height:111px; width:127px\" /></p>\n\n<p>Jl. Ir. H. Juanda Kota Sukabumi Telp. (0266) 221123 Ext. 162</p>\n\n<table border=\"1\" style=\"width:500px\">\n	<tbody>\n		<tr>\n			<td>\n			<p>Sekretaris DPRD</p>\n			</td>\n			<td>\n			<p>Drs. H. Yudi Wiharsa, M.Si.</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Kabag Umum, Perlengkapan dan Keuangan</p>\n			</td>\n			<td>\n			<p>Sutarjo, S.E.</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Kabag Produk Hukum &amp; Dokumentasi</p>\n			</td>\n			<td>\n			<p>Tris Pancahati Endjo, SH.</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Kabag Rapat, Risalah dan Informasi</p>\n			</td>\n			<td>\n			<p>Asep Lela Sukmana, S.H., M.Si.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n'),(2,'walikota','<p><img src=\"http://2.bp.blogspot.com/-FRPeQMb18P4/URc9RVxvrZI/AAAAAAAACWI/vX8k3ijsTIA/s1600/logo_kota_sukabumi_by_theguh.jpg\" style=\"height:91px; width:123px\" /></p>\n\n<p><strong>Kampanye Pemilihan Walikota Dan Wakil Walikota Kota Sukabumi</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Tahapan kampanye pemilukada Kota Sukabumi akan dimulai pada Kamis (7/2<strong>)</strong>mendatang. Setiap calon wali kota dan wakil wali kota Sukabumi hanya diberikan jatah tiga kali putaran kampanye dari 7-20 Februari mendatang.<br />\n<br />\nAda empat pasangan calon wali kota Sukabumi yang akan berkampanye. Mereka adalah Andri Hamami-Ahmad Seha Nuklir (Partai Golkar), Mohammad Muraz-Achmad Fahmi (Demokrat-PKS-PKB), Sanusi Harjadireja-Yeyet Hudayat (PAN-Sejumlah partai nonparlemen), dan Mulyono-Jona Arizona (PDIP-PPP).<br />\n<br />\n&quot;Setiap calon akan diberkan kesempatan sebanyak tiga kali putaran kampanye selama 12 hari,&quot; ujar Keua Divisi Kampanye Komisi Pemilihan Umum (KPU) Kota Sukabumi, Dudi Nurwanda, kepada wartawan, Selasa <strong>(5/2)</strong>.<br />\n<br />\nPara kandidat dibebaskan untuk memilih kampanye baik secara tertutup maupun terbuka.<br />\n<br />\nMenurut Dudi, KPU juga menyiapkan sebanyak tujuh titik lokasi kampanye terbuka yang tersebar di tujuh kecamatan. Para calon wali kota bisa memanfaatkan lokasi tersebut untuk menggelar kampanye.<br />\n<br />\nDudi mengatakan, pada hari pertama masa kampanye akan diisi dengan penyampaian visi dan misi empat calon wali kota di sidang paripurna DPRD Kota Sukabumi. Pada hari kedua, nantinya akan digelar kampanye bersama dengan melakukan konvoi di sekitar jalan utama Kota Sukabumi.(<strong>r03</strong>)</p>\n\n<p>&nbsp;</p>\n'),(3,'sekda','<p><strong>BAGIAN TATA PEMRINTAHAN MERUPAKAN SALAH SATU BAGIAN YANG ADA SEKRETARIAT DAERAH KOTA SUKABUMI, LANGSUNG DIBAWAH KENDALI ASISTEN PEMERINTAHAN. BERADASARKAN PERATURAN DAERAH NOMOR 6 TAHUN 2008 TENTANG PEMBENTUKAN DAN SUSUNAN ORGANISASI PERANGKAT DAERAH KOTA SUKABUMI, BAGIAN TATA PEMERINTAHAN DIPIMPIN OLEH KEPALA BAGIAN DAN DIBANTU OLEH TIGA KEPALA SUB BAGIAN YAITU KEPALA SUB BAGIAN PEMERINTAHAN UMUM, KEPALA SUB BAGIAN PERANGKAT DAERAH KECAMATAN DAN KELURAHAN DAN KEPALA SUB BAGIAN OTONOMI DAERAH.<br />\n<br />\nSEBELUM DIBERLAKUKAN PERATURAN DAERAH NOMPR 6 TAHUN 2008, YAITU PERATURAN DAERAH NOMOR 8 TAHUN 2003, BAGIAN TATA PEMERINTAHAN TERDIRI DARI KEPALA SUB BAGIAN PEMERINTAHAN UMUM DAN OTONOMI DAERAH, KEPALA SUB BAGIAN PERTANAHAN, DAN KEPALA SUB BAGIAN PERANGKAT WILAYAH. </strong><br />\n<br />\n&nbsp;</p>\n\n<ul>\n	<li><strong>URUSAN PERTANAHAN YANG MERUPAKAN TUPOKSI SUB BAGIAN PERTANAHAN, DILAKSANAKAN OLEH KEPALA SUB BAGIAN PEMERINTAHAN UMUM.</strong></li>\n	<li><strong>PENYUSUNAN LAPORAN KETERANGAN PERTANGGUNGGJAWABAN WALIKOTA SUKABUMI YANG SEBELUMNYA MENJADI TUPOKSI SUB BAGIAN PEMERINTAHAN UMUM, SEMENJAK DIBERLAKUKANNYA PERDA NOMOR 6 TAHUN 2008, MENJADI TUGAS POKOK BIDANG PELAPORAN DI BAPPEDA</strong></li>\n	<li><strong>LOMBA KELURAHAN YANG SEBELUMNYA DILAKSANAKAN OLEH KEPALA SUB BAGIAN PERANGKAT WILAYAH, SEMENJAK DIBERLAKUKANNYA PERDA NOMOR 6 TAHUN 2008, MENJADI TUGAS POKOK BIDANG PEMBERDAYAAN DI BPMPKB</strong></li>\n</ul>\n\n<p><br />\n<strong>SUMBER DAYA MANUSIA YANG DIMILIKI BAGIAN TATA PEMERINTAHAN, SECARA TERUS MENERUS MENGALAMI PERUBAHAN SECARA DINAMIS DAN MUMPUNI, SEHINGGA MENJADI BAROMETER UNIT KERJA YANG ADA DI PEMERINTAH KOTA SUKABUMI.</strong></p>\n'),(4,'staf_walikota','<p><img src=\"http://2.bp.blogspot.com/-gMxMuN535vA/TwP-QqzyNCI/AAAAAAAABXg/07VBe4Cs4kM/s320/DSCN5122.JPG\" style=\"height:290px; width:390px\" /></p>\n\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:center\"><strong><em>Para Asisten Dan Staf &nbsp;Ahli Walikota Lakukan SidakApel Pagi</em></strong></td>\n		</tr>\n	</tbody>\n</table>\n\n<p><strong><em>&nbsp;</em></strong></p>\n\n<p><strong><em>Sukabumi,</em></strong></p>\n\n<p><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dalam upaya meningkatan disiplin pegawai dilingkungan Pemda Kota Sukabumi, Asisten Pemerintahan, Prekonomian dan pembangunan serta asisten administrasi dan Staf ahli Walikota, atas nama Walikota Sukabumi, melakukan Inspeksi Mendadak ( Sidak) yang dilakukan pada kesempatan apel pagi tahun baru , minggu pertama hari ketiga, rabu 4 januari &nbsp;2012. di halaman balaikota.</em></strong></p>\n\n<p><strong><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ketika Para Asisten dan Staf ahli Walikota, Cek and &nbsp;riceck ke lapangan , &nbsp;sesuai dengan absensi yang ada, ternyata bagian Hukum &nbsp;juara, yakni tingkat kehadiran karyawatinya mencapai 100 prosen /hadir semua. sehingga Bagian hukum dibawah asisten Pemerintahan Setda, patut dijadikan contoh bagi Organisasi Perangkat Daerah ( OPD ) lainnya.</em></strong></p>\n\n<p><strong><em>Menurut Asisten Pemerintahan Setda Kota Sukabumi, Drs. H. Ipin Syaripin, MSi, Sidak ini akan dilakukan secara bertahap &nbsp;pertama mulai dari tingkat kehadiran, kedua kerapihan cara berpakaian, ketiga kelengkapan atribut dan keempat tentang Pembinaan &nbsp; baris berbaris ( PBB ).&nbsp;</em></strong></p>\n\n<p><strong><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Melalui &nbsp; &nbsp;disiplin apel pagi &nbsp;diharapkan mampu memacu semua Pegawai Negeri Sipil ( PNS ) dilingkungan Pemda Kota Sukabumi, dalam rangka &nbsp;meningkatkan mutu pelayanan kepada masyarakat.&quot; Pemda Kota Sukabumi sesuai dengan regulasi yang ada telah melakukan reformasi birokrasi dari penguasa menjadi pelayan masyarakat&quot;.</em></strong><strong><em> Sesuai dengan SK Walikota Sukabumi, nomor 29 tahun 2009, tentang pelakasanaan 5 hari kerja dilingkungan Pemerintah Kota Sukabumi dan untuk memenuhi ketentuan hari dan jam kerja efektif selama 37,5 jam diatur dengan ketentuan , senin sampai dengan &nbsp;kamis dari pukul 07.30 s/d/ pukul 16.00 wib, itirahat pukul 12.00 s/d pukul 13.00 wib.sedangkan Untuk hari jumat dari pukul 07.30 wib s/d 16.30 wib dan untuk istirahat dari pukul 11.30 s/d pukul 13.00 wib.</em></strong></p>\n\n<p><strong><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pelaksanaan 5 hari kerja tersebut tidak berlaku bagi Organisasi Perangkat Daerah ( OPD ) dan Unit kerja yang memberikan pelayanan kepada masyarakat seperti Pelayanan kesehatan (Rumah Sakit, Puskesmas, Pemadam Kebakaran, kebersihan, Sandi dan telekomunikasi.termasuk Lembaga pendidikan baik formal maupun non formal.</em></strong></p>\n'),(5,'skpd','<h2 style=\"color:rgb(0, 0, 0); font-weight:normal\">Susun Program, SKPD Harus Berpedoman pada Visi Misi Walikota Sukabumi</h2>\n\n<p>&nbsp;</p>\n\n<p><strong>RENCANA Pembangunan Jangka Menengah Daerah (RPJMD) Kota Sukabumi&nbsp; merupakan penjabaran visi misi dan program kepala daerah. Untuk itu, penyusunan RPJMD disusun selaras dengan visi misi dan program Walikota dan Wakil Walikota Sukabumi lima tahun mendatang yakni, Dengan Iman dan Taqwa Mewujudkan Pemerintahan Rahmatan Lil &lsquo;Alamin</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Kepala Bidang (Kabid) Pengkajian Evaluasi dan Pelaporan Badan Perencanaan Pembangunan Daerah (Bappeda) Kota Sukabumi, Fahrurozi&nbsp; mengatakan, visi tersebut&nbsp; telah&nbsp; diuraikan dalam misi.</p>\n\n<p>&ldquo;Fungsinya sebagai penyelaras bagi komponen penyelenggara pemerintahan dalam menjalankan programnya.Sedangkan misi Pemkot Sukabumi lima tahun mendatang yakni&nbsp; mewujudkan reformasi birokrasi menuju sumber daya manusia yang beriman, bertaqwa dan berilmu,&rdquo; kata Fahrurozi di ruang kerjanya, Kamis (10/10) kemarin.</p>\n\n<p>Tidak hanya itu, kata dia, RPJMD juga harus mewujudkan tata kelola pemerintahan yang baik, bersih, berwibawa, jujur, adil, profesional, mendengar dan melayani masyarakat dengan ikhlas. Selain itu juga harus mewujudkan pelayanan dasar yang lebih baik dan berkualitas serta mendorong pertumbuhan ekonomi dan daya saing daerah, juga meningkatkan keamanan, ketertiban, keindahan, dan kebersihan kota.</p>\n\n<p>&ldquo;Dalam implementasinya diperlukan strategi pembangunan yang tepat, dan disesuaikan dengan kondisi lingkungan internal dan eksternal pada tahun awal perencanaan. Untuk itu harus dilaksanakan dengan sungguh-sungguh, apalagi, RPJMD merupakan kesepakatan antara eksekutif dan legislatif,&rdquo; katanya.</p>\n\n<p>Menurutnya, RPJMD fase ke-III ini semakin baik. Sebab, daya saing perekonomian Kota Sukabumi semakin kuat, kompetitif dan terpadu, apalagi dengan terpenuhinya infrastruktur yang memadai. Hal itu karena semakin&nbsp; mantapnya&nbsp; kerjasama pemerintah dan swasta.</p>\n\n<p>&ldquo;Selain itu, penataan kelembagaan ekonomi untuk mendorong peningkatan efisiensi, produktivitas, penguasaan dan penerapan teknologi oleh masyarakat dalam kegiatan perekonomian juga semakin baik,&rdquo; ujarnya.</p>\n\n<p>Pada tahapan&nbsp; ini katanya, pembangunan diarahkan pada penciptaan lingkungan bisnis yang nyaman dan kondusif dan pengembangan kemampuan inovasi. Kemudian, pengembangan industri kecil yang tangguh, perluasan kawasan perdagangan di daerah agar cepat tumbuh. Selanjutnya, pemberdayaan produk&nbsp;&nbsp; lokal serta pengembangan pasar dalam&nbsp; dan luar negeri juga semakin baik.</p>\n\n<p>Dijelaskan,&nbsp; Visi, Misi, dan Program Kepala Daerah&nbsp; merupakan pedoman bagi setiap Kepala Satuan Kerja Perangkat Daerah (SKPD) dalam menyusun Rencana Strategis (Renstra) dan&nbsp; pedoman untuk menyusun RKPD. Kemudian, sebagai pedoman dalam perencanaan penganggaran Pemerintah Kota Sukabumi setiap tahun.</p>\n\n<p>Untuk itu, jelasnya, ditetapkan kaidah-kaidah umum pelaksanaannya.&nbsp; Diantaranya, pemerintah dan masyarakat termasuk dunia usaha, berkewajiban untuk mendukung melaksanakan program-program dalam RPJMD. Walikota dan Wakil Walikota Sukabumi wajib mengarahkan pelaksanaan RPJMD dengan menggerakkan potensi dan kekuatan daerah secara optimal.</p>\n\n<p>Kemudian, seluruh SKPD wajib menyusun Rencana Strategis (Renstra), yang memuat visi, misi, tujuan, strategi, kebijakan, program, kegiatan pokok, dan unggulan pembangunan sesuai dengan tugas dan fungsinya. Hal itu dijadikan sebagai&nbsp; acuan dalam menyusun Rencana Kerja (Renja) SKPD setiap tahun. &ldquo;Untuk menjamin konsistensi dan kontinuitas program, kegiatan beserta pendanaannya,&nbsp; penyusunan Renstra SKPD harus berpedoman pada Dokumen RPJMD Kota Sukabumi Tahun 2013-2018,&rdquo; tutup.(GUN)</p>\n'),(6,'kecamatan','<table border=\"0\" style=\"height:364px; width:757px\">\n	<tbody>\n		<tr>\n			<td>\n			<p><strong>NAMA CAMAT KECAMATAN KOTA SUKABUMI</strong></p>\n			&nbsp;\n\n			<table border=\"1\" style=\"width:100%\">\n				<tbody>\n					<tr>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">No</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Kecamatan</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Nama</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">NIP</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Tanggal Lahir</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Jabatan</th>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">1</td>\n						<td style=\"text-align:left\">GunungPuyuh</td>\n						<td style=\"text-align:left\">H. WAWAN G PERMANA,S.IP.,M.SI</td>\n						<td style=\"text-align:center\">19570810 198101 1 005</td>\n						<td style=\"text-align:left\">Sukabumi, 10 Agustus 1957</td>\n						<td style=\"text-align:left\">Pembina Tk I, IV/b</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">2</td>\n						<td style=\"text-align:left\">Cikole</td>\n						<td style=\"text-align:left\">SUHERMAN S.IP</td>\n						<td style=\"text-align:center\">19580103 198101 1 002</td>\n						<td style=\"text-align:left\">Sukabumi, 03 Januari 1958</td>\n						<td style=\"text-align:left\">Pembina Tk I, IV/b</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">3</td>\n						<td style=\"text-align:left\">Citamiang</td>\n						<td style=\"text-align:left\">PUNJUL SAEPUL HAYAT, S.STP, M.</td>\n						<td style=\"text-align:center\">19780929 199810 1 001</td>\n						<td style=\"text-align:left\">Sukabumi, 29 September 1978</td>\n						<td style=\"text-align:left\">Pembina, IV/a</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">4</td>\n						<td style=\"text-align:left\">Warudoyong</td>\n						<td style=\"text-align:left\">YADI MULYADI, S.STP.,M.Si</td>\n						<td style=\"text-align:center\">19780626 199711 1 001</td>\n						<td style=\"text-align:left\">Sukabumi, 06 Juni 1978</td>\n						<td style=\"text-align:left\">Pembina, IV/a</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">5</td>\n						<td style=\"text-align:left\">Baros</td>\n						<td style=\"text-align:left\">ASEP SUHENDRAWAN, S.Sos</td>\n						<td style=\"text-align:center\">19660927 198803 1 008</td>\n						<td style=\"text-align:left\">Sukabumi, 27 September 1966</td>\n						<td style=\"text-align:left\">Pembina, IV/a</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">6</td>\n						<td style=\"text-align:left\">Lembursitu</td>\n						<td style=\"text-align:left\">AYI JAMIAT, S.STP.,M.SI</td>\n						<td style=\"text-align:center\">19760810 199511 1 001</td>\n						<td style=\"text-align:left\">Agrabinta,10 Agustus 1976</td>\n						<td style=\"text-align:left\">Pembina, IV/a</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">7</td>\n						<td style=\"text-align:left\">Cibeureum</td>\n						<td style=\"text-align:left\">ADRIAN HARIADI, S.STP</td>\n						<td style=\"text-align:center\">19770303 199603 1 002</td>\n						<td style=\"text-align:left\">Ujung Pandang, 03 Maret 1977</td>\n						<td style=\"text-align:left\">Pembina, IV/a</td>\n					</tr>\n				</tbody>\n			</table>\n			<br />\n			<p><strong>NAMA SEKERTARIS CAMAT KECAMATAN KOTA SUKABUMI</strong></p>\n			&nbsp;\n\n			<table border=\"1\" style=\"width:100%\">\n				<tbody>\n					<tr>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">No</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Kecamatan</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Nama</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">NIP</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Tanggal Lahir</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Jabatan</th>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">1</td>\n						<td style=\"text-align:left\">Gunung Puyuh</td>\n						<td style=\"text-align:left\">Drs. MIMBAR SOLIHIN, M.Si</td>\n						<td style=\"text-align:center\">19670320 199312 1 001</td>\n						<td style=\"text-align:left\">Sukabumi, 20 Maret 1967</td>\n						<td style=\"text-align:left\">Pembina VI/a</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">2</td>\n						<td style=\"text-align:left\">Cikole</td>\n						<td style=\"text-align:left\">Dra. YUNITA NUSMERI SITEPU, MM</td>\n						<td style=\"text-align:center\">19680603 198910 2 002</td>\n						<td style=\"text-align:left\">Sukabumi, 03 Juni 1968</td>\n						<td style=\"text-align:left\">Pembina, IV/a</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">3</td>\n						<td style=\"text-align:left\">Citamiang</td>\n						<td style=\"text-align:left\">SYARIF BASTAMAN, S.IP</td>\n						<td style=\"text-align:center\">19570810 198103 1 018</td>\n						<td style=\"text-align:left\">Sukabumi, 10 Agustus 1957</td>\n						<td style=\"text-align:left\">Pembina, IV/a</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">4</td>\n						<td style=\"text-align:left\">Warudoyong</td>\n						<td style=\"text-align:left\">&nbsp;</td>\n						<td style=\"text-align:center\">&nbsp;</td>\n						<td style=\"text-align:left\">&nbsp;</td>\n						<td style=\"text-align:left\">&nbsp;</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">5</td>\n						<td style=\"text-align:left\">Baros</td>\n						<td style=\"text-align:left\">Drs. R. SAMIARTO, M.SI</td>\n						<td style=\"text-align:center\">19600216 199203 1 004</td>\n						<td style=\"text-align:left\">Bandung, 16 Februari 1966</td>\n						<td style=\"text-align:left\">Pembina, IV/a</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">6</td>\n						<td style=\"text-align:left\">Lembursitu</td>\n						<td style=\"text-align:left\">ENCEP SURYATNA, SIP</td>\n						<td style=\"text-align:center\">19570204 198503 1 013</td>\n						<td style=\"text-align:left\">Sukabumi, 04 Februari 1957</td>\n						<td style=\"text-align:left\">Pembina, IV/a</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">7</td>\n						<td style=\"text-align:left\">Cibeureum</td>\n						<td style=\"text-align:left\">FAJAR RAJASA, S.STP</td>\n						<td style=\"text-align:center\">19800809 200012 1 001</td>\n						<td style=\"text-align:left\">Sukabumi, 09 Agustus 1980</td>\n						<td style=\"text-align:left\">Penata Tk. I, III/d</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt=\"\" src=\"http://tapem.sukabumikota.go.id/images/spacer.gif\" style=\"height:1px; width:1px\" />&nbsp;&nbsp;&nbsp;</p>\n'),(7,'kelurahan','<table border=\"0\" style=\"height:364px; width:757px\">\n	<tbody>\n		<tr>\n			<td>\n			<p><strong>ALAMAT KANTOR KELURAHAN KOTA SUKABUMI</strong></p>\n			&nbsp;\n\n			<table border=\"1\" style=\"width:100%\">\n				<tbody>\n					<tr>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">No</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Kelurahan</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">Alamat Kantor</th>\n						<th style=\"background-color:rgb(255, 208, 0); text-align:center\">No. Telp. Kantor</th>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">1</td>\n						<td style=\"text-align:left\">Gunung Puyuh</td>\n						<td style=\"text-align:left\">Jl. Gotong Royong No. 09</td>\n						<td style=\"text-align:center\">(0266)222391</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">2</td>\n						<td style=\"text-align:left\">Karamat</td>\n						<td style=\"text-align:left\">Jl. Bhineka Karya No. 116</td>\n						<td style=\"text-align:center\">(0266)231679</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">3</td>\n						<td style=\"text-align:left\">Sriwidari</td>\n						<td style=\"text-align:left\">Jl. Bhayangkara No.188</td>\n						<td style=\"text-align:center\">(0266)240253</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">4</td>\n						<td style=\"text-align:left\">Karang Tengah</td>\n						<td style=\"text-align:left\">Jl. KHA. Sanusi No. 92</td>\n						<td style=\"text-align:center\">(0266)229765</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">5</td>\n						<td style=\"text-align:left\">Salabatu</td>\n						<td style=\"text-align:left\">Jl. Kabandungan No.183</td>\n						<td style=\"text-align:center\">(0266)219143</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">6</td>\n						<td style=\"text-align:left\">Cikole</td>\n						<td style=\"text-align:left\">Jln. R. SYAMSUDIN. SH NO. 57</td>\n						<td style=\"text-align:center\">(0266)210628</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">7</td>\n						<td style=\"text-align:left\">Gunung Parang</td>\n						<td style=\"text-align:left\">Jl. Mesjid No.17</td>\n						<td style=\"text-align:center\">(0266)222892</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">8</td>\n						<td style=\"text-align:left\">Kebonjati</td>\n						<td style=\"text-align:left\">Jl. Siliwangi GG.H.Marjuki I No. 1</td>\n						<td style=\"text-align:center\">(0266)211144</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">9</td>\n						<td style=\"text-align:left\">Cisarua</td>\n						<td style=\"text-align:left\">JL. Ciaul Pasir No.55</td>\n						<td style=\"text-align:center\">(0266)215556</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">10</td>\n						<td style=\"text-align:left\">Subangjaya</td>\n						<td style=\"text-align:left\">Jl. Subangjaya NO. 87 A</td>\n						<td style=\"text-align:center\">(0266)235755</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">11</td>\n						<td style=\"text-align:left\">Tipar</td>\n						<td style=\"text-align:left\">Jl. Pemuda I No.33</td>\n						<td style=\"text-align:center\">(0266)222180</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">12</td>\n						<td style=\"text-align:left\">Nanggeleng</td>\n						<td style=\"text-align:left\">Jl. Pelda Suryanta No. 45</td>\n						<td style=\"text-align:center\">(0266)221525</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">13</td>\n						<td style=\"text-align:left\">Gedongpanjang</td>\n						<td style=\"text-align:left\">Jl. Pramuka No.02</td>\n						<td style=\"text-align:center\">(0266)224817</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">14</td>\n						<td style=\"text-align:left\">Cikondang</td>\n						<td style=\"text-align:left\">Jl. Pramuka No.16</td>\n						<td style=\"text-align:center\">(0266)219387</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">15</td>\n						<td style=\"text-align:left\">Warudoyong</td>\n						<td style=\"text-align:left\">Jl. Pabuaran No.129</td>\n						<td style=\"text-align:center\">(0266)242436</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">16</td>\n						<td style=\"text-align:left\">Nyomplong</td>\n						<td style=\"text-align:left\">Jl. Pabuaran No.45</td>\n						<td style=\"text-align:center\">(0266)222227</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">17</td>\n						<td style=\"text-align:left\">Dayeuh Luhur</td>\n						<td style=\"text-align:left\">Jl. Sawah bera No.155</td>\n						<td style=\"text-align:center\">(0266)214640</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">18</td>\n						<td style=\"text-align:left\">Sukakarya</td>\n						<td style=\"text-align:left\">Jl. Cemerlang No. 156</td>\n						<td style=\"text-align:center\">(0266)244499</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">19</td>\n						<td style=\"text-align:left\">Benteng</td>\n						<td style=\"text-align:left\">Jl. Babakan Sirna No.42</td>\n						<td style=\"text-align:center\">(0266)215553</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">20</td>\n						<td style=\"text-align:left\">Baros</td>\n						<td style=\"text-align:left\">Jl. Baros Km.5 No.255</td>\n						<td style=\"text-align:center\">(0266)241378</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">21</td>\n						<td style=\"text-align:left\">Jayaraksa</td>\n						<td style=\"text-align:left\">Jl. Lingkar Selatan No. 03</td>\n						<td style=\"text-align:center\">(0266)215513</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">22</td>\n						<td style=\"text-align:left\">Jayamekar</td>\n						<td style=\"text-align:left\">Jl. Proklamasi No.159</td>\n						<td style=\"text-align:center\">(0266)215511</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">23</td>\n						<td style=\"text-align:left\">Sudajayahilir</td>\n						<td style=\"text-align:left\">Jl. Widyakrama No.1</td>\n						<td style=\"text-align:center\">(0266)233479</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">24</td>\n						<td style=\"text-align:left\">Cipanengah</td>\n						<td style=\"text-align:left\">Jl. Pelabuhan II KM.5 No.155</td>\n						<td style=\"text-align:center\">(0266)243945</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">25</td>\n						<td style=\"text-align:left\">Situmekar</td>\n						<td style=\"text-align:left\">Jl. Pelabuhan II KM.5,5</td>\n						<td style=\"text-align:center\">(0266)215517</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">26</td>\n						<td style=\"text-align:left\">Lembursitu</td>\n						<td style=\"text-align:left\">Jl. Pelabuhan II Km.7 No.277</td>\n						<td style=\"text-align:center\">(0266)239801</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">27</td>\n						<td style=\"text-align:left\">Cikundul</td>\n						<td style=\"text-align:left\">Jl. Merdeka No. 293</td>\n						<td style=\"text-align:center\">(0266)240088</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">28</td>\n						<td style=\"text-align:left\">Sindangsari</td>\n						<td style=\"text-align:left\">Jl. Sindangsari No. 77</td>\n						<td style=\"text-align:center\">(0266)219389</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">29</td>\n						<td style=\"text-align:left\">Cibeureumhilir</td>\n						<td style=\"text-align:left\">Jl. Ciandam Km.1</td>\n						<td style=\"text-align:center\">(0266)218380</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">30</td>\n						<td style=\"text-align:left\">Babakan</td>\n						<td style=\"text-align:left\">Jl. Pembangunan No. 49</td>\n						<td style=\"text-align:center\">(0266)234791</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">31</td>\n						<td style=\"text-align:left\">Sindangpalay</td>\n						<td style=\"text-align:left\">Jl. Garuda No.1</td>\n						<td style=\"text-align:center\">(0266)240878</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">32</td>\n						<td style=\"text-align:left\">Limusnunggal</td>\n						<td style=\"text-align:left\">Jl. Limusnunggal No.103</td>\n						<td style=\"text-align:center\">(0266)233709</td>\n					</tr>\n					<tr>\n						<td style=\"text-align:center\">33</td>\n						<td style=\"text-align:left\">Citamiang</td>\n						<td style=\"text-align:left\">-</td>\n						<td style=\"text-align:center\">-</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n'),(8,'rtrw','<p>JUMLAH RT, RW, DESA/KELURAHAN MENURUT KECAMATAN DI KABUPATEN SUKABUMI TAHUN 2011<br />\n&nbsp;<br />\nKecamatan Desa*) Kelurahan*) RW RT<br />\n&nbsp;<br />\n[1] [2] [3] [4] [5]<br />\n01 CIEMAS 9 - 75 341<br />\n02 CIRACAP 8 - 72 348<br />\n03 WALURAN 6 - 44 219<br />\n04 SURADE 11 1 82 369<br />\n05 CIBITUNG 6 - 31 132<br />\n06 JAMPANGKULON 10 1 95 254<br />\n07 CIMANGGU 6 - 30 127<br />\n08 KALIBUNDER 7 - 29 150<br />\n09 TEGALBULEUD 8 - 41 199<br />\n10 CIDOLOG 5 - 39 121<br />\n11 SAGARANTEN 12 - 56 235<br />\n12 CIDADAP 6 - 20 119<br />\n13 CURUGKEMBAR 7 - 42 165<br />\n14 PABUARAN 7 - 46 185<br />\n15 LENGKONG 5 - 48 176<br />\n16 PALABUHANRATU 9 1 72 283<br />\n17 SIMPENAN 7 - 46 200<br />\n18 WARUNGKIARA 12 - 108 357<br />\n19 BANTARGADUNG 7 - 48 227<br />\n20 JAMPANGTENGAH 11 - 102 461<br />\n21 PURABAYA 7 - 55 289<br />\n22 CIKEMBAR 10 - 103 435<br />\n23 NYALINDUNG 10 - 79 380<br />\n24 GEGERBITUNG 7 - 74 288<br />\n25 SUKARAJA 9 - 202 587<br />\n26 KEBONPEDES 5 - 59 698<br />\n27 CIREUNGHAS 5 - 82 256<br />\n28 SUKALARANG 6 - 49 184<br />\n29 SUKABUMI 6 - 61 199<br />\n30 KADUDAMPIT 9 - 89 319<br />\n31 CISAAT 13 - 211 698<br />\n32 GUNUNGGURUH 7 - 113 420<br />\n33 CIBADAK 9 1 334 1.222<br />\n34 CICANTAYAN 8 - 73 338<br />\n35 CARINGIN 9 - 63 209<br />\n36 NAGRAK 10 - 123 478<br />\n37 CIAMBAR 6 - 70 237<br />\n38 CICURUG 12 1 97 476<br />\n39 CIDAHU 8 - 42 196<br />\n40 PARAKANSALAK 6 - 54 230<br />\n41 PARUNGKUDA 8 - 84 213<br />\n42 BOJONGGENTENG 5 - 34 148<br />\n43 KALAPANUNGGAL 7 - 95 386<br />\n44 CIKIDANG 12 - 109 441<br />\n45 CISOLOK 13 - 127 324<br />\n46 CIKAKAK 9 - 56 208<br />\n47 KABANDUNGAN 6 - 43 198<br />\n&nbsp;<br />\nJUMLAH 381 5 3.707 14.205<br />\nSumber : BPMD Kabupaten Sukabumi ( *)<br />\nuntuk Desa dan Kelurahan adalah data tahun 2012)</p>\n'),(9,'kim','<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"height:733px; width:670px\">\n	<tbody>\n		<tr>\n			<td><strong>Menteri Komunikasi dan Informatika Bapak Tifatul Sembiring membuka Pekan Informasi Nasional (PIN) Tahun 2011 di Pendopo Taman Budaya Jawa Tengah, di Solo, Sabtu (21/05/2011).</strong></td>\n		</tr>\n		<tr>\n			<td><strong>Reporter : Yuli Noviawan</strong></td>\n		</tr>\n		<tr>\n			<td>&nbsp;</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Menteri Komunikasi dan Informatika Bapak Tifatul Sembiring membuka Pekan Informasi Nasional 2011 di Pendopo Taman Budaya Jawa Tengah, di Solo, Sabtu (21/05/2011).<br />\n			<br />\n			Pembukaan yang ditandai dengan pemukulan gong tersebut juga dihadiri oleh Gubernur Jawa Tengah Bibit Waluyo serta Walikota Surakarta Joko Widodo.<br />\n			<br />\n			Dalam acara pembukaan kegiatan tersebut, Menteri Komunikasi dan Informatika juga menandatangani terbitan pertama perangko edisi internet sehat dan aman.<br />\n			<br />\n			Menteri Komunikasi Dan informatika RI Bapak Tifatul Sembiring dalam sambutannya mengatakan, Kementerian Komunikasi dan Informatika terus mengupayakan penyediaan infrastruktur komunikasi dan informasi sebagai bagian Indonesia informatif menuju masyarakat yang sejahtera.<br />\n			<br />\n			Banyak tantangan dalam membangun infrastruktur komunikasi dan informasi di Indonesia, karena kondisinya yang cukup kompleks, demikian diungkapkan menteri Komunikasi dan Informatika Republik Indonesia<br />\n			<br />\n			Sementara itu, Gubernur Jawa Tengah Bapak H. Bibit Waluyo mengingatkan tentang perlunya pengembangan informasi yang jujur, terbuka, dan transparan.<br />\n			<br />\n			Acara yang berlangsung dari tanggal 20 hingga 24 mei tersebut berlangsung dengan meriah dan di hadiri oleh peserta seluruh Indonesia, berbagai kegiatan dilakukan untuk mendukung acara tersebut antara lain pameran informasi dari berbagai provider, pameran produk Kelompok Informasi Masyarakat/KIM, lomba Bloger dan Animasi , kirab budaya dan Festival Media Pertunjukan Rakyat.<br />\n			<br />\n			Kantor PDE, Arsip Daerah dan Humas Kota Sukabumi, hadir dalam kegiatan tingkat nasional tersebut mewakili Pemerintah Kota Sukabumi.<br />\n			<br />\n			Kepala Kantor PDE, Arsip Daerah dan Humas Kota Sukabumi H. Oscar Lesnusa., SH., MM mengatakan bahwa, kegiatan ini menampilkan informasi terbaru dari sisi kebijakan mengenai informasi dan komunikasi serta menampilkan perkembangan teknologi informasi dan komunikasi (TIK) di Indonesia saat ini.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n');
/*!40000 ALTER TABLE `pemerintahan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengumuman`
--

DROP TABLE IF EXISTS `pengumuman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` datetime NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengumuman`
--

LOCK TABLES `pengumuman` WRITE;
/*!40000 ALTER TABLE `pengumuman` DISABLE KEYS */;
INSERT INTO `pengumuman` VALUES (4,'2011-05-04 00:00:00','tes kedua','<table class=\"data\" style=\"width: 100%;\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td>tes</td>\r\n<td>tes</td>\r\n</tr>\r\n<tr>\r\n<td>isi</td>\r\n<td>isi</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>dadasdasdsa dsadasdas</p>\r\n<p>dsadasdsadsad</p>\r\n<p><a href=\"../../../\" target=\"_blank\">dsadsadas</a></p>'),(3,'2011-05-08 00:00:00','tes pengumuman pertama','<p><span style=\"font-family: \'trebuchet ms\', geneva; font-size: small;\">Style test pengumuman berdasrakan pada apa yang di drasa&nbsp;</span></p>\r\n<ol>\r\n<li style=\"text-align: left;\"><span style=\"font-family: \'trebuchet ms\', geneva; font-size: small;\">Isi tentang apa saja</span></li>\r\n<li style=\"text-align: left;\"><span style=\"font-family: \'trebuchet ms\', geneva; font-size: small;\">Apalagi ini&nbsp;</span></li>\r\n<li style=\"text-align: left;\"><span style=\"font-family: \'trebuchet ms\', geneva; font-size: small;\">ini apa</span></li>\r\n</ol>');
/*!40000 ALTER TABLE `pengumuman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peraturan`
--

DROP TABLE IF EXISTS `peraturan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peraturan` (
  `id_peraturan` int(12) NOT NULL AUTO_INCREMENT,
  `kategori` enum('1','2','3','4','5','6') NOT NULL,
  `tahun` int(4) NOT NULL,
  `nama_peraturan` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link_file` varchar(100) NOT NULL,
  PRIMARY KEY (`id_peraturan`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peraturan`
--

LOCK TABLES `peraturan` WRITE;
/*!40000 ALTER TABLE `peraturan` DISABLE KEYS */;
/*!40000 ALTER TABLE `peraturan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesan`
--

DROP TABLE IF EXISTS `pesan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesan` (
  `id_pesan` bigint(12) unsigned NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `email_pengirim` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `isi` blob NOT NULL,
  `tanggal` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '0000-00-00 | 00:00',
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pesan`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesan`
--

LOCK TABLES `pesan` WRITE;
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesan_tanggapi`
--

DROP TABLE IF EXISTS `pesan_tanggapi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesan_tanggapi` (
  `id_tanggapi` bigint(12) unsigned NOT NULL AUTO_INCREMENT,
  `id_pesan` bigint(12) unsigned NOT NULL DEFAULT '0',
  `oleh` bigint(12) unsigned NOT NULL DEFAULT '0',
  `isitanggapi` blob NOT NULL,
  `tanggaltanggapi` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '00-00-0000 | 00:00',
  PRIMARY KEY (`id_tanggapi`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesan_tanggapi`
--

LOCK TABLES `pesan_tanggapi` WRITE;
/*!40000 ALTER TABLE `pesan_tanggapi` DISABLE KEYS */;
/*!40000 ALTER TABLE `pesan_tanggapi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `polling`
--

DROP TABLE IF EXISTS `polling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `polling` (
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `polling`
--

LOCK TABLES `polling` WRITE;
/*!40000 ALTER TABLE `polling` DISABLE KEYS */;
INSERT INTO `polling` VALUES (1,'Fitur apa yang paling anda sukai dari website ini?','Berita',11,'Agenda',14,'Pengumuman',1,'Galeri',0,'true');
/*!40000 ALTER TABLE `polling` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `program_kerja`
--

DROP TABLE IF EXISTS `program_kerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `program_kerja` (
  `id_program` int(12) NOT NULL AUTO_INCREMENT,
  `tgl` datetime NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` enum('publish','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_program`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program_kerja`
--

LOCK TABLES `program_kerja` WRITE;
/*!40000 ALTER TABLE `program_kerja` DISABLE KEYS */;
/*!40000 ALTER TABLE `program_kerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistem_user`
--

DROP TABLE IF EXISTS `sistem_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sistem_user` (
  `id_user` int(12) NOT NULL AUTO_INCREMENT,
  `nama_asli` varchar(150) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_level` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto_profil` varchar(50) NOT NULL DEFAULT '0.jpg',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistem_user`
--

LOCK TABLES `sistem_user` WRITE;
/*!40000 ALTER TABLE `sistem_user` DISABLE KEYS */;
INSERT INTO `sistem_user` VALUES (1,'Rezania Akbar','admin','admin',1,'','0.jpg'),(2,'Rezania Fajar Drajat','mamiim','papiip',2,'','0.jpg'),(3,'Didin','manager','manager',3,'','0.jpg'),(4,'Publisher','publisher','publisher',4,'','0.jpg'),(5,'author','author','author',5,'','0.jpg'),(6,'member','member','member',6,'','0.jpg');
/*!40000 ALTER TABLE `sistem_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statistik`
--

DROP TABLE IF EXISTS `statistik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statistik` (
  `id_statistik` int(12) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`id_statistik`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statistik`
--

LOCK TABLES `statistik` WRITE;
/*!40000 ALTER TABLE `statistik` DISABLE KEYS */;
/*!40000 ALTER TABLE `statistik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_menu`
--

DROP TABLE IF EXISTS `system_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_group` varchar(50) DEFAULT NULL,
  `menu_name` varchar(50) DEFAULT NULL,
  `menu_parent` int(11) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT NULL,
  `policy` varchar(10) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `url_admin` varchar(100) NOT NULL,
  `use_as_category` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_menu`
--

LOCK TABLES `system_menu` WRITE;
/*!40000 ALTER TABLE `system_menu` DISABLE KEYS */;
INSERT INTO `system_menu` VALUES (1,'HOME','Home',NULL,0,NULL,'#','',0),(10,'PROFIL','Kota Sukabumi',NULL,0,NULL,'#','',0),(11,'PROFIL','Sejarah',10,0,'EDIT;VIEW;','profil/sejarah','profil/sejarahview',1),(12,'PROFIL','Lambang',10,0,'EDIT;VIEW;','profil/lambang','profil/lambangview',1),(13,'PROFIL','Geografis',10,0,'EDIT;VIEW;','profil/geografis','profil/geografisview',1),(30,'Pemerintahan','Pemerintahan',NULL,0,NULL,'#','#',0),(14,'PROFIL','Sosial Ekenomi',10,0,'EDIT;VIEW;','profil/sosial-ekonomi','profil/sosialview',1),(15,'PROFIL','Sukabumi Dalam Angka',10,0,'EDIT;VIEW;','profil/sukabumi-dalam-angka','profil/angkaview',1),(31,'Pemerintahan','DPRD',30,0,'EDIT;VIEW;','pemerintahan/dprd','pemerintahan/dprdview',1),(32,'Pemerintahan','Walikota',30,0,'EDIT;VIEW;','pemerintahan/walikota','pemerintahan/walikotaview',1),(33,'Pemerintahan','Sekretariat Daerah',30,0,'EDIT;VIEW;','pemerintahan/sekretariat-daerah','pemerintahan/sekretariatdaerahview',1),(34,'Pemerintahan','Staf Ahli Walikota',30,0,'EDIT;VIEW;','pemerintahan/staf-ahli-walikota','pemerintahan/stafwalikotaview',1),(35,'Pemerintahan','SKPD',30,0,'EDIT;VIEW;','pemerintahan/skpd','pemerintahan/skpdview',1),(36,'Pemerintahan','Kecamatan',30,0,'EDIT;VIEW;','pemerintahan/kecamatan','pemerintahan/kecamatanview',1),(37,'Pemerintahan','Keluarahan',30,0,'EDIT;VIEW;','pemerintahan/kelurahan','pemerintahan/kelurahanview',1),(38,'Pemerintahan','Rekap RW RT',30,0,'EDIT;VIEW;','pemerintahan/rekap-rw-rt','pemerintahan/rekaprwrtview',1);
/*!40000 ALTER TABLE `system_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-02 20:09:52
