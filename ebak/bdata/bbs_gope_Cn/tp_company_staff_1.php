<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_company_staff`;");
E_C("CREATE TABLE `tp_company_staff` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `companyid` int(10) NOT NULL,
  `token` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `tel` varchar(11) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `companyid` (`companyid`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_company_staff` values('1','3','nepvyy1400393099','罗经理','123','202cb962ac59075b964b07152d234b70','18976226935','1400743359');");
E_D("replace into `tp_company_staff` values('2','1','avljgc1397041839','11','11','6512bd43d9caa6e02c990b0a82652dca','111','1401256624');");
E_D("replace into `tp_company_staff` values('3','3','tzqawo1400308953','快结婚','123','202cb962ac59075b964b07152d234b70','132453','1401420776');");

require("../../inc/footer.php");
?>