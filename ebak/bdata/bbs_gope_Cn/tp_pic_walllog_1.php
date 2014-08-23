<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_pic_walllog`;");
E_C("CREATE TABLE `tp_pic_walllog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '??id',
  `token` varchar(60) NOT NULL COMMENT '???????token',
  `picurl` varchar(100) NOT NULL COMMENT '???????',
  `wecha_id` varchar(30) NOT NULL COMMENT '??????id',
  `username` varchar(30) NOT NULL COMMENT '??????????',
  `create_time` int(11) NOT NULL COMMENT '???????',
  `state` int(1) NOT NULL COMMENT '??',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `tp_pic_walllog` values('1','1','avljgc1397041839','http://wzweixiang.com/Uploads/image/picwall/p20140522/p_6016062276273865600.jpg','ob2qxjgbC8wTmFfmJdS14O-So_jg','刚哈更好好好好','1400723637','1');");
E_D("replace into `tp_pic_walllog` values('2','3','utxcrr1400760392','http://wzweixiang.com/Uploads/image/picwall/p20140522/p_6016239744322916313.jpg','oe7SSjm3Hu0hmdWtfyKfNG7AVY7g','密码多少','1400764955','1');");
E_D("replace into `tp_pic_walllog` values('3','5','tzqawo1400308953','http://wzweixiang.com/Uploads/image/picwall/p20140529/p_6018846226830486169.jpg','o1R8MtzBEWnrRp4ruF8BiIK89pxA','你大爷','1401371828','1');");
E_D("replace into `tp_pic_walllog` values('4','5','tzqawo1400308953','http://wzweixiang.com/Uploads/image/picwall/p20140529/p_6018846480233556640.jpg','o1R8MtzBEWnrRp4ruF8BiIK89pxA','去死','1401371888','1');");
E_D("replace into `tp_pic_walllog` values('5','5','tzqawo1400308953','http://wzweixiang.com/Uploads/image/picwall/p20140529/p_6018847399356558005.jpg','o1R8MtzBEWnrRp4ruF8BiIK89pxA','美女','1401372101','1');");

require("../../inc/footer.php");
?>