<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_catemenu`;");
E_C("CREATE TABLE `tp_catemenu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `name` varchar(120) NOT NULL,
  `orderss` varchar(10) NOT NULL DEFAULT '0',
  `picurl` varchar(120) NOT NULL,
  `url` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `RadioGroup1` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `tp_catemenu` values('1','0','kecjmg1397032997','官网','0','http://138.wtoken.com/tpl/User/default/common/images/photo/plugmenu4.png','','1','0');");
E_D("replace into `tp_catemenu` values('2','0','kecjmg1397032997','介绍','0','http://138.wtoken.com/tpl/User/default/common/images/photo/plugmenu2.png','','1','0');");
E_D("replace into `tp_catemenu` values('3','0','kecjmg1397032997','活动','0','http://138.wtoken.com/tpl/User/default/common/images/photo/plugmenu11.png','','1','0');");
E_D("replace into `tp_catemenu` values('4','0','kecjmg1397032997','工具','0','http://138.wtoken.com/tpl/User/default/common/images/photo/plugmenu14.png','','1','0');");
E_D("replace into `tp_catemenu` values('5','0','avljgc1397041839','张三去','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu1.png','http://api.map.baidu.com/marker?location=73.991141,11.03047&amp;title=侧事故&amp;name=侧事故&amp;content=浙江温州&amp;output=html&amp;src=weiba|weiweb','1','0');");
E_D("replace into `tp_catemenu` values('6','0','avljgc1397041839','dsad ','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu13.png','{siteUrl}/index.php?g=Wap&amp;m=Repast&amp;a=index&amp;token=avljgc1397041839&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `tp_catemenu` values('11','0','orbhyn1400224508','首页','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu6.png','','1','0');");
E_D("replace into `tp_catemenu` values('10','0','avljgc1397041839','321123','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu17.png','','1','0');");
E_D("replace into `tp_catemenu` values('19','5','avljgc1397041839','11','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu4.png','','1','0');");
E_D("replace into `tp_catemenu` values('12','0','orbhyn1400224508','电话','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:13888888888','1','0');");
E_D("replace into `tp_catemenu` values('13','0','orbhyn1400224508','相册','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu7.png','{siteUrl}/index.php?g=Wap&amp;m=Photo&amp;a=index&amp;token=orbhyn1400224508&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `tp_catemenu` values('14','0','nepvyy1400393099','首页','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu6.png','{siteUrl}/index.php?g=Wap&amp;m=Index&amp;a=index&amp;token=nepvyy1400393099&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `tp_catemenu` values('15','0','nepvyy1400393099','电话','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:13888888888','1','0');");
E_D("replace into `tp_catemenu` values('16','0','nepvyy1400393099','地址','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu3.png','http://api.map.baidu.com/marker?location=20.051775,110.352736&amp;title=订餐&amp;name=订餐&amp;content=海南海口&amp;output=html&amp;src=weiba|weiweb','1','0');");
E_D("replace into `tp_catemenu` values('17','0','nepvyy1400393099','相册','0','http://wzweixiang.com/tpl/User/default/common/images/photo/plugmenu7.png','{siteUrl}/index.php?g=Wap&amp;m=Photo&amp;a=index&amp;token=nepvyy1400393099&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `tp_catemenu` values('18','0','orbhyn1400224508','测试','0','http://www.wzweixiang.com/tpl/User/default/common/images/photo/plugmenu9.png','{siteUrl}/index.php?g=Wap&amp;m=Store&amp;a=index&amp;token=orbhyn1400224508&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `tp_catemenu` values('20','0','ozugxw1400589873','aaa','0','','','1','0');");
E_D("replace into `tp_catemenu` values('21','0','tzqawo1400308953','版权所有','0','','','1','0');");
E_D("replace into `tp_catemenu` values('22','0','tzqawo1400308953','版权所有','0','','','1','0');");
E_D("replace into `tp_catemenu` values('23','0','tzqawo1400308953','版权所有','0','','','1','0');");
E_D("replace into `tp_catemenu` values('24','0','tzqawo1400308953','版权所有','0','','','1','0');");
E_D("replace into `tp_catemenu` values('25','21','tzqawo1400308953','徐志斌','0','http://wzweixiang.com/tpl/static/attachment/icon/lvse/103.png','http://3g.39.net/sex','1','0');");
E_D("replace into `tp_catemenu` values('26','21','tzqawo1400308953','风格化','0','http://wzweixiang.com/tpl/static/attachment/icon/lvse/114.png','{siteUrl}/index.php?g=Wap&amp;m=Groupon&amp;a=grouponIndex&amp;token=tzqawo1400308953&amp;wecha_id={wechat_id}','1','0');");

require("../../inc/footer.php");
?>