<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_mail`;");
E_C("CREATE TABLE `tp_mail` (
  `email` text NOT NULL,
  `token` varchar(60) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `smtpserver` varchar(40) NOT NULL DEFAULT '',
  `port` varchar(40) NOT NULL DEFAULT '',
  `name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `receive` varchar(60) NOT NULL DEFAULT '',
  `shangcheng` tinyint(1) NOT NULL DEFAULT '0',
  `yuyue` tinyint(1) NOT NULL DEFAULT '0',
  `dingdan` tinyint(1) NOT NULL DEFAULT '0',
  `biaodan` tinyint(1) NOT NULL DEFAULT '0',
  `toupiao` tinyint(1) NOT NULL DEFAULT '0',
  `emailuser` text NOT NULL,
  `emailpassword` text NOT NULL,
  `emailstatus` text NOT NULL,
  PRIMARY KEY (`token`),
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>