/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.53 : Database - edu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`edu` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `edu`;

/*Table structure for table `chat_message` */

DROP TABLE IF EXISTS `chat_message`;

CREATE TABLE `chat_message` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `from_id` int(20) NOT NULL,
  `to_id` int(20) NOT NULL,
  `content` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `chat_message` */

insert  into `chat_message`(`id`,`from_id`,`to_id`,`content`,`time`) values (1,1,2,'11','1514556477'),(2,1,2,'aaa','1514556490'),(3,1,2,'test','1514556557'),(4,1,2,'aaa','1514556570'),(5,1,2,'aaa','1514556584'),(6,1,2,'dddd','1514556593'),(7,1,2,'bbbb','1514556601'),(8,1,2,'ffff','1514556608'),(9,1,2,'22aa','1514556701');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `create_time` varchar(20) NOT NULL,
  `update_time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `student` */

insert  into `student`(`id`,`name`,`email`,`class`,`course`,`grade`,`create_time`,`update_time`) values (7,'朱老师','test@qq.com','','js','50','1514439550','1514439550'),(8,'朱老师','test@qq.com','','js','66','1514439562','1514439562'),(9,'朱老师','test@qq.com','','js','56','1514439574','1514439574');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
