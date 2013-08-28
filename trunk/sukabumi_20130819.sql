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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` VALUES (1,'2011-05-19','test agenda','superadmin'),(2,'2011-05-21','tes agenda kedua','superadmin');
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
  `deskripsi_singkat` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `status` enum('publish','pending') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (7,'2013-08-16 17:00:00','SELURUH KOMPONEN BANGSA MEMPERINGATI HUT RI KE 68','Seluruh komponen bangsa Indonesia, termasuk warga masyarakat Kota Sukabumi, pada hari ini, Sabtu 17 Agustus 2013, memperingati Hari Ulang Tahun (HUT) Ke-68 Proklamasi Kemerdekaan RI','Seluruh komponen bangsa Indonesia, termasuk warga masyarakat Kota Sukabumi, pada hari ini, Sabtu 17 Agustus 2013, memperingati Hari Ulang Tahun (HUT) Ke-68 Proklamasi Kemerdekaan RI, dengan menggelar Upacara Pengibaran Bendera Kebangsaan Sang Merah Putih, dan berbagai kegiatan lainnya. Adapun Upacara Pengibaran Bendera Kebangsaan Sang Merah Putih, di Kota Sukabumi dilaksanakan di Lapangan Merdeka, pada hari ini, Sabtu 17 Agustus 2013.','upacara2013.jpg','admin','publish');
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
INSERT INTO `informasi` VALUES (1,'visi','<p>Terwujudnya Kota Sukabumi sebagai pusat pelayanan berkualitas bidang pendidikan, kesehatan dan perdagangan di Jawa Barat berlandaskan iman dan taqwa</p>'),(2,'misi','<p>1. Mewujudkan sumber daya manusia yang beriman, bertaqwa dan berbudaya<br />2. Mewujudkan pelayanan pendidikan yang berkualitas<br />3. Mewujudkan pelayanan kesehatan yang berkualitas<br />4. Mewujudkan pengembangan perdagangan dan sektor lapangan usaha lainnya yang berdaya saing tinggi<br />5. Mewujudkan tata kelola pemerintahan yang baik dengan aparatur pemerintahan daerah yang profesional dan amanah <br />6. Mewujudkan Kota Sukabumi yang nyaman dan indah</p>'),(3,'sejarah','<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\"><span style=\"color: #006600; font-family: arial; font-size: x-small;\"><img src=\"http://www.sukabumikota.go.id/gbr/balaikotadulu.jpg\" alt=\"\" width=\"200\" height=\"109\" align=\"left\" /></span><br class=\"Apple-interchange-newline\" />Kota Sukabumi berasal dari bahasa Sunda, yaitu Suka-bumen menurut keterangan mengingat udaranya yang sejuk dan nyaman, mereka yang datang ke daerah ini tidak ingin pindah lagi, karena suka atau senang bumen-bumen atau bertempat tinggal di daerah ini.<br />Pada tahun 1914 Pemerintah Hindia Belanda menjadikan Kota Sukabumi sebagai \"Burgerlijjk Bestuur\" dengan status \"Gemeenteraad Van Sukabumi\" dengan alasan bahwa di Kota ini banyak berdiam orang-orang Belanda dan Eropa pemilik perkebunan-perkebunan yang berada di daerah Kabupaten Sukabumi bagian Selatan yang harus mendapatkan pelayanan yang istimewa.</span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\">Sejak ditetapkannya Sukabumi menjadi Daerah Otonom pada bulan Mei 1926, maka resmi diangkat \"Burgemeester\" yaitu: Mr. GF.Rambonnet. Pada masa inilah dibangun sarana dan prasarana penting seperti Stasiun Kereta Api, Mesjid Agung, Gereja dan Pembangkit Listrik.</span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000;\"><em><span style=\"font-family: arial; font-size: medium;\">Perkembangan Pemerintahan</span></em></span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: Arial,Helvetica,sans-serif; font-size: x-small;\"><strong>Perubahan Nama Pemerintahan</strong></span></p>\n<p><span style=\"color: #000000;\"> <span style=\"font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(1). Gemeente Soeka Boemi Tahun 1914-1942,<span class=\"Apple-converted-space\">&nbsp;</span></span><span style=\"font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff;\"><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(2). Soekaboemi SHI Tahun 1942-1945,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(3). Kota Kecil Sukabumi Undang-undang No. 17 Tahun 1950,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(4). Kota Praja Sukabumi Undang-undang No. 1 Tahun 1957,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(5). Kotamadya Sukabumi Undang-undang No. 18 Tahun 1965,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(6). Kotamadya Daerah Tingkat II Sukabumi Undang-undang No. 5 Tahun 1974,<span class=\"Apple-converted-space\">&nbsp;</span></span><br /><span style=\"font-family: Arial,Helvetica,sans-serif; font-size: x-small;\">(7). Kota Sukabumi Undang-undang No. 22 tahun 1999, UU No 32 Tahun 2003</span></span></span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\"><strong>Nama-Nama Pimpinan Pemerintahan Daerah Sukabumi</strong></span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\"><img src=\"http://www.sukabumikota.go.id/gbr/smidulu1.jpg\" alt=\"\" width=\"300\" height=\"208\" align=\"right\" /></span></p>\n<p style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"color: #000000; font-family: arial; font-size: x-small;\">1. Mr. R. Syamsudin 1945-1946<br />2. Raden Mamur Soeria Hoedaja 1946-1948<br />3. Raden Ebo Adinegara 1948-1950<br />4. Raden Widjaja Soerija (Acting)<br />5. Raden S. Affandi Kartadjumena 1950-1952<br />6. Raden Soebandi Prawiranata 1952-1959<br />7. Mochamad Soelaeman 1959-1960<br />8. Raden Soewala 1960-1963<br />9. Raden Semeru (Acting)<br />10. Drs. Achmad Darmawan Adi 1963-1961<br />11. Raden Bidin Suryagunawan (Acting)<br />12. Saleh Wiradikarta, S.H. 1966-1978<br />13. Soejoed 1978-1988<br />14. H. Zaenudin Mulaebary, S.H. 1988-1993<br />15. H. Udin Koswara, S.H. 1993-1997<br />16. R. Nuriana (Gubernur Jabar) PJS<br />17. Dra. Hj. Molly Mulyahati Djubaedi, M.Sc. Plh<br />18. Dra. Hj. Molly Mulyahati Djubaedi, M.Sc. 1998-2003<br />19. H. Mokh. Muslikh Abdussyukur, S.H., M.Si. 2003-....</span></p>'),(4,'direktori','<h2><span style=\"color: #000000;\">Kedudukan</span></h2>\r\n<p>Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan dipimpin oleh seorang Kepala yang berada di bawah dan bertanggung jawab kepada Menteri Pendidikan Nasional.</p>\r\n<h2>Tugas</h2>\r\n<p>Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan mempunyai tugas melaksanakan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan.</p>\r\n<h2>Fungsi</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 664, Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan kebijakan teknis, rencana, dan program pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>b. pelaksanaan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>c. pemantauan, evaluasi, dan pelaporan pelaksanaan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan; dan</p>\r\n</li>\r\n<li>\r\n<p>d. pelaksanaan administrasi Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan.</p>\r\n</li>\r\n</ul>'),(5,'nuptk','<h2><span style=\"color: #00ccff;\">Nomor Unik Pendidik dan Tenaga Kependidikan</span></h2>\r\n<p>NUPTK (Nomor Unik Pendidik dan Tenaga Kependidikan) adalah nomor identitas yang bersifat nasional untuk seluruh PTK (Pendidik dan Tenaga Kependidikan). NUPTK terdiri dari 16 angka yang bersifat tetap karena NUPTK yang dimiliki seorang PTK tidak akan berubah meskipun yang bersangkutan telah berpindah tempat mengajar atau terjadi perubahan data periwayatan.</p>\r\n<p>NUPTK diberikan kepada seluruh PTK baik PNS maupun Non-PNS sebagai Nomor Identitas yang resmi untuk keperluan identifikasi dalam berbagai pelaksanaan program dan kegiatan yang berkaitan dengna pendidikan dalam rangka peningkatan mutu pendidik dan tenaga kependidikan.</p>\r\n<p>Manfaat untuk tenaga pendidik yang memiki NUPTK adalah:</p>\r\n<ul>\r\n<li>\r\n<p>1. Berpartisipasi dalam sebuah proses/mekanisme pendataan secara nasional sehingga dapat membantu pemerintah dalam merencanakan berbagai program peningkatan kesejahteraan bagi tenaga pendidik.</p>\r\n</li>\r\n<li>\r\n<p>2. Mendapatkan nomor identifikasi resmi dan bersifat resmi dan bersifat nasional dalam mengikuti berbagai program/kegiatan yang diselenggarakan oleh pemerintah pusat/daerah.</p>\r\n</li>\r\n</ul>\r\n<p>PTK dapat mengajukan NUPTK dengan mengisi kuisioner dengan cara mengunduh di <a href=\"http://www.nuptk.info\">www.nuptk.info</a> pada menu download di \"Instrumen Pendataan\".</p>'),(6,'sekretariat','<h2><span style=\"color: #3366ff;\">Pasal 667</span></h2>\r\n<p>Sekretariat Badan mempunyai tugas melaksanakan pelayanan teknis dan administratif serta pembinaan dan koordinasi pelaksanaan tugas unit organisasi di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan.</p>\r\n<h2>Pasal 668</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 667, Sekretariat Badan menyelenggarakan fungsi:</p>\r\n<ul class=\"listok2\">\r\n<li>\r\n<p>1. koordinasi penyusunan kebijakan, rencana, program, dan anggaran di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li>\r\n<p>2. pengelolaan data dan informasi sumber daya manusia pendidikan dan penjaminan mutu pendidikan</p>\r\n</li>\r\n<li>\r\n<p>3. koordinasi pelaksanaan kegiatan dan kerja sama di bidang pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan</p>\r\n</li>\r\n<li>\r\n<p>4. pengelolaan keuangan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>5. penyusunan rancangan peraturan perundang-undangan dan kajian hukum di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>6. pelaksanaan urusan organisasi dan tata laksana di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>7. pengelolaan kepegawaian di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>8. koordinasi penyusunan bahan publikasi dan hubungan masyarakat di bidang pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan</p>\r\n</li>\r\n<li>\r\n<p>9. pengelolaan barang milik negara di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>10 pelaksanaan urusan ketatausahaan dan kerumahtanggaan di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 669</h2>\r\n<p>Sekretariat Badan terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>1. Bagian Perencanaan dan Penganggaran</p>\r\n</li>\r\n<li>\r\n<p>2. Bagian Keuangan</p>\r\n</li>\r\n<li>\r\n<p>3. Bagian Hukum dan Kepegawaian</p>\r\n</li>\r\n<li>\r\n<p>4. Bagian Umum</p>\r\n</li>\r\n</ul>\r\n<center><input class=\"button\" type=\"button\" value=\"Website Sekretariat Badan\" /></center>'),(7,'pppp','<h2><span style=\"color: #3366ff;\">Pasal 686</span></h2>\r\n<p>Pusat Pengembangan Profesi Pendidik mempunyai tugas melaksanakan penyusunan kebijakan teknis dan pengembangan profesi pendidik.</p>\r\n<h2>Pasal 687</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 686, Pusat Pengembangan Profesi Pendidik menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan kebijakan teknis di bidang pengembangan profesi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>b. penyusunan program pengembangan profesi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>c. koordinasi pelaksanaan peningkatan kompetensi dan sertifikasi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>d. fasilitasi pelaksanaan peningkatan kompetensi dan sertifikasi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>e. pemantauan, evaluasi, dan pelaporan pelaksanaan pengembangan profesi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>f. pelaksanaan administrasi Pusat Pengembangan Profesi Pendidik.</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 688</h2>\r\n<p>Pusat Pengembangan Profesi Pendidik terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>a. Bidang Pengembangan Profesi Pendidik Pendidikan Anak Usia Dini, Nonformal, dan Informal;</p>\r\n</li>\r\n<li>\r\n<p>b. Bidang Pengembangan Profesi Pendidik Pendidikan Dasar;</p>\r\n</li>\r\n<li>\r\n<p>c. Bidang Pengembangan Profesi Pendidik Pendidikan Menengah;</p>\r\n</li>\r\n<li>\r\n<p>d. Subbagian Tata Usaha; dan</p>\r\n</li>\r\n<li>\r\n<p>e. Kelompok Jabatan Fungsional.</p>\r\n</li>\r\n</ul>\r\n<center><input class=\"button\" type=\"button\" value=\"Website Pusat Pengembangan Profesi Pendidik\" /></center>'),(8,'pptk','<h2><span style=\"color: #3366ff;\">Pasal 702</span></h2>\r\n<p>Pusat Pengembangan Tenaga Kependidikan mempunyai tugas melaksanakan penyusunan kebijakan teknis, koordinasi, dan pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian.</p>\r\n<h2>Pasal 703</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 702, Pusat Pengembangan Tenaga Kependidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan kebijakan teknis di bidang pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian;</p>\r\n</li>\r\n<li>\r\n<p>b. penyusunan program pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian;</p>\r\n</li>\r\n<li>\r\n<p>c. penyusunan bahan pelaksanaan pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian;</p>\r\n</li>\r\n<li>\r\n<p>d. fasilitasi pelaksanaan pengembangan tenaga kependidikan dan pegawai;</p>\r\n</li>\r\n<li>\r\n<p>e. pemantauan, evaluasi, dan pelaporan pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian; dan</p>\r\n</li>\r\n<li>\r\n<p>f. pelaksanaan administrasi Pusat Pengembangan Tenaga Kependidikan.</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 704</h2>\r\n<p>Pusat Pengembangan Tenaga Kependidikan terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>a. Bidang Pengembangan Tenaga Teknis dan Fungsional Non-Pendidik;</p>\r\n</li>\r\n<li>\r\n<p>b. Bidang Pengembangan Tenaga Pimpinan Pegawai;</p>\r\n</li>\r\n<li>\r\n<p>c. Bagian Tata Usaha; dan</p>\r\n</li>\r\n<li>\r\n<p>d. Kelompok Jabatan Fungsional.</p>\r\n</li>\r\n</ul>\r\n<center><input class=\"button\" type=\"button\" value=\"Website Pusat Pengembangan Tenaga Kependidikan\" /></center>'),(9,'ppmp','<h2><span style=\"color: #3366ff;\">Pasal 717</span></h2>\r\n<p>Pusat Penjaminan Mutu Pendidikan mempunyai tugas melaksanakan penyusunan bahan kebijakan teknis dan penjaminan mutu pendidikan.</p>\r\n<h2>Pasal 718</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 717, Pusat Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan bahan kebijakan teknis di bidang penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>b. penyusunan program penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>c. pelaksanaan pemetaan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>d. koordinasi dan fasilitasi pelaksanaan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>e. pengembangan dan pengelolaan sistem informasi mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>f. pemantauan, evaluasi, dan pelaporan pelaksanaan penjaminan mutu pendidikan; dan</p>\r\n</li>\r\n<li>\r\n<p>g. pelaksanaan administrasi Pusat Penjaminan Mutu Pendidikan.</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 719</h2>\r\n<p>Pusat Penjaminan Mutu Pendidikan terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>a. Bidang Penjaminan Mutu Pendidikan Anak Usia Dini, Nonformal, dan Informal;</p>\r\n</li>\r\n<li>\r\n<p>b. Bidang Penjaminan Mutu Pendidikan Dasar;</p>\r\n</li>\r\n<li>\r\n<p>c. Bidang Penjaminan Mutu Pendidikan Menengah dan Pendidikan Tinggi;</p>\r\n</li>\r\n<li>\r\n<p>d. Subbagian Tata Usaha; dan</p>\r\n</li>\r\n<li>\r\n<p>e. Kelompok Jabatan Fungsional.</p>\r\n</li>\r\n</ul>\r\n<center><input class=\"button\" type=\"button\" value=\"Website Pusat Penjaminan Mutu Pendidikan\" /></center>'),(10,'sarpras','<p><strong>Sarana &amp; Prasarana</strong></p>'),(11,'prestasi','<p>&nbsp;</p>\n<p>&nbsp;</p>\n<table style=\"color: #000000; font-family: \'Times New Roman\'; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; border-collapse: collapse; width: 600px; height: 1093px;\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td align=\"center\">\n<p>&nbsp;<strong><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: x-small;\">No.</span></span></strong></p>\n</td>\n<td align=\"center\"><strong><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: x-small;\">Nama Prestasi</span></span></strong></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">1.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Peserta Pertukaran ke Jepang Tingkat Nasional</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">2.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Babak Penyisihan SMA Liga Fisika SMA Tingkat Nasional di wakili SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">3.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Finalis Tingkat Nasional Olimpiade Biologi Kedokteran Dendi A Zainul F dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">4.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Nasional Pemrograman Komputer oleh Abdurrahman Dihya dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">5.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Finalis tingkat nasional Olimpiade Sain(Komputer) oleh Abdurrahman Dihya dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">6.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Finalis Tingkat Nasional Olimpiade Sains(Biologi) oleh Angga Pratama dari SMA Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">7.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Finalis Tingkat Nasional Olimpiade Sains(Astronomi) oleh Salat Fuadi dari Hayatan Thayibah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">8.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Nasional Lomba Sekolah Sehat dari TK Negeri Pembina</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">9.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Utama Tingkat Nasional Adiwiyata Utama SDN Pakujajar CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">10.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Utama Tingkat Nasional Adiwiyata Utama SDN Cipanengah CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">11.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Utama Tingkat Nasional Model Adiwiyata SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">12.</span>&nbsp;</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Nasional LCC PAI SMP oleh SMPN 5</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000;\"><span style=\"font-family: arial; font-size: xx-small;\">13</span>.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara V Tingkat Nasional Pidato SMP Oleh Azmi dari SMPN 1 Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">14.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Harapan II Tingkat Nasional Lomba Keyboard oleh M.Rizki dari SMPN 8</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">15.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Nasional oleh Anggar dari SMA Mardi Yuana</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">16.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Wakil Propinsi Jawa Barat Tingkat Nasional Lomba MTQ SD dari SDN Sudajayahilir 4</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">17.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Wakil Propinsi Jawa Barat Tingkat Nasional Lomba pidatoPAI SD oleh Sungguh Pribadi dari SDN Dewi Sartika CBM.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">18.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Wakil Propinsi Jawa Barat Tingkat NasionalOlimpiade Sains oleh Sisca Fitriani dari SMAN 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">19.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Nasional O2SN Cabang Senam oleh Muhamad Faizal</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">20.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Siswa berprestasi SD oleh Sherlen dari SD MY 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">21.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Dokter kecil oleh Genta Maulana dari SDN Pakujajar CBM.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">22.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi KKR SMP oleh Fitriyani dari SMPN6</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">23.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Sekolah berbudaya lingkungan oleh SDN Gunung Puyuh CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">24.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Komite SD Berprestasi oleh Drs.Siskamto dari Komite SDN Gunung Puyuh CBM.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">25.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Keyboard Sekolah Inklusi oleh M.Rizki dari SMPN 8</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">26.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Stand Pameran Pramuka SLB dari SLB Budi Nurani</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">27.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Nasional Solo Siswa Inklusi dari SLB Budi Nurani</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">28.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi LSS SD dari SD Dayeh Luhur SBM.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">29.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat PropinsiLSS SMP dari SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">30.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi MIPA Aksel SD dari SDN Sriwedari.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">31.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi MIPA Aksel SMP dari SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">32.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara VI Tingkat Propinsi Seni Lukis Siswa Inklusi dari SDN Cisarua.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">33.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Bercerita Guru TK oleh Erningsih dari TK Sejahtera 2.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">34.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinnsi LCC dari SMPN 10.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">35.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Siswa berprestasi SMA oleh Prully Handayani dari SMAN 3</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">36.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Olimpiade Sains oleh Sisca Fitrianidari SMAN 1.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">37.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi LTUB dari SMUN 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">38.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi O2SN oleh Mutia dari SMAN 3</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">39.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Teknik Bubut oleh Rizpullah dari SMKN I</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">40.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat propinsi Wall and Floor Telling oleh Rendi Septian dari SMKN 1.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">41.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Brick Laying oleh Saepudin dari SMKN 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">42.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Mecanical CADD oleh Bangun Muhamad dari SMKN1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">43.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Cabinet Making oleh Eko Sulistio dari SMKN I</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">44.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Akuntansi oleh Bela Yuniarti dari SMKN 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">45.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Administrasi Perkantoran oleh Listia Dewi Andriyani dari SMKN 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">46.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi Tutor PAUD oleh Yayah Mardiyah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">47.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Lomba Karya Nyata oleh Kepala UPTD SKB Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">48.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi Lomba Karya Nyata Pamong SKB oleh Ir.Zidni Hasanah</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">49.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi Lomba Bintara Tingkat SD oleh Sungguh Ibadi Syakur</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">50.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi O2SN Cabang Senam oleh Muh.Faisal T dari SDN Cikole 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">51.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi O2SN Cabang Bulu Tangkis oleh Syakila Syifa\'i dari SDN Lamping 3</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">52.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi O2SN Cabang Karate oleh Mufqi Maulana S dari SDN Cipanas</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">53.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi O2SN Cabang Karate Oleh SDN Cisarua</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">54.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi POPDA Cabang Senam oleh Sita Aji dari SDN Cikole 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">55.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi POPDA Cabang Senam oleh M Faisal T dari SDN Cikole 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">56.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Propinsi POPDA Cabang Senam oleh Yadi erliandi dari SMPN 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">57.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi POPDA Cabang Senam Beregu oleh SMAN 2</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">58.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi POPDA Cabang Renang oleh Florencia M dari Mardi Waluya</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">59.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi POPDA Cabang Atletik oleh Zaenul Dahlan dari SMAN 4</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">60.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Propinsi POPDA Cabang Silat oleh Billy D dari SMAN 1</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">61.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Lomba Gugus TK oleh TKN Pembina Baros</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">62.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Lomba gugus SD oleh SDN Gunung Puyuh CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">63.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Lomba Matematika oleh Pasiad Yuniar Fajriyanii</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">64.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Harapan I Tingkat Propinsi lomba Matematika Pasiad oleh Fauzan Hilmi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">65.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Tuntas Paripurna Tingkat Propinsi Wajar Dikdas Award oleh P dan K Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">66.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I Tingkat Propinsi Kepala SKB Teladan oleh Kepala UPTD SKB Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">67.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Wilayah II LTUB SD oleh SDN Gunung Puyuh CBM</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">68.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Wilayah II LTUB SMP oleh SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">69.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Tingkat Wilayah II LSS oleh TK Islam al Azhar</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">70.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara III Tingkat Wilayah II LSS SD oleh SDN Cipanas</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">71.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">SMPN 10Kota Sukabumi menjadi Duta Propinsi Jawa BaratDalam Lomba UKS Tingkat Nasional Tahun 2009</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">72.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Kota Sukabumi menjadi Duta Propinsi Jawa Barat Dalam Lomba UKS Tingkat Nasional Tahun 2009</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">73.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Kota Sukabumi Mendapatkan Piala Wahana Tata Nugraha(WTN) dari Pemerintah Pusat sebanyak 6 kali.</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">74.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Kota Sukabumi meraih Penghargaan Adiwiyata Tingkat Nasional</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">75.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara II Dokter Kecil Tingkat Nasional oleh Fauzan Hilmi Ramadhan dari SDN Benteng 1 Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">76.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I KKR SMP Tingkat Nasional oleh Yanuar Azhar Pratama dari MTS Syamsul Uluum Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">77.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I KKR SMA Tingkat Nasional Oleh Diah dari SMKN2 Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">78.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I LCC Tim Pembina UKS Tingkat Nasional oleh Eri Nasution dari Dinas Kesehatan Kota Sukabumi Tahun 2007 (Jambore UKS Nasional di Malang)</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">79.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara Harapan II KKRSMP Tingkat Nasional oleh Monic Swandari dari SMPN 10</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">80.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I KKR SMA Tingkat Nasional oleh Yuni Anggia Purnama dari SMAN 3</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">81.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Juara I LCC TIm Pembina UKS Tingkat Nasional oleh Eri Nasution dari Dinas Kesehatan Kota Sukabumi</span></td>\n</tr>\n<tr>\n<td align=\"center\"><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">82.</span></td>\n<td><span style=\"color: #000000; font-family: arial; font-size: xx-small;\">Kota Sukabumi Meraih Peringkat Kedua Terbaik di Indonesia Dalam EVALUASI LAPORAN AKUNTABILITAS KINERJA INSTANSI PEMERINTAH (LAKIP)</span></td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>');
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
  PRIMARY KEY (`id_link`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linkterkait`
--

LOCK TABLES `linkterkait` WRITE;
/*!40000 ALTER TABLE `linkterkait` DISABLE KEYS */;
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
INSERT INTO `polling` VALUES (1,'Fitur apa yang paling anda sukai dari website ini?','Berita',11,'Data dan Statistik',14,'Pedoman/Panduan',1,'Galeri',0,'true');
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

-- Dump completed on 2013-08-19 16:38:49
