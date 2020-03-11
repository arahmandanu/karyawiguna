/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - dbmegajaya
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbmegajaya` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbmegajaya`;

/*Table structure for table `album` */

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `judul_foto` varchar(100) DEFAULT NULL,
  `kategori` char(50) DEFAULT NULL,
  `pic` blob,
  `link_pic` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `album` */

insert  into `album`(`id`,`judul_foto`,`kategori`,`pic`,`link_pic`,`date_created`) values 
(7,'asdasdasdas','antrian','kecil_qcbukopin1.jpg','http://localhost/web/album/kecil_qcbukopin1.jpg','2019-12-05 11:43:06'),
(8,'hahaha','antrian','kecil_qcbri2.jpg','http://localhost/web/album/kecil_qcbri2.jpg','2019-12-05 11:43:30'),
(9,'tes','antrian','kecil_qcbukopin2.jpg','http://localhost/web/album/kecil_qcbukopin2.jpg','2019-12-05 11:43:53'),
(10,'tes','showroom','Showroom.PNG','http://localhost/web/album/Showroom.PNG','2019-12-05 11:44:20'),
(11,'tes','showroom','showroomproduk.PNG','http://localhost/web/album/showroomproduk.PNG','2019-12-05 11:44:35'),
(12,'tes','skdigital','kecil_trfbni1.jpg','http://localhost/web/album/kecil_trfbni1.jpg','2019-12-05 11:45:17'),
(13,'tes','skdigital','trfbpd.jpg','http://localhost/web/album/trfbpd.jpg','2019-12-05 11:45:33'),
(14,'tes','skdigital','trfbukopin.jpg','http://localhost/web/album/trfbukopin.jpg','2019-12-05 11:45:55'),
(15,'tes','skdigital','trfbri.jpg','http://localhost/web/album/trfbri.jpg','2019-12-05 11:46:36'),
(16,'tes','skvisual','Capture.PNG','http://localhost/web/album/Capture.PNG','2019-12-05 11:49:34'),
(17,'tes','skvisual','srvisual.PNG','http://localhost/web/album/srvisual.PNG','2019-12-05 11:49:53'),
(20,'tes','antrian','092625kecil_qcbukopin1.jpg','http://localhost/web/album/092625kecil_qcbukopin1.jpg','2019-12-06 09:26:25'),
(23,'bri','antrian','171633qcbri3.jpg','http://localhost/web/album/171633qcbri3.jpg','2019-12-06 17:16:33');

/*Table structure for table `albumvideo` */

DROP TABLE IF EXISTS `albumvideo`;

CREATE TABLE `albumvideo` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul_video` varchar(100) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `video` blob,
  `link_video` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `albumvideo` */

insert  into `albumvideo`(`id`,`judul_video`,`kategori`,`video`,`link_video`,`date_created`) values 
(1,'asdasdasdasd','antrian','161902VID-20181109-WA0016.mp4','http://localhost/web/albumvideo/161902VID-20181109-WA0016.mp4','2019-12-06 16:19:02'),
(5,'ANtrian Tiket BRI','antrian','072744VID-20190817-WA0030.mp4','http://localhost/web/albumvideo/072744VID-20190817-WA0030.mp4','2019-12-09 07:27:44');

/*Table structure for table `email_customer` */

DROP TABLE IF EXISTS `email_customer`;

CREATE TABLE `email_customer` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `chat` text,
  `date_created` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `email_customer` */

insert  into `email_customer`(`id`,`nama`,`email`,`chat`,`date_created`) values 
(1,'asdsadas','ADrian@gmail.com','asdasdasd','2019-12-09 10:43:46'),
(2,'asdad','asdasdasd@gmail.com','asdasdasdasdasdasd','2019-12-09 10:54:54'),
(3,'asdasd','adrian.rahmandanu2@gmail.com','asdasdasd','2019-12-09 10:56:08'),
(4,'asdasd','asdasdasd@gmail.com','asdasd','2019-12-09 10:56:48'),
(5,'asdad','missutsan@gmail.com','asdadadasd','2019-12-09 10:59:20'),
(6,'asdasd','missutsan@gmail.com','asdasdasd','2019-12-09 11:02:04'),
(7,'asdasd','asdasdasd@gmail.com','asdadasd','2019-12-09 11:03:05'),
(8,'ddd','asdasdasd@gmail.com','asdasd','2019-12-09 11:04:45'),
(9,'asdsa','jasd@gmail.com','aspjkasljdklajdkasj','2019-12-09 13:11:12'),
(10,'asdasd','adrian.rahmandanu2@gmail.com','asdasdasdasd','2019-12-09 13:51:18');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `pic` blob,
  `link_pic` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `status` char(5) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`id`,`judul`,`kategori`,`pic`,`link_pic`,`deskripsi`,`status`,`date_created`) values 
(10,'Sistem Antrian','antrian','191947qcbri1.jpg','http://localhost/web/produk/191947qcbri1.jpg','<p>rpsejk;sf</p>\r\n<p>sd;lfksd;lf</p>\r\n<p>sdflksdlf</p>\r\n<p>sdflksf</p>','yes','2019-12-05 11:25:53'),
(11,'Show Produk','showroom','showroomproduk.PNG','http://localhost/web/produk/showroomproduk.PNG','','yes','2019-12-05 11:29:08'),
(12,'Suku Bunga Visual','skvisual','srvisual.PNG','http://localhost/web/produk/srvisual.PNG','','yes','2019-12-05 11:33:54'),
(13,'Suku Bunga Digital','skdigital','trfbri.jpg','http://localhost/web/produk/trfbri.jpg','','yes','2019-12-05 11:36:07');

/*Table structure for table `profil` */

DROP TABLE IF EXISTS `profil`;

CREATE TABLE `profil` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama_pt` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `gambar_profil` blob,
  `link_gambar` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `profil` */

insert  into `profil`(`id`,`nama_pt`,`deskripsi`,`gambar_profil`,`link_gambar`) values 
(1,'PT. Karya Wiguna Sukses Mandiri','<p style=\"text-align: justify;\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; karyawiguna.com</strong> adalah website resmi kami&nbsp;<strong>PT. Karya Wiguna Sukses Mandiri</strong>. Kami perusahaan yang bergerak di bisang penyediaan alat-alat perbankan. Kami sudah menjalani penyediaan alat-alat perbankan sejak tahun 1999. Saat ini kami telah mengembangkan produk-produk kami dengan menambahkan produk-produk baru yang kami sesuaikan dengan kebutuhan perbankan saat ini.</p>\r\n<p style=\"text-align: justify;\"><br />Kontak ke perusahaan kami adalah sebagai berikut :</p>\r\n<p style=\"text-align: justify;\">Directur : Tn Suguiono Permadi</p>\r\n<p style=\"text-align: justify;\">Email : megajayateknik@yahoo.com</p>\r\n<p style=\"text-align: justify;\">Notelp/Fax : 021-76728728 No HP :0812-2516900</p>\r\n<p style=\"text-align: justify;\"><br /><strong>Kantor Cabang Semarang</strong> alamat : Jl. Gebangsari I/IV Mranggen Semarang 251105, Jawa Tengah <br /><strong>Kantor Cabang Jakarta</strong> alamat : Jl. Gebangsari I/IV Kemayoran Semarang 251105, Jawa Tengah</p>\r\n<p style=\"text-align: justify;\"><br />Produk-produk baru kami bisa di lihat pada List Daftar produk yang saat ini sudah di pakai di perbagain bank baik swasta dan bank negeri.</p>','logoku.jpg','http://localhost/web/profil/logoku.jpg');

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `set_email` char(10) DEFAULT 'yes',
  `penerima_email` varchar(250) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `setting` */

/*Table structure for table `sys_user` */

DROP TABLE IF EXISTS `sys_user`;

CREATE TABLE `sys_user` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  `date-created` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `sys_user` */

insert  into `sys_user`(`id`,`nama`,`username`,`password`,`level`,`date-created`) values 
(1,'admin','admin','827ccb0eea8a706c4c34a16891f84e7b','admin',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
