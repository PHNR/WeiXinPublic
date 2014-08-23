<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_moopha_template`;");
E_C("CREATE TABLE `tp_moopha_template` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `generate_path` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1-index,2-channel,3-template,4-singlepage',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `createhtml` tinyint(1) NOT NULL DEFAULT '1',
  `site` int(4) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `isdefault` (`isdefault`),
  KEY `site` (`site`),
  KEY `time` (`time`)
) ENGINE=MyISAM AUTO_INCREMENT=239 DEFAULT CHARSET=utf8");
E_D("replace into `tp_moopha_template` values('13','顶部','@/smarty/templates/1/pvosmg1397034660/header.html','','4','0','0','1','1397123402');");
E_D("replace into `tp_moopha_template` values('12','样式css','@/smarty/templates/1/pvosmg1397034660/style.css','','4','0','0','1','1397123402');");
E_D("replace into `tp_moopha_template` values('11','内容','@/smarty/templates/1/pvosmg1397034660/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','1','1397123402');");
E_D("replace into `tp_moopha_template` values('10','图片列表','@/smarty/templates/1/pvosmg1397034660/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','1','1397123402');");
E_D("replace into `tp_moopha_template` values('9','文字列表','@/smarty/templates/1/pvosmg1397034660/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','1','1397123402');");
E_D("replace into `tp_moopha_template` values('8','首页','@/smarty/templates/1/pvosmg1397034660/index.html','','1','1','0','1','1397123402');");
E_D("replace into `tp_moopha_template` values('14','底部','@/smarty/templates/1/pvosmg1397034660/footer.html','','4','0','0','1','1397123402');");
E_D("replace into `tp_moopha_template` values('147','底部','@/smarty/templates/2/avljgc1397041839/footer.html','','4','0','0','2','1399893003');");
E_D("replace into `tp_moopha_template` values('146','顶部','@/smarty/templates/2/avljgc1397041839/header.html','','4','0','0','2','1399893003');");
E_D("replace into `tp_moopha_template` values('145','样式css','@/smarty/templates/2/avljgc1397041839/style.css','','4','0','0','2','1399893003');");
E_D("replace into `tp_moopha_template` values('144','内容','@/smarty/templates/2/avljgc1397041839/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','2','1399893003');");
E_D("replace into `tp_moopha_template` values('142','文字列表','@/smarty/templates/2/avljgc1397041839/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','2','1399893003');");
E_D("replace into `tp_moopha_template` values('143','图片列表','@/smarty/templates/2/avljgc1397041839/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','2','1399893003');");
E_D("replace into `tp_moopha_template` values('91','底部','@/smarty/templates/3/qtjnws1397994896/footer.html','','4','0','0','3','1399819355');");
E_D("replace into `tp_moopha_template` values('90','顶部','@/smarty/templates/3/qtjnws1397994896/header.html','','4','0','0','3','1399819355');");
E_D("replace into `tp_moopha_template` values('88','内容','@/smarty/templates/3/qtjnws1397994896/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','3','1399819355');");
E_D("replace into `tp_moopha_template` values('89','样式css','@/smarty/templates/3/qtjnws1397994896/style.css','','4','0','0','3','1399819355');");
E_D("replace into `tp_moopha_template` values('87','图片列表','@/smarty/templates/3/qtjnws1397994896/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','3','1399819355');");
E_D("replace into `tp_moopha_template` values('86','文字列表','@/smarty/templates/3/qtjnws1397994896/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','3','1399819355');");
E_D("replace into `tp_moopha_template` values('85','首页','@/smarty/templates/3/qtjnws1397994896/index.html','','1','1','0','3','1399819355');");
E_D("replace into `tp_moopha_template` values('154','底部','@/smarty/templates/4/isouej1399863564/footer.html','','4','0','0','4','1399994434');");
E_D("replace into `tp_moopha_template` values('153','顶部','@/smarty/templates/4/isouej1399863564/header.html','','4','0','0','4','1399994434');");
E_D("replace into `tp_moopha_template` values('152','样式css','@/smarty/templates/4/isouej1399863564/style.css','','4','0','0','4','1399994434');");
E_D("replace into `tp_moopha_template` values('151','内容','@/smarty/templates/4/isouej1399863564/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','4','1399994434');");
E_D("replace into `tp_moopha_template` values('149','文字列表','@/smarty/templates/4/isouej1399863564/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','4','1399994434');");
E_D("replace into `tp_moopha_template` values('150','图片列表','@/smarty/templates/4/isouej1399863564/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','4','1399994434');");
E_D("replace into `tp_moopha_template` values('148','首页','@/smarty/templates/4/isouej1399863564/index.html','','1','1','0','4','1399994434');");
E_D("replace into `tp_moopha_template` values('141','首页','@/smarty/templates/2/avljgc1397041839/index.html','','1','1','0','2','1399893003');");
E_D("replace into `tp_moopha_template` values('155','首页','@/smarty/templates/6/rirjgb1400124807/index.html','','1','1','0','6','1400138448');");
E_D("replace into `tp_moopha_template` values('156','文字列表','@/smarty/templates/6/rirjgb1400124807/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','6','1400138448');");
E_D("replace into `tp_moopha_template` values('157','图片列表','@/smarty/templates/6/rirjgb1400124807/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','6','1400138448');");
E_D("replace into `tp_moopha_template` values('158','内容','@/smarty/templates/6/rirjgb1400124807/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','6','1400138448');");
E_D("replace into `tp_moopha_template` values('159','样式css','@/smarty/templates/6/rirjgb1400124807/style.css','','4','0','0','6','1400138448');");
E_D("replace into `tp_moopha_template` values('160','顶部','@/smarty/templates/6/rirjgb1400124807/header.html','','4','0','0','6','1400138448');");
E_D("replace into `tp_moopha_template` values('161','底部','@/smarty/templates/6/rirjgb1400124807/footer.html','','4','0','0','6','1400138448');");
E_D("replace into `tp_moopha_template` values('216','顶部','@/smarty/templates/7/orbhyn1400224508/header.html','','4','0','0','7','1400781844');");
E_D("replace into `tp_moopha_template` values('217','底部','@/smarty/templates/7/orbhyn1400224508/footer.html','','4','0','0','7','1400781844');");
E_D("replace into `tp_moopha_template` values('214','内容','@/smarty/templates/7/orbhyn1400224508/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','7','1400781844');");
E_D("replace into `tp_moopha_template` values('215','样式css','@/smarty/templates/7/orbhyn1400224508/style.css','','4','0','0','7','1400781844');");
E_D("replace into `tp_moopha_template` values('213','图片列表','@/smarty/templates/7/orbhyn1400224508/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','7','1400781844');");
E_D("replace into `tp_moopha_template` values('169','首页','@/smarty/templates/8/nepvyy1400393099/index.html','','1','1','0','8','1400476976');");
E_D("replace into `tp_moopha_template` values('170','文字列表','@/smarty/templates/8/nepvyy1400393099/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','8','1400476976');");
E_D("replace into `tp_moopha_template` values('171','图片列表','@/smarty/templates/8/nepvyy1400393099/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','8','1400476976');");
E_D("replace into `tp_moopha_template` values('172','内容','@/smarty/templates/8/nepvyy1400393099/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','8','1400476976');");
E_D("replace into `tp_moopha_template` values('173','样式css','@/smarty/templates/8/nepvyy1400393099/style.css','','4','0','0','8','1400476976');");
E_D("replace into `tp_moopha_template` values('174','顶部','@/smarty/templates/8/nepvyy1400393099/header.html','','4','0','0','8','1400476976');");
E_D("replace into `tp_moopha_template` values('175','底部','@/smarty/templates/8/nepvyy1400393099/footer.html','','4','0','0','8','1400476976');");
E_D("replace into `tp_moopha_template` values('212','文字列表','@/smarty/templates/7/orbhyn1400224508/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','7','1400781844');");
E_D("replace into `tp_moopha_template` values('183','首页','@/smarty/templates/0/reiesr1400475948/index.html','','1','1','0','10','1400508776');");
E_D("replace into `tp_moopha_template` values('184','文字列表','@/smarty/templates/0/reiesr1400475948/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','10','1400508776');");
E_D("replace into `tp_moopha_template` values('185','图片列表','@/smarty/templates/0/reiesr1400475948/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','10','1400508776');");
E_D("replace into `tp_moopha_template` values('186','内容','@/smarty/templates/0/reiesr1400475948/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','10','1400508776');");
E_D("replace into `tp_moopha_template` values('187','样式css','@/smarty/templates/0/reiesr1400475948/style.css','','4','0','0','10','1400508776');");
E_D("replace into `tp_moopha_template` values('188','顶部','@/smarty/templates/0/reiesr1400475948/header.html','','4','0','0','10','1400508776');");
E_D("replace into `tp_moopha_template` values('189','底部','@/smarty/templates/0/reiesr1400475948/footer.html','','4','0','0','10','1400508776');");
E_D("replace into `tp_moopha_template` values('211','首页','@/smarty/templates/7/orbhyn1400224508/index.html','','1','1','0','7','1400781844');");
E_D("replace into `tp_moopha_template` values('222','样式css','@/smarty/templates/1/hziflr1400551929/style.css','','4','0','0','11','1401089450');");
E_D("replace into `tp_moopha_template` values('223','顶部','@/smarty/templates/1/hziflr1400551929/header.html','','4','0','0','11','1401089450');");
E_D("replace into `tp_moopha_template` values('221','内容','@/smarty/templates/1/hziflr1400551929/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','11','1401089450');");
E_D("replace into `tp_moopha_template` values('220','图片列表','@/smarty/templates/1/hziflr1400551929/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','11','1401089450');");
E_D("replace into `tp_moopha_template` values('219','文字列表','@/smarty/templates/1/hziflr1400551929/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','11','1401089450');");
E_D("replace into `tp_moopha_template` values('218','首页','@/smarty/templates/1/hziflr1400551929/index.html','','1','1','0','11','1401089450');");
E_D("replace into `tp_moopha_template` values('224','底部','@/smarty/templates/1/hziflr1400551929/footer.html','','4','0','0','11','1401089450');");
E_D("replace into `tp_moopha_template` values('225','首页','@/smarty/templates/9/tzqawo1400308953/index.html','','1','1','0','9','1401277324');");
E_D("replace into `tp_moopha_template` values('226','文字列表','@/smarty/templates/9/tzqawo1400308953/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','9','1401277324');");
E_D("replace into `tp_moopha_template` values('227','图片列表','@/smarty/templates/9/tzqawo1400308953/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','9','1401277324');");
E_D("replace into `tp_moopha_template` values('228','内容','@/smarty/templates/9/tzqawo1400308953/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','9','1401277324');");
E_D("replace into `tp_moopha_template` values('229','样式css','@/smarty/templates/9/tzqawo1400308953/style.css','','4','0','0','9','1401277324');");
E_D("replace into `tp_moopha_template` values('230','顶部','@/smarty/templates/9/tzqawo1400308953/header.html','','4','0','0','9','1401277324');");
E_D("replace into `tp_moopha_template` values('231','底部','@/smarty/templates/9/tzqawo1400308953/footer.html','','4','0','0','9','1401277324');");
E_D("replace into `tp_moopha_template` values('232','首页','@/smarty/templates/0//index.html','','1','1','0','0','1401351667');");
E_D("replace into `tp_moopha_template` values('233','文字列表','@/smarty/templates/0//channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','0','1401351667');");
E_D("replace into `tp_moopha_template` values('234','图片列表','@/smarty/templates/0//channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','0','1401351667');");
E_D("replace into `tp_moopha_template` values('235','内容','@/smarty/templates/0//content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','0','1401351667');");
E_D("replace into `tp_moopha_template` values('236','样式css','@/smarty/templates/0//style.css','','4','0','0','0','1401351667');");
E_D("replace into `tp_moopha_template` values('237','顶部','@/smarty/templates/0//header.html','','4','0','0','0','1401351667');");
E_D("replace into `tp_moopha_template` values('238','底部','@/smarty/templates/0//footer.html','','4','0','0','0','1401351667');");

require("../../inc/footer.php");
?>