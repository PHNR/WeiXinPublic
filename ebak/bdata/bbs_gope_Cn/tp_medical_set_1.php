<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_medical_set`;");
E_C("CREATE TABLE `tp_medical_set` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `token` varchar(50) NOT NULL DEFAULT '',
  `head_url` varchar(200) NOT NULL DEFAULT '',
  `album_id` int(11) DEFAULT NULL,
  `menu1` varchar(20) NOT NULL DEFAULT '',
  `menu2` varchar(20) NOT NULL DEFAULT '',
  `menu3` varchar(20) NOT NULL DEFAULT '',
  `menu4` varchar(20) NOT NULL DEFAULT '',
  `menu5` varchar(20) NOT NULL DEFAULT '',
  `menu6` varchar(20) NOT NULL DEFAULT '',
  `menu7` varchar(20) NOT NULL DEFAULT '',
  `menu8` varchar(20) NOT NULL DEFAULT '',
  `hotfocus_id` int(11) NOT NULL,
  `experts_id` int(11) NOT NULL,
  `ceem_id` int(11) NOT NULL,
  `Rcase_id` int(11) NOT NULL,
  `technology_id` int(11) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `evants_id` int(11) NOT NULL,
  `video` text NOT NULL,
  `symptoms_id` int(11) NOT NULL,
  `info` char(200) NOT NULL DEFAULT '',
  `path` varchar(3000) DEFAULT '0',
  `tpid` tinyint(4) DEFAULT '1',
  `conttpid` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_medical_set` values('2','挂号','挂号微医疗','nepvyy1400393099','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','0','医院简介','热点聚焦','医院专家','尖端设备','康复案例','先进技术','研发药物','就医指南','79','77','78','79','78','77','78','','77','挂号','0','1','1');");
E_D("replace into `tp_medical_set` values('3','微医疗','12121212','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/6/a/0/2/thumb_53780d727e024.jpg','1','医院简介','热点聚焦','医院专家','尖端设备','康复案例','先进技术','研发药物','就医指南','0','0','0','0','0','0','0','','0','10','0','1','1');");
E_D("replace into `tp_medical_set` values('4','医疗','是打算','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/c/c/d/7/thumb_53875dc1d55a8.jpg','0','医院简介','热点聚焦','医院专家','尖端设备','康复案例','先进技术','研发药物','就医指南','0','142','0','0','0','0','0','http://v.youku.com/v_show/id_XNDA1ODEyNjE2.html ','0','地方撒地方过水电费','0','1','1');");

require("../../inc/footer.php");
?>