<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_school_teachers`;");
E_C("CREATE TABLE `tp_school_teachers` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` char(50) NOT NULL,
  `birthdate` date NOT NULL,
  `createtime` int(11) NOT NULL,
  `homephone` char(12) NOT NULL,
  `mobile` char(11) NOT NULL,
  `email` char(50) NOT NULL,
  `sex` int(1) NOT NULL,
  `token` varchar(50) NOT NULL,
  `jiontime` date DEFAULT NULL,
  `info` text NOT NULL,
  `faceimg` varchar(200) NOT NULL DEFAULT '',
  `headinfo` varchar(600) NOT NULL DEFAULT '',
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_school_teachers` values('1','10010','1992-09-05','1400727363','','18267720632','213123@qq.com','1','avljgc1397041839','2014-06-01','倒萨冯绍峰微啊法尔范','http://wzweixiang.com/uploads/a/avljgc1397041839/4/0/b/9/thumb_53744bfb2e59f.jpg','儿微微额外人发顺丰无法','1');");
E_D("replace into `tp_school_teachers` values('2','罗老师','1988-06-01','1400727641','','18976226935','2860652032@qq.com','1','nepvyy1400393099','2014-05-14','罗老师','http://wzweixiang.com/tpl/static/attachment/icon/lovely/cloud-check.png','罗老师','1');");
E_D("replace into `tp_school_teachers` values('3','萨达萨达','1992-01-01','1400760664','','18267720632','283497031@qq.com','1','avljgc1397041839','2011-01-01','打撒打撒打撒打撒打撒打撒阿达爱仕达','http://wzweixiang.com/uploads/a/avljgc1397041839/4/0/b/9/thumb_53744bfb2e59f.jpg','打撒打撒','1');");
E_D("replace into `tp_school_teachers` values('4','电饭锅','1979-05-16','1401417365','3252525','15125252525','dfgsd@163.com','1','tzqawo1400308953','2014-05-01','地方郭德纲','http://wzweixiang.com/tpl/static/attachment/icon/lovely/car.png','发给电饭锅','1');");

require("../../inc/footer.php");
?>