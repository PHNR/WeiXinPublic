<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_router_config`;");
E_C("CREATE TABLE `tp_router_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `info` varchar(300) NOT NULL DEFAULT '',
  `contact_qq` varchar(12) NOT NULL DEFAULT '',
  `welcome_img` varchar(200) NOT NULL DEFAULT '',
  `other_img` varchar(200) NOT NULL DEFAULT '',
  `token` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_router_config` values('1','10101','01010','01010','01010','010','http://wzweixiang.com/uploads/a/avljgc1397041839/4/3/7/0/thumb_53744c19abbb2.jpg','http://wzweixiang.com/uploads/a/avljgc1397041839/4/0/b/9/thumb_53744bfb2e59f.jpg','avljgc1397041839');");
E_D("replace into `tp_router_config` values('2','我要上网','我要上网','http://wzweixiang.com/tpl/static/attachment/background/view/5.jpg','我要上网a','2376688151','http://wzweixiang.com/tpl/static/attachment/icon/lovely/chalkboard.png','http://wzweixiang.com/tpl/static/attachment/icon/colorful/2.png','nepvyy1400393099');");
E_D("replace into `tp_router_config` values('3','上网','我要上网我要上网我要上网','http://wzweixiang.com/uploads/o/orbhyn1400224508/3/f/7/9/thumb_537822b428e7e.jpg','回复简介回复简介回复简介','123456','http://wzweixiang.com/tpl/static/attachment/focus/default/1.gif','http://wzweixiang.com/tpl/static/attachment/focus/default/6.jpg','orbhyn1400224508');");
E_D("replace into `tp_router_config` values('4','我要上网','欢迎关注微官网','http://wzweixiang.com/tpl/static/attachment/focus/default/3.jpg','付水电费似的发的','23456654','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','http://wzweixiang.com/tpl/static/attachment/focus/default/3.jpg','ozugxw1400589873');");
E_D("replace into `tp_router_config` values('5','我要上网','我要上网我要上网','http://p1.pccoo.cn/store/20140228/201402280955117878s.jpg','我要上网我要上网我要上网我要上网','745141844','http://wx.gope.cn/tpl/static/attachment/background/view/2.jpg','http://wx.gope.cn/tpl/static/attachment/background/view/2.jpg','xkuxqy1400560689');");
E_D("replace into `tp_router_config` values('6','111','11','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','0','000','http://wzweixiang.com/tpl/static/attachment/focus/default/3.jpg','http://wzweixiang.com/tpl/static/attachment/focus/default/3.jpg','xgtfui1400681463');");

require("../../inc/footer.php");
?>