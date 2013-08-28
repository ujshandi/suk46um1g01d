-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: sukabumi
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.9

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
INSERT INTO `belajar` VALUES (1,'2011-05-23 21:35:27','Tentang NUPTK','NUPTK sebagai nomor identitas PTK yang berlaku secara nasional dan menjadi syarat dalam mengikuti berbagai program peningkatan mutu dan kesejahteraan PTK yang di programkan oleh Pemerintah?Kemendiknas sesuai dengan UU No. 14 Tahun 2005','<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>Fungsi NUPTK</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">NUPTK sebagai nomor identitas PTK yang berlaku secara nasional dan menjadi syarat dalam mengikuti berbagai program peningkatan mutu dan kesejahteraan PTK yang di programkan oleh Pemerintah?Kemendiknas sesuai dengan UU No. 14 Tahun 2005</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">&nbsp;<strong>Bagaimana Memiliki NUPTK</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">PTK dapat memiliki NUPTK dengan mengisi kuisioner NUPTK yang dapat di download&nbsp;<strong><span style=\"text-decoration: underline;\"><a href=\"http://pmptk.kemdiknas.go.id/download/InstrumenPendataanPTK2009+petunjuk.zip\">disin</a></span></strong><strong><span style=\"text-decoration: underline;\"><a href=\"http://pmptk.kemdiknas.go.id/download/InstrumenPendataanPTK2009+petunjuk.zip\">i</a>&nbsp;</span>kemudian ajukan NUPTK&nbsp;</strong><strong>&nbsp;</strong>dengan melegalisir kuesuioner yang telah diisi dengan stempel sekolah dan tanda tangan kepala sekolah lalu mengirimkan kuesioner ke Dinas Pendidikan Kab/Kota setempat</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>Apa kaitan LPMP dalam proses pengajuan NUPTK</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">LPMP melakukan verifikasi dan konsolidasi data di tingkat propinsi dalam bentuk SIM-NUPTK, kemudian mengajukan data ke pusat atau setditjen PMPTK dalam bentuk database SIM_NUPTK</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>&nbsp;</strong><strong>Dimana Proses Penerbitan NUPTK</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Proses penerbitan NUPTK adalah di Bagren Setditjen PMPTK. Tim NUPTK Bagren akan mengolah data hasil verifikasi dan konsolidasi dari LPMP untuk kemudian di periksa kembali keunikan data yang dikirim sebelum diterbitkan NUPTK</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>&nbsp;</strong><strong>Bagaimana pendistribusian data NUPTK</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">NUPTK yang telah diterbitkan oleh Bagren akan di kirim ke LPMP untuk didistribusikan ke Dinas Pendidikan Kab/Kota&nbsp; wilayah masing masing</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>&nbsp;</strong><strong>Dimana melihat hasil pengajuan NUPTK</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">NUPTK Secara Nasional dapat menggunakan NUPTK Browser. download&nbsp;<a href=\"http://pmptk.kemdiknas.go.id/download/nuptkwebbrowser%20v1-5z.exe\"><strong><span style=\"text-decoration: underline;\">disini</span></strong></a></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>Bagaimana Melakukan Perbaikan data NUPTK yang di tunda karena tidak rasional</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Hubungi Dinas Pendidikan Kab/Kota Setempat dengan membawa bukti otentik seperti Akta Lahir, Ijazah dll untuk mempercepat proses</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">&nbsp;<strong>Bagaimana NUPTK untuk guru yang mutasi</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Prinsipnya mutasi seorang PTK tidak menyebabkan NUPTK yang bersangkutan hilang atau berubah. Kemanapun PTK tersebut pindah tugas, maka NUPTK akan tetepa seperti semula. Oleh karena itu untuk guru yang telah mengalami mutasi harus melakukan langkah berikut :</span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Mutasi ke instansi lain yang dalam satu Kabupaten/Kota</strong></span></p>\r\n<ul>\r\n<li><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">PTK tersebut harus melapor ke operator SIM-NUPTK</span></li>\r\n</ul>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Mutasi Ke Instansi Lain berbeda Kabupeten/Kota pada provinsi&nbsp; yang sama atau berbeda</strong></span></p>\r\n<ul>\r\n<li><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">PTK yang melapor ke operator SIM-NUPTK pada dinas Pendidikan Kabupaten/Kota asal, meminta cetak profile memalui SIM-NUPTK yang mencantumkan data-data lengkap PTK yang bersangkutan serta nomor NUPTK nya. Jika memungkinkan, PTK tersebut meminta database PTK yang bersangkutan di muat dalam CD.</span></li>\r\n</ul>\r\n<ul>\r\n<li><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">PTK yang bersangkutan melapor kepada operator SIM-NUPTK di Dinas Kabupaten/Kota tujuan mutasi, dengan membawa data-data tersebut dan surat keterangan dari instansi tempat bertugas yang baru.</span></li>\r\n</ul>\r\n<ul>\r\n<li><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Petugas/Operator NUPTK Dinas Pendidikan Kabupaten/Kota tujuan melakukan imprt data dari data base yang di bawa PTK yang bersangkutan atau melakukan entri ulang namun harus diisi NUPTK yang bersangkutan pada kolom &rdquo;NUPTK Pindahan&rdquo;.</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>Komplain NUPTK</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Untuk PTK yang memiliki masalah tentang data dapat mengisi formulir komplain yang dapat di download&nbsp;<a href=\"http://pmptk.kemdiknas.go.id/download/KomplainNUPTK.xls\"><strong><span style=\"text-decoration: underline;\">disini</span></strong></a>&nbsp;dan mengirim formulir komplain yang telah diisi ke Dinas Pendidikan Kabupaten/Kota setempat.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><strong>Pembatalan dan Pengajuan kembali NUPTK</strong></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">NUPTK dapat dibatalkan jika memenuhi kondisi sebagai berikut:</span></p>\r\n<ul>\r\n<li><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">PTK yang bersangkutan sudah tidak aktif lagi sebagai PTK karena sebagai sebab</span></li>\r\n<li><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">PTK yang bersangkutan memiliki lebih dari satu NUPTK</span></li>\r\n<li><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">PTK tidak mencantumkan data-data dengan benar, terutama untuk data-data yang sifatnya mandatori (Nama, Tempat Tugas, Riwayat Pendidikan, Tanggal Lahir, Data keluarga).</span></li>\r\n</ul>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Pembatalan NUPTK dapat dilakukan atas inisiatif pengelola NUPTK pusat dengan sebab salah satu di atas, atau karena usulan dari operator tingkat Provinsi(LPMP) atau Dinas Pendidikan Kabupaten/Kota. Pengajuan kembali NUPTK dapat dilakukan dengan mengisi form kompalin atau kuesioner dan mengembalikan kepada operator NUPTK dinas setempat.</span></p>','1','publish'),(2,'2011-05-30 21:56:50','dasdas','dsadas','<p><strong>dsadsadsadsa</strong></p>','5','pending');
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (1,'2011-05-30 15:15:34','Program Bantuan Biaya Pendidikan Bidik Misi','Pemerintah melalui Direktorat Jenderal Pendidikan Tinggi (Ditjen Dikti) Kementerian Pendidikan Nasional pada tahun 2010 meluncurkan program Bidik Misi untuk memberikan bantuan biaya penyelenggaraan pendidikan dan bantuan biaya hidup kepada 20.000 mahasisw','<p style=\"margin-top: 10px; margin-bottom: 10px;\"><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Pemerintah melalui Direktorat Jenderal Pendidikan Tinggi (Ditjen Dikti) Kementerian Pendidikan Nasional pada tahun 2010 meluncurkan program Bidik Misi untuk memberikan bantuan biaya penyelenggaraan pendidikan dan bantuan biaya hidup kepada 20.000 mahasiswa yang memiliki potensi akademik memadai dan kurang mampu secara ekonomi di 104 perguruan tinggi penyelenggara.</span></p>\r\n<p style=\"margin-top: 10px; margin-bottom: 10px;\"><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Bidik Misi merupakan program seratus hari kerja Menteri Pendidikan Nasional yang dicanangkan pada tahun 2010 yang pada tahun 2011 ini dilanjutkan dengan kembali menerima 20.000 calon mahasiswa yang diselenggarakan di 117 perguruan tinggi penyelenggara.</span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><br />Rabu (16/12) bertempat di Masson Pine Hotel Bandung dilakukan penandatangan MoU antara Dirjen Dikti, para pimpinan perguruan tinggi negeri pelaksana Program Beasiswa Bidik Misi dengan disaksikan oleh Menteri Pendidikan Nasional Republik Indonesia.<br /><br />&ldquo;Alhamdulillah, kita bisa memberikan satu jawaban dari sekian persoalan pendidikan di Indonesia. Ini adalah bagian dari komitmen dan tanggung jawab sosial perguruan tinggi&rdquo;, kata bapak Menteri, Prof. Dr. Ir. Moh. Nuh, DEA dalam pengarahannya.<br /><br />Menurut bapak Menteri ini adalah satu program seratus hari Kementerian Pendidikan Nasional yang rampung sebelum waktunya (terakhir 31 Januari). &rdquo;Ini semakin membuktikan bahwa kita adalah orang cerdas. Beda orang cerdas dan tidak cerdas adalah ditentukan oleh kecepatan dalam menyelesaikan persoalan. Kalau orang cerdas biasanya cepat selesai. Dan saya beri nilai cumlaude, tambah bapak Menteri.<br /><br />&rdquo;Tujuan pertama adalah memberikan harapan kepada anak-anak bangsa dengan kemampuan akademik yang baik tapi berasal dari keluarga kurang mampu secara ekonomi, jangan pernah berhenti bermimpi bahwa ada negara yang menyiapkan beasiswa, paling tidak ke perguruan tinggi negeri&rdquo; kata bapak Dirjen Dikti, Prof. Dr. Fasli Jalal, Ph.D<br /><br />Dengan beasiswa ini, menurut bapak Dirjen prosentase 20 miskin terbawah yang saat ini baru sekitar 3,3 persen mengakses pendidikan tinggi bisa terus ditingkatkan. Ketimpangan 20 persen anak terkaya dengan 20 miskin terbawah yang saat ini gapnya 10 persen dalam akses pendidikan tinggi bisa terus dikurangi. Bahkan menurut Dirjen mereka bisa menjadi aktor yang akan memotong mata rantai kemiskinan. Mereka akan mengangkat ekonomi diri dan keluarganya.</span></p>\r\n<p><br /><span style=\"font-size: small;\"><strong>Persyaratan </strong></span><br /><br /><span style=\"font-size: small;\"><strong>Persyaratan yang diperlukan untuk mendapatkan beasiswa Bidik Misi 2011:</strong></span><br /><span style=\"font-size: small;\">1. Siswa SMA/SMK/MA/MAK atau bentuk lain yang sederajat yang akan lulus pada tahun 2011 atau telah lulus pada tahun 2010 dan bukan penerima Bidik Misi;</span><br /><span style=\"font-size: small;\">2. Usia paling tinggi pada saat mendaftar adalah 21 tahun;</span><br /><span style=\"font-size: small;\">3. Memiliki potensi akademik memadai dan kurang mampu secara ekonomi serta masuk dalam 30 persen terbaik di sekolah (semester empat dan lima bagi yang akan lulus 2011 atau semester lima dan enam bagi lulusan</span><br /><span style=\"font-size: small;\">2010) dicantumkan pada formulir rekomendasi Kepala Sekolah/Madrasah</span><br /><span style=\"font-size: small;\">(Lampiran 3 bagian D);</span><br /><span style=\"font-size: small;\">4. Pertimbangan khusus diberikan kepada pendaftar yang mempunyai prestasi ko-kurikuler maupun ekstra kurikuler paling rendah peringkat ke-3 di tingkat Kabupaten/Kota atau prestasi non kompetitif lain yang tidak ada pemeringkatan (contoh ketua organisasi siswa);</span><br /><span style=\"font-size: small;\">5. Prestasi yang dimaksud pada butir 3 (tiga) dan 4 (empat) dinyatakan melalui surat pernyataan Kepala Sekolah/Madrasah atau kepala dinas pendidikan Kabupaten/Kota. </span><br /><span style=\"font-size: small;\">Bantuan Biaya Pendidikan ini diberikan sejak sang mahasiswa dinyatakan diterima dan memulai kegiatan akademik di perguruan tinggi, sampai menyelesaikan semester 8 (untuk program diploma IV dan S1) dan semester 6 (untuk program Diploma III) dengan ketentuan penerima beasiswa berstatus mahasiswa aktif.</span></p>','20110510201505.png','1','publish'),(2,'2011-05-30 15:15:34','Kemendiknas Terbaik Pertama Penerapan Sistem Akuntabilitas Kinerja Instansi Pemerintah','Kementerian Pendidikan Nasional (Kemendiknas) menempati posisi terbaik pertama dari 72 kementerian / lembaga berdasarkan hasil evaluasi terhadap penerapan sistem akuntabilitas kinerja yang dilakukan oleh Kementerian Negara Pendayagunaan Aparatur Negara da','<div class=\"art-article\"><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Kementerian Pendidikan Nasional (Kemendiknas) menempati posisi terbaik pertama dari 72 kementerian / lembaga berdasarkan hasil evaluasi terhadap penerapan sistem akuntabilitas kinerja yang dilakukan oleh Kementerian Negara Pendayagunaan Aparatur Negara dan Reformasi Birokrasi.</span>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Menteri PAN &nbsp;dan Reformasi Birokrasi pada Selasa (23/3/2010) memberikan penghargaan secara langsung kepada Kemendiknas yang diwakili oleh Staf Ahli Mendiknas, yang dihadiri juga oleh seluruh Sekretaris Jenderal / Sekretaris Utama Kementerian / Lembaga.</span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Dalam penilaian yang dilakukan oleh Kementerian PAN dan Reformasi Birokrasi , lima komponen besar manajemen kinerja yang meliputi perencanaan kinerja, pengukuran kinerja, pelaporan kinerja, evaluasi kinerja, dan capaian kinerja, &nbsp;Kemendiknas mendapat total skor 68.55 (predikat B), nilai tertinggi dari 72 kementerian / lembaga yang berada pada kisaran nilai 22.52 &ndash; 68.55.</span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Melalui Meneg PAN dan Reformasi Birokrasi, LAKIP merupakan salah satu dokumen yang menjadi unsur penilaian. Metodologi yang digunakan untuk melakukan evaluasi adalah meninjau manajemen kinerja dengan menggunakan teknik criteria referrenced test atau menggunakan daftar pertanyaan dengan jawaban berdasarkan kriteria yang tersedia terhadap implementasi sistem akuntabilitas kinerja instansi pemerintah. (SaifulBari)</span></p>\r\n</div>','20110510202444.png','1','publish'),(3,'2011-05-30 15:15:34','Depdiknas Berubah Menjadi Kementerian','Departemen Pendidikan Nasional berubah nama, hal ini sesuai dengan telah ditetapkannnya Peraturan Presiden Nomor 47 tahun 2009 tentang Pembentukan dan Organisasi Kementerian Negara yang mengubah nama Departemen Pendidikan Nasional menjadi Kementerian Pend','<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Departemen Pendidikan Nasional berubah nama, hal ini sesuai dengan telah ditetapkannnya Peraturan Presiden Nomor 47 tahun 2009 tentang Pembentukan dan Organisasi Kementerian Negara yang mengubah nama Departemen Pendidikan Nasional menjadi <strong>Kementerian Pendidikan Nasional</strong> sebagaimana disebutkan dalam Pasal 1 angka 20. Perubahan nama ini berhubungan dengan penyesuaian nomenklatur yang digunakan pada semua dokumen dan identitas resmi lainnya dilingkungan Unit Utama. Penyesuaian nomenklatur sendiri diharapkan diselesaikan paling lambat bulan Mei tahun 2010 sesuai ketentuan pasal 105 Peraturan Presiden Nomor 47 Tahun 2009.</span></p>','20110510213504.jpg','1','publish'),(4,'2011-05-30 15:15:34','Peningkatan Kompetensi Pengawas Sekolah TK/SD, SMP dan PLB Dalam Membimbing Guru','Program peningkatan mutu  guru untuk menjadi profesional tidak terlepas dari mutu Pengawas Sekolah/Pengawas Satuan Pendidikan, mengingat posisi strategis pengawas sekolah sebagai pembina di sekolah binannya, oleh karena itu upaya peningkatan kompetensi pe','<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><span class=\"Apple-style-span\" style=\"color: #000000;\">Program peningkatan mutu &nbsp;guru untuk menjadi profesional tidak terlepas dari mutu Pengawas Sekolah/Pengawas Satuan Pendidikan, mengingat posisi strategis pengawas sekolah sebagai pembina di sekolah binannya, oleh karena itu upaya peningkatan kompetensi pengawas sekolah dalam melaksanakan pembimbingan dan pelatihan keterampilan guru dalam melaksanakan tugas pokoknya menjadi sangat penting dan strategis. </span></span></p>\r\n<p><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><span class=\"Apple-style-span\" style=\"color: #000000;\">Hal ini perlu dilakukan melalui kerjasama berbagai pihak yang terlibat. Tugas pengawas satuan pendidikan/pengawas sekolah dalam melakukan pembimbingan dan pelatihan profesional guru dalam melaksanakan tugas pokoknya yaitu merencanakan, melaksanakan dan menilai proses pembelajaran/pembimbingan, dan membina tenaga kependidikan lainnya baik pada satuan pendidikan maupun melalui KKG/MGMP/MKKS atau bentuk lain yang dapat meningkatkan kompetensi guru dan tenaga kependidikan lainnya.</span><span class=\"Apple-style-span\"><span class=\"Apple-style-span\" style=\"color: #000000;\">&nbsp;</span></span><span class=\"Apple-style-span\" style=\"color: #000000;\">Untuk memperoleh pemahaman bersama tentang pelaksanaan tugas pengawas satuan pendidikan sesuai dengan amanat peraturan perundang undangan, maka perlu disusun satu model pola pembimbingan terhadap guru maupun kepala sekolah melalui model perangkat pengawasan baik pengawasan akademik maupun pengawasan manajerial.</span></span></p>\r\n<p><span class=\"Apple-style-span\" style=\"color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;\">Dalam rangka implementasi tugas pengawasan sesuai dengan Permendiknas Nomor 39 tahun 2009 dan Permendiknas Nomor 21 tahun 2007, maka diperlukan adanya pengawas sekolah yang memiliki kemampuan menejerial, yaitu: (1) Pengawas sekolah yang mampu melakukan supervisi/kepengawasan pendidikan (2) Pengawas sekolah yang mampu atau memiliki kompetensi sebagai pengawas; (3) Pengawas sekolah memiliki kinerja yang baik; (4) Pengawas sekolah yang mampu menyusun program kerja kepengawasan, dan (5) Pengawas sekolah yang mampu menilai kinerja sekolah.</span></p>\r\n<p><span class=\"Apple-style-span\" style=\"color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;\">Dalam melaksanakan tugas pokoknya,&nbsp;pengawas sekolah harus mampu memotivasi, mendorong, menggalang, mengarahkan, membimbing, mensupervisi seluruh pendidik dan tenaga kependidikan yang menjadi tanggung jawabnya.</span></p>\r\n<p><span class=\"Apple-style-span\" style=\"color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;\">Berdasarkan rasional di atas pada tahun 2009 Direktorat Tenaga Kependidikan Departemen Pendidikan Nasional memprogramkan kegiatan peningkatan kompetensi pengawas sekolah dalam melakukan pembimbingan dan pelatihan profesionalisme guru dasn tugas pengawasan.</span></p>\r\n<p><span class=\"Apple-style-span\" style=\"color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;\">Kegiatan kompetensi pengawas diikuti oleh 600 orang yang terdiri dari pengawas TK/SD, SMP, dan PLB dari berbagai daerah yang terbagi dalam 4 region yaitu: Riau, Bandung Sawangan Bogor dan&nbsp;Makassar.</span></p>\r\n<p><span class=\"Apple-style-span\" style=\"color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;\">Dalam kesempatan ini kami mengucapkan terima kasih atas peran aktif semua pihak yang telah memberikan kontribusinya bagi usaha peningkatan mutu tenaga kependidikan di&nbsp;Indonesia.</span></p>\r\n<p><span class=\"Apple-style-span\" style=\"color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;\">Program peningkatan mutu &nbsp;guru untuk menjadi profesional tidak terlepas dari mutu Pengawas Sekolah/Pengawas Satuan Pendidikan, mengingat posisi strategis pengawas sekolah sebagai pembina di sekolah binannya, oleh karena itu upaya peningkatan kompetensi pengawas sekolah dalam melaksanakan pembimbingan dan pelatihan keterampilan guru dalam melaksanakan tugas pokoknya menjadi sangat penting dan strategis. Hal ini perlu dilakukan melalui kerjasama berbagai pihak yang terlibat. Tugas pengawas satuan pendidikan/pengawas sekolah dalam melakukan pembimbingan dan pelatihan profesional guru dalam melaksanakan tugas pokoknya yaitu merencanakan, melaksanakan dan menilai proses pembelajaran/pembimbingan, dan membina tenaga kependidikan lainnya baik pada satuan pendidikan maupun melalui KKG/MGMP/MKKS atau bentuk lain yang dapat meningkatkan kompetensi guru dan tenaga kependidikan lainnya.&nbsp;Untuk memperoleh pemahaman bersama tentang pelaksanaan tugas pengawas satuan pendidikan sesuai dengan amanat peraturan perundang undangan, maka perlu disusun satu model pola pembimbingan terhadap guru maupun kepala sekolah melalui model perangkat pengawasan baik pengawasan akademik maupun pengawasan manajerial.</span></p>\r\n<p>&nbsp;<span class=\"Apple-style-span\" style=\"color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;\">Dalam rangka implementasi tugas pengawasan sesuai dengan Permendiknas Nomor 39 tahun 2009 dan Permendiknas Nomor 21 tahun 2007, maka diperlukan adanya pengawas sekolah yang memiliki kemampuan menejerial, yaitu: (1) Pengawas sekolah yang mampu melakukan supervisi/kepengawasan pendidikan (2) Pengawas sekolah yang mampu atau memiliki kompetensi sebagai pengawas; (3) Pengawas sekolah memiliki kinerja yang baik; (4) Pengawas sekolah yang mampu menyusun program kerja kepengawasan, dan (5) Pengawas sekolah yang mampu menilai kinerja sekolah.</span></p>\r\n<p><span class=\"Apple-style-span\" style=\"color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;\">Dalam melaksanakan tugas pokoknya,&nbsp;pengawas sekolah harus mampu memotivasi, mendorong, menggalang, mengarahkan, membimbing, mensupervisi seluruh pendidik dan tenaga kependidikan yang menjadi tanggung jawabnya.</span></p>\r\n<p>&nbsp;<span class=\"Apple-style-span\" style=\"color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;\">Berdasarkan rasional di atas pada tahun 2009 Direktorat Tenaga Kependidikan Departemen Pendidikan Nasional memprogramkan kegiatan peningkatan kompetensi pengawas sekolah dalam melakukan pembimbingan dan pelatihan profesionalisme guru dasn tugas pengawasan.</span></p>\r\n<p>&nbsp;<span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><span class=\"Apple-style-span\" style=\"color: #000000;\">Kegiatan kompetensi pengawas diikuti oleh 600 orang yang terdiri dari pengawas TK/SD, SMP, dan PLB dari berbagai daerah yang terbagi dalam 4 region yaitu: Riau, Bandung Sawangan Bogor dan&nbsp;Makassar.</span><span class=\"Apple-style-span\" style=\"color: #000000;\">&nbsp;</span><span class=\"Apple-style-span\" style=\"color: #000000;\">Dalam kesempatan ini kami mengucapkan terima kasih atas peran aktif semua pihak yang telah memberikan kontribusinya bagi usaha peningkatan mutu tenaga kependidikan di&nbsp;Indonesia.</span></span></p>','20110510205409.jpg','1','publish'),(5,'2011-05-30 15:15:34','Penjelasan Tentang Adanya Penipuan Program Bimbingan Ujian Sertifikasi Guru','Berdasarkan beberapa pengaduan dari guru yang disampaikan kepada kami tentang adanya penipuan yang mengatasnamakan tim setifikasi guru di Direktorat Jenderal Peningkatan Mutu Pendidik dan Tenaga Kependidikan (Ditjen PMPTK), dengan ini kami informasikan ba','<div class=\"art-article\">\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Berdasarkan beberapa pengaduan dari guru yang disampaikan kepada kami tentang adanya penipuan yang mengatasnamakan tim setifikasi guru di Direktorat Jenderal Peningkatan Mutu Pendidik dan Tenaga Kependidikan (Ditjen PMPTK), dengan ini kami informasikan bahwa Ditjen PMPTK tidak mempunyai kegiatan Bimbingan Ujian Sertifikasi Guru 2010. Atas penipuan ini guru yang namanya tertera dalam undangan diminta untuk menghubungi seseorang dan dipaksa untuk menyetorkan sejumlah dana pendaftaran kegiatan yang dilaksanakan di salah satu Hotel di Jakarta.</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><br /></span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">kegitan sertifikasi guru yang menjadi tanggung jawab Ditjen PMPTK adalah menyusun regulasi, pedoman teknis pelaksanaan, sosialisasi kepada dinas pendidikan di provinsi dan kabupaten/kota, dan pemantauan pelaksanaan sertifikasi guru. Sedangkan kegiatan pemberian informasi atau sosialisasi setifikasi guru kepada guru sebagai peserta sertifikasi menjadi tanggung jawab dinas pendidikan di provinsi dan kabupaten/kota.</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\"><br /></span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Kami menghimbau kepada guru, kepala sekolah, dan pengawas agar langsung berkoordinasi dengan dinas pendidikan di wilayah masing-masing jika menerima undangan tentang bimbingan sertifikasi guru.&nbsp;</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Informasi lebih lengkap tentang pelaksanaan sertifikasi guru dapat diunduh di website&nbsp;<a href=\"http://sertifikasiguru.org/\" target=\"_parent\">http://sertifikasiguru.org</a></span></div>\r\n</div>','20110510205757.png','1','publish'),(6,'2011-05-30 15:31:22','dasdas2','dasdasdsa dasdasdas dsa dsadasdas','<p>isi berita</p>','20110530222549.jpg','5','pending');
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
INSERT INTO `daftar_galeri` VALUES (5,'Sertifikasi Guru','20110519111028.jpg');
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
INSERT INTO `download` VALUES (2,'Instrumen Pendataan ','Kuesioner isian dan Petunjuk pengisian untuk pemohon NUPTK di Dinas Pendidikan Kabupaten/Kota ','InstrumenPendataanPTK2009+petunjuk.zip'),(3,'Form Komplain','Form untuk mengajukan keluhan jika pengajuan NUPTK ditolak dengan alasan yang kurang jelas atau salah. ','KomplainNUPTK.xls'),(4,'NUPTK WebBrowser','Aplikasi melihat NUPTK yang telah diterbitkan ','zf.zip');
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
INSERT INTO `faq` VALUES (2,1,'Bagaimana cara mendapatkan NUPTK?','<ol style=\"margin-left: 10px;\" dir=\"ltr\">\r\n<li style=\"text-align: left;\"><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Ambil format instrumen individu data PTK di sekolah atau di Dinas Pendidikan Kab./Kota bagian Ketenagaan Sekretariat Pendaftaran. Atau, dapat diunduh di sini (lihat di bagian akhiur tulisan).</span></li>\r\n<li style=\"text-align: left;\"><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Isi dengan benar dan selengkap-lengkapnya sesuai petunjuk! NUPTK bisa keluar tergantung dari kelengkapan dan keabsahan instrumen.</span></li>\r\n<li style=\"text-align: left;\"><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Kumpulkan ke TU sekolah/Kepala Sekolah atau langsung kirim ke Dinas Pendidikan Kab./Kota untuk dientri.</span></li>\r\n<li style=\"text-align: left;\"><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Dikirim ke LPMP (oleh Dinas Pendidikan Kab/Kota)&nbsp; dan akan dikirim ke Ditjen PMPTK Jakarta untuk dikeluarkan NUPTK-nya.</span></li>\r\n</ol>');
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
INSERT INTO `galeri` VALUES (5,5,'Dirjen PMPTK','20110519110553.jpg'),(6,5,'Panitia','20110519110613.jpg'),(7,5,'Peserta 1','20110519110636.jpg'),(8,5,'Peserta 2','20110519110754.jpg'),(9,5,'Peserta 3','20110519110835.jpg'),(10,5,'Peserta 4','20110519110848.jpg'),(11,5,'Peserta 5','20110519110901.jpg'),(12,5,'Peserta 6','20110519110914.jpg');
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
INSERT INTO `informasi` VALUES (1,'visi','<p>Sesuai dengan <strong><a href=\"http://google.co.id\" target=\"_blank\">Pasal 3 UU Nomor 20 Tahun 2003</a></strong>, maka &ldquo;Pendidikan Nasional harus mengembangkan kemampuan dan membentuk watak serta peradaban bangsa yang bermartabat dalamrangka mencerdaskan bangsa, bertujuan untuk berkembangnya potensi peserta didik agar menjadimanusia beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri dan menjadi warga negara yang demokratis serta bertanggungjawab.</p>'),(2,'misi','<p>Mewujudkan Pendidikan yang Mampu Membangun Insan Indonesia Cerdas dan Kompetetif, yang Berkeadilan, Bermutu, dan relevan dengan Kebutuhan MAsyarakat lokal dan Global.</p>'),(3,'sejarah','<p style=\"text-align: left;\"><img style=\"margin: 0 5px 0 0;\" title=\"Gambar 1\" src=\"../../images/photo_1.jpg\" alt=\"Gambar 1\" width=\"283\" height=\"150\" align=\"left\" />&nbsp;Sesuai dengan <strong>Pasal 3 UU Nomor 20 Tahun 2003</strong>, maka &ldquo;Pendidikan Nasional harus mengembangkan kemampuan dan membentuk watak serta peradaban bangsa yang bermartabat dalamrangka mencerdaskan bangsa, bertujuan untuk berkembangnya potensi peserta didik agar menjadimanusia beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri dan menjadi warga negara yang demokratis serta bertanggungjawab.</p>'),(4,'direktori','<h2><span style=\"color: #000000;\">Kedudukan</span></h2>\r\n<p>Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan dipimpin oleh seorang Kepala yang berada di bawah dan bertanggung jawab kepada Menteri Pendidikan Nasional.</p>\r\n<h2>Tugas</h2>\r\n<p>Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan mempunyai tugas melaksanakan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan.</p>\r\n<h2>Fungsi</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 664, Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan kebijakan teknis, rencana, dan program pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>b. pelaksanaan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>c. pemantauan, evaluasi, dan pelaporan pelaksanaan pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan; dan</p>\r\n</li>\r\n<li>\r\n<p>d. pelaksanaan administrasi Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan.</p>\r\n</li>\r\n</ul>'),(5,'nuptk','<h2><span style=\"color: #00ccff;\">Nomor Unik Pendidik dan Tenaga Kependidikan</span></h2>\r\n<p>NUPTK (Nomor Unik Pendidik dan Tenaga Kependidikan) adalah nomor identitas yang bersifat nasional untuk seluruh PTK (Pendidik dan Tenaga Kependidikan). NUPTK terdiri dari 16 angka yang bersifat tetap karena NUPTK yang dimiliki seorang PTK tidak akan berubah meskipun yang bersangkutan telah berpindah tempat mengajar atau terjadi perubahan data periwayatan.</p>\r\n<p>NUPTK diberikan kepada seluruh PTK baik PNS maupun Non-PNS sebagai Nomor Identitas yang resmi untuk keperluan identifikasi dalam berbagai pelaksanaan program dan kegiatan yang berkaitan dengna pendidikan dalam rangka peningkatan mutu pendidik dan tenaga kependidikan.</p>\r\n<p>Manfaat untuk tenaga pendidik yang memiki NUPTK adalah:</p>\r\n<ul>\r\n<li>\r\n<p>1. Berpartisipasi dalam sebuah proses/mekanisme pendataan secara nasional sehingga dapat membantu pemerintah dalam merencanakan berbagai program peningkatan kesejahteraan bagi tenaga pendidik.</p>\r\n</li>\r\n<li>\r\n<p>2. Mendapatkan nomor identifikasi resmi dan bersifat resmi dan bersifat nasional dalam mengikuti berbagai program/kegiatan yang diselenggarakan oleh pemerintah pusat/daerah.</p>\r\n</li>\r\n</ul>\r\n<p>PTK dapat mengajukan NUPTK dengan mengisi kuisioner dengan cara mengunduh di <a href=\"http://www.nuptk.info\">www.nuptk.info</a> pada menu download di \"Instrumen Pendataan\".</p>'),(6,'sekretariat','<h2><span style=\"color: #3366ff;\">Pasal 667</span></h2>\r\n<p>Sekretariat Badan mempunyai tugas melaksanakan pelayanan teknis dan administratif serta pembinaan dan koordinasi pelaksanaan tugas unit organisasi di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan.</p>\r\n<h2>Pasal 668</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 667, Sekretariat Badan menyelenggarakan fungsi:</p>\r\n<ul class=\"listok2\">\r\n<li>\r\n<p>1. koordinasi penyusunan kebijakan, rencana, program, dan anggaran di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li>\r\n<p>2. pengelolaan data dan informasi sumber daya manusia pendidikan dan penjaminan mutu pendidikan</p>\r\n</li>\r\n<li>\r\n<p>3. koordinasi pelaksanaan kegiatan dan kerja sama di bidang pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan</p>\r\n</li>\r\n<li>\r\n<p>4. pengelolaan keuangan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>5. penyusunan rancangan peraturan perundang-undangan dan kajian hukum di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>6. pelaksanaan urusan organisasi dan tata laksana di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>7. pengelolaan kepegawaian di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>8. koordinasi penyusunan bahan publikasi dan hubungan masyarakat di bidang pengembangan sumber daya manusia pendidikan dan penjaminan mutu pendidikan</p>\r\n</li>\r\n<li>\r\n<p>9. pengelolaan barang milik negara di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n<li>\r\n<p>10 pelaksanaan urusan ketatausahaan dan kerumahtanggaan di lingkungan Badan Pengembangan Sumber Daya Manusia Pendidikan dan Penjaminan Mutu Pendidikan</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 669</h2>\r\n<p>Sekretariat Badan terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>1. Bagian Perencanaan dan Penganggaran</p>\r\n</li>\r\n<li>\r\n<p>2. Bagian Keuangan</p>\r\n</li>\r\n<li>\r\n<p>3. Bagian Hukum dan Kepegawaian</p>\r\n</li>\r\n<li>\r\n<p>4. Bagian Umum</p>\r\n</li>\r\n</ul>\r\n<center><input class=\"button\" type=\"button\" value=\"Website Sekretariat Badan\" /></center>'),(7,'pppp','<h2><span style=\"color: #3366ff;\">Pasal 686</span></h2>\r\n<p>Pusat Pengembangan Profesi Pendidik mempunyai tugas melaksanakan penyusunan kebijakan teknis dan pengembangan profesi pendidik.</p>\r\n<h2>Pasal 687</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 686, Pusat Pengembangan Profesi Pendidik menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan kebijakan teknis di bidang pengembangan profesi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>b. penyusunan program pengembangan profesi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>c. koordinasi pelaksanaan peningkatan kompetensi dan sertifikasi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>d. fasilitasi pelaksanaan peningkatan kompetensi dan sertifikasi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>e. pemantauan, evaluasi, dan pelaporan pelaksanaan pengembangan profesi pendidik;</p>\r\n</li>\r\n<li>\r\n<p>f. pelaksanaan administrasi Pusat Pengembangan Profesi Pendidik.</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 688</h2>\r\n<p>Pusat Pengembangan Profesi Pendidik terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>a. Bidang Pengembangan Profesi Pendidik Pendidikan Anak Usia Dini, Nonformal, dan Informal;</p>\r\n</li>\r\n<li>\r\n<p>b. Bidang Pengembangan Profesi Pendidik Pendidikan Dasar;</p>\r\n</li>\r\n<li>\r\n<p>c. Bidang Pengembangan Profesi Pendidik Pendidikan Menengah;</p>\r\n</li>\r\n<li>\r\n<p>d. Subbagian Tata Usaha; dan</p>\r\n</li>\r\n<li>\r\n<p>e. Kelompok Jabatan Fungsional.</p>\r\n</li>\r\n</ul>\r\n<center><input class=\"button\" type=\"button\" value=\"Website Pusat Pengembangan Profesi Pendidik\" /></center>'),(8,'pptk','<h2><span style=\"color: #3366ff;\">Pasal 702</span></h2>\r\n<p>Pusat Pengembangan Tenaga Kependidikan mempunyai tugas melaksanakan penyusunan kebijakan teknis, koordinasi, dan pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian.</p>\r\n<h2>Pasal 703</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 702, Pusat Pengembangan Tenaga Kependidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan kebijakan teknis di bidang pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian;</p>\r\n</li>\r\n<li>\r\n<p>b. penyusunan program pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian;</p>\r\n</li>\r\n<li>\r\n<p>c. penyusunan bahan pelaksanaan pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian;</p>\r\n</li>\r\n<li>\r\n<p>d. fasilitasi pelaksanaan pengembangan tenaga kependidikan dan pegawai;</p>\r\n</li>\r\n<li>\r\n<p>e. pemantauan, evaluasi, dan pelaporan pengembangan tenaga kependidikan dan pegawai di lingkungan Kementerian; dan</p>\r\n</li>\r\n<li>\r\n<p>f. pelaksanaan administrasi Pusat Pengembangan Tenaga Kependidikan.</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 704</h2>\r\n<p>Pusat Pengembangan Tenaga Kependidikan terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>a. Bidang Pengembangan Tenaga Teknis dan Fungsional Non-Pendidik;</p>\r\n</li>\r\n<li>\r\n<p>b. Bidang Pengembangan Tenaga Pimpinan Pegawai;</p>\r\n</li>\r\n<li>\r\n<p>c. Bagian Tata Usaha; dan</p>\r\n</li>\r\n<li>\r\n<p>d. Kelompok Jabatan Fungsional.</p>\r\n</li>\r\n</ul>\r\n<center><input class=\"button\" type=\"button\" value=\"Website Pusat Pengembangan Tenaga Kependidikan\" /></center>'),(9,'ppmp','<h2><span style=\"color: #3366ff;\">Pasal 717</span></h2>\r\n<p>Pusat Penjaminan Mutu Pendidikan mempunyai tugas melaksanakan penyusunan bahan kebijakan teknis dan penjaminan mutu pendidikan.</p>\r\n<h2>Pasal 718</h2>\r\n<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 717, Pusat Penjaminan Mutu Pendidikan menyelenggarakan fungsi:</p>\r\n<ul>\r\n<li>\r\n<p>a. penyusunan bahan kebijakan teknis di bidang penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>b. penyusunan program penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>c. pelaksanaan pemetaan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>d. koordinasi dan fasilitasi pelaksanaan penjaminan mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>e. pengembangan dan pengelolaan sistem informasi mutu pendidikan;</p>\r\n</li>\r\n<li>\r\n<p>f. pemantauan, evaluasi, dan pelaporan pelaksanaan penjaminan mutu pendidikan; dan</p>\r\n</li>\r\n<li>\r\n<p>g. pelaksanaan administrasi Pusat Penjaminan Mutu Pendidikan.</p>\r\n</li>\r\n</ul>\r\n<h2>Pasal 719</h2>\r\n<p>Pusat Penjaminan Mutu Pendidikan terdiri atas:</p>\r\n<ul>\r\n<li>\r\n<p>a. Bidang Penjaminan Mutu Pendidikan Anak Usia Dini, Nonformal, dan Informal;</p>\r\n</li>\r\n<li>\r\n<p>b. Bidang Penjaminan Mutu Pendidikan Dasar;</p>\r\n</li>\r\n<li>\r\n<p>c. Bidang Penjaminan Mutu Pendidikan Menengah dan Pendidikan Tinggi;</p>\r\n</li>\r\n<li>\r\n<p>d. Subbagian Tata Usaha; dan</p>\r\n</li>\r\n<li>\r\n<p>e. Kelompok Jabatan Fungsional.</p>\r\n</li>\r\n</ul>\r\n<center><input class=\"button\" type=\"button\" value=\"Website Pusat Penjaminan Mutu Pendidikan\" /></center>'),(10,'sarpras','<p><strong>Sarana &amp; Prasarana</strong></p>'),(11,'prestasi','<p style=\"text-align: left;\" align=\"center\"><strong>AJANG BERGENGSI AKADEMISI BERPRESTASI</strong></p>\r\n<p><strong>&nbsp;</strong><em>Mulai tahun 2009, penghargaan akademisi berprestasi juga diberikan kepada kepala program studi, pustakawan, laboran dan tenaga administrasi. Memperkenalkan nilai ketekunan dan prestasi kerja&nbsp; ilmiah kepada masyarakat.</em></p>\r\n<p>ARIEN TW</p>\r\n<p>&nbsp;&ldquo;Tidak cukup lebar tangan kita untuk mengapresiasi segala ketekunan dan prestasi yang telah</p>\r\n<p>diukir oleh para akademisi kampus kita,&rdquo; kata Prof. dr. Fasli Jalal, Ph.D Direktur Jenderal Pendidikan Tinggi,saat memberikan sambutan pada malam penganugerahan mahasiswa dan akademisi berprestasi tingkat nasional di Hotel Sahid, Jakarta, pada 29 Juli 2009.</p>');
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
INSERT INTO `layanan` VALUES (1,1,'Prosedur Perijinan Pendirian PT','Prosedur Perijinan Pendirian PT','1','publish'),(2,1,'Prosedur Izin Belajar Mahasiswa Asing','<p>Prosedur Izin Belajar Mahasiswa Asing</p>','1','publish'),(3,1,'Prosedur Ijin Mengajar Tenaga Ahli Asing dan Tenaga Sukarela Asing','<p>Prosedur Ijin Mengajar Tenaga Ahli Asing dan Tenaga Sukarela Asing</p>','1','publish'),(6,1,'dasdas','<p>dsadsa</p>','5','pending');
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
INSERT INTO `linkterkait` VALUES (1,'Kemendiknas','Kementrian Pendidikan Nasional','http://www.kemendiknas.go.id'),(2,'NUPTK','Nomor Unik Pendidik dan Tenaga Kependidikan','http://www.nuptk.info'),(3,'Sekretariat','Sekretariat Badan','#'),(4,'PPPP','Pusat Pengembangan Profesi Pendidik','#'),(5,'PPTK','Pusat Pengembangan Tenaga Kependidikan','#'),(6,'PPMP ','Pusat Penjaminan Mutu Pendidikan','#');
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
INSERT INTO `panduan` VALUES (1,'Panduan Setifikasi Guru','Panduan-panduan Sertfikasi Guru','<p>Panduan-panduan Sertfikasi Guru</p>'),(2,'Panduan Pengembangan Tenaga Kependidikan','Panduan - Panduan Cara Mengembangkan Tenaga Kependidikan','<p>1. Panduan Pengembangan Diri</p>\r\n<p>&nbsp;&nbsp; &nbsp;pelajari cara mengembangkan diri seorang peserta didik, download&nbsp;<a href=\"#\">file ini</a></p>\r\n<p>2. Panduan Pelatihan Cara mengajar</p>'),(4,'Persyaratan Mendapatkan NUPTK','Persyaratan standar minimal tentang PTK yang bisa dijaring baik pendidikan Formal maupun Non Formal untuk mendapatkan NUPTK','<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Persyaratan standar minimal tentang PTK yang bisa dijaring baik pendidikan Formal maupun Non Formal untuk mendapatkan NUPTK</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Persyaratan umum:</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">1.WNI dan WNA yang sudah naturisasi</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">2.Menjadi Pendidik (melakukan tatap muka di depan kelas) dan Tenaga Kependidikan (menunjang proses pendidikan) baik padapendidikan formal maupun non formal, PNS maupun non PNS dan baik dibawah binaan Kemendiknas maupun Kemenag.</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Persyaratan Khusus :</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">a.PTK Pendidikan Formal</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">1)Untuk PNS/CPNS yang dibuktikan dengan bukti SK Penetapan sebagai Guru/Pendidik untuk segera dilakukan proses pendataanberdasarkan bukti fisik pendukung.</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">2)Untuk Non PNS pendataan usulan baru dilakukan &nbsp;maksimal 2 (dua) kali dalam setahun (pada bulan Juni dan Desembermenjelang awal semester) dengan syarat :</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">a)Minimal telah memiliki masa kerja <strong>2 tahun</strong> yang dibuktikan dengan SK Penugasan dari lembaga yang berwenang.</span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">b.PTK Non Formal</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">Segera melakukan pendataan PTK-PNF berdasarkan bukti fisik pendukung. Pengusulan NUPTK bagi PTK-PNF dengan syarat :</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">1)Sampai akhir tahun 2010 semua PTK PNF segera dimasukkan ke dalam database SIM NUPTK-PNF untuk diproses generateNUPTK.</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">2)Mulai tahun 2011, PTK-PNF yang diusulkan masuk database SIMNUPTK PNF minimal memiliki masa kerja 2 tahun (TMT minimalbulan Juli tahun 2009).</span></div>\r\n<div><span style=\"font-family: arial,helvetica,sans-serif; font-size: small;\">3)Lembaga/instansinya terdaftar di dinas pendidikan setempat</span></div>');
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
INSERT INTO `peraturan` VALUES (1,'3',2006,'Nomor 1 Tahun 2006','Pemberian Kewenangan Kepada Empat Perguruan Tinggi Badan Hukum Milik Negara Untuk Membuka Dan Menutup Program Studi Pada Perguruan Tinggi Yang Bersangkutan','PerMen_Nomor_1_Tahun_2006.pdf'),(2,'1',2006,'Nomor 05 Tahun 2006','Gerakan Nasional Percepatan Penuntasan Wajib Belajar Pendidikan Dasar Sembilan Tahun dan Pemberantasan Buta Aksara','InPres_Nomor_05_Tahun_2006.pdf'),(3,'2',2010,'Nomor 134 Tahun 2010','SATUAN KERJA KEMENTERIAN PENDIDIKAN NASIONAL TAHUN 2011 Lampiran Kepmen No 134 tahun 2010','KepMen_Nomor_134_Tahun_2010.pdf'),(4,'4',2010,'Nomor 17 Tahun 2010','Pengelolaan dan Penyelenggaraan Pendidikan','PerPem_Nomor_17_Tahun_2010.pdf'),(5,'6',2009,'Nomor 24 Tahun 2009','Bendera, Bahasa, Dan Lambang Negara, serta Lagu Kebangsaan','UU_Nomor_24_Tahun_2009.pdf'),(7,'4',2007,'Nomor 8 Tahun 2007','Investasi Pemerintah','PerPem_Nomor_8_Tahun_2007.pdf');
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
INSERT INTO `pesan` VALUES (1,'Azia Akbar','adhi.taufiq.akbar@gmail.com','Bagaimana cara memasukkan atau menambah biodata siswa yang baru pindah pada suatu sekolah, sementara nomor NISN nya masih di sekolah asalnya tetapi telah dalam kategori Siswa pindah/ mutasi??','2011-05-05 | 02:30 pm',1),(3,'akhmad ramadhan','raymadhan@xxxxxx','pak bagaimna sihh klo ingin tau nomer NISN kita ??','2011-05-14 | 02:00 pm',1),(4,'mahsan hasyim','mahsan_hasyim@xxxxxx','1. bagaimana cara mengetahui NISN dan NPSN dari masimg masing siswa dan sekolah ???<br>\r\n2. jika kita ingin kuliah keluar daerah, kamana dan bagaimana kta mngajukan formulirnya??','2011-05-14 | 02:00 pm',1),(5,'hamdan patoni','deryzkomdun@xxxxxx','berapa no induk siswa nasional saya hamdan patoni smp negri 1 nagreg','2011-05-14 | 02:00 pm',1),(6,'Siti Aisyah','eciaisyah@xxxxxx','maaf pa setelah dilihat di bagian bawah formulir tersebut,\r\ndisana disebutkan hanya formulir itu saja yang diserahkan ke operator dapodik dinas pendidikan kab.,\r\napakah tidak ada prsyaratan lain?\r\ntakutnya saya jauh\" kesana ada kekurangan,\r\n\r\n\r\nkalau melalui operator sekolah,\r\nyang loginnya harus pakai email sekolah?','0000-00-00 | 00:00',1),(7,'fahriyatta','kusumaarotaroyan@xxxxxx','selamt siang DAPODIK...\r\nsaya ingin bertanya\r\nbahwa saya mempunyai keluhan yaitu saya telah mencari nama siswa putri AN.\"ZEVILIA\" yANG saat ini menduduki jenjang pendidikan kelas 2 smp negri di jakarta pusat. setelah saya cari namanya di mesin pencarian tetapi tidak terdata.. maka dri itu mhon bantuan nya???\r\nterima kasih....','0000-00-00 | 00:00',1),(8,'Abdul Qodir','qodir.abdul63@xxxxxx','Mohon kepada operator kabupaten Bekasi agar Siswa atas nama Muhamad Umarto dengan NISN 9983210420 agar dijadikan siswa berstatus bebas','0000-00-00 | 00:00',1),(9,'Tuti susilawati','tutiesusilawati@xxxxxx','saya lulusan SDN Margaasih kec Conggeaang Kab SMD angkatan 2007.sampai saat ini saya tidak mempunyai NISN.karena saya sering pindah-pindah sekolah.sekarang saya membutuhkan NISN untuk daftar ke smk pilihan saya,tp saya bingung krn fendaftarannya memerlukan foto copy NISN.mohon bantuan nya','0000-00-00 | 00:00',1),(10,'smaislamymi','smais@xxxxxx','siswi dari sma islam ymi - wonopringgo - kabupaten pekalongan yang bernama :<br>\r\n1. ASMI ROHANA KELAS XII/IPA<br>\r\n2. SILVIANA RAHMAWATI XII/IPA<br>\r\nBelum terdaftar dalam NISN, terima kasih','0000-00-00 | 00:00',1),(11,'chamim','champungan@xxxxxx','untuk jenjang smk yang kelulusan tahun 2009 apakah masih bisa mendapatkan NISN? kalau bisa, bagaimna proses yang harus kami penuhi? mohon penjelasannya.. terima kasih banyak','0000-00-00 | 00:00',1),(12,'willy','willy_keong@xxxxxx','om admin kog nama saya tidak ada di SMA DELLA STRADA adanya di tahun 2010 om admin.. solusinya gimana?? thx','0000-00-00 | 00:00',1),(17,'Rezania Akbar','mamim@quwh.com','<p>kangen mamiim... mamiim lagi apa skarang yaa.. :)</p>','17-May-2011 | 18:15',0),(15,'adhi','wew@wow.waw','<p>isi disini..</p>','17-May-2011 | 06:18',0),(18,'weww','wew@yahoo.com','<p>wew</p>','17-May-2011 | 20:35',0);
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
INSERT INTO `pesan_tanggapi` VALUES (2,1,1,'<p>kangen mamiim... :)</p>','16-May-2011 | 04:36 pm'),(3,3,1,'<p>Untuk mengetahui NISN, silakan dicek di menu REKAP DATA atau DATA SISWA pada situs NISN http://nisn.dapodik.org&nbsp;<br />1. Memilih lokasi asal Propinsi sekolahnya;<br />2. Memilih lokasi asal Kabupaten/Kota sekolahnya;<br />3. Memilih Jenjang Sekolahnya;<br />4. Memilih sekolah yang dituju, lalu klik link DETAIL maka akan muncul daftar siswa aktif pada tersebut. Jikad tidak ada sama sekali berarti sekolah belum mendaftarkan siswanya.<br />5. Untuk siswa lulusan maka silakan mengklik tab ALUMNI;<br />6. Untuk siswa lulusan pada tahun tertentu silakan memilih tahun yang dimaksud.</p>','16-May-2011 | 04:52 pm'),(4,4,1,'<p>Untuk mengetahui NPSN, silakan bisa dicek di menu REKAP DATA atau DATA SEKOLAH pada situs NPSN http://npsn.dapodik.org&nbsp;<br />1. Memilih lokasi asal Propinsi;<br />2. Memilih lokasi asal Kabupaten/Kota;<br />3. Memilih Jenjang Sekolahnya;<br />4. Mencari sekolah yang dituju.</p>','16-May-2011 | 04:56 pm'),(5,5,1,'<p>Untuk mengetahui NISN, silakan dicek di menu REKAP DATA atau DATA SISWA pada situs NISN http://nisn.dapodik.org&nbsp;<br />1. Memilih lokasi asal Propinsi sekolahnya;<br />2. Memilih lokasi asal Kabupaten/Kota sekolahnya;<br />3. Memilih Jenjang Sekolahnya;<br />4. Memilih sekolah yang dituju, lalu klik link DETAIL maka akan muncul daftar siswa aktif pada tersebut. Jikad tidak ada sama sekali berarti sekolah belum mendaftarkan siswanya.<br />5. Untuk siswa lulusan maka silakan mengklik tab ALUMNI;<br />6. Untuk siswa lulusan pada tahun tertentu silakan memilih tahun yang dimaksud.</p>','16-May-2011 | 04:59 pm'),(6,6,1,'<p>Formulir tersebut merupakan kebijakan dari Kementrian Pendidikan Nasional. Seluruh dinas pendidikan di wilayah Indonesia sudah faham dengan hal itu.<br /><br />Untuk login sekolah,<br />Sekolah dapat melakukan upload data dan mengelola NISN, Data Pendidikan secara mandiri, namun terlebih dahulu harus memiliki akun dapodik tingkat sekolah.<br />1. Silakan melakukan pengajuan akun dapodik sekolah di situs NISN http://nisn.dapodik.org pada menu PENGAJUAN AKUN;<br />2. Mengisi Formulir Pengajuan Akun Dapodik tersebut secara lengkap;<br />3. Mengunduh Formulir yang telah diisi tersebut secara online;<br />4. Mencetak, dibubuhi tanda tangan kepala sekolah, dibubuhi stempel sekolah;<br />5. Mengirimkan formulir tersebut ke dinas pendidikan kab./kota setempat atau memindai (scan) formulir tersebut lalu mengirimkan ke email admindapodik@jardiknas.org</p>','16-May-2011 | 05:03 pm'),(7,7,1,'<p>Untuk mengetahui NISN, silakan dicek di menu REKAP DATA atau DATA SISWA pada situs NISN http://nisn.dapodik.org&nbsp;<br />1. Memilih lokasi asal Propinsi sekolahnya;<br />2. Memilih lokasi asal Kabupaten/Kota sekolahnya;<br />3. Memilih Jenjang Sekolahnya;<br />4. Memilih sekolah yang dituju, lalu klik link DETAIL maka akan muncul daftar siswa aktif pada tersebut. Jikad tidak ada sama sekali berarti sekolah belum mendaftarkan siswanya.<br />5. Untuk siswa lulusan maka silakan mengklik tab ALUMNI;<br />6. Untuk siswa lulusan pada tahun tertentu silakan memilih tahun yang dimaksud.</p>','16-May-2011 | 05:56 pm'),(8,8,1,'<p>Terimakasih banyak atas laporan yang telah disampaikan,<br />Pengajuan bisa disampaikan melalui komunitas operator dapodik selurh Indonesia.<br />http://groups.yahoo.com/group/operator-dapodik/</p>','16-May-2011 | 05:58 pm'),(9,9,1,'<p>Untuk pengajuan NISN Baru, silakan mengikuti prosedur berikut ini:<br />1. mengunduh (download) formulir B.3.3 pengajuan Nomor Induk Siswa Nasional (NISN) baru pada situs NISN http://nisn.dapodik.org melalui menu FORMULIR PENGAJUAN;<br />2. Mengisi dan mencetak formulir formulir tersebut secara manual;<br />3. Menyerahkan kepada operator dapodik tingkat sekolah atau operator dapodik dinas pendidikan kab./kota setempat.</p>','16-May-2011 | 05:59 pm'),(10,10,1,'<p>Untuk pengajuan NISN Baru, silakan mengikuti prosedur berikut ini:<br />1. mengunduh (download) formulir B.3.3 pengajuan Nomor Induk Siswa Nasional (NISN) baru pada situs NISN http://nisn.dapodik.org melalui menu FORMULIR PENGAJUAN;<br />2. Mengisi dan mencetak formulir formulir tersebut secara manual;<br />3. Menyerahkan kepada operator dapodik tingkat sekolah atau operator dapodik dinas pendidikan kab./kota setempat.</p>','16-May-2011 | 06:01 pm'),(11,11,1,'<p>Untuk pengajuan NISN Baru, silakan mengikuti prosedur berikut ini:<br />1. mengunduh (download) formulir B.3.3 pengajuan Nomor Induk Siswa Nasional (NISN) baru pada situs NISN http://nisn.dapodik.org melalui menu FORMULIR PENGAJUAN;<br />2. Mengisi dan mencetak formulir formulir tersebut secara manual;<br />3. Menyerahkan kepada operator dapodik tingkat sekolah atau operator dapodik dinas pendidikan kab./kota setempat.</p>','16-May-2011 | 06:02 pm'),(12,12,1,'<p>Untuk pengajuan NISN Baru, silakan mengikuti prosedur berikut ini:<br />1. mengunduh (download) formulir B.3.3 pengajuan Nomor Induk Siswa Nasional (NISN) baru pada situs NISN http://nisn.dapodik.org melalui menu FORMULIR PENGAJUAN;<br />2. Mengisi dan mencetak formulir formulir tersebut secara manual;<br />3. Menyerahkan kepada operator dapodik tingkat sekolah atau operator dapodik dinas pendidikan kab./kota setempat.</p>','16-May-2011 | 06:05 pm'),(13,0,0,'0','0');
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
INSERT INTO `polling` VALUES (1,'Fitur apa yang paling anda sukai dari website ini?','Berita',11,'Data dan Statistik',14,'Substansi Pembelajaran',1,'Galeri',0,'true');
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
INSERT INTO `program_kerja` VALUES (1,'2011-05-08 12:24:11','Pendidikan Guru Bertaraf Internasional bidang MIPA','Undang Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional Pasal 50 ayat 3 menyebutkan bahwa Pemerintah dan/atau Pemerintah Daerah menyelenggarakan sekurang-kurangnya satu satuan pendidikan ','<p><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong>LATAR BELAKANG</strong></span><br /><br /></p>\r\n<div align=\"justify\"><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong>Gambaran Umum</strong></span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Undang Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional Pasal 50 ayat 3 menyebutkan bahwa Pemerintah dan/atau Pemerintah Daerah menyelenggarakan sekurang-kurangnya satu satuan pendidikan pada semua jenjang pendidikan untuk dikembangkan menjadi satuan pendidikan bertaraf internasional. Sekolah Bertaraf Internasional (SBI) adalah sekolah yang memenuhi seluruh Standar Nasional Pendidikan dan diperkaya dengan muatan-muatan yang mengacu pada standar pendidikan dari sekurang-kurangnya satu negara anggota Organization for Economic Co-operation and Development (OECD) dan/atau negara maju lainnya yang mempunyai keunggulan tertentu dalam bidang pendidikan sehingga memiliki daya saing di tingkat internasional (SNP + X).</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Sesuai dengan amanat Undang-undang tersebut pemerintah melalui Departemen Pendidikan Nasional (Depdiknas) sejak tahun 2004 telah mengembangkan program rintisan SBI untuk memfasilitasi Sekolah yang berpotensi menjadi SBI. Salah satu komponen yang perlu dikembangkan untuk mewujudkan SBI adalah pendidik. Kompetensi pendidik SBI harus memenuhi standar kompetensi pendidik yang sesuai dengan standar nasional pendidikan yang diperkaya dengan standar kompetensi pendidik yang berstandar internasional.</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Pendidik pada SBI harus memenuhi standar kompetensi yang meliputi:</span><br /><br /></div>\r\n<ol>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Memiliki kualifikasi akademik minimal S-1</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Memiliki latar belakang keilmuan sesuai dengan mata pelajaran yang dibina</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;Memiliki sertifikat profesi pendidik sesuai jenjang satuan pendidikan tempat tugasnya (nasional dan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; internasional)</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Memiliki kesanggupan untuk mengembangkan potensi diri secara berkelanjutan</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Memiliki kinerja tinggi baik secara individu maupun dalam kelompok</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Mampu menggunakan media/sumber belajar berbasis teknologi informasi dan komunikasi dalam proses belajar mengajar</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Mampu melaksanakan proses belajar mengajar dalam Bahasa Inggris secara efektif (TOEFL &gt; 500).</span></li>\r\n</ol>\r\n<p align=\"justify\"><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;Rencana strategis (Renstra) Depdiknas tahun 2004-2009 mentargetkan bahwa di setiap kabupaten/kota (sekitar 440 buah) harus diselenggarakan sekurang-kurangnya satu satuan pendidikan pada semua jenjang pendidikan untuk dikembangkan menjadi satuan pendidikan bertaraf internasional. Sampai dengan tahun 2007 Depdiknas telah memberikan block grant kepada 200 SMA, 112 SMK, 200 SMP dan 38 SD untuk membantu sekolah-sekolah tersebut dalam mengembangkan program menuju SBI. Selain itu Departemen Agama juga telah memberikan block grant kepada sejumlah Madrasah untuk tujuan yang sama. Sebagai konsekuensi dari program pengembangan SBI, saat ini kebutuhan akan tenaga pendidik dari dalam negeri yang memiliki kompetensi yang dipersyaratkan sebagaimana tersebut di atas sangat mendesak agar tidak diisi oleh tenaga dari luar. Kenyataan di lapangan menunjukkan bahwa sampai saat ini belum ada LPTK yang secara formal menyelenggarakan program S-1 MIPA yang lulusannya mampu mengajar di SBI. Untuk mengatasi hal ini pemerintah melalui Direktorat Ketenagaan Ditjen Dikti meluncurkan sebuah program hibah untuk pengembangan pendidikan guru bertaraf internasional bidang MIPA. Dalam program ini pemerintah akan memberikan block grant kepada sejumlah Perguruan Tinggi yang dinilai mampu menyelenggarakan pendidikan guru MIPA bertaraf internasional yang lulusannya memenuhi standar kompetensi SBI.</span></p>\r\n<p align=\"justify\">&nbsp;</p>\r\n<p align=\"justify\"><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong>LANDASAN HUKUM</strong></span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pengembangan pendidikan guru bertaraf internasional bidang MIPA berlandaskan pada:</span></p>\r\n<div align=\"justify\"><ol>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional dalam Pasal 50:</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Undang-Undang Nomor 17 Tahun 2007 tentang Rencana Pembangunan Jangka Panjang Nasional Tahun 2005?2025 mengatur perencanaan pembangunan jangka panjang sebagai arah dan prioritas pembangunan secara menyeluruh yang akan dilakukan secara bertahap untuk mewujudkan masyarakat adil dan makmur.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Peraturan Pemerintah Nomor 19 Tahun 2005 tentang Standar Nasional Pendidikan dalam Pasal 61 Ayat (1) menyatakan bahwa: Pemerintah bersama-sama pemerintah daerah menyelenggarakan sekurang-kurangnya satu sekolah pada jenjang pendidikan dasar dan sekurang-kurangnya satu sekolah pada jenjang pendidikan menengah untuk dikembangkan menjadi sekolah bertaraf internasional.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Rencana Strategis Departemen Pendidikan Nasional Tahun 2005?2009 menyatakan bahwa untuk meningkatkan daya saing bangsa, perlu dikembangkan sekolah bertaraf internasional pada tingkat kabupaten/kota melalui kerjasama yang konsisten antara pemerintah dengan pemerintah kabupaten/kota yang bersangkutan, untuk mengembangkan SD, SMP, SMA, dan SMK yang bertaraf internasional.</span></li>\r\n</ol></div>\r\n<p align=\"justify\"><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong>&nbsp;&nbsp; 1. KEGIATAN</strong></span><br /><br /></p>\r\n<p><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hibah Program Pengembangan Pendidikan Guru Bertaraf Internasional bidang MIPA merupakan block grant yang diberikan oleh Pemerintah (Ditjen Dikti-Depdiknas) dari APBN kepada LPTK negeri maupun swasta yang memenuhi persyaratan yang ditetapkan untuk menyelenggarakan pendidikan guru bertaraf internasional bidang MIPA program S-1. Mengingat kebutuhan guru MIPA untuk SBI sangat mendesak maka program hibah ini tidak hanya melibatkan mahasiswa angkatan 2008/2009 tetapi juga harus diterapkan pada mahasiswa angkatan 2006/2007 dan 2007/2008 sehingga dihasilkan lulusan pada tahun 2010.&nbsp;<br /></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong><br /></strong></span></p>\r\n<p align=\"justify\"><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong>&nbsp;&nbsp; 2. TUJUAN<br /><br /></strong></span></p>\r\n<p><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Program hibah Pengembangan Pendidikan Guru Bertaraf Internasional bidang MIPA ditujukan untuk membantu LPTK menghasilkan guru-guru MIPA yang memenuhi standar kompetensi SBI.<strong><br /></strong></span></p>\r\n<p align=\"justify\">&nbsp;&nbsp;</p>\r\n<p align=\"justify\"><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong>3. INDIKATOR KELUARAN</strong></span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Program hibah Pengembangan Pendidikan Guru Bertaraf Internasional bidang MIPA dinyatakan berhasil jika indikator-indikator berikut ini dapat dicapai.</span></p>\r\n<ol>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Tersedianya kurikulum program S-1 pendidikan guru bertaraf internasional bidang MIPA pada tahun pertama.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Tersedianya bahan ajar bahasa Inggris untuk MIPA. Perguruan tinggi penerima hibah diharuskan membuat mata kuliah bahasa Inggris untuk MIPA.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Tersedianya minimal dua bahan ajar (hand out) beserta Satuan Acara Perkuliahan dan instrumen evaluasi pembelajaran dalam bahasa Inggris untuk mata kuliah bidang studi setiap program studi setiap semester.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;Lulusan mampu menggunakan media/sumber belajar berbasis teknologi informasi dan komunikasi dalam proses belajar mengajar.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;Lulusan mampu menyusun Rencana Program Pengajaran dan mampu mengampu pembelajaran bidang studi MIPA yang dikuasai dengan pengantar bahasa Inggris.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;Terjadinya peningkatan secara signifikan skor rata-rata TOEFL mahasiswa setiap tahunnya dan pada akhir masa studinya rata-rata skor TOEFL mahasiswa minimal 500.</span></li>\r\n</ol>\r\n<p align=\"justify\"><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Perguruan tinggi pengusul diharuskan membuat target pencapaian performance indicators tahunan yang didasarkan pada hasil evaluasi diri dan program yang diusulkan.</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong>&nbsp;&nbsp; MEKANISME PELAKSANAAN</strong></span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Persyaratan Pengusul</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perguruan tinggi pengusul program hibah Pengembangan Pendidikan Guru Bertaraf Internasional bidang MIPA harus memenuhi persyaratan-persyaratan sebagai berikut:</span></p>\r\n<ol>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Hibah ini khusus diberikan kepada perguruan tinggi yang memiliki jurusan atau program studi S-1 Pendidikan Matematika, Pendidikan Fisika, Pendidikan Kimia dan Pendidikan Biologi.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Fakultas memiliki sekurang-kurangnya 25 persen dosen lulusan luar negeri dalam bidang yang linear dari universitas yang menggunakan pengantar Bahasa Inggris atau dosen lulusan dalam negeri yang memiliki skor TOEFL/IELTS sekurang-kurangnya 500/5,5.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Akreditasi institusi minimal B atau setiap program studi S-1 Pendidikan Matematika, Pendidikan Fisika, Pendidikan Kimia dan Pendidikan Biologi minimal B.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Fakultas mampu mengembangkan pembelajaran berbasis teknologi informasi dan komunikasi.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Fakultas harus menjalin kemitraan dengan Program Studi Pendidikan Bahasa Inggris atau UPT Bahasa, dengan disertai dokumen kemitraan.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Apabila diselenggarakan kelas-kelas khusus untuk pendidikan guru bertaraf internasional bidang MIPA maka harus berisi antara 20 sampai 25 mahasiswa per kelas.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Perguruan tinggi pengusul telah menghasilkan lulusan jenjang S-1 bidang MIPA.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Perguruan tinggi pengusul memiliki unit penjaminan mutu.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Perguruan tinggi terpilih harus membentuk task force pengelola hibah.</span></li>\r\n</ol>\r\n<p align=\"justify\"><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Selain itu perguruan tinggi pengusul juga harus menunjukkan komitmennya untuk mengikuti peraturan dan kebijakan yang telah digariskan oleh pemerintah, yang antara lain ditandai dengan:</span><br /><br /></p>\r\n<ol>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Pemenuhan atas persyaratan minimal penyelenggaraan perguruan tinggi, khususnya menyangkut izin operasi perguruan tinggi dan program studi yang diselenggarakan.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Secara tertib dan lengkap menyampaikan laporan EPSBED kepada Ditjen Dikti yang meliputi seluruh program studi yang diselenggarakan perguruan tinggi tersebut.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Tidak menyelenggarakan program yang bertentangan dengan kebijakan Ditjen Dikti seperti kelas jauh, ijazah palsu, menyelenggarakan program tanpa izin, dll.</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Tidak sedang dikenakan sanksi oleh Ditjen Dikti (termasuk yang terkait dengan penyimpangan dalam pelaksanaan hibah sebelumnya).</span></li>\r\n<li><span style=\"font-size: small; font-family: \'times new roman\', times;\">Bersedia mengikuti sistem dan prosedur pengelolaan dan pertanggungjawaban keuangan dan pengadaan yang ditetapkan pemerintah.</span></li>\r\n</ol>\r\n<p align=\"justify\"><br />&nbsp;<br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong>PROSES SELEKSI</strong></span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dalam melakukan proses seleksi dan menetapkan calon penerima hibah akan dipertimbangkan kondisi geografis LPTK. Pada tahap pertama ini akan dipilih 4 LPTK sebagai pemenang hibah. Proses seleksi penerima hibah mencakup 3 tahap yaitu: Evaluasi Proposal (Desk Evaluation), Site Evaluation, dan Penetapan Pemenang.</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">A.&nbsp;&nbsp;&nbsp; Evaluasi Proposal</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Evaluasi Proposal dititikberatkan pada kemampuan perguruan tinggi dalam melakukan evaluasi diri dan merancang usulan program pengembangan. Proposal yang memenuhi persyaratan pengusul akan dievaluasi oleh peer reviewer. Masing-masing proposal akan dievaluasi secara terpisah oleh 3 reviewer. Ketiga reviewer selanjutnya akan menyampaikan rekomendasi tentang mutu dan kelayakan proposal tersebut.</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">B.&nbsp;&nbsp;&nbsp;&nbsp; Site Evaluation</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Site evaluation dilakukan secara bersama-sama oleh satu tim yang terdiri dari tiga reviewer. Site evaluation ini bertujuan untuk validasi dan verifikasi hal-hal yang dijadikan landasan dalam mengambil keputusan pada saat evaluasi proposal. Kriteria penilaian yang digunakan pada tahap ini sama dengan kriteria yang digunakan untuk menilai proposal. Pada site evaluation ini dilakukan observasi dan diskusi dengan elemen-elemen yang terkait. Aspek yang dievaluasi mencakup kejelasan program, keterlibatan elemen terkait, dan kelayakan anggaran yang diajukan.</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">C.&nbsp;&nbsp;&nbsp;&nbsp; Penetapan Pemenang</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Penetapan pemenang dilakukan oleh Direktur Jenderal Pendidikan Tinggi setelah memperhatikan rekomendasi dari reviewer baik menyangkut evaluasi proposal (desk evaluation) maupun site evaluation.</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">D&nbsp;&nbsp;&nbsp; Monitoring dan Evaluasi</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tujuan</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Kegiatan monitoring dan evaluasi dilaksanakan untuk mengetahui transparansi dan akuntabilitas pelaksanaan pengelolaan hibah dan pengembangan pendidikan guru bertaraf internasional bidang MIPA secara langsung di lapangan (Perguruan Tinggi penerima hibah). Kegiatan ini tidak hanya ditujukan untuk mengetahui seberapa baik dana hibah telah/sedang dikelola dan seberapa berhasil program pengembangan pendidikan guru bertaraf internasional bidang MIPA telah/sedang dilaksanakan, tetapi juga untuk mengidentifikasi kendala-kendala implementasi (bila ada), menemukan solusi terhadap hambatan-hambatan di lapangan, dan memperoleh umpan balik dari penerima hibah untuk perancangan/pengembangan kebijakan pemberian hibah serupa pada masa mendatang.</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelaksana Monitoring dan Evaluasi</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Pelaksana monitoring dan evaluasi adalah tim yang dibentuk oleh Direktorat Ketenagaan Dikti. Tim ini terdiri dari personal yang memiliki pengetahuan dan kemampuan yang memadai dalam pengelolaan dana hibah dan pengembangan pendidikan guru bertaraf internasional bidang MIPA. Sebelum menjalankan tugasnya, tim menyusun instrumen monitoring dan evaluasi dan memperoleh pembekalan secukupnya.</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aspek-aspek Monitoring dan Evaluasi</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Fokus monitoring dan evaluasi mencakup beberapa aspek, antara lain:</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">1. Kinerja tim hibah di Perguruan Tinggi penerima hibah.</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">2. Kualitas proses pelaksanaan masing-masing program pengembangan sebagaimana tertuang dalam proposal.</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">3. Kualitas pencapaian tujuan masing-masing program pengembangan sebagaimana tertuang dalam proposal.</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">4. Ketertiban administrasi pengelolaan hibah, dan</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">5. Dampak penerimaan hibah.</span><br /><br />&nbsp;<br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">E .PENGAWASAN</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Untuk menjamin pelaksanaan pekerjaan dilaksanakan sesuai dengan ketentuan, perlu dilakukan pengawasan dan pengendalian. Rektor sesuai dengan fungsinya berkewajiban melakukan pengawasan dan pengendalian pelaksanaan program ini di perguruan tinggi masing-masing. Pengawasan juga dilakukan oleh instansi resmi, antara lain Inspektorat Jenderal Depdiknas. Selain itu, warga perguruan tinggi yang bersangkutan, masyarakat umum ataupun lembaga lain yang kompeten dapat memberikan pengawasan terhadap pelaksanaan hibah ini. Oleh karena itu tim pengelola hibah harus melaksanakan program ini secara transparan dan akuntabel</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\"><strong>&nbsp; PEMBIAYAAN</strong></span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Program hibah direncanakan untuk jangka waktu 4 (empat) tahun. Dana hibah yang disediakan untuk pengembangan pendidikan guru bertaraf internasional bidang MIPA ini maksimal sebesar Rp 2.000.000.000 (dua milyar rupiah) untuk 4 (empat) tahun, dengan porsi pembiayaan maksimal 90% dari Ditjen Dikti dan minimal 10% dari Perguruan Tinggi pengusul. Pembiayaan akan menerapkan paradigma output-outcome oriented. Artinya, penggunaan block grant tidak hanya untuk mahasiswa angkatan 2008/2009. Usulan program harus mampu menghasilkan lulusan pada tahun 2010 yakni dengan melibatkan mahasiswa angkatan 2006/2007 dan 2007/2008. Dengan demikian, perencanaan program dan pembiayaan harus disusun untuk 4 (empat) tahun, dilengkapi action plan untuk setiap tahunnya.&nbsp;</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">Berikut akan dijelaskan komponen-komponen biaya yang dapat diusulkan.</span><br /><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Pengembangan kurikulum</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Peralatan</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Bahan habis praktikum</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Bahan Ajar</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. Pengembangan Staf</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. Bantuan Teknis</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7. Penelitian dan Pengembangan</span><br /><span style=\"font-size: small; font-family: \'times new roman\', times;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8. Manajemen Program&nbsp;</span></p>\r\n<p><strong><br /></strong></p>','1','publish'),(2,'2011-05-08 11:20:01','Pendidikan Guru Jarak Jauh','Kegiatan ini bertujuan untuk menganalisa hasil dari survey untuk digunakan sebagai masukan perbaikan dalam pengembangan bahan pembelajaran yang baru. Kegiatan ini diharapkan dapat memetakan masalah 2','<p>KERANGKA ACUAN KERJA Pendidikan Jarak Jauh ICT S-1 PGSD&nbsp;<br />&nbsp;<br />Sistem Pendidikan Jarak Jauh (SPJJ) memiliki keunikan yang sekaligus membedakannya dengan sistem belajar yang diselenggarakan secara tatap muka. Salah satu keunikannya adalah keterpisahan secara fisik antara pengajar dan mahasiswa. Keunikan ini sekaligus membawa konsekuensi langsung yaitu keterbatasan proses belajar mengajar yang dilakukan dalam bentuk tatap muka.<br />Untuk mengatasi keterbatasan frekuensi pembelajaran tatap muka, maka harus dijembatani dengan penggunaan media yang memungkinkan terjadinya interaksi antara pengajar dan mahasiswa. Selain itu, penggunaan media belajar juga merupakan suatu bentuk strategi yang memungkinkan proses pembelajaran menjadi lebih efektif dan efisien. Melalui pemanfaatan media pembelajaran, mahasiswa dapat dengan fleksibel menentukan waktu belajar kapan saja, dimana saja,, menyesuaikan dengan kecepatan dan gaya belajarnya.<br />Media belajar utama dalam Pendidikan Jarak Jauh (PJJ) adalah media cetak atau biasa dikenal sebagai modul. Bahan belajar lainnya yang perlu dikembangkan dalam sistem pembelajaran jarah jauh adalah media noncetak seperti audio, video, pembelajaran berbantuan komputer, dan lain-lain.<br />Melihat pentingnya peranan bahan pembelajaran dalam proses belajar mengajar pada pendidikan jarak jauh, maka dipandang perlu untuk mengembangkan bahan pembelajaran yang baik. Tujuan utama dari program ini adalah peningkatan kualitas dan kuantitas bahan pembelajaran. Beranjak dari tujuan tersebut,maka dipandang perlu untuk melakukan suatu kajian untuk mengevaluasi bahan pembelajaran yang telah ada dan digunakan oleh mahasiswa dan tutor.&nbsp;<br />Kegiatan ini akan dilaksanakan dalam lima subkegiatan, yaitu;<br />a.&nbsp;&nbsp; &nbsp;Pengembangan instrumen kajian bahan pembelajaran<br />Tujuan<br />Kegiatan ini bertujuan untuk mengembangkan instrumen bagi para evaluator dalam mengkaji paket bahan pembelajaran sehingga mereka mempunyai standar yang sama dalam mengkaji.&nbsp;<br />b.&nbsp;&nbsp; &nbsp;Strategi pelaksanaan<br />Kegiatan ini dilakukan dalam bentuk workshop.<br />Peserta Peserta yang terlibat dalam kegiatan ini adalah;<br />&bull; Tim yang ditunjuk Dikti (7 orang)<br />&bull; Panitia (2 orang)<br /><br />Hasil yang diharapkan<br />Instrumen kajian paket bahan pembelajaran:<br />&bull; Pedoman wawancara bagi Tutor<br />&bull; Pedoman wawancara bagi mahasiswa<br />&bull; Kuesioner bagi tutor<br />&bull; Kuesioner bagi mahasiswa<br />c.&nbsp;&nbsp; &nbsp;Survei<br /><br />Tujuan<br />Survey ini bertujuan untuk mendapatkan data keadaan/kualitas bahan-bahan pembelajaran yang telah ada berdasarkan penggunanya (tutor dan mahasiswa). Data ini akan membantu sebagai masukan untuk perbaikan dalam pengembangan bahan pembelajaran yang baru.&nbsp;<br />d.&nbsp;&nbsp; &nbsp;Strategi Pelaksanaan<br />Pengambilan data akan dilakukan dengan menggunakan kuesioner dan wawancara pada mahasiswa dan tutor pengguna bahan pembelajaran yang telah ada.<br />Lokasi<br />LPTK yang akan dikunjungi dipilih untuk mewakili lokasi Indonesia bagian Barat (Universitas Lampung dan Universitas Negeri Malang), Lokasi Indonesia bagian Tengah (Universitas Haluoleo), dan Indonesia bagian Timur (Universitas Cendrawasih).&nbsp;<br />Institusi yang terlibat<br />Kegiatan ini melibatkan tim reviewer yang ditunjuk oleh Ditjen Dikti, Unila, UM, Unhalu, Uncen.<br />Hasil yang diharapkan<br />Kegiatan ini diharapkan dapat mengumpulkan data tentang kualitas bahan pembelajaran yang berasal dari kuesioner dan wawancara yang akan digunakan dalam kegiatan analisis.<br />e.&nbsp;&nbsp; &nbsp;Evaluasi konten<br />Tujuan<br />Evaluasi konten ini bertujuan untuk mendapatkan data kualitas konten bahan-bahan pembelajaran yang telah ada.&nbsp;<br />Strategi Pelaksanaan<br />Evaluasi konten dilakukan oleh ahli materi dan media. Setiap paket bahan ajar akan di evaluasi oleh dua orang evaluator. Kegiatan ini dilaksanakan selama 2 minggu.&nbsp;<br /><br />Peserta<br />Peserta yang terlibat pada kegiatan ini adalah para evaluator yang berjumlah 24 orang.<br /><br />Hasil yang diharapkan<br />Kegiatan ini diharapkan dapat mengumpulkan data tentang kualitas konten bahan pembelajaran.<br />f.&nbsp;&nbsp; &nbsp;Analisis<br />Tujuan<br />Kegiatan ini bertujuan untuk menganalisa hasil dari survey untuk digunakan sebagai masukan perbaikan dalam pengembangan bahan pembelajaran yang baru. Kegiatan ini diharapkan dapat memetakan masalah atau kelemahan yang terdapat pada bahan pembelajaran yang ada.<br />Strategi Pelaksanaan<br />Kegiatan ini dilaksanakan melalui workshop selama 2 hari.&nbsp;<br />Peserta<br />Peserta workshop ini adalah; Evaluator (24 orang) dan Panitia 3 orang)<br />Hasil yang diharapkan&nbsp;<br />Kegiatan ini diharapkan dapat menghasilkan data yang akurat tentang masalah atau kelemahan dari bahan pembelajaran yang ada.&nbsp;<br />g.&nbsp;&nbsp; &nbsp;Pelaporan hasil analisis<br />Tujuan<br />Kegiatan ini bertujuan untuk merangkum hasil analisis data menjadi sebuah laporan yang dapat digunakan sebagai acuan dalam pengembangan bahan pembelajaran selanjutnya.<br />Pembuat laporan<br />Pembuat laporan adalah tim evalautor (24 orang).<br />Hasil yang diharapkan Laporan ini diharapkan berisi hasil analisis dan saran perbaikan.<br /><br /></p>','1','publish'),(3,'2011-05-30 21:20:30','ddad','dada','<p><strong>isi disini</strong></p>','5','pending');
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
INSERT INTO `statistik` VALUES (3,'Nasional Guru Per Status Pegawai','1.2_NASIONAL_GURU_PER_STATUS_PEGAWAI_.zip'),(2,'Nasional Guru Per Status Sekolah','1.1_NASIONAL_GURU_PER_STATUS_SEKOLAH_.zip'),(4,'Nasional Guru Per Kualifikasi','1.3_NASIONAL_GURU_PER_KUALIFIKASI_.zip');
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

-- Dump completed on 2013-08-16 10:48:19
