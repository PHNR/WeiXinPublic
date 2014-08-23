<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_yzdd_record`;");
E_C("CREATE TABLE `tp_yzdd_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(80) NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `yid` int(11) DEFAULT NULL,
  `tms` int(11) DEFAULT NULL COMMENT '已答题目数',
  `zqs` int(11) DEFAULT '0' COMMENT '回答正确题目数',
  `ctime` int(11) DEFAULT NULL,
  `jrtms` int(11) DEFAULT '0' COMMENT '今天答的题目',
  `jt` int(11) DEFAULT '0' COMMENT '今天是第几天从0开始',
  `iscom` tinyint(1) DEFAULT '0',
  `hdrq` date DEFAULT NULL,
  `lasttmid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `tp_yzdd_record` values('1','e1bdd3d0699904a','oFYKTjmqARSQ1H8y81gKeCb44RT4','1','3','0','1398665270','0','0','0','2014-04-28','0');");
E_D("replace into `tp_yzdd_record` values('2','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','11','8','1399741846','11','0','0','2014-05-11','0');");
E_D("replace into `tp_yzdd_record` values('3','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','11','11','1399742635','11','0','0','2014-05-11','0');");
E_D("replace into `tp_yzdd_record` values('4','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','5','2','2','1399743777','2','0','0','2014-05-11','0');");
E_D("replace into `tp_yzdd_record` values('5','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','8','3','2','1400417521','3','0','0','2014-05-18','0');");
E_D("replace into `tp_yzdd_record` values('6','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','9','2','2','1400419869','2','0','0','2014-05-18','0');");
E_D("replace into `tp_yzdd_record` values('7','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','10','2','1','1400420045','2','0','0','2014-05-18','0');");
E_D("replace into `tp_yzdd_record` values('8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','11','2','1','1400420250','2','0','0','2014-05-18','0');");
E_D("replace into `tp_yzdd_record` values('9','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','12','2','1','1400420751','2','0','0','2014-05-18','0');");
E_D("replace into `tp_yzdd_record` values('10','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','13','2','0','1400420848','1','0','0','2014-05-18','0');");
E_D("replace into `tp_yzdd_record` values('11','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','14','2','2','1400420970','2','0','0','2014-05-18','0');");
E_D("replace into `tp_yzdd_record` values('12','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','15','2','2','1400421025','2','0','0','2014-05-18','0');");
E_D("replace into `tp_yzdd_record` values('13','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','16','2','1','1400421228','2','0','0','2014-05-18','0');");
E_D("replace into `tp_yzdd_record` values('14','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','18','5','2','1400554748','5','0','0','2014-05-20','0');");
E_D("replace into `tp_yzdd_record` values('15','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','10','9','1400554848','10','0','0','2014-05-20','0');");
E_D("replace into `tp_yzdd_record` values('16','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','10','10','1400554957','10','0','0','2014-05-20','0');");

require("../../inc/footer.php");
?>