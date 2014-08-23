<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_moopha_article`;");
E_C("CREATE TABLE `tp_moopha_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `channel_id` int(10) NOT NULL,
  `token` varchar(50) NOT NULL,
  `site` int(4) NOT NULL DEFAULT '1',
  `title` varchar(200) NOT NULL,
  `titles` varchar(400) NOT NULL DEFAULT '',
  `subtitle` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `externallink` tinyint(1) NOT NULL DEFAULT '0',
  `thumb` varchar(100) DEFAULT NULL,
  `content` longtext,
  `intro` varchar(2000) NOT NULL,
  `author` varchar(20) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `keywords` varchar(300) DEFAULT NULL,
  `uid` varchar(10) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL,
  `last_update` int(10) NOT NULL,
  `viewcount` int(10) NOT NULL DEFAULT '0',
  `template` varchar(50) DEFAULT NULL,
  `pagecount` tinyint(2) NOT NULL DEFAULT '1',
  `disagree` int(10) NOT NULL DEFAULT '0',
  `cancomment` tinyint(1) NOT NULL DEFAULT '1',
  `commentcount` int(10) NOT NULL DEFAULT '0',
  `agree` int(10) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  `lastcreate` int(10) NOT NULL DEFAULT '1400000000',
  `sourcetype` smallint(2) NOT NULL DEFAULT '0',
  `ex` tinyint(1) DEFAULT '0',
  `pubed` tinyint(1) NOT NULL DEFAULT '1',
  `geoid` mediumint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`),
  KEY `channel_id_2` (`channel_id`,`thumb`),
  KEY `time` (`time`),
  KEY `taxis` (`taxis`),
  KEY `ex` (`ex`),
  KEY `geoid` (`geoid`),
  KEY `uid` (`uid`),
  KEY `keywords` (`keywords`),
  KEY `sourcetype` (`sourcetype`),
  KEY `pubed` (`pubed`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `tp_moopha_article` values('1','2','','1','产品展示','','产品展示','?m=site&c=home&a=content&contentid=1','0','http://zgweixiang.com/cms/upload/images/2014/04/10/1397134888RwGv.jpg','','','','',',','0','1397034945','1397134892','0',NULL,'1','0','1','0','0','4','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('2','2','','1','公司简介','','公司简介','{siteUrl}/index.php?g=Wap&m=Index&a=lists&token=pvosmg1397034660&wecha_id={wechat_id}&classid=9','1','http://zgweixiang.com/cms/upload/images/2014/04/10/1397123989KJEJ.jpg','','','','',',','0','1397035004','1397124967','0',NULL,'1','0','1','0','0','6','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('3','2','','1','会员卡','','门店风貌','http://zgweixiang.com{siteUrl}/index.php?g=Wap&m=Card&a=index&token=pvosmg1397034660&wecha_id={wechat_id}','1','http://zgweixiang.com/cms/upload/images/2014/04/10/1397128546KCNH.jpg','','','','',',','0','1397035058','1397128547','0',NULL,'1','0','1','0','0','5','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('4','2','','1','专家预约','','专家预约','{siteUrl}/index.php?g=Wap&m=Yuyue&a=index&token=pvosmg1397034660&wecha_id={wechat_id}&id=1','1','http://zgweixiang.com/cms/upload/images/2014/04/10/1397124029yJDd.jpg','','','','',',','0','1397035110','1397134840','0',NULL,'1','0','1','0','0','3','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('5','2','','1','最新活动','','最新活动','{siteUrl}/index.php?g=Wap&m=Index&a=lists&token=pvosmg1397034660&wecha_id={wechat_id}&classid=12','1','http://zgweixiang.com/cms/upload/images/2014/04/10/1397124045FRBv.jpg','','','','',',','0','1397035148','1397130232','0',NULL,'1','0','1','0','0','2','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('6','2','','1','爱眼护眼','','爱眼护眼','{siteUrl}/index.php?g=Wap&m=Index&a=lists&token=pvosmg1397034660&wecha_id={wechat_id}&classid=10','1','http://zgweixiang.com/cms/upload/images/2014/04/10/1397124056rHwc.jpg','','','','',',','0','1397035181','1397127359','0',NULL,'1','0','1','0','0','1','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('7','7','','1','','','','?m=site&c=home&a=content&contentid=7','0','http://zgweixiang.com/cms/upload/images/2014/04/10/1397123811VtyJ.jpg','','','','',',','','1397123793','1397123793','0',NULL,'1','0','1','0','0','7','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('8','7','','1','','','','?m=site&c=home&a=content&contentid=8','0','http://zgweixiang.com/cms/upload/images/2014/04/10/1397123822unku.jpg','','','','',',','','1397123816','1397123816','0',NULL,'1','0','1','0','0','8','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('9','7','','1','','','','?m=site&c=home&a=content&contentid=9','0','http://zgweixiang.com/cms/upload/images/2014/04/10/1397123850bgbz.jpg','','','','',',','','1397123844','1397123844','0',NULL,'1','0','1','0','0','9','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('10','7','','1','','','','?m=site&c=home&a=content&contentid=10','0','http://zgweixiang.com/cms/upload/images/2014/04/10/1397123901KPaG.png','','','','',',','','1397123856','1397123856','0',NULL,'1','0','1','0','0','10','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('12','6','','1','温州康视眼镜','','温州康视眼镜','?m=site&c=home&a=content&contentid=12','0','http://zgweixiang.com/cms/upload/images/2014/04/10/1397129146KRQr.jpg','<p>\r\n	<span style=\"font-family: 宋体; color: rgb(0, 0, 0); font-size: medium; line-height: 22px; \">温州康视眼镜有限公司专业服务始于1987年，是集零售与批发为一体的眼镜连锁企业。企业实施现代化品牌化、规范化的连锁经营，是温州地区眼镜零售行业规模最大的连锁企业之一。公司经浙江省眼镜质量监督局对经销产品质量保证体系、质量管理系、配镜体系、人员素质、产品进货渠道进行技术监督和全面技术考核后，被评为&ldquo;浙江省配镜质量示范店&rdquo;，是温州地区第一家也是唯一一家获此殊荣的公司，同时还荣获&ldquo;温州市第二届执行物价计量政策法规优秀单位&rdquo;、&ldquo;浙江市场服务质量信得过单位&rdquo;&ldquo;温州市配镜质量店&rdquo;及&ldquo;全省配镜比赛温州地区第一名&rdquo;等荣誉。</span><br style=\"font-family: 宋体; color: rgb(0, 0, 0); font-size: medium; line-height: 22px; \" />\r\n	<span style=\"font-family: 宋体; color: rgb(0, 0, 0); font-size: medium; line-height: 22px; \">&nbsp;&nbsp;&nbsp;&nbsp;公司拥有十余套世界一流的验光设备和二十位眼镜专业技术人员，其中包括温州市唯一一位国家级高级验光师黄良驹先生以及毕业于温州医学院和天津医学科大学的验光师。公司不仅是国内外两百多个世界品牌、两千余种眼镜产品的零售商，同时还是博士伦、视康、强生、费士康等隐形眼镜品牌温州地区的总经销商，和许多世界知名品牌形成良好的合作伙伴关系。</span></p>\r\n','温州康视眼镜有限公司专业服务始于1987年，是集零售与批发为一体的眼镜连锁企业。企业实施现代化品牌化、规范化的连锁经营，是温州地区眼镜零售行业规模最大的连锁企业之一。公司经浙江省眼镜质量监督局对经销产品质量保证体系、质量管理系、配镜体系、人员素质、产品进货渠道进行技','','',',','','1397129127','1397129127','0',NULL,'1','0','1','0','0','12','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('13','14','avljgc1397041839','2',' ','',NULL,'','0','http://zgweixiang.com/tpl/static/attachment/background/view/3.jpg',' ','',NULL,NULL,NULL,'0','1397819615','0','0',NULL,'1','0','1','0','0','0','1400000000','0','0','1','0');");
E_D("replace into `tp_moopha_article` values('14','14','avljgc1397041839','2','换掉','',NULL,'','0','http://wall.wtoken.com/tpl/static/attachment/focus/default/5.gif','换掉','',NULL,NULL,NULL,'0','1397819615','0','0',NULL,'1','0','1','0','0','0','1400000000','0','0','1','0');");
E_D("replace into `tp_moopha_article` values('15','20','','3','SD方式答复','','SD方式答复','?m=site&c=home&a=content&contentid=15','0','','<p>\r\n	撒地方撒发发发</p>\r\n','撒地方撒发发发','','',',','','1399697336','1399697336','0',NULL,'1','0','1','0','0','15','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('16','63','tzqawo1400308953','9','','',NULL,'','0','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','','',NULL,NULL,NULL,'0','1400486041','0','0',NULL,'1','0','1','0','0','0','1400000000','0','0','1','0');");
E_D("replace into `tp_moopha_article` values('17','72','','11','关于我们','','关于我们','?m=site&c=home&a=content&contentid=17','0','http://wzweixiang.com/cms/upload/images/2014/05/20/1400556119Zbqn.jpg','<p>\r\n	关于我们。。。。。。。。。。。。</p>\r\n','关于我们。。。。。。。。。。。。','','',',','','1400556078','1400556078','0',NULL,'1','0','1','0','0','17','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('18','77','','11','1','','1','?m=site&c=home&a=content&contentid=18','0','http://wzweixiang.com/cms/upload/images/2014/05/20/1400556201qUpE.jpg','<p>\r\n	111111111111</p>\r\n','111111111111','','',',','','1400556177','1400556177','0',NULL,'1','0','1','0','0','18','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('19','73','','11','最新动态','','最新动态','?m=site&c=home&a=content&contentid=19','1','http://wzweixiang.com/cms/upload/images/2014/05/20/1400556421KgDq.jpg','<p>\r\n	潍坊威锋网</p>\r\n<p>\r\n	&nbsp;</p>\r\n','娃儿微微','','',',最新动态','0','1400556373','1400556831','0',NULL,'1','0','1','0','0','19','1400000000','1','0','1','0');");

require("../../inc/footer.php");
?>