<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_school_classify`;");
E_C("CREATE TABLE `tp_school_classify` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `ssort` int(5) NOT NULL,
  `token` varchar(50) NOT NULL,
  `type` char(20) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `type` (`type`),
  FULLTEXT KEY `type_2` (`type`),
  FULLTEXT KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `tp_school_classify` values('1','学校','1','nepvyy1400393099','semester');");
E_D("replace into `tp_school_classify` values('2','东区','1','nepvyy1400393099','semester');");
E_D("replace into `tp_school_classify` values('3','2014第一学期','1','nepvyy1400393099','semester');");
E_D("replace into `tp_school_classify` values('4','三年级2班','1','nepvyy1400393099','theclass');");
E_D("replace into `tp_school_classify` values('5','第一期','1','nepvyy1400393099','score');");
E_D("replace into `tp_school_classify` values('6','语文','1','nepvyy1400393099','subject');");
E_D("replace into `tp_school_classify` values('7','数学','1','nepvyy1400393099','subject');");
E_D("replace into `tp_school_classify` values('8','09:00-09:45','1','nepvyy1400393099','timeframe');");
E_D("replace into `tp_school_classify` values('9','11:00-11:45.','1','nepvyy1400393099','timeframe');");
E_D("replace into `tp_school_classify` values('10','星期一','1','nepvyy1400393099','week');");
E_D("replace into `tp_school_classify` values('11','星期二','1','nepvyy1400393099','week');");
E_D("replace into `tp_school_classify` values('12','地区','1','nepvyy1400393099','semester');");
E_D("replace into `tp_school_classify` values('13','上的','1','tzqawo1400308953','semester');");
E_D("replace into `tp_school_classify` values('14','是','1','tzqawo1400308953','semester');");
E_D("replace into `tp_school_classify` values('15','上的','1','tzqawo1400308953','semester');");
E_D("replace into `tp_school_classify` values('16','过放电个','1','tzqawo1400308953','theclass');");
E_D("replace into `tp_school_classify` values('17','个','1','tzqawo1400308953','theclass');");
E_D("replace into `tp_school_classify` values('18','飞个','1','tzqawo1400308953','theclass');");
E_D("replace into `tp_school_classify` values('19','发给','1','tzqawo1400308953','score');");
E_D("replace into `tp_school_classify` values('20','地方个','1','tzqawo1400308953','score');");
E_D("replace into `tp_school_classify` values('21','回复','1','tzqawo1400308953','score');");
E_D("replace into `tp_school_classify` values('22','发给','1','tzqawo1400308953','subject');");
E_D("replace into `tp_school_classify` values('23','飞个','1','tzqawo1400308953','subject');");
E_D("replace into `tp_school_classify` values('24','风格化','1','tzqawo1400308953','subject');");
E_D("replace into `tp_school_classify` values('25','9:00-9:45','1','tzqawo1400308953','timeframe');");
E_D("replace into `tp_school_classify` values('26','10:00-10:45','1','tzqawo1400308953','timeframe');");
E_D("replace into `tp_school_classify` values('27','11:00-11:45','1','tzqawo1400308953','timeframe');");
E_D("replace into `tp_school_classify` values('28','星期一','1','tzqawo1400308953','week');");
E_D("replace into `tp_school_classify` values('29','星期二','1','tzqawo1400308953','week');");
E_D("replace into `tp_school_classify` values('30','星期三','1','tzqawo1400308953','week');");

require("../../inc/footer.php");
?>