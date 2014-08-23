<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_moopha_channel`;");
E_C("CREATE TABLE `tp_moopha_channel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `shortname` varchar(50) NOT NULL DEFAULT '',
  `isnav` tinyint(1) NOT NULL DEFAULT '1',
  `channeltype` tinyint(1) NOT NULL DEFAULT '1',
  `cindex` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(200) NOT NULL,
  `externallink` tinyint(1) NOT NULL DEFAULT '0',
  `des` mediumtext NOT NULL,
  `thumb` varchar(100) DEFAULT NULL,
  `metatitle` varchar(100) DEFAULT NULL,
  `metakeyword` varchar(100) DEFAULT NULL,
  `metades` varchar(200) DEFAULT NULL,
  `thumbwidth` int(4) NOT NULL,
  `thumbheight` int(4) NOT NULL,
  `thumb2width` mediumint(4) NOT NULL DEFAULT '0',
  `thumb2height` mediumint(4) NOT NULL DEFAULT '0',
  `thumb3width` mediumint(4) NOT NULL DEFAULT '0',
  `thumb3height` mediumint(4) NOT NULL DEFAULT '0',
  `thumb4width` mediumint(4) NOT NULL DEFAULT '0',
  `thumb4height` mediumint(4) NOT NULL DEFAULT '0',
  `parentid` int(10) NOT NULL DEFAULT '0',
  `channeltemplate` int(10) DEFAULT '1',
  `contenttemplate` int(10) DEFAULT '1',
  `autotype` varchar(10) NOT NULL DEFAULT '',
  `ex` tinyint(1) NOT NULL DEFAULT '0',
  `iscity` tinyint(1) NOT NULL DEFAULT '0',
  `site` int(4) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  `lastcreate` int(10) NOT NULL DEFAULT '1400000000',
  `pagesize` smallint(3) NOT NULL DEFAULT '30',
  `specialid` mediumint(4) NOT NULL DEFAULT '0',
  `homepicturechannel` tinyint(1) NOT NULL DEFAULT '0',
  `hometextchannel` tinyint(1) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`),
  KEY `site` (`site`),
  KEY `taxis` (`taxis`),
  KEY `time` (`time`),
  KEY `specialid` (`specialid`),
  KEY `token` (`token`),
  KEY `isnav` (`isnav`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8");
E_D("replace into `tp_moopha_channel` values('1','首页','首页','0','1','homepage','pvosmg1397034660','?m=site&c=home&a=channel&channelid=1','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','9','11','','0','0','1','0','1400000000','30','0','0','0','1397034873');");
E_D("replace into `tp_moopha_channel` values('2','首页','简介','1','1','aboutus','pvosmg1397034660','{siteUrl}/index.php?g=Wap&m=Index&a=lists&token=pvosmg1397034660&wecha_id={wechat_id}&classid=9','1','','','','','','0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1397034873');");
E_D("replace into `tp_moopha_channel` values('3','最新活动','动态','1','1','news','pvosmg1397034660','{siteUrl}/index.php?g=Wap&m=Index&a=lists&token=pvosmg1397034660&wecha_id={wechat_id}&classid=12','1','','','','','','0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1397034873');");
E_D("replace into `tp_moopha_channel` values('4','产品展示','产品','1','1','products','pvosmg1397034660','{siteUrl}/index.php?g=Wap&m=Index&a=lists&token=pvosmg1397034660&wecha_id={wechat_id}&classid=13','1','','','','','','0','0','0','0','0','0','0','0','1','10','11','','0','0','1','0','1400000000','30','0','0','0','1397034873');");
E_D("replace into `tp_moopha_channel` values('5','微商城','商城','1','1','case','pvosmg1397034660','{siteUrl}/index.php?g=Wap&m=Product&a=cats&token=pvosmg1397034660&wecha_id={wechat_id}','1','','','','','','0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1397034873');");
E_D("replace into `tp_moopha_channel` values('6','联系我们','联系','1','1','contact','pvosmg1397034660','{siteUrl}/index.php?g=Wap&m=Index&a=content&token=pvosmg1397034660&wecha_id={wechat_id}&id=12','1','','','','','','0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1397034873');");
E_D("replace into `tp_moopha_channel` values('7','幻灯片','幻灯片','0','1','focus','pvosmg1397034660','?m=site&c=home&a=channel&channelid=7','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1397034873');");
E_D("replace into `tp_moopha_channel` values('8','首页','首页','0','1','homepage','avljgc1397041839','?m=site&c=home&a=channel&channelid=8','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','142','144','','0','0','2','0','1400000000','30','0','0','0','1397819615');");
E_D("replace into `tp_moopha_channel` values('9','关于我们','简介','1','1','aboutus','avljgc1397041839','?m=site&c=home&a=channel&channelid=9','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','142','144','','0','0','2','0','1400000000','30','0','0','0','1397819615');");
E_D("replace into `tp_moopha_channel` values('10','最新动态','动态','1','1','news','avljgc1397041839','?m=site&c=home&a=channel&channelid=10','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','142','144','','0','0','2','0','1400000000','30','0','0','0','1397819615');");
E_D("replace into `tp_moopha_channel` values('11','产品展示','产品','1','1','products','avljgc1397041839','?m=site&c=home&a=channel&channelid=11','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','143','144','','0','0','2','0','1400000000','30','0','0','0','1397819615');");
E_D("replace into `tp_moopha_channel` values('12','精彩案例','案例','1','1','case','avljgc1397041839','?m=site&c=home&a=channel&channelid=12','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','142','144','','0','0','2','0','1400000000','30','0','0','0','1397819615');");
E_D("replace into `tp_moopha_channel` values('13','联系我们','联系','1','1','contact','avljgc1397041839','?m=site&c=home&a=channel&channelid=13','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','142','144','','0','0','2','0','1400000000','30','0','0','0','1397819615');");
E_D("replace into `tp_moopha_channel` values('14','幻灯片','幻灯片','0','1','focus','avljgc1397041839','?m=site&c=home&a=channel&channelid=14','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','142','144','','0','0','2','0','1400000000','30','0','0','0','1397819615');");
E_D("replace into `tp_moopha_channel` values('15','首页','首页','0','1','homepage','qtjnws1397994896','?m=site&c=home&a=channel&channelid=15','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','86','88','','0','0','3','0','1400000000','30','0','0','0','1399689977');");
E_D("replace into `tp_moopha_channel` values('16','关于我们','简介','1','1','aboutus','qtjnws1397994896','?m=site&c=home&a=channel&channelid=16','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','15','86','88','','0','0','3','0','1400000000','30','0','0','0','1399689977');");
E_D("replace into `tp_moopha_channel` values('17','最新动态','动态','1','1','news','qtjnws1397994896','?m=site&c=home&a=channel&channelid=17','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','15','86','88','','0','0','3','0','1400000000','30','0','0','0','1399689977');");
E_D("replace into `tp_moopha_channel` values('18','产品展示','产品','1','1','products','qtjnws1397994896','?m=site&c=home&a=channel&channelid=18','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','15','87','88','','0','0','3','0','1400000000','30','0','0','0','1399689977');");
E_D("replace into `tp_moopha_channel` values('19','精彩案例','案例','1','1','case','qtjnws1397994896','?m=site&c=home&a=channel&channelid=19','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','15','86','88','','0','0','3','0','1400000000','30','0','0','0','1399689977');");
E_D("replace into `tp_moopha_channel` values('20','联系我们','联系','1','1','contact','qtjnws1397994896','?m=site&c=home&a=channel&channelid=20','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','15','86','88','','0','0','3','0','1400000000','30','0','0','0','1399689977');");
E_D("replace into `tp_moopha_channel` values('21','幻灯片','幻灯片','0','1','focus','qtjnws1397994896','?m=site&c=home&a=channel&channelid=21','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','15','86','88','','0','0','3','0','1400000000','30','0','0','0','1399689977');");
E_D("replace into `tp_moopha_channel` values('22','首页','首页','0','1','homepage','isouej1399863564','?m=site&c=home&a=channel&channelid=22','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','149','151','','0','0','4','0','1400000000','30','0','0','0','1399866998');");
E_D("replace into `tp_moopha_channel` values('23','关于我们','简介','1','1','aboutus','isouej1399863564','?m=site&c=home&a=channel&channelid=23','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','22','149','151','','0','0','4','0','1400000000','30','0','0','0','1399866998');");
E_D("replace into `tp_moopha_channel` values('24','最新动态','动态','1','1','news','isouej1399863564','?m=site&c=home&a=channel&channelid=24','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','22','149','151','','0','0','4','0','1400000000','30','0','0','0','1399866998');");
E_D("replace into `tp_moopha_channel` values('25','产品展示','产品','1','1','products','isouej1399863564','?m=site&c=home&a=channel&channelid=25','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','22','150','151','','0','0','4','0','1400000000','30','0','0','0','1399866998');");
E_D("replace into `tp_moopha_channel` values('26','精彩案例','案例','1','1','case','isouej1399863564','?m=site&c=home&a=channel&channelid=26','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','22','149','151','','0','0','4','0','1400000000','30','0','0','0','1399866998');");
E_D("replace into `tp_moopha_channel` values('27','联系我们','联系','1','1','contact','isouej1399863564','?m=site&c=home&a=channel&channelid=27','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','22','149','151','','0','0','4','0','1400000000','30','0','0','0','1399866998');");
E_D("replace into `tp_moopha_channel` values('28','幻灯片','幻灯片','0','1','focus','isouej1399863564','?m=site&c=home&a=channel&channelid=28','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','22','149','151','','0','0','4','0','1400000000','30','0','0','0','1399866998');");
E_D("replace into `tp_moopha_channel` values('29','首页','首页','0','1','homepage','uvvgud1399869420','','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','1','1','','0','0','5','0','1400000000','30','0','0','0','1399869643');");
E_D("replace into `tp_moopha_channel` values('30','关于我们','简介','1','1','aboutus','uvvgud1399869420','/','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','29','1','1','','0','0','5','0','1400000000','30','0','0','0','1399869643');");
E_D("replace into `tp_moopha_channel` values('31','最新动态','动态','1','1','news','uvvgud1399869420','/','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','29','1','1','','0','0','5','0','1400000000','30','0','0','0','1399869643');");
E_D("replace into `tp_moopha_channel` values('32','产品展示','产品','1','1','products','uvvgud1399869420','/','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','29','1','1','','0','0','5','0','1400000000','30','0','0','0','1399869643');");
E_D("replace into `tp_moopha_channel` values('33','精彩案例','案例','1','1','case','uvvgud1399869420','/','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','29','1','1','','0','0','5','0','1400000000','30','0','0','0','1399869643');");
E_D("replace into `tp_moopha_channel` values('34','联系我们','联系','1','1','contact','uvvgud1399869420','/','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','29','1','1','','0','0','5','0','1400000000','30','0','0','0','1399869643');");
E_D("replace into `tp_moopha_channel` values('35','幻灯片','幻灯片','0','1','focus','uvvgud1399869420','/','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','29','1','1','','0','0','5','0','1400000000','30','0','0','0','1399869643');");
E_D("replace into `tp_moopha_channel` values('36','首页','首页','0','1','homepage','rirjgb1400124807','?m=site&c=home&a=channel&channelid=36','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','156','158','','0','0','6','0','1400000000','30','0','0','0','1400138433');");
E_D("replace into `tp_moopha_channel` values('37','关于我们','简介','1','1','aboutus','rirjgb1400124807','?m=site&c=home&a=channel&channelid=37','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','36','156','158','','0','0','6','0','1400000000','30','0','0','0','1400138433');");
E_D("replace into `tp_moopha_channel` values('38','最新动态','动态','1','1','news','rirjgb1400124807','?m=site&c=home&a=channel&channelid=38','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','36','156','158','','0','0','6','0','1400000000','30','0','0','0','1400138433');");
E_D("replace into `tp_moopha_channel` values('39','产品展示','产品','1','1','products','rirjgb1400124807','?m=site&c=home&a=channel&channelid=39','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','36','157','158','','0','0','6','0','1400000000','30','0','0','0','1400138433');");
E_D("replace into `tp_moopha_channel` values('40','精彩案例','案例','1','1','case','rirjgb1400124807','?m=site&c=home&a=channel&channelid=40','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','36','156','158','','0','0','6','0','1400000000','30','0','0','0','1400138433');");
E_D("replace into `tp_moopha_channel` values('41','联系我们','联系','1','1','contact','rirjgb1400124807','?m=site&c=home&a=channel&channelid=41','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','36','156','158','','0','0','6','0','1400000000','30','0','0','0','1400138433');");
E_D("replace into `tp_moopha_channel` values('42','幻灯片','幻灯片','0','1','focus','rirjgb1400124807','?m=site&c=home&a=channel&channelid=42','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','36','156','158','','0','0','6','0','1400000000','30','0','0','0','1400138433');");
E_D("replace into `tp_moopha_channel` values('43','首页','首页','0','1','homepage','orbhyn1400224508','?m=site&c=home&a=channel&channelid=43','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','212','214','','0','0','7','0','1400000000','30','0','0','0','1400258166');");
E_D("replace into `tp_moopha_channel` values('44','关于我们','简介','1','1','aboutus','orbhyn1400224508','?m=site&c=home&a=channel&channelid=44','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','43','212','214','','0','0','7','0','1400000000','30','0','0','0','1400258166');");
E_D("replace into `tp_moopha_channel` values('45','最新动态','动态','1','1','news','orbhyn1400224508','?m=site&c=home&a=channel&channelid=45','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','43','212','214','','0','0','7','0','1400000000','30','0','0','0','1400258166');");
E_D("replace into `tp_moopha_channel` values('46','产品展示','产品','1','1','products','orbhyn1400224508','?m=site&c=home&a=channel&channelid=46','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','43','213','214','','0','0','7','0','1400000000','30','0','0','0','1400258166');");
E_D("replace into `tp_moopha_channel` values('47','精彩案例','案例','1','1','case','orbhyn1400224508','?m=site&c=home&a=channel&channelid=47','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','43','212','214','','0','0','7','0','1400000000','30','0','0','0','1400258166');");
E_D("replace into `tp_moopha_channel` values('48','联系我们','联系','1','1','contact','orbhyn1400224508','?m=site&c=home&a=channel&channelid=48','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','43','212','214','','0','0','7','0','1400000000','30','0','0','0','1400258166');");
E_D("replace into `tp_moopha_channel` values('49','幻灯片','幻灯片','0','1','focus','orbhyn1400224508','?m=site&c=home&a=channel&channelid=49','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','43','212','214','','0','0','7','0','1400000000','30','0','0','0','1400258166');");
E_D("replace into `tp_moopha_channel` values('50','首页','首页','0','1','homepage','nepvyy1400393099','?m=site&c=home&a=channel&channelid=50','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','170','172','','0','0','8','0','1400000000','30','0','0','0','1400431402');");
E_D("replace into `tp_moopha_channel` values('51','关于我们','简介','1','1','aboutus','nepvyy1400393099','?m=site&c=home&a=channel&channelid=51','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','50','170','172','','0','0','8','0','1400000000','30','0','0','0','1400431402');");
E_D("replace into `tp_moopha_channel` values('52','最新动态','动态','1','1','news','nepvyy1400393099','?m=site&c=home&a=channel&channelid=52','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','50','170','172','','0','0','8','0','1400000000','30','0','0','0','1400431402');");
E_D("replace into `tp_moopha_channel` values('53','产品展示','产品','1','1','products','nepvyy1400393099','?m=site&c=home&a=channel&channelid=53','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','50','171','172','','0','0','8','0','1400000000','30','0','0','0','1400431402');");
E_D("replace into `tp_moopha_channel` values('54','精彩案例','案例','1','1','case','nepvyy1400393099','?m=site&c=home&a=channel&channelid=54','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','50','170','172','','0','0','8','0','1400000000','30','0','0','0','1400431402');");
E_D("replace into `tp_moopha_channel` values('55','联系我们','联系','1','1','contact','nepvyy1400393099','?m=site&c=home&a=channel&channelid=55','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','50','170','172','','0','0','8','0','1400000000','30','0','0','0','1400431402');");
E_D("replace into `tp_moopha_channel` values('56','幻灯片','幻灯片','0','1','focus','nepvyy1400393099','?m=site&c=home&a=channel&channelid=56','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','50','170','172','','0','0','8','0','1400000000','30','0','0','0','1400431402');");
E_D("replace into `tp_moopha_channel` values('57','首页','首页','0','1','homepage','tzqawo1400308953','?m=site&c=home&a=channel&channelid=57','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','226','228','','0','0','9','0','1400000000','30','0','0','0','1400486041');");
E_D("replace into `tp_moopha_channel` values('58','关于我们','简介','1','1','aboutus','tzqawo1400308953','?m=site&c=home&a=channel&channelid=58','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','57','226','228','','0','0','9','0','1400000000','30','0','0','0','1400486041');");
E_D("replace into `tp_moopha_channel` values('59','最新动态','动态','1','1','news','tzqawo1400308953','?m=site&c=home&a=channel&channelid=59','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','57','226','228','','0','0','9','0','1400000000','30','0','0','0','1400486041');");
E_D("replace into `tp_moopha_channel` values('60','产品展示','产品','1','1','products','tzqawo1400308953','?m=site&c=home&a=channel&channelid=60','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','57','227','228','','0','0','9','0','1400000000','30','0','0','0','1400486041');");
E_D("replace into `tp_moopha_channel` values('61','精彩案例','案例','1','1','case','tzqawo1400308953','?m=site&c=home&a=channel&channelid=61','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','57','226','228','','0','0','9','0','1400000000','30','0','0','0','1400486041');");
E_D("replace into `tp_moopha_channel` values('62','联系我们','联系','1','1','contact','tzqawo1400308953','?m=site&c=home&a=channel&channelid=62','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','57','226','228','','0','0','9','0','1400000000','30','0','0','0','1400486041');");
E_D("replace into `tp_moopha_channel` values('63','幻灯片','幻灯片','0','1','focus','tzqawo1400308953','?m=site&c=home&a=channel&channelid=63','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','57','226','228','','0','0','9','0','1400000000','30','0','0','0','1400486041');");
E_D("replace into `tp_moopha_channel` values('64','首页','首页','0','1','homepage','reiesr1400475948','?m=site&c=home&a=channel&channelid=64','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','184','186','','0','0','10','0','1400000000','30','0','0','0','1400508558');");
E_D("replace into `tp_moopha_channel` values('65','关于我们','简介','1','1','aboutus','reiesr1400475948','?m=site&c=home&a=channel&channelid=65','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','64','184','186','','0','0','10','0','1400000000','30','0','0','0','1400508558');");
E_D("replace into `tp_moopha_channel` values('66','最新动态','动态','1','1','news','reiesr1400475948','?m=site&c=home&a=channel&channelid=66','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','64','184','186','','0','0','10','0','1400000000','30','0','0','0','1400508558');");
E_D("replace into `tp_moopha_channel` values('67','产品展示','产品','1','1','products','reiesr1400475948','?m=site&c=home&a=channel&channelid=67','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','64','185','186','','0','0','10','0','1400000000','30','0','0','0','1400508558');");
E_D("replace into `tp_moopha_channel` values('68','精彩案例','案例','1','1','case','reiesr1400475948','?m=site&c=home&a=channel&channelid=68','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','64','184','186','','0','0','10','0','1400000000','30','0','0','0','1400508558');");
E_D("replace into `tp_moopha_channel` values('69','联系我们','联系','1','1','contact','reiesr1400475948','?m=site&c=home&a=channel&channelid=69','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','64','184','186','','0','0','10','0','1400000000','30','0','0','0','1400508558');");
E_D("replace into `tp_moopha_channel` values('70','幻灯片','幻灯片','0','1','focus','reiesr1400475948','?m=site&c=home&a=channel&channelid=70','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','64','184','186','','0','0','10','0','1400000000','30','0','0','0','1400508558');");
E_D("replace into `tp_moopha_channel` values('71','首页','首页','0','1','homepage','hziflr1400551929','?m=site&c=home&a=channel&channelid=71','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','219','221','','0','0','11','0','1400000000','30','0','0','0','1400556015');");
E_D("replace into `tp_moopha_channel` values('72','关于我们','简介','1','1','aboutus','hziflr1400551929','?m=site&c=home&a=channel&channelid=72','0','','','','','','0','0','0','0','0','0','0','0','71','219','221','','0','0','11','0','1400000000','30','0','1','1','1400556015');");
E_D("replace into `tp_moopha_channel` values('73','最新动态','动态','1','1','news','hziflr1400551929','?m=site&c=home&a=channel&channelid=73','0','','','','','','0','0','0','0','0','0','0','0','71','219','221','','0','0','11','1','1400000000','30','0','0','0','1400556015');");
E_D("replace into `tp_moopha_channel` values('74','产品展示','产品','1','1','products','hziflr1400551929','?m=site&c=home&a=channel&channelid=74','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','71','220','221','','0','0','11','2','1400000000','30','0','0','0','1400556015');");
E_D("replace into `tp_moopha_channel` values('75','精彩案例','案例','1','1','case','hziflr1400551929','?m=site&c=home&a=channel&channelid=75','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','71','219','221','','0','0','11','3','1400000000','30','0','0','0','1400556015');");
E_D("replace into `tp_moopha_channel` values('76','联系我们','联系','1','1','contact','hziflr1400551929','?m=site&c=home&a=channel&channelid=76','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','71','219','221','','0','0','11','4','1400000000','30','0','0','0','1400556015');");
E_D("replace into `tp_moopha_channel` values('77','幻灯片','幻灯片','0','1','focus','hziflr1400551929','?m=site&c=home&a=channel&channelid=77','0','','','','','','200','400','0','0','0','0','0','0','71','219','221','','0','0','11','5','1400000000','30','0','0','0','1400556015');");

require("../../inc/footer.php");
?>