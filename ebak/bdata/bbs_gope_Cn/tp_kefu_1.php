<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_kefu`;");
E_C("CREATE TABLE `tp_kefu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `title` varchar(50) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `info2` varchar(200) NOT NULL,
  `text` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `sc` text NOT NULL,
  `cy` text NOT NULL,
  `lt` text NOT NULL,
  `yy` text NOT NULL,
  `hyk` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_kefu` values('1','avljgc1397041839','客服','微最强在线客服','http://wzweixiang.com/uploads/a/avljgc1397041839/6/a/0/2/thumb_53780d727e024.jpg','http://kefu6.kuaishang.com.cn/bs/im.htm?cas=10128___177444&amp;fi=10282','微最强在线客服，欢迎体验！','0','1','1','1','1','1');");
E_D("replace into `tp_kefu` values('2','nepvyy1400393099','客服','客服','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','http://kefu6.kuaishang.com.cn/bs/im.htm?cas=8953___851039&amp;fi=9269&amp;ism=1','客服客服','1','','','','','');");
E_D("replace into `tp_kefu` values('3','ozugxw1400589873','客服','客户服务','http://wzweixiang.com/tpl/static/attachment/focus/default/4.jpg','http://kefu6.kuaishang.com.cn/bs/im.htm?cas=8953___851039&amp;fi=9269&amp;ism=1','似的发生的发生的','1','','','','','');");
E_D("replace into `tp_kefu` values('4','qpyzzq1401101914','客服','客服','http://wzweixiang.com/tpl/static/attachment/icon/lovely/chalkboard.png','','客服客服','1','','','','','');");

require("../../inc/footer.php");
?>