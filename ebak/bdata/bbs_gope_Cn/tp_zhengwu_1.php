<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_zhengwu`;");
E_C("CREATE TABLE `tp_zhengwu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(31) NOT NULL,
  `title` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `toppicurl` varchar(200) NOT NULL,
  `roompicurl` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  `contentt` varchar(2000) NOT NULL,
  `xmcontent` varchar(2000) NOT NULL,
  `jtcontent` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `tp_zhengwu` values('1','avljgc1397041839','微政务','微政务','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/1/thumb_5347cb522890f.jpg','微政务相册','http://wall.wtoken.com/uploads/a/avljgc1397041839/2/9/7/a/thumb_5347cb1ab1cb3.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/2/9/7/a/thumb_5347cb1ab1cb3.jpg','浙江温州','28.002391','120.690599','微政务部门简介','&lt;span&gt;微政务项目简介&lt;/span&gt;','&lt;span&gt;微政务交通简介&lt;/span&gt;');");

require("../../inc/footer.php");
?>