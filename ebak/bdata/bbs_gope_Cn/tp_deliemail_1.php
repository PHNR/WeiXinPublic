<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_deliemail`;");
E_C("CREATE TABLE `tp_deliemail` (
  `token` varchar(60) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `smtpserver` varchar(40) NOT NULL DEFAULT '',
  `port` varchar(40) NOT NULL DEFAULT '',
  `name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `receive` varchar(60) NOT NULL DEFAULT '',
  `shangcheng` tinyint(1) NOT NULL DEFAULT '0',
  `yuyue` tinyint(1) NOT NULL DEFAULT '0',
  `baom` tinyint(1) NOT NULL DEFAULT '0',
  `zxyy` tinyint(1) NOT NULL DEFAULT '0',
  `toupiao` tinyint(1) NOT NULL DEFAULT '0',
  `dingcan` tinyint(1) NOT NULL,
  `car` tinyint(1) NOT NULL,
  `yiliao` tinyint(1) NOT NULL,
  `jdbg` tinyint(1) NOT NULL,
  `ktv` tinyint(1) NOT NULL,
  `huisuo` tinyint(1) NOT NULL,
  `jiuba` tinyint(1) NOT NULL,
  PRIMARY KEY (`token`),
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `tp_deliemail` values('avljgc1397041839','0','smtp.qq.com','25','283497031@qq.com','lry520#','2201160598@qq.com','1','0','0','0','1','0','1','1','0','0','0','0');");
E_D("replace into `tp_deliemail` values('chsyqp1401254915','0','','','','','859033082@qq.com','1','1','1','1','1','1','0','0','0','0','0','0');");
E_D("replace into `tp_deliemail` values('orbhyn1400224508','0','','','','','3050647@qq.com','0','1','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `tp_deliemail` values('rtzvcz1401302172','1','smtp.qq.com','25','1031414184','XTAIWTXY1103..','767421930@qq.com','1','1','1','1','1','1','1','1','1','1','1','1');");
E_D("replace into `tp_deliemail` values('tzqawo1400308953','1','smtp.qq.com','25','87866306@qq.com','abcbxH123','87866306@qq.com','1','1','1','1','1','1','1','1','1','1','1','1');");
E_D("replace into `tp_deliemail` values('ivrnef1401365899','0','','','test','test123','2721683008@qq.com','1','1','1','1','1','1','1','1','1','1','1','1');");
E_D("replace into `tp_deliemail` values('lfethi1401449403','0','','','','','393620317@qq.com','0','0','0','0','0','1','0','0','0','0','0','0');");

require("../../inc/footer.php");
?>