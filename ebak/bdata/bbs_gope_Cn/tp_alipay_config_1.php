<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_alipay_config`;");
E_C("CREATE TABLE `tp_alipay_config` (
  `token` varchar(60) NOT NULL,
  `paytype` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(40) NOT NULL DEFAULT '',
  `pid` varchar(40) NOT NULL DEFAULT '',
  `key` varchar(200) NOT NULL DEFAULT '',
  `partnerkey` varchar(100) NOT NULL DEFAULT '',
  `appsecret` varchar(200) NOT NULL DEFAULT '',
  `appid` varchar(60) NOT NULL DEFAULT '',
  `paysignkey` varchar(200) NOT NULL DEFAULT '',
  `partnerid` varchar(200) NOT NULL DEFAULT '',
  `open` tinyint(1) NOT NULL DEFAULT '0',
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `tp_alipay_config` values('avljgc1397041839','weixin','','','','8934e7d15453e97507ef794cf7b0519d','4333d426b8d01a3fe64d53f36892df','wxf8b4f85f3a794e77','2Wozy2aksie1puXUBpWD8oZxiD1DfQuEaiC7KcRATv1Ino3mdop KaPGQQ7TtkNySuAmCaDCrw4xhPY5qKTBl7Fzm0RgR3c0WaVY IXZARsxzHV2x7iwPPzOz94dnwPWSn','1900000109','1');");
E_D("replace into `tp_alipay_config` values('nepvyy1400393099','weixin','','','','11','11','111','111','11','0');");
E_D("replace into `tp_alipay_config` values('reiesr1400475948','weixin','','','','11','11','11111','111','11','1');");
E_D("replace into `tp_alipay_config` values('ozugxw1400589873','weixin','','','','','','','','','1');");
E_D("replace into `tp_alipay_config` values('rgccej1400813594','weixin','','','','aaa','aaa','aa','aaa','aaa','0');");
E_D("replace into `tp_alipay_config` values('tzqawo1400308953','alipay','cw@ynhdj.com','2088901901962234','pahpfpxh4ywklplxf0v3evj88dej6w79','','','','','','1');");

require("../../inc/footer.php");
?>