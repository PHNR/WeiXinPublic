<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_hotels_order`;");
E_C("CREATE TABLE `tp_hotels_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `sid` int(10) unsigned NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `token` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `nums` smallint(3) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `time` int(11) NOT NULL,
  `startdate` int(8) unsigned NOT NULL,
  `enddate` int(8) unsigned NOT NULL,
  `paid` tinyint(1) unsigned NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `printed` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`,`wecha_id`),
  KEY `token` (`token`),
  KEY `orderid` (`orderid`),
  KEY `enddate` (`enddate`),
  KEY `sid` (`sid`),
  KEY `stardate` (`startdate`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_hotels_order` values('1','3','2','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','nepvyy1400393099','265','1','mi','18976226935','0','20140522','20140523','0','420140522102558','0','0');");
E_D("replace into `tp_hotels_order` values('2','14','3','o5C4_t4kIg89qqtlcqcis7xbgMds','rgccej1400813594','200','1','葛臻昆','13112345678','0','20140523','20140524','0','s20140523114055','0','0');");
E_D("replace into `tp_hotels_order` values('3','14','3','o5C4_t4kIg89qqtlcqcis7xbgMds','rgccej1400813594','200','1','葛臻昆','13112345678','0','20140523','20140524','0','s20140523123017','0','0');");

require("../../inc/footer.php");
?>