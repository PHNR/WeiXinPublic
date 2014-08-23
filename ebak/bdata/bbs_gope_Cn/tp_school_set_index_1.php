<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_school_set_index`;");
E_C("CREATE TABLE `tp_school_set_index` (
  `setid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `head_url` varchar(200) NOT NULL,
  `info` varchar(100) NOT NULL,
  `album_id` int(11) NOT NULL,
  `musicurl` varchar(200) NOT NULL DEFAULT '',
  `menu1` varchar(50) NOT NULL,
  `menu1_id` int(11) NOT NULL,
  `menu2` char(15) NOT NULL,
  `menu3` char(15) NOT NULL,
  `menu4` char(15) NOT NULL,
  `menu5` char(15) NOT NULL,
  `menu6` char(15) NOT NULL,
  `menu7` char(15) NOT NULL,
  `menu8` char(15) NOT NULL,
  `menu2_id` int(11) NOT NULL,
  `menu3_id` int(11) NOT NULL,
  `menu4_id` int(11) NOT NULL,
  `menu5_id` int(11) NOT NULL,
  `menu6_id` int(11) NOT NULL,
  PRIMARY KEY (`setid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_school_set_index` values('1','avljgc1397041839','教育','萨达萨达达撒','http://wzweixiang.com/uploads/a/avljgc1397041839/4/3/7/0/thumb_53744c19abbb2.jpg','萨达萨达说法十分感动大哥大哥梵蒂冈','0','http://mp3.weiecn.com/vd.php/17647129/weiecn.mp3','学校环境','81','教师风采','同学天地','课程介绍','食谱安排','校内新闻','成绩查询','家长建议','0','70','80','0','0');");
E_D("replace into `tp_school_set_index` values('2','nepvyy1400393099','学校','学校学校 微学校','http://wzweixiang.com/tpl/static/attachment/background/bj/1.jpg','学校 微学校学校 微学校学校 微学校学校 微学校学校 微学校','3','http://mp3.weiecn.com/vd.php/17647129/weiecn.mp3','学校环境','79','教师风采','同学天地','课程介绍','食谱安排','校内新闻','成绩查询','家长建议','0','77','92','0','78');");
E_D("replace into `tp_school_set_index` values('3','tzqawo1400308953','教育','撒地方舒服地方','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','上的发生的地方飞发给发给付哥哥','0','http://mp3.weiecn.com/vd.php/17647129/weiecn.mp3','学校环境','136','教师风采','同学天地','课程介绍','食谱安排','校内新闻','成绩查询','家长建议','0','139','142','0','141');");

require("../../inc/footer.php");
?>