<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_adma`;");
E_C("CREATE TABLE `tp_adma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `url` varchar(100) NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `info` varchar(120) NOT NULL,
  `title` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='diy 宣传页'");
E_D("replace into `tp_adma` values('1','3','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/3/thumb_5356241cb40ed.jpg','© 2001-2013 某某微信版权所有','微信营销管理平台为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信3G网站、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。','微最强™');");
E_D("replace into `tp_adma` values('2','12','qrjasb1400560397','/tpl/Home/pigcms/common/images/ewm2.jpg','© 2001-2013 某某微信版权所有','微信营销管理平台为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信3G网站、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。','微最强™');");
E_D("replace into `tp_adma` values('3','12','orbhyn1400224508','http://wzweixiang.com/uploads/o/orbhyn1400224508/3/f/7/9/thumb_537822b428e7e.jpg','© 2001-2013 某某微信版权所有','微信营销管理平台为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信3G网站、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。','微最强™');");
E_D("replace into `tp_adma` values('4','12','rgccej1400813594','http://wzweixiang.com/uploads/r/rgccej1400813594/e/a/d/e/thumb_53830a5c90271.jpg','© 2001-2013 某某微信版权所有','微信营销管理平台为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信3G网站、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。','微最强™');");
E_D("replace into `tp_adma` values('5','12','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/c/c/d/7/thumb_53875dc1d55a8.jpg','© 2001-2013 某微信版权所有','微信营销管理平台为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信3G网站、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。','微最强™');");

require("../../inc/footer.php");
?>