<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_medical_user`;");
E_C("CREATE TABLE `tp_medical_user` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL DEFAULT '',
  `wecha_id` varchar(50) NOT NULL DEFAULT '',
  `rid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(50) NOT NULL DEFAULT '',
  `utel` char(13) NOT NULL,
  `dateline` varchar(50) NOT NULL,
  `sex` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `txt33` varchar(50) NOT NULL DEFAULT '',
  `txt44` varchar(50) NOT NULL DEFAULT '',
  `txt55` varchar(50) NOT NULL DEFAULT '',
  `yyks` varchar(50) NOT NULL DEFAULT '',
  `yyzj` varchar(50) NOT NULL DEFAULT '',
  `yybz` varchar(50) NOT NULL DEFAULT '',
  `yy4` varchar(50) NOT NULL DEFAULT '',
  `yy5` varchar(50) NOT NULL DEFAULT '',
  `uinfo` varchar(50) NOT NULL DEFAULT '',
  `kfinfo` varchar(100) NOT NULL DEFAULT '',
  `remate` int(10) NOT NULL DEFAULT '0',
  `booktime` int(11) DEFAULT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8");
E_D("replace into `tp_medical_user` values('1','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','12','medical','lkk','18976226935','2014-05-23','1','0','','','','','','','','','','','0','1400633051');");
E_D("replace into `tp_medical_user` values('2','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','12','medical','156','18976226685','2014-05-29','1','0','','','','','','','','','','','0','1400633073');");
E_D("replace into `tp_medical_user` values('3','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','','','','','','','','0','1401456004');");
E_D("replace into `tp_medical_user` values('4','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456749');");
E_D("replace into `tp_medical_user` values('5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456751');");
E_D("replace into `tp_medical_user` values('6','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456752');");
E_D("replace into `tp_medical_user` values('7','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456752');");
E_D("replace into `tp_medical_user` values('8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456752');");
E_D("replace into `tp_medical_user` values('9','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456752');");
E_D("replace into `tp_medical_user` values('10','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456752');");
E_D("replace into `tp_medical_user` values('11','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456752');");
E_D("replace into `tp_medical_user` values('12','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456753');");
E_D("replace into `tp_medical_user` values('13','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456754');");
E_D("replace into `tp_medical_user` values('14','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456754');");
E_D("replace into `tp_medical_user` values('15','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456755');");
E_D("replace into `tp_medical_user` values('16','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456755');");
E_D("replace into `tp_medical_user` values('17','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','倒萨打算','18267720632','2014-05-30','1','111','','','','111','11','111','','','','','0','1401456755');");
E_D("replace into `tp_medical_user` values('18','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457016');");
E_D("replace into `tp_medical_user` values('19','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457017');");
E_D("replace into `tp_medical_user` values('20','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457017');");
E_D("replace into `tp_medical_user` values('21','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457017');");
E_D("replace into `tp_medical_user` values('22','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457018');");
E_D("replace into `tp_medical_user` values('23','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457018');");
E_D("replace into `tp_medical_user` values('24','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457018');");
E_D("replace into `tp_medical_user` values('25','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457019');");
E_D("replace into `tp_medical_user` values('26','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457020');");
E_D("replace into `tp_medical_user` values('27','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457021');");
E_D("replace into `tp_medical_user` values('28','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457021');");
E_D("replace into `tp_medical_user` values('29','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457022');");
E_D("replace into `tp_medical_user` values('30','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457022');");
E_D("replace into `tp_medical_user` values('31','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457022');");
E_D("replace into `tp_medical_user` values('32','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457023');");
E_D("replace into `tp_medical_user` values('33','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457023');");
E_D("replace into `tp_medical_user` values('34','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457024');");
E_D("replace into `tp_medical_user` values('35','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457025');");
E_D("replace into `tp_medical_user` values('36','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457025');");
E_D("replace into `tp_medical_user` values('37','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457025');");
E_D("replace into `tp_medical_user` values('38','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457299');");
E_D("replace into `tp_medical_user` values('39','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457300');");
E_D("replace into `tp_medical_user` values('40','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457301');");
E_D("replace into `tp_medical_user` values('41','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457301');");
E_D("replace into `tp_medical_user` values('42','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457301');");
E_D("replace into `tp_medical_user` values('43','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457301');");
E_D("replace into `tp_medical_user` values('44','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457303');");
E_D("replace into `tp_medical_user` values('45','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457304');");
E_D("replace into `tp_medical_user` values('46','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457304');");
E_D("replace into `tp_medical_user` values('47','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457305');");
E_D("replace into `tp_medical_user` values('48','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','11','','0','1401457308');");
E_D("replace into `tp_medical_user` values('49','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','11','','0','1401457309');");
E_D("replace into `tp_medical_user` values('50','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','11','','0','1401457309');");
E_D("replace into `tp_medical_user` values('51','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','11','','0','1401457309');");
E_D("replace into `tp_medical_user` values('52','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','11','','0','1401457311');");
E_D("replace into `tp_medical_user` values('53','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','11','','0','1401457312');");
E_D("replace into `tp_medical_user` values('54','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','11','','0','1401457313');");
E_D("replace into `tp_medical_user` values('55','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','11','','0','1401457313');");
E_D("replace into `tp_medical_user` values('56','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','3','','','','111','11','111','','','11','','0','1401457315');");
E_D("replace into `tp_medical_user` values('57','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','3','','','','111','11','111','','','11','','0','1401457316');");
E_D("replace into `tp_medical_user` values('58','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','3','','','','111','11','111','','','11','','0','1401457316');");
E_D("replace into `tp_medical_user` values('59','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','3','','','','111','11','111','','','11','','0','1401457316');");
E_D("replace into `tp_medical_user` values('60','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','3','','','','111','11','111','','','11','','0','1401457322');");
E_D("replace into `tp_medical_user` values('61','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','3','','','','111','11','111','','','11','','0','1401457325');");
E_D("replace into `tp_medical_user` values('62','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','3','','','','111','11','111','','','11','','0','1401457325');");
E_D("replace into `tp_medical_user` values('63','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','3','','','','111','11','111','','','11','','0','1401457325');");
E_D("replace into `tp_medical_user` values('64','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','3','','','','111','11','111','','','11','','0','1401457325');");
E_D("replace into `tp_medical_user` values('65','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457329');");
E_D("replace into `tp_medical_user` values('66','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457330');");
E_D("replace into `tp_medical_user` values('67','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457330');");
E_D("replace into `tp_medical_user` values('68','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457544');");
E_D("replace into `tp_medical_user` values('69','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457646');");
E_D("replace into `tp_medical_user` values('70','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457651');");
E_D("replace into `tp_medical_user` values('71','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457898');");
E_D("replace into `tp_medical_user` values('72','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457903');");
E_D("replace into `tp_medical_user` values('73','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401457908');");
E_D("replace into `tp_medical_user` values('74','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-09','1','0','','','','111','11','111','','','','','0','1401458019');");
E_D("replace into `tp_medical_user` values('75','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-09','1','0','','','','111','11','111','','','','','0','1401458064');");
E_D("replace into `tp_medical_user` values('76','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','21','medical','221','18267720632','2014-05-05','1','0','','','','111','11','111','','','','','0','1401458122');");

require("../../inc/footer.php");
?>