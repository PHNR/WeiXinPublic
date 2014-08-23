<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_use_record`;");
E_C("CREATE TABLE `tp_member_card_use_record` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `itemid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(30) NOT NULL DEFAULT '',
  `wecha_id` varchar(50) NOT NULL DEFAULT '',
  `staffid` int(10) NOT NULL DEFAULT '0',
  `cat` smallint(4) NOT NULL DEFAULT '0',
  `expense` mediumint(4) NOT NULL DEFAULT '0',
  `score` mediumint(4) NOT NULL DEFAULT '0',
  `usecount` mediumint(4) NOT NULL DEFAULT '1',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `itemid` (`itemid`,`cat`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_use_record` values('28','0','ozugxw1400589873','oiKAjuDvbT1TMuXEE8KHWmwqS63w','0','99','200','0','1','1400595467');");
E_D("replace into `tp_member_card_use_record` values('15','0','avljgc1397041839','ob2qxjoeJGrKjs_a_Mi_a_83niS4','0','0','0','0','0','1398043870');");
E_D("replace into `tp_member_card_use_record` values('17','0','avljgc1397041839','ob2qxjoeJGrKjs_a_Mi_a_83niS4','0','0','50','50','0','1398044074');");
E_D("replace into `tp_member_card_use_record` values('27','0','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','0','99','322','0','1','1400583073');");
E_D("replace into `tp_member_card_use_record` values('26','0','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','0','0','100','0','0','1400495838');");
E_D("replace into `tp_member_card_use_record` values('25','0','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','0','99','26','0','1','1400394083');");
E_D("replace into `tp_member_card_use_record` values('24','6','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','2','0','0','1','1400328081');");
E_D("replace into `tp_member_card_use_record` values('29','0','ozugxw1400589873','oiKAjuDvbT1TMuXEE8KHWmwqS63w','0','99','200','0','1','1400595510');");
E_D("replace into `tp_member_card_use_record` values('32','0','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','0','0','500','1000','0','1400636888');");
E_D("replace into `tp_member_card_use_record` values('31','0','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','0','0','100','200','0','1400636862');");
E_D("replace into `tp_member_card_use_record` values('33','7','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','1','2','0','-10','1','1400636984');");
E_D("replace into `tp_member_card_use_record` values('34','7','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','1','2','0','-10','1','1400637032');");
E_D("replace into `tp_member_card_use_record` values('35','0','nepvyy1400393099','oKTN3t7bKqOnOKzXg5lnsS0iWWSA','0','0','200','400','0','1400728702');");
E_D("replace into `tp_member_card_use_record` values('36','0','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','0','0','0','0','0','1400743332');");
E_D("replace into `tp_member_card_use_record` values('37','7','nepvyy1400393099','oKTN3t7bKqOnOKzXg5lnsS0iWWSA','1','2','0','-10','1','1400743372');");
E_D("replace into `tp_member_card_use_record` values('38','7','nepvyy1400393099','oKTN3t7bKqOnOKzXg5lnsS0iWWSA','1','2','0','-10','1','1400743461');");
E_D("replace into `tp_member_card_use_record` values('39','0','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','0','0','10000','0','0','1401157443');");
E_D("replace into `tp_member_card_use_record` values('40','0','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','0','0','10101','1282827','0','1401157471');");
E_D("replace into `tp_member_card_use_record` values('41','9','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','2','0','-888','1','1401257115');");
E_D("replace into `tp_member_card_use_record` values('42','9','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','2','0','-888','1','1401257170');");
E_D("replace into `tp_member_card_use_record` values('43','3','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','1','11','1397','1','1401265043');");
E_D("replace into `tp_member_card_use_record` values('44','0','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','0','0','0','0','0','1401365416');");
E_D("replace into `tp_member_card_use_record` values('45','0','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','0','0','100','1000','0','1401365467');");
E_D("replace into `tp_member_card_use_record` values('46','10','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','3','2','0','-2','1','1401420791');");

require("../../inc/footer.php");
?>