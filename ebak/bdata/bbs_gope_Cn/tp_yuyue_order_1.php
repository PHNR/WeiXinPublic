<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_yuyue_order`;");
E_C("CREATE TABLE `tp_yuyue_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `token` varchar(40) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `memo` varchar(200) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `wecha_id` varchar(200) NOT NULL,
  `or_date` date DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `nums` varchar(20) DEFAULT NULL,
  `fieldsigle` varchar(100) DEFAULT NULL,
  `fielddownload` varchar(100) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `kind` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=utf8");
E_D("replace into `tp_yuyue_order` values('1','8','avljgc1397041839','大神打','18267720632','2014-04-27 10:22:39','',NULL,'ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-29','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('2','8','avljgc1397041839','撒村','18267720632','2014-04-27 10:23:09','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('3','8','avljgc1397041839','大神','18267720632','2014-04-27 10:29:48','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('4','8','avljgc1397041839','大神','18267720632','2014-04-27 10:51:54','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('5','8','avljgc1397041839','大神','18267720632','2014-04-27 10:51:56','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('6','8','avljgc1397041839','大神','18267720632','2014-04-27 10:51:57','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('7','8','avljgc1397041839','大神','18267720632','2014-04-27 10:51:57','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('8','8','avljgc1397041839','大神','18267720632','2014-04-27 10:51:57','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('9','8','avljgc1397041839','大神','18267720632','2014-04-27 10:51:57','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('10','8','avljgc1397041839','大神','18267720632','2014-04-27 10:51:58','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('11','8','avljgc1397041839','大神','18267720632','2014-04-27 10:52:18','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('12','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:26','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('13','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:29','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('14','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:29','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('15','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:29','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('16','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:29','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('17','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:30','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('18','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:30','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('19','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:30','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('20','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:30','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('21','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:30','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('22','8','avljgc1397041839','撒','18267720632','2014-04-27 10:52:30','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('23','8','avljgc1397041839','阿什顿','18267720632','2014-04-27 10:53:05','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('24','8','avljgc1397041839','阿什顿','18267720632','2014-04-27 10:53:07','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('25','8','avljgc1397041839','阿什顿','18267720632','2014-04-27 10:53:08','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('26','8','avljgc1397041839','阿什顿','18267720632','2014-04-27 10:53:09','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('27','8','avljgc1397041839','阿什顿','18267720632','2014-04-27 10:53:09','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('28','8','avljgc1397041839','阿什顿','18267720632','2014-04-27 10:53:40','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('29','8','avljgc1397041839','撒旦','18267720632','2014-04-27 11:00:49','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('30','8','avljgc1397041839','撒旦','18267720632','2014-04-27 11:02:52','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('31','8','avljgc1397041839','十大','18267720632','2014-04-27 11:03:31','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('32','8','avljgc1397041839','十大','18267720632','2014-04-27 11:04:35','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('33','8','avljgc1397041839','大神','18267720632','2014-04-27 11:13:53','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-30','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('34','8','avljgc1397041839','大神','18267720632','2014-04-27 11:14:18','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('35','8','avljgc1397041839','das','18267720632','2014-04-27 13:17:02','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('36','8','avljgc1397041839','das','18267720632','2014-04-27 13:18:19','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('37','8','avljgc1397041839','das','18267720632','2014-04-27 13:22:21','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('38','8','avljgc1397041839','das','18267720632','2014-04-27 13:22:57','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('39','8','avljgc1397041839','das','18267720632','2014-04-27 13:33:14','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('40','8','avljgc1397041839','das','18267720632','2014-04-27 13:37:40','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('41','8','avljgc1397041839','das','18267720632','2014-04-27 13:38:49','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('42','8','avljgc1397041839','sad','18267720632','2014-04-27 13:41:41','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('43','8','avljgc1397041839','das','18267720633','2014-04-27 13:43:45','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('44','8','avljgc1397041839','das','18267720633','2014-04-27 13:45:21','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('45','8','avljgc1397041839','das','18267720633','2014-04-27 13:48:51','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('46','8','avljgc1397041839','das','18267720633','2014-04-27 13:50:40','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('47','8','avljgc1397041839','das','18267720633','2014-04-27 13:51:34','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('48','8','avljgc1397041839','das','18267720633','2014-04-27 14:11:05','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('49','8','avljgc1397041839','das','18267720633','2014-04-27 14:13:45','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('50','8','avljgc1397041839','das','18267720633','2014-04-27 14:14:34','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('51','8','avljgc1397041839','微最强','18267720633','2014-04-27 14:22:19','大神','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','13','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('52','8','avljgc1397041839','微最强','18267720633','2014-04-27 14:34:19','大神','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','13','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('53','8','avljgc1397041839','微最强','18267720633','2014-04-27 14:40:26','大神','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','13','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('54','8','avljgc1397041839','微最强','18267720633','2014-04-27 14:44:38','大神','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','13','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('55','8','avljgc1397041839','微最强','18267720633','2014-04-27 14:45:07','大神','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-30','0:00-1:00','13','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('56','8','avljgc1397041839','微最强','18267720633','2014-04-27 14:47:12','大神','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','13','','','11','sdadas');");
E_D("replace into `tp_yuyue_order` values('57','9','avljgc1397041839','微最强','18267720632','2014-04-27 15:05:30','','Huisuo','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','\$选择会所包销#包销202','11111','中通包厢');");
E_D("replace into `tp_yuyue_order` values('58','9','avljgc1397041839','微最强会所','18267720632','2014-04-27 15:06:52','','Huisuo','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-22','0:00-1:00','1','','\$选择会所包销#包销202','11111','中通包厢');");
E_D("replace into `tp_yuyue_order` values('59','5','avljgc1397041839','酒吧微最强','18267720631','2014-04-27 15:17:49','','Jiuba','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','100','套餐1');");
E_D("replace into `tp_yuyue_order` values('60','5','avljgc1397041839','酒吧微最强','18267720631','2014-04-27 15:20:29','','Jiuba','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','','100','套餐1');");
E_D("replace into `tp_yuyue_order` values('61','3','avljgc1397041839','酒店微最强','18267720632','2014-04-27 15:24:12','','Jiudian','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-30','11:00-12:00','1','','\$选择房间标准#单人房\$达#速度','11','111');");
E_D("replace into `tp_yuyue_order` values('62','3','avljgc1397041839','酒店微最强','18267720632','2014-04-27 15:24:54','','Jiudian','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','11:00-12:00','1','','\$选择房间标准#单人房\$达#速度','11','111');");
E_D("replace into `tp_yuyue_order` values('63','1','avljgc1397041839','医疗微最强','18267720632','2014-04-27 15:28:37','','Yiliao','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00',NULL,'','','11','11');");
E_D("replace into `tp_yuyue_order` values('64','1','avljgc1397041839','医疗微最强','18267720632','2014-04-27 15:28:45','','Yiliao','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00',NULL,'','','11','11');");
E_D("replace into `tp_yuyue_order` values('65','3','avljgc1397041839','2834970311','18267720632','2014-04-27 15:29:06','','Jiudian','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','\$选择房间标准#单人房\$达#速度','11','111');");
E_D("replace into `tp_yuyue_order` values('66','2','avljgc1397041839','大神','18267720632','2014-04-27 15:31:52','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('67','2','avljgc1397041839','大神','18267720632','2014-04-27 15:31:59','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-04-27','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('68','2','avljgc1397041839','二维码','18267720632','2014-05-14 15:24:58','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-14','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('69','2','avljgc1397041839','二维码','18267720632','2014-05-14 17:08:50','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-14','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('70','14','wglagr1400037084','','','2014-05-14 17:20:12','','Yuyue','oGb6yjl1AuexJ7UZrPOoYtx5yIVU','2014-05-14','0:00-1:00','1','','','111','预约');");
E_D("replace into `tp_yuyue_order` values('71','2','avljgc1397041839','二维码','18267720632','2014-05-14 17:27:25','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-14','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('72','2','avljgc1397041839','二维码','18267720632','2014-05-14 17:37:15','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-14','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('73','2','avljgc1397041839','二维码','18267720632','2014-05-14 17:40:25','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-14','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('74','2','avljgc1397041839','二维码','18267720632','2014-05-14 17:40:33','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-14','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('75','2','avljgc1397041839','二维码','18267720632','2014-05-14 17:40:44','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-14','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('76','2','avljgc1397041839','二维码','18267720632','2014-05-14 17:41:06','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-14','0:00-1:00','1','','\$选择房间标准#单人房','111','预约测试');");
E_D("replace into `tp_yuyue_order` values('77','14','wglagr1400037084','','','2014-05-14 17:41:13','弄哦自','Yuyue','oGb6yjl1AuexJ7UZrPOoYtx5yIVU','2014-05-14','0:00-1:00','1','','','111','预约');");
E_D("replace into `tp_yuyue_order` values('78','14','wglagr1400037084','','','2014-05-15 11:48:51','','Yuyue','oGb6yjl1AuexJ7UZrPOoYtx5yIVU','2014-05-15','0:00-1:00','1','','','111','预约');");
E_D("replace into `tp_yuyue_order` values('79','1','avljgc1397041839','最新优惠','18267720632','2014-05-17 17:54:25','','Jiudian','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-17','0:00-1:00','1','','','111','最强测试 啊啊 ');");
E_D("replace into `tp_yuyue_order` values('80','2','fbcsqj1400322782','kenny','18607381234','2014-05-17 19:05:23','','Jiudian','oGT91uE-HtkdYesEn4UyY1oJZxbc','2014-05-17','0:00-1:00','1','','\$选择房间标准#单人房','288','小包');");
E_D("replace into `tp_yuyue_order` values('81','2','fbcsqj1400322782','环境健康','18607381234','2014-05-17 19:16:50','','Jiudian','oGT91uE-HtkdYesEn4UyY1oJZxbc','2014-05-17','0:00-1:00','1','','\$选择房间标准#单人房','288','小包');");
E_D("replace into `tp_yuyue_order` values('82','1','avljgc1397041839','酒店邮箱可以','18267720633','2014-05-17 19:19:03','','Jiudian','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-28','0:00-1:00','1','','','111','最强测试 啊啊 ');");
E_D("replace into `tp_yuyue_order` values('83','1','avljgc1397041839','酒店邮箱可以','18267720633','2014-05-17 19:20:22','','Jiudian','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-17','13:00-14:00','1','','','111','最强测试 啊啊 ');");
E_D("replace into `tp_yuyue_order` values('84','2','fbcsqj1400322782','卡卡','18607381234','2014-05-17 19:24:22','','Jiudian','oGT91uE-HtkdYesEn4UyY1oJZxbc','2014-05-17','0:00-1:00','1','','\$选择房间标准#单人房','288','小包');");
E_D("replace into `tp_yuyue_order` values('85','2','fbcsqj1400322782','hjj','18607381234','2014-05-17 19:28:10','','Jiudian','oGT91uE-HtkdYesEn4UyY1oJZxbc','2014-05-17','0:00-1:00','1','','\$选择房间标准#单人房','288','小包');");
E_D("replace into `tp_yuyue_order` values('86','2','fbcsqj1400322782','lkl','18607381234','2014-05-17 19:55:40','','Jiudian','oGT91uE-HtkdYesEn4UyY1oJZxbc','2014-05-17','0:00-1:00','1','','\$选择房间标准#单人房','288','小包');");
E_D("replace into `tp_yuyue_order` values('87','3','nepvyy1400393099','ll','18976226935','2014-05-18 15:18:23','','2','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-18','0:00-1:00','1','\$预定人数#5','\$选择房间标准#单人房\$达#速度','99','小包厢');");
E_D("replace into `tp_yuyue_order` values('88','3','nepvyy1400393099','ll','18976226935','2014-05-18 15:22:01','','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-18','0:00-1:00','1','\$预定人数#5','\$选择房间标准#单人房\$达#速度','99','小包厢');");
E_D("replace into `tp_yuyue_order` values('89','5','nepvyy1400393099','刚吃','18946225655','2014-05-18 15:26:46','','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-18','0:00-1:00','3','','','68','双人');");
E_D("replace into `tp_yuyue_order` values('90','6','avljgc1397041839','看看','18267720633','2014-05-18 15:27:44','','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-18','0:00-1:00','1','','','11','微最强');");
E_D("replace into `tp_yuyue_order` values('91','5','nepvyy1400393099','lkh','18976226935','2014-05-18 15:59:23','','0','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-18','0:00-1:00','1','','','68','双人');");
E_D("replace into `tp_yuyue_order` values('92','7','nepvyy1400393099','kk','18976229935','2014-05-18 17:50:31','','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-18','0:00-1:00',NULL,'','','56','疼痛');");
E_D("replace into `tp_yuyue_order` values('93','9','nepvyy1400393099','美女','18976226936','2014-05-18 22:38:25','','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-18','0:00-1:00','1','','\$选择会所包销#包销202','120','双人房');");
E_D("replace into `tp_yuyue_order` values('94','9','nepvyy1400393099','jkt','18976226932','2014-05-18 23:30:13','','Yuyue','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-18','0:00-1:00','1','','\$选择会所包销#包销202','120','双人房');");
E_D("replace into `tp_yuyue_order` values('95','3','nepvyy1400393099','ii','18976635623','2014-05-19 18:40:39','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-19','0:00-1:00','1','','\$选择房间标准#单人房\$达#速度','99','小包厢');");
E_D("replace into `tp_yuyue_order` values('96','9','nepvyy1400393099','kl','18976226935','2014-05-20 11:56:09','','Yuyue','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-20','0:00-1:00','1','','\$选择会所包销#包销202','120','双人房');");
E_D("replace into `tp_yuyue_order` values('97','5','nepvyy1400393099','kl','18976365965','2014-05-20 15:57:17','','Jiudian','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-20','0:00-1:00','1','','','68','双人');");
E_D("replace into `tp_yuyue_order` values('98','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:39:04','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('99','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:39:06','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('100','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:39:06','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('101','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:39:12','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('102','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:39:17','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('103','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:40:33','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('104','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:40:34','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('105','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:40:39','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('106','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:40:43','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('107','1','avljgc1397041839','图','18267720632','2014-05-22 10:41:47','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-22','0:00-1:00','1','','','11','1011');");
E_D("replace into `tp_yuyue_order` values('108','2','nepvyy1400393099','jkk','18976226935','2014-05-22 10:44:24','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','\$预定人数#6','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('109','2','nepvyy1400393099','jkk','18976226935','2014-05-22 10:44:25','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','\$预定人数#6','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('110','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:44:47','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','16:00-17:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('111','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:44:58','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('112','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:45:03','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('113','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:45:05','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('114','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:45:06','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('115','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:45:06','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('116','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:45:06','','Ktv','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('117','2','nepvyy1400393099','米奇','18976226935','2014-05-22 10:45:12','','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$选择房间标准#单人房','98','小包厢');");
E_D("replace into `tp_yuyue_order` values('118','4','nepvyy1400393099','密码','18976226935','2014-05-22 10:53:43','','Huisuo','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$医疗科目#门诊','666','高级会所');");
E_D("replace into `tp_yuyue_order` values('119','4','nepvyy1400393099','密码','18976226935','2014-05-22 10:53:44','','Huisuo','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$医疗科目#门诊','666','高级会所');");
E_D("replace into `tp_yuyue_order` values('120','4','nepvyy1400393099','密码','18976226935','2014-05-22 10:53:45','','Huisuo','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$医疗科目#门诊','666','高级会所');");
E_D("replace into `tp_yuyue_order` values('121','4','nepvyy1400393099','密码','18976226935','2014-05-22 10:53:47','','Huisuo','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$医疗科目#门诊','666','高级会所');");
E_D("replace into `tp_yuyue_order` values('122','4','nepvyy1400393099','密码','18976226935','2014-05-22 10:53:48','','Huisuo','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','2014-05-22','0:00-1:00','1','','\$医疗科目#门诊','666','高级会所');");
E_D("replace into `tp_yuyue_order` values('123','6','brogbh1400764930','kenny','18607388765','2014-05-22 21:27:08','','Ktv','oJH35ty1WnBRJ4u-2QUdH0ubKjnQ','2014-05-22','0:00-1:00','1','','\$选择欢唱套餐#满200免包销','11','微最强');");
E_D("replace into `tp_yuyue_order` values('124','0','anxemb1401240170','krnny','18607382356','2014-05-28 09:29:59','','Ktv','o4ISnjmEAlTMFRPbYOa0EbsvF3t4','2014-05-28','0:00-1:00','1','','','11','sadas');");
E_D("replace into `tp_yuyue_order` values('125','1','avljgc1397041839','ktv','400-820-087','2014-05-28 14:27:58','','Ktv','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-29','8:00-9:00','1','','','11','1011');");
E_D("replace into `tp_yuyue_order` values('126','7','avljgc1397041839','01010','18267720632','2014-05-28 21:09:59','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-29','17:00-18:00','1','','','2112','212');");
E_D("replace into `tp_yuyue_order` values('127','7','avljgc1397041839','厕所的','18267720632','2014-05-28 21:14:15','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-31','18:00-19:00','1','','','2112','212');");
E_D("replace into `tp_yuyue_order` values('128','7','avljgc1397041839','长撒','18267720632','2014-05-28 21:15:22','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-31','0:00-1:00','1','','','2112','212');");
E_D("replace into `tp_yuyue_order` values('129','7','avljgc1397041839','微乾隆','18267720632','2014-05-28 21:57:24','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-28','13:00-14:00','1','','','2112','212');");
E_D("replace into `tp_yuyue_order` values('130','7','avljgc1397041839','微乾隆','18267720632','2014-05-28 21:57:50','','Yuyue','ob2qxjgbC8wTmFfmJdS14O-So_jg','2014-05-31','14:00-15:00','1','','','2112','212');");
E_D("replace into `tp_yuyue_order` values('131','14','rtzvcz1401302172','垃圾','83842845853','2014-05-29 02:46:17','','Yuyue','o5Ik0uOieZHM7K2N5NqUjeG1Pb6E','2014-05-29','0:00-1:00','1','','','111','预约');");
E_D("replace into `tp_yuyue_order` values('135','15','ivrnef1401365899','tt','13845252525','2014-05-29 23:44:05','','Ktv','oS1K7tycKPvUKXGGID3mvSkcDa_w','2014-05-29','0:00-1:00','1','\$预定人数#1','\$选择欢唱套餐#满200免包销','111','傻逼');");
E_D("replace into `tp_yuyue_order` values('134','15','ivrnef1401365899','rrrt','13888888888','2014-05-29 22:04:14','','Ktv','oS1K7txQLCVuaAkQQP130Xn4N7pw','2014-05-29','0:00-1:00','1','\$预定人数#1','\$选择欢唱套餐#满200免包销','111','傻逼');");
E_D("replace into `tp_yuyue_order` values('136','16','tzqawo1400308953','哈哈','13358585454','2014-05-30 13:09:27','太累了','Yuyue','o1R8Mt7OITX5MYlbL3ruujCii554','2014-05-30','2:00-3:00','1','\$预定人数#5','\$选择欢唱套餐#满200免包销','12','不会不回家');");
E_D("replace into `tp_yuyue_order` values('137','16','tzqawo1400308953','看见了','13358585654','2014-05-30 13:45:23','','Yuyue','o1R8Mt7OITX5MYlbL3ruujCii554','2014-05-30','0:00-1:00','2','','\$选择欢唱套餐#满200免包销','12','不会不回家');");
E_D("replace into `tp_yuyue_order` values('138','20','ivrnef1401365899','1','13888888888','2014-05-30 14:45:16','','Yuyue','oS1K7txQLCVuaAkQQP130Xn4N7pw','2014-05-30','0:00-1:00','1','','','1','总统房');");

require("../../inc/footer.php");
?>