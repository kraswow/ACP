/*
SQLyog Ultimate v8.82 
MySQL - 5.5.15 : Database - acp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `characters_exchange_bid` */

DROP TABLE IF EXISTS `characters_exchange_bid`;

CREATE TABLE `characters_exchange_bid` (
  `id` int(11) unsigned NOT NULL COMMENT 'lot_id',
  `realm_id` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'realm_id',
  `price` int(11) DEFAULT NULL COMMENT 'price or bid',
  `acc_id` int(11) unsigned NOT NULL COMMENT 'bid`s account ',
  `char_id` int(11) unsigned NOT NULL COMMENT 'bid`s character',
  `status` int(2) NOT NULL DEFAULT '0' COMMENT 'status of bid',
  `description` longblob COMMENT 'bid`s description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `characters_exchange_lot` */

DROP TABLE IF EXISTS `characters_exchange_lot`;

CREATE TABLE `characters_exchange_lot` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id of lot',
  `realm_id` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'realm id',
  `char_id` int(11) unsigned NOT NULL COMMENT 'id character for sale',
  `price` int(11) unsigned DEFAULT NULL COMMENT 'price',
  `status` tinyint(2) DEFAULT '0',
  `description` longblob,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
