<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wedding`;");
E_C("CREATE TABLE `tp_wedding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `title` varchar(150) NOT NULL,
  `picurl` varchar(150) NOT NULL,
  `openpic` varchar(200) NOT NULL,
  `coverurl` varchar(200) NOT NULL,
  `woman` varchar(30) NOT NULL,
  `man` varchar(30) NOT NULL,
  `who_first` tinyint(1) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `time` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `lng` varchar(16) NOT NULL,
  `lat` varchar(16) NOT NULL,
  `video` varchar(200) NOT NULL,
  `mp3url` varchar(200) NOT NULL,
  `passowrd` int(20) NOT NULL,
  `word` varchar(200) NOT NULL,
  `qr_code` varchar(200) NOT NULL,
  `copyrite` varchar(150) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wedding` values('1','1','avljgc1397041839','喜帖','结婚啦','http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png','新娘','新郎','1','122222','1401379200','杭州','120.209087','30.253348','http://www.w3school.com.cn/example/html5/mov_bbb.mp4','http://wzweixiang.com/tpl/static/attachment/music/default/2.mp3','123','亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.','','555555555555','1400645407');");
E_D("replace into `tp_wedding` values('2','0','nepvyy1400393099','喜帖','喜帖','http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png','小梅','罗罗','1','0551-6347422','1388505600','海口','110.344687','20.031128','','','123456','亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.','','0551-63474223','1400727907');");
E_D("replace into `tp_wedding` values('3','0','tzqawo1400308953','df','sdfs','http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png','df','sdfs','1','sdfs','1401292800','dfsdf','','','','','0','亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.','','','1401375646');");

require("../../inc/footer.php");
?>