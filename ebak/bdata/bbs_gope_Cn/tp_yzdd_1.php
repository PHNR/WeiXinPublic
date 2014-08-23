<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_yzdd`;");
E_C("CREATE TABLE `tp_yzdd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(80) NOT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT '名字',
  `ms` varchar(1023) DEFAULT NULL COMMENT '优惠描述',
  `kssj` int(11) DEFAULT NULL COMMENT '活动开始时间',
  `jssj` int(11) DEFAULT NULL COMMENT '活动结束时间',
  `pic` varchar(255) DEFAULT NULL COMMENT '活动图片',
  `gjz` varchar(50) DEFAULT NULL COMMENT '关键字',
  `limit` int(11) DEFAULT '20' COMMENT '限时',
  `mrtm` int(11) DEFAULT NULL COMMENT '每天题目数',
  `tk` varchar(255) DEFAULT NULL COMMENT '自定义题目',
  `dtts` int(11) DEFAULT NULL COMMENT '答题天数',
  `status` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `tp_yzdd` values('1','e1bdd3d0699904a','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','涓�绔欏埌搴�','1398319528','1398837930','http://suetest.yzsep.com/tpl/User/default/common/images/img/yzdd.jpg','涓�绔欏埌搴�','12','3',NULL,'5','1');");
E_D("replace into `tp_yzdd` values('16','avljgc1397041839','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','0','1399557204','1401458007','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','0','2','2',NULL,'2','1');");
E_D("replace into `tp_yzdd` values('21','nepvyy1400393099','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','1388505600','1420646400','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','涓�绔欏埌搴�','1','3',NULL,'10','1');");
E_D("replace into `tp_yzdd` values('17','orbhyn1400224508','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','','0','0','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','涓�绔欏埌搴�','0','0',NULL,'0','0');");
E_D("replace into `tp_yzdd` values('19','hziflr1400551929','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','1400468410','1401418813','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','涓�绔欏埌搴�','2','10',NULL,'5','1');");
E_D("replace into `tp_yzdd` values('22','qpyzzq1401101914','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','1401102140','1527332542','http://wzweixiang.com/uploads/q/qpyzzq1401101914/b/3/a/0/thumb_538320374bb19.png','涓�绔欏埌搴�','1','111',NULL,'11','1');");
E_D("replace into `tp_yzdd` values('23','tzqawo1400308953','涓�绔欏埌搴曟椿鍔ㄥ紑濮嬩簡','鍚х殑','1399651200','0','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','涓�绔欏埌搴�','2','3',NULL,'3','1');");

require("../../inc/footer.php");
?>