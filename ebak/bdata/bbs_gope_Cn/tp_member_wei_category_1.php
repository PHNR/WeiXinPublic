<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_wei_category`;");
E_C("CREATE TABLE `tp_member_wei_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL DEFAULT '',
  `title` varchar(60) NOT NULL DEFAULT '',
  `displayorder` smallint(10) NOT NULL DEFAULT '0',
  `summary` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_wei_category` values('1','avljgc1397041839','微最强','1','微最强');");
E_D("replace into `tp_member_wei_category` values('2','avljgc1397041839','撒旦撒','0','1撒 ');");
E_D("replace into `tp_member_wei_category` values('3','qtjnws1397994896','gfs','10','fdsaf');");
E_D("replace into `tp_member_wei_category` values('4','avljgc1397041839','1','1','1');");
E_D("replace into `tp_member_wei_category` values('5','avljgc1397041839','111','11','11');");
E_D("replace into `tp_member_wei_category` values('6','avljgc1397041839','21','12','12');");
E_D("replace into `tp_member_wei_category` values('7','qtjnws1397994896','ds','0','sdsdds');");
E_D("replace into `tp_member_wei_category` values('8','isouej1399863564','饮食类商家','1','付水电费第三方多少');");
E_D("replace into `tp_member_wei_category` values('9','orbhyn1400224508','商城','1','商城');");
E_D("replace into `tp_member_wei_category` values('10','nepvyy1400393099','商户1','1','商户1商户1');");
E_D("replace into `tp_member_wei_category` values('11','nepvyy1400393099','酒店','1','1');");
E_D("replace into `tp_member_wei_category` values('12','orbhyn1400224508','11','11','11');");
E_D("replace into `tp_member_wei_category` values('13','xkuxqy1400560689','我要上网','1','我要上网');");
E_D("replace into `tp_member_wei_category` values('14','wsupsl1400754187','飞','1','说法是');");
E_D("replace into `tp_member_wei_category` values('15','reiesr1400475948','113','1','11');");
E_D("replace into `tp_member_wei_category` values('16','rirgpp1401289818','333','3','3');");
E_D("replace into `tp_member_wei_category` values('18','tzqawo1400308953','上的','1','地方是个');");

require("../../inc/footer.php");
?>