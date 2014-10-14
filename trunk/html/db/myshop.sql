/*
SQLyog Trial v10.2 
MySQL - 5.6.11 : Database - myshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`myshop` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `myshop`;

/*Table structure for table `s_managers` */

DROP TABLE IF EXISTS `s_managers`;

CREATE TABLE `s_managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logid` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `super_flg` enum('1','0') NOT NULL DEFAULT '0',
  `type` int(11) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '0',
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `s_managers` */

insert  into `s_managers`(`id`,`logid`,`pwd`,`name`,`super_flg`,`type`,`status`,`created`,`modified`,`author`) values (1,'admin','9d8f28301969c9725dadfe0c44f1420dc4480c41','张三','1',NULL,'0',NULL,NULL,NULL);

/*Table structure for table `s_userinfos` */

DROP TABLE IF EXISTS `s_userinfos`;

CREATE TABLE `s_userinfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msn` varchar(100) DEFAULT NULL,
  `qq` varchar(30) DEFAULT NULL,
  `office_tel` varchar(50) DEFAULT NULL,
  `home_tel` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `s_userinfos` */

insert  into `s_userinfos`(`id`,`logid`,`email`,`msn`,`qq`,`office_tel`,`home_tel`,`mobile`,`created`,`modified`,`author`) values (1,'admin','admin@163.com','2123123131','12131313','','','',1413182297,1413182297,NULL),(2,'test','test@123.com','','','','','',1413186838,1413186838,NULL);

/*Table structure for table `s_users` */

DROP TABLE IF EXISTS `s_users`;

CREATE TABLE `s_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logid` varchar(255) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '1',
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `s_users` */

insert  into `s_users`(`id`,`logid`,`pwd`,`status`,`last_login`) values (1,'admin','9d8f28301969c9725dadfe0c44f1420dc4480c41','0','2014-10-14 16:44:10'),(2,'test','ae50d58f53b84987c7716535ddea9f881753b212','0','2014-10-13 16:56:21');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
