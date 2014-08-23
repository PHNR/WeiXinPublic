<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wechat_group`;");
E_C("CREATE TABLE `tp_wechat_group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `wechatgroupid` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(60) NOT NULL DEFAULT '',
  `intro` varchar(200) NOT NULL DEFAULT '',
  `token` varchar(30) NOT NULL DEFAULT '',
  `fanscount` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `wechatgroupid` (`wechatgroupid`,`token`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wechat_group` values('1','0','未分组','','eewoyx1396338504','3');");
E_D("replace into `tp_wechat_group` values('2','1','黑名单','','eewoyx1396338504','0');");
E_D("replace into `tp_wechat_group` values('3','2','星标组','','eewoyx1396338504','0');");
E_D("replace into `tp_wechat_group` values('4','0','未分组','','lxxnfn1396718703','20');");
E_D("replace into `tp_wechat_group` values('5','1','黑名单','','lxxnfn1396718703','0');");
E_D("replace into `tp_wechat_group` values('6','2','星标组','','lxxnfn1396718703','0');");
E_D("replace into `tp_wechat_group` values('7','100','成交客户','成交客户','lxxnfn1396718703','0');");
E_D("replace into `tp_wechat_group` values('8','0','未分组','','avljgc1397041839','67');");
E_D("replace into `tp_wechat_group` values('9','1','黑名单','','avljgc1397041839','0');");
E_D("replace into `tp_wechat_group` values('10','2','星标组','','avljgc1397041839','0');");
E_D("replace into `tp_wechat_group` values('11','100','测试','','avljgc1397041839','1');");
E_D("replace into `tp_wechat_group` values('12','0','默认组','','utxcrr1400760392','2866');");
E_D("replace into `tp_wechat_group` values('13','1','屏蔽组','','utxcrr1400760392','0');");
E_D("replace into `tp_wechat_group` values('14','2','星标组','','utxcrr1400760392','0');");

require("../../inc/footer.php");
?>