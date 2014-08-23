<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_indent`;");
E_C("CREATE TABLE `tp_indent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `gid` tinyint(2) NOT NULL,
  `month` mediumint(5) NOT NULL DEFAULT '0',
  `uname` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `info` int(11) NOT NULL,
  `indent_id` char(20) NOT NULL,
  `widtrade_no` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `tp_indent` values('1','1','3','1','康视眼镜','充值vip会员1个月','0','1_1397140753','','150','1397140753','0');");
E_D("replace into `tp_indent` values('2','3','4','1','283497031','充值vip会员1个月','0','3_1397972606','','200','1397972606','0');");
E_D("replace into `tp_indent` values('3','12','2','2','test','充值vip会员2个月','0','12_1398005640','','20','1398005640','0');");
E_D("replace into `tp_indent` values('4','12','3','12','test','充值vip会员12个月','0','12_1399122583','','1800','1399122583','0');");
E_D("replace into `tp_indent` values('5','3','4','12','283497031','充值vip会员12个月','0','3_1399691658','','2400','1399691658','0');");
E_D("replace into `tp_indent` values('6','12','4','1','test','充值vip会员1个月','0','12_1399696307','','200','1399696307','0');");
E_D("replace into `tp_indent` values('7','12','2','2','test','充值vip会员2个月','0','12_1399818359','','20','1399818359','0');");
E_D("replace into `tp_indent` values('8','12','3','1','test','充值vip会员1个月','0','12_1399857088','','150','1399857088','0');");
E_D("replace into `tp_indent` values('9','12','2','1','test','充值vip会员1个月','0','12_1399993613','','10','1399993613','0');");
E_D("replace into `tp_indent` values('10','12','4','1','test','充值vip会员1个月','0','12_1399998559','','200','1399998559','0');");
E_D("replace into `tp_indent` values('11','12','4','1','test','充值vip会员1个月','0','12_1400022343','','200','1400022343','0');");
E_D("replace into `tp_indent` values('12','12','2','1','test','充值vip会员1个月','0','12_1400121139','','10','1400121139','0');");
E_D("replace into `tp_indent` values('13','12','4','1','test','充值vip会员1个月','0','12_1400224253','','200','1400224253','0');");
E_D("replace into `tp_indent` values('14','12','3','9','test','充值vip会员9个月','0','12_1400254517','','1350','1400254517','0');");
E_D("replace into `tp_indent` values('15','12','2','1','test','充值vip会员1个月','0','12_1400513992','','10','1400513992','0');");
E_D("replace into `tp_indent` values('16','12','4','1','test','充值vip会员1个月','0','12_1400514003','','200','1400514003','0');");
E_D("replace into `tp_indent` values('17','12','4','1','test','充值vip会员1个月','0','12_1400515846','','200','1400515846','0');");
E_D("replace into `tp_indent` values('18','12','2','1','test','充值vip会员1个月','0','12_1400580120','','10','1400580120','0');");
E_D("replace into `tp_indent` values('19','12','2','1','test','充值vip会员1个月','0','12_1400678174','','10','1400678174','0');");
E_D("replace into `tp_indent` values('20','12','2','12','test','充值vip会员12个月','0','12_1401252098','','120','1401252098','0');");

require("../../inc/footer.php");
?>