<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_img`;");
E_C("CREATE TABLE `tp_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `keyword` char(255) NOT NULL,
  `type` varchar(1) NOT NULL COMMENT '关键词匹配类型',
  `text` text NOT NULL COMMENT '简介',
  `classid` int(11) NOT NULL,
  `sorts` int(11) NOT NULL,
  `classname` varchar(60) NOT NULL,
  `pic` char(255) NOT NULL COMMENT '封面图片',
  `showpic` varchar(1) NOT NULL COMMENT '图片是否显示封面',
  `info` text NOT NULL COMMENT '图文详细内容',
  `url` char(255) NOT NULL COMMENT '图文外链地址',
  `createtime` varchar(13) NOT NULL,
  `uptatetime` varchar(13) NOT NULL,
  `click` int(11) NOT NULL,
  `token` char(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `usort` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COMMENT='微信图文'");
E_D("replace into `tp_img` values('1','2','微享服务','测试图文','2','测试图文测试图文测试图文','1','0','测试','http://138.wtoken.com/tpl/static/attachment/focus/default/2.jpg','1','测试图文测试图文测试图文','','1397033175','1397033175','6','kecjmg1397032997','测试图文','0');");
E_D("replace into `tp_img` values('2','1','康视眼镜','公司简介','2','温州康视眼镜有限公司专业服务始于1987年，是集零售与批发为一体的眼镜连锁企业。','9','0','公司简介','http://zgweixiang.com/uploads/p/pvosmg1397034660/7/5/1/2/thumb_53466daec3011.jpg','1','&lt;span style=&quot;background-color:#f0efef;color:#222222;&quot;&gt;温州康视眼镜有限公司专业服务始于1987年，是集零售与批发为一体的眼镜连锁企业。企业实施现代化品牌化、规范化的连锁经营，是温州地区眼镜零售行业规模最大的连锁企业之一。公司经浙江省眼镜质量监督局对经销产品质量保证体系、质量管理系、配镜体系、人员素质、产品进货渠道进行技术监督和全面技术考核后，被评为“浙江省配镜质量示范店”，是温州地区第一家也是唯一一家获此殊荣的公司，同时还荣获“温州市第二届执行物价计量政策法规优秀单位”、“浙江市场服务质量信得过单位”“温州市配镜质量店”及“全省配镜比赛温州地区第一名”等荣誉。&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;background-color:#f0efef;color:#222222;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;公司拥有十余套世界一流的验光设备和二十位眼镜专业技术人员，其中包括温州市唯一一位国家级高级验光师黄良驹先生以及毕业于温州医学院和天津医学科大学的验光师。公司不仅是国内外两百多个世界品牌、两千余种眼镜产品的零售商，同时还是博士伦、视康、强生、费士康等隐形眼镜品牌温州地区的总经销商，和许多世界知名品牌形成良好的合作伙伴关系。&lt;/span&gt;','','1397124530','1397124530','7','pvosmg1397034660','公司简介','0');");
E_D("replace into `tp_img` values('3','1','康视眼镜','门店风貌','2','温州康视眼镜门店风貌','9','0','公司简介','http://zgweixiang.com/uploads/p/pvosmg1397034660/b/7/d/6/thumb_53466de88c23b.jpg','1','&lt;div style=&quot;background-color:#f0efef;margin:0px;color:#222222;&quot; class=&quot;showpic&quot;&gt;\r\n	&lt;img style=&quot;width:621px;&quot; src=&quot;http://wtoken.com/uploads/c/cbkujb1395224711/8/f/8/2/thumb_532aa4208dd3d.jpg&quot; /&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;background-color:#f0efef;margin:15px 0px;color:#222222;&quot; id=&quot;content&quot; class=&quot;text&quot;&gt;\r\n	&amp;nbsp;&lt;a href=&quot;http://wtoken.com/index.php?g=Wap&amp;amp;m=Company&amp;amp;a=map&amp;amp;token=cbkujb1395224711&quot; target=&quot;_blank&quot;&gt;地址：温州市人民东路267号东联大厦（开太百货对面）&lt;img style=&quot;width:613px;height:445px;&quot; border=&quot;0&quot; src=&quot;http://www.ksglasses.com/upfile/20130724121133133.jpg&quot; width=&quot;640&quot; height=&quot;479&quot; /&gt;&lt;/a&gt;&amp;nbsp;&lt;a href=&quot;http://wtoken.com/index.php?g=Wap&amp;amp;m=Company&amp;amp;a=map&amp;amp;companyid=12&amp;amp;token=cbkujb1395224711&quot; target=&quot;_blank&quot;&gt;&amp;nbsp;地址：温州市公园路150号宏德大楼一层（温州图书城一楼）&lt;img border=&quot;0&quot; src=&quot;http://www.ksglasses.com/admin/UploadFile/2008122595051518.jpg&quot; /&gt;&lt;/a&gt;&amp;nbsp;&lt;a href=&quot;http://wtoken.com/index.php?g=Wap&amp;amp;m=Company&amp;amp;a=map&amp;amp;companyid=12&amp;amp;token=cbkujb1395224711&quot; target=&quot;_blank&quot;&gt;&amp;nbsp;&amp;nbsp;地址：温州市公园路181号（五马街口）&lt;img border=&quot;0&quot; src=&quot;http://www.ksglasses.com/admin/UploadFile/200812259518470.jpg&quot; /&gt;&lt;/a&gt;&amp;nbsp;&amp;nbsp;&lt;a href=&quot;http://wtoken.com/index.php?g=Wap&amp;amp;m=Company&amp;amp;a=map&amp;amp;companyid=12&amp;amp;token=cbkujb1395224711&quot; target=&quot;_blank&quot;&gt;&amp;nbsp;地址：温州市鹿城路57号（妙果寺斜对面）&lt;/a&gt; \r\n	&lt;p style=&quot;font-size:14px;&quot; align=&quot;left&quot;&gt;\r\n		&lt;a href=&quot;http://wtoken.com/index.php?g=Wap&amp;amp;m=Company&amp;amp;a=map&amp;amp;companyid=12&amp;amp;token=cbkujb1395224711&quot; target=&quot;_blank&quot;&gt;&lt;img border=&quot;0&quot; src=&quot;http://www.ksglasses.com/admin/UploadFile/2008122595128122.jpg&quot; /&gt;&lt;/a&gt;\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;font-size:14px;&quot;&gt;\r\n		&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;text-align:left;font-size:14px;&quot; align=&quot;left&quot;&gt;\r\n		康视眼镜公司连锁分店：\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;text-align:left;font-size:14px;&quot; align=&quot;left&quot;&gt;\r\n		总店：人民东路267号东联大厦一楼（开太百货对面）&amp;nbsp;&amp;nbsp;&amp;nbsp;电话：88821689\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;text-align:left;font-size:14px;&quot; align=&quot;left&quot;&gt;\r\n		旗舰店：公园路150号宏德大楼一层（温州书城一楼）&amp;nbsp;&amp;nbsp;&amp;nbsp;电话：88229738\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;text-align:left;font-size:14px;&quot; align=&quot;left&quot;&gt;\r\n		公园路点：公园路181号（五马街口）&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;text-align:left;font-size:14px;&quot; align=&quot;left&quot;&gt;\r\n		&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;电话：88821666\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;text-align:left;font-size:14px;&quot; align=&quot;left&quot;&gt;\r\n		清明桥点：鹿城路57号（妙果寺斜对面）&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;text-align:left;font-size:14px;&quot; align=&quot;left&quot;&gt;\r\n		&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;电话：88532996\r\n	&lt;/p&gt;\r\n	&lt;p style=&quot;text-align:left;font-size:14px;&quot; align=&quot;left&quot;&gt;\r\n		&lt;img border=&quot;0&quot; alt=&quot;&quot; src=&quot;http://www.wtoken.com/tpl/static/kindeditor/plugins/emoticons/images/65.gif&quot; /&gt;&lt;img border=&quot;0&quot; alt=&quot;&quot; src=&quot;http://www.wtoken.com/tpl/static/kindeditor/plugins/emoticons/images/65.gif&quot; /&gt;服务专线：400-820-0870（专业服务始于1987年）\r\n	&lt;/p&gt;\r\n&lt;/div&gt;','','1397124601','1397124601','3','pvosmg1397034660','门店风貌','0');");
E_D("replace into `tp_img` values('4','1','康视眼镜','企业荣誉','2','温州康视眼镜企业荣誉','9','0','公司简介','http://zgweixiang.com/uploads/p/pvosmg1397034660/a/f/e/1/thumb_53466e2413098.jpg','1','&lt;span style=&quot;background-color:#f0efef;color:#222222;&quot;&gt;公司经浙江省眼镜质量监督局对经销产品质量保证体系、质量管理系、配镜体系、人员素质、产品进货渠道进行技术监督和全面技术考核后，被评为“浙江省配镜质量示范店”，是温州地区第一家也是唯一一家获此殊荣的公司家获此殊荣的公司，同时还荣获“温州市第二届执行物价计量政策法规优秀单位”、“浙江市场服务质量信得过单位”“温州市配镜质量店”及“全省配镜比赛温州地区第一名”等荣誉。近年来公司逐步发展,信誉日渐提升,公司在不断发展壮大的同时也不忘回报社会。公司分店开业或周年庆典从不铺张浪费，把节省下来的钱捐献赠给“希望工程”。为永嘉贫困山区鲤溪乡中学捐献二万元，为“知香港献爱心”活动捐献一万元。并给退休老人和温大贫困生以二万元的实物相助。97、98年投入大量财力、人力成功组织全市中小学免费验光普查，为广大中小学生的眼睛健康及时矫正视力作出了应有的贡献。2000年十月，市总工会和温州时报推出的“道温暖，送工种”活动中，为特困职工解决了就业问题，并为特困职工的子女捐资助学，得到媒体的赞扬。本公司以普及眼视光学知识为己任，在市教委的大力支持下，1997年我公司出资组织全市中小学“校医培训班”去千岛湖，98年去雁荡山，每次花三天时间请眼视光学专家为校医讲课、培训、使他们寓教于乐。&lt;/span&gt;&lt;img border=&quot;0&quot; src=&quot;http://www.ksglasses.com/admin/UploadFile/200881134533822.jpg&quot; /&gt;&lt;span style=&quot;background-color:#f0efef;color:#222222;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;img border=&quot;0&quot; src=&quot;http://www.ksglasses.com/admin/UploadFile/200881134543637.jpg&quot; /&gt;&lt;span style=&quot;background-color:#f0efef;color:#222222;&quot;&gt;&amp;nbsp;&lt;/span&gt;','','1397124657','1397124657','3','pvosmg1397034660','企业荣誉','0');");
E_D("replace into `tp_img` values('5','1','康视眼镜','领导致辞','2','温州康视眼镜领导致辞','9','0','公司简介','http://zgweixiang.com/uploads/p/pvosmg1397034660/2/f/7/d/thumb_53466e83d7fc2.jpg','1','&lt;p&gt;\r\n	&lt;img alt=&quot;&quot; src=&quot;/uploads/p/pvosmg1397034660/0/d/1/3/53466e965aba8.jpg&quot; /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;background-color:#f0efef;text-indent:0px;color:#222222;&quot;&gt;\r\n	尊敬的朋友：\r\n&lt;/p&gt;\r\n&lt;span style=&quot;background-color:#f0efef;color:#222222;&quot;&gt;您好！&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;background-color:#f0efef;color:#222222;&quot;&gt;我公司自1987年专业服务开始以来，已走过二十几载春秋。回顾艰辛的创业历程，我们为取得的一个又一个成绩感到欣慰，又为自己所经受的艰难挫折而感慨，但我们更为自己炼就了坚韧不拔的意志而骄傲和自豪。&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;background-color:#f0efef;color:#222222;&quot;&gt;荣誉和成就将在岁月中慢慢沉淀，我们更加注重美好的明天。经营中，我们力争作到“一流的管理、一流的形象、一流的品质、一流的服务、一流的环境”，在竞争和合作中快速发展壮大。我们应像鹰，翱翔于天空，不仅具有敏锐的眼光，而且具有冲向蓝天的雄才大略；我们应像海，团结在一起，迸发出海一样的力量；我们应像大地，敞开博大的胸怀，广揽五湖四海有才之士；我们应像空气，不显山不露水，默默地做着无尽奉献。&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;background-color:#f0efef;color:#222222;&quot;&gt;我们的企业理念是验光准确、质量保证、服务优质、诚信至上；我们的使命是品质100%，服务100%，满意100%。竭诚期待在我公司未来的发展道路上，能继续得到您的支持与帮助。为了您，我们将做得更好！&amp;nbsp;&lt;/span&gt; \r\n&lt;p&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;','','1397124763','1397124763','4','pvosmg1397034660','领导致辞','0');");
E_D("replace into `tp_img` values('6','1','康视眼镜','电脑一族用眼常保健按摩穴位','2','我们常会看到在车上、地铁甚至是走路，都会有人拿着手机看屏幕，平时每天上班面对电脑，一坐就是一整天也占绝大多数，这样已经造成眼睛的疲劳，再加上工作一天的疲惫，更是让眼睛干涩、疲劳不堪，长期下去只会让眼睛视力模糊、下降、甚至出现头晕头痛等症状。因此我们要加强保护自己的眼睛，以免对眼睛造成进一步伤害而致失明。','10','0','爱眼护眼','http://zgweixiang.com/uploads/p/pvosmg1397034660/b/4/8/f/thumb_53467801a72d9.jpg','1','&lt;p style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	我们常会看到在车上、地铁甚至是走路，都会有人拿着手机看屏幕，平时每天上班面对电脑，一坐就是一整天也占绝大多数，这样已经造成眼睛的疲劳，再加上工作一天的疲惫，更是让眼睛干涩、疲劳不堪，长期下去只会让眼睛视力模糊、下降、甚至出现头晕头痛等症状。因此我们要加强保护自己的眼睛，以免对眼睛造成进一步伤害而致失明。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　为了改善眼部疲劳、治疗眼部疾病以及有效的保护眼睛，中医上可通过辨证，取眼周穴位加以按摩。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;印堂穴&lt;/strong&gt;&amp;nbsp;位于两眉连线的中点。按摩此穴可以起到安神定惊、醒脑开窍、宁心益智、疏风止痛、通经活络的功效。按摩时将中指放在印堂穴上，用较强的力点按10次，再顺时针、逆时针揉动20~30圈即可。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;攒竹穴&lt;/strong&gt;&amp;nbsp;位于眉毛内侧边缘凹陷处。按摩此穴可迅速的缓解眼睑跳动、目视不明、目赤肿痛、迎风流泪、眼睛充血等症状。按摩时以拇指按压此穴，并顺时针、逆时针揉动20~30圈即可。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;鱼腰穴&lt;/strong&gt;&amp;nbsp;位于瞳孔直上，眉毛中间的位置。只需轻轻指压此穴20次，有镇静安神、疏风通络的功效。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;丝竹空穴&lt;/strong&gt;&amp;nbsp;位于眉梢凹陷处。轻轻指压此穴就能够有效的治疗目赤肿痛、眼睑闰动等症状。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;太阳穴&lt;/strong&gt;&amp;nbsp;鬓角前，眉梢后的最凹陷处就是太阳穴。按摩太阳穴不仅能够解除疲劳、振奋精神、止痛醒脑同时还能有效的帮助注意力集中。按摩太阳穴时最好是用手掌，将手掌搓热，贴于太阳穴，稍稍用力，顺时针、逆时针转揉10~20次。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;瞳子髎穴&lt;/strong&gt;&amp;nbsp;位于眼睛外侧一厘米处。指压此穴不仅可以促进眼部血液循环、消除眼部疲劳，还可以有效地延缓眼睑皮肤下垂、去除眼角皱纹。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;球后穴&lt;/strong&gt;&amp;nbsp;位于眼眶下缘外1/4与内3/4的交界处。指压此穴不仅清肝明目，还能促进小肠吸收，帮助消化。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;承泣穴&lt;/strong&gt;&amp;nbsp;瞳孔直下，眼球与眼眶下缘之间就是承泣穴。此穴是治疗眼疾中非常重要的穴道之一。配合其他相关穴道一同治疗近视、夜盲、老花、白内障等多种眼部疾病的效果非常明显。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;四白穴&lt;/strong&gt;&amp;nbsp;又叫美容穴，于眼眶下方的凹陷处。按揉此穴时，手指不可移动，按揉面不要太大，顺时针、逆时针揉动8圈，反复4~8次即可。此穴具有疏经活络、养眼明目的功效，按摩此穴可以缓解眼部疲劳、眼花、黑眼圈等症状。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　&lt;strong&gt;睛明穴&lt;/strong&gt;&amp;nbsp;位于目内眦角上方凹陷处。“明”有光明之意，所以按揉此穴具有降温除浊、清热明目、开窍守神的功效。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　此外，按揉眼周明眼、凤眼和大空骨三穴，可快速缓解眼疲劳。以拇指的指甲分別对这三个穴位施予刺激，力度以稍微感觉到疼痛程度即可。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　常用电脑的人，眼睛的损耗特别大，合理摆放电脑、安排作息可以缓解视疲劳。\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p align=&quot;justify&quot; style=&quot;font-size:14px;color:#222222;font-family:宋体;background-color:#FFFFFF;&quot;&gt;\r\n	　　护眼要保证充足的睡眠，成人需约7~8小时的睡眠时间，而小孩则应在8小时以上。平日要有规律地安排休息，每使用电脑40分钟，就应该休息一下，最好能闭睛休息5分钟，因为只有闭眼休息，才能完全达到让眼睛自我调节和放松的目的。阳光可将血液引向眼睛，使眼睛的肌肉和神经得到放松。每天做眼保健操两次。若没有时间，可将双手搓热后放置在眼睛上，反复数次至眼睛疲劳消失。此法可起到活血化瘀、缓解疲劳的功效。但都需要保证手部的清洁，避免细菌感染。\r\n&lt;/p&gt;','','1397127172','1397127330','3','pvosmg1397034660','电脑一族用眼常保健按摩穴位','0');");
E_D("replace into `tp_img` values('7','1','康视眼镜','眼睛累了，试试按摩熨目','2','','10','0','爱眼护眼','http://zgweixiang.com/uploads/p/pvosmg1397034660/4/4/f/0/thumb_5346781c30ae8.jpg','1','&lt;h1 id=&quot;activity-name&quot; style=&quot;font-size:20px;font-weight:normal;font-family:&apos;Microsoft YaHei&apos;, Helvitica, Verdana, Tohoma, Arial, san-serif;background-color:#F0EFEF;&quot;&gt;\r\n	&lt;span style=&quot;color:#222222;font-family:&apos;Microsoft YaHei&apos;, Helvitica, Verdana, Tohoma, Arial, san-serif;font-size:medium;line-height:normal;background-color:#F0EFEF;&quot;&gt;将两手掌快速搓热，然后放在眼睛上，可以改善眼部血液循环，消除眼睛疲劳。或者轻轻按摩眼睛周围的穴位，每天早、晚用拇指与食指指腹按在眼内角上方的凹陷中，先向下按然后向上挤，也可以按左右眉内侧的凹陷处。&lt;/span&gt;\r\n&lt;/h1&gt;','','1397127208','1397127208','3','pvosmg1397034660','眼睛累了，试试按摩熨目','0');");
E_D("replace into `tp_img` values('15','1','康视眼镜','微商城','2','康视眼镜微商城即将开放！','12','0','最新活动','http://zgweixiang.com/uploads/p/pvosmg1397034660/2/2/c/6/thumb_534685f44a2c8.jpg','1','','http://zgweixiang.com/index.php?g=Wap&amp;m=Product&amp;a=cats&amp;token=pvosmg1397034660&amp;wecha_id={wechat_id}','1397131437','1397131606','28','pvosmg1397034660','康视眼镜微商城即将开放！','0');");
E_D("replace into `tp_img` values('12','1','康视眼镜','联系我们','2','联系我们','13','0','产品展示','http://zgweixiang.com/uploads/p/pvosmg1397034660/9/a/d/2/thumb_5346809e8cf4f.jpg','1','&lt;span style=&quot;font-family:宋体;font-size:medium;line-height:22px;&quot;&gt;温州康视眼镜有限公司专业服务始于1987年，是集零售与批发为一体的眼镜连锁企业。企业实施现代化品牌化、规范化的连锁经营，是温州地区眼镜零售行业规模最大的连锁企业之一。公司经浙江省眼镜质量监督局对经销产品质量保证体系、质量管理系、配镜体系、人员素质、产品进货渠道进行技术监督和全面技术考核后，被评为“浙江省配镜质量示范店”，是温州地区第一家也是唯一一家获此殊荣的公司，同时还荣获“温州市第二届执行物价计量政策法规优秀单位”、“浙江市场服务质量信得过单位”“温州市配镜质量店”及“全省配镜比赛温州地区第一名”等荣誉。&lt;/span&gt;&lt;br /&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;font-family:宋体;font-size:medium;line-height:22px;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;公司拥有十余套世界一流的验光设备和二十位眼镜专业技术人员，其中包括温州市唯一一位国家级高级验光师黄良驹先生以及毕业于温州医学院和天津医学科大学的验光师。公司不仅是国内外两百多个世界品牌、两千余种眼镜产品的零售商，同时还是博士伦、视康、强生、费士康等隐形眼镜品牌温州地区的总经销商，和许多世界知名品牌形成良好的合作伙伴关系。&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;font-family:宋体;font-size:medium;line-height:22px;&quot;&gt;&lt;img src=&quot;/uploads/p/pvosmg1397034660/e/b/9/0/534680b063e78.jpg&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;\r\n&lt;/span&gt;\r\n&lt;/p&gt;','','1397129395','1397129395','11','pvosmg1397034660','联系我们','0');");
E_D("replace into `tp_img` values('13','1','康视眼镜','砸金蛋','2','康视眼镜砸金蛋活动开始了！（演示）','12','0','最新活动','http://zgweixiang.com/tpl/static/goldenEgg/user/start.jpg','1','','{siteUrl}/index.php?g=Wap&amp;m=GoldenEgg&amp;a=index&amp;token=pvosmg1397034660&amp;wecha_id={wechat_id}&amp;id=1','1397130119','1397130149','11','pvosmg1397034660','砸金蛋','0');");
E_D("replace into `tp_img` values('14','1','康视眼镜','会员卡发放啦！','2','康视眼镜会员卡发放啦！','12','0','最新活动','http://zgweixiang.com/uploads/p/pvosmg1397034660/f/b/3/7/thumb_5346843993b36.jpg','1','康视眼镜会员卡发放啦！ 首页点击会员卡，领取康视眼镜会员卡！','','1397130318','1397130318','11','pvosmg1397034660','会员卡发放啦！','0');");
E_D("replace into `tp_img` values('16','1','康视眼镜','微商城即将开放！','2','康视微商城即将开放！','12','0','最新活动','http://zgweixiang.com/uploads/p/pvosmg1397034660/2/2/c/6/thumb_534685f44a2c8.jpg','1','','{siteUrl}/index.php?g=Wap&amp;m=Product&amp;a=cats&amp;token=pvosmg1397034660&amp;wecha_id={wechat_id}','1397132041','1397132192','27','pvosmg1397034660','康视微商城即将开放！','0');");
E_D("replace into `tp_img` values('17','1','康视眼镜','太阳镜','2','','13','0','产品展示','http://zgweixiang.com/uploads/p/pvosmg1397034660/f/0/3/1/thumb_534696d0884d7.jpg','1','','','1397135060','1397135060','11','pvosmg1397034660','太阳镜','0');");
E_D("replace into `tp_img` values('18','1','康视眼镜','光学镜架','2','','13','0','产品展示','http://zgweixiang.com/uploads/p/pvosmg1397034660/b/5/3/1/thumb_534696f0cfeeb.jpg','1','','','1397135093','1397135537','11','pvosmg1397034660','光学镜架','0');");
E_D("replace into `tp_img` values('9','1','康视眼镜','电脑一族保护眼睛的9条小秘笈','2','','10','0','爱眼护眼','http://zgweixiang.com/uploads/p/pvosmg1397034660/3/7/0/8/thumb_53467846c122a.jpg','1','&lt;span style=&quot;color:#222222;font-family:Simsun;font-size:14px;line-height:21px;background-color:#F5F8FD;&quot;&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	现如今，很多办公族由于工作需要，经常要长时间注视着电脑显示器，忍受计算机的辐射伤害，久而久之，难免会出现视力下降、眼痛、怕光、暗适应能力降低等不适症状。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　1、间歇休息\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　短暂的休息时间可让眼睛放松，最好是离开座位，找一些远距离的目标来看，大约维持大约10秒，稍微地休息一下，对护眼有无穷大的帮助呢。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　2、眼球运动\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　若连续座在计算机桌前一小时，可尝试着做一些眼球运动，例如向上望呼一口气，在将视线移回中间，吸一口气，如此运动约重复三回，最后再继续进行下面、左边及右侧重复相同动作。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　3、眨眨眼\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　其实眨眼动作是可让眼睛分泌泪水的，保持眼部湿润，对于配戴隐形眼镜的OL而言是相当重要的！很多女性就是因为太专注于工作，导致长时间盯着计算机屏幕而忘了眨眨眼这么简单的小动作，而另眼睛干涩不适。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　4、吸口气\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　吸口气对护眼有帮助吗？事的，其实在吸气时，可加速血液循环，根据调查，很多女性因为太专注盯着计算机，就让呼吸速度变缓，所以要经常提醒自己，保持呼吸顺畅，以放松身心！\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　5、健康食品\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　长吃对眼睛有益的食物，也有某种程度上的帮助，例如深海鱼含有大量的DHA，可令眼睛视网膜健全发育，并防止病变及白内障；此外，红萝卜、柠檬、蓝莓、果仁、肝脏等等，常常吃，既可增加体内的抗氧化物质、又可有效护眼、对抗衰老现象，岂非一举数得？\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　6、多吃各种水果\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　特别是柑桔类水果，还应多吃绿色蔬菜、粮食、鱼和鸡蛋。多喝水对减轻眼睛干燥也有帮助。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　7、保持良好的工作姿势\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　保持一个最适当的姿势，使双眼平视或轻度向下注视电脑屏幕，这样可使颈部肌肉轻松，并使眼球暴露于空气中的面积减小到最低。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　8、调整电脑屏幕距离\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　建议距离为50-70厘米，而屏幕应略低于眼水平位置10~20厘米，呈15~20度的下视角。因为角度及距离能降低对屈光的需求，减少眼球疲劳的几率。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　9、慎戴隐形眼镜\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:14px;color:#222222;font-family:Simsun;background-color:#F5F8FD;&quot;&gt;\r\n	　　如果你本来泪水分泌较少，眼睛容易干涩，在电脑前就不适合使用隐形眼镜，要戴框架眼镜。在电脑前佩戴隐形眼镜的人，也最好使用透氧程度高的品种。\r\n&lt;/p&gt;\r\n&lt;/span&gt;','','1397127291','1397127291','14','pvosmg1397034660','电脑一族保护眼睛的9条小秘笈','0');");
E_D("replace into `tp_img` values('10','1','康视眼镜','如何保护眼镜','2','预防近视，保护视力的各种措施似乎都是老生常谈，但实际却往往被少年人所忽视，现再强调以下几点： ','10','0','爱眼护眼','http://zgweixiang.com/uploads/p/pvosmg1397034660/6/9/8/c/thumb_5346789764e70.jpg','1','&lt;pre class=&quot;best-text mb-10&quot;&gt;预防近视，保护视力的各种措施似乎都是老生常谈，但实际却往往被少年人所忽视，现再强调以下几点： \r\n1 提倡望远训练。少年眼球处于生长发育阶段，调节力很强，每天可进行一定时间的望远训练。如清晨眺望远处的建筑物或树木，或在夜晚辨认天空的星斗，还可以在日常休息时对远处某一目标进行辨认，认真对待望远训练并持之以恒，对预防近视眼的发生和发展是很有收益的。 \r\n2 读书写字时应坚持 &quot; 二要 &quot; 、 &quot; 二不要 &quot; 。 &quot; 二要 &quot; 是：①读书写字姿势要端正，眼与书本距离应为 30-35 厘米。②连续读书一小时左右，应休息片刻或向远处眺望一会儿； &quot; 二不要 &quot; 是：①不要在光线暗弱和直射阳光下看书，不要边吃饭边看书。②不要躺在床上、走路时或在晃动的车厢内看书。 \r\n3 良好的家庭采光、照明。学生写字台要选择室内采光最好的地方安放，光线从左前方来，为防止阳光直射桌面造成眩眼，应备有能开启的窗帘。灯具的安装要合理。桌面照度最好在 80-100 勒克斯以上，如果有专供学习用的台灯则更好。 \r\n4 注意正确的读写姿势。 此外，如认真作眼保健操，积极参加体育锻炼，使体格强壮，避免全身性疾病，都是有利于眼球的正常发育，保护视力的积极措施&lt;/pre&gt;','','1397127321','1397127321','14','pvosmg1397034660','如何保护眼镜','0');");
E_D("replace into `tp_img` values('27','12','test','分类一啊','2','分类一啊','68','0','分类一','http://wzweixiang.com/tpl/static/attachment/background/view/8.jpg','1','分类一啊','','1400312708','1400312708','0','orbhyn1400224508','分类一啊','0');");
E_D("replace into `tp_img` values('20','12','test','是的撒旦','2','十大','31','14','111','倒萨','1','倒萨大','','1398154458','1398155129','0','qtjnws1397994896','111 ','0');");
E_D("replace into `tp_img` values('21','12','test','最大的','2','sdsad ','31','18','111','sdasd','1','111','','1398154763','1399698471','0','qtjnws1397994896','最大的','0');");
E_D("replace into `tp_img` values('22','12','test','撒旦撒旦','2','撒地方','31','10','111',' 撒地方','1','倒萨大','','1398155977','1398155996','2','qtjnws1397994896','但是撒旦','0');");
E_D("replace into `tp_img` values('26','3','283497031','你好','2','飒飒','55','0','3','http://wzweixiang.com/uploads/a/avljgc1397041839/a/7/4/f/thumb_536f5c2a9ba20.png','1','的飒飒','','1400303081','1400304642','4','avljgc1397041839','的萨芬撒爱上','7');");
E_D("replace into `tp_img` values('25','3','283497031','你好','2','','55','0','3','http://wzweixiang.com/uploads/a/avljgc1397041839/4/0/b/9/thumb_53744bfb2e59f.jpg','1','','','1400302996','1400304649','6','avljgc1397041839','111ssdsd','6');");
E_D("replace into `tp_img` values('28','32','weixin0738','123','2','','69','0','1','','1','&lt;embed src=&quot;http://v.youku.com/v_show/id_XNjM1MTM4MDA4.html?f=22245681&amp;ev=4&quot; type=&quot;application/x-shockwave-flash&quot; width=&quot;550&quot; height=&quot;400&quot; quality=&quot;high&quot; /&gt;','','1400338960','1400338960','3','fbcsqj1400322782','123','0');");
E_D("replace into `tp_img` values('29','12','test','美女','2','美女','77','0','分类一','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','1','美女美女','','1400393639','1400393639','20','nepvyy1400393099','美女','0');");
E_D("replace into `tp_img` values('30','12','test','11','2','11','87','1','3-1','http://wzweixiang.com/tpl/static/attachment/icon/lovely/1.png','1','111','','1400551018','1400551018','0','taenqh1400550796','11','0');");
E_D("replace into `tp_img` values('31','12','test','22','2','22','87','2','3-1','http://wzweixiang.com/tpl/static/attachment/icon/lovely/cloud-down.png','1','22','','1400551042','1400551042','0','taenqh1400550796','22','0');");
E_D("replace into `tp_img` values('32','3','283497031','啊啊','2','啊啊啊','55','0','3','http://wzweixiang.com/uploads/a/avljgc1397041839/6/a/0/2/thumb_53780d727e024.jpg','1','但撒旦撒大事打撒打撒','','1400569719','1400569719','0','avljgc1397041839','111 ','0');");
E_D("replace into `tp_img` values('33','12','test','5555555','2','555','91','0','联系我们','http://wzweixiang.com/uploads/x/xkuxqy1400560689/e/0/d/4/thumb_537b5941cc428.jpg','1','222222','{siteUrl}/index.php?g=Wap&amp;m=Index&amp;a=index&amp;token=xkuxqy1400560689&amp;wecha_id={wechat_id}','1400593205','1400593205','3','xkuxqy1400560689','44444','0');");
E_D("replace into `tp_img` values('34','12','test','图文自定义内容','2','图文自定义内容图文自定义内容图文自定义内容图文自定义内容','118','0','微论坛','http://wzweixiang.com/tpl/static/attachment/focus/default/5.gif','1','图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容图文自定义内容','','1400651589','1400651589','0','orbhyn1400224508','图文自定义内容','0');");
E_D("replace into `tp_img` values('35','12','test','美女额','2','美女额','79','0','分类三','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','1','&lt;span style=&quot;background-color:#FFE500;&quot;&gt;美女额&lt;/span&gt;&lt;span style=&quot;color:#E53333;background-color:#DFC5A4;&quot;&gt;美女额&lt;/span&gt;','','1400743990','1400743990','2','nepvyy1400393099','美女额','0');");
E_D("replace into `tp_img` values('36','12','test','美女啦','2','','79','0','分类三','http://wzweixiang.com/tpl/static/attachment/background/view/3.jpg','1','美女啦美女啦','','1400744028','1400744028','1','nepvyy1400393099','美女啦','0');");

require("../../inc/footer.php");
?>