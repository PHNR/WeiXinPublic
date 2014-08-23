<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_selfform_input`;");
E_C("CREATE TABLE `tp_selfform_input` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `formid` int(10) NOT NULL DEFAULT '0',
  `displayname` varchar(30) NOT NULL DEFAULT '',
  `fieldname` varchar(30) NOT NULL DEFAULT '',
  `inputtype` varchar(20) NOT NULL DEFAULT '',
  `options` varchar(200) NOT NULL DEFAULT '',
  `require` tinyint(1) NOT NULL DEFAULT '0',
  `regex` varchar(100) NOT NULL DEFAULT '',
  `taxis` mediumint(4) NOT NULL DEFAULT '0',
  `errortip` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `formid` (`formid`,`taxis`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_selfform_input` values('1','1','aaa','x','text','','0','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','1','hgggf');");
E_D("replace into `tp_selfform_input` values('2','4','表单','b','text','','0','','0','');");
E_D("replace into `tp_selfform_input` values('3','4','表单2','b','text','','0','','0','');");
E_D("replace into `tp_selfform_input` values('4','5','测试','test','text','','1','','1','');");
E_D("replace into `tp_selfform_input` values('5','8','1111','1','text','','0','','0','');");
E_D("replace into `tp_selfform_input` values('6','9','11','d','text','','0','','0','');");

require("../../inc/footer.php");
?>