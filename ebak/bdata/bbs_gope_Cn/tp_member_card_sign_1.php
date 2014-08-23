<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_sign`;");
E_C("CREATE TABLE `tp_member_card_sign` (
  `id` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `wecha_id` varchar(50) NOT NULL,
  `sign_time` int(11) NOT NULL,
  `is_sign` int(11) NOT NULL,
  `score_type` int(11) NOT NULL,
  `expense` int(11) NOT NULL,
  `sell_expense` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_sign` values('0','pvosmg1397034660','ouSirtxehvlRsaD8Ab_2pYreyeGA','0','0','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','pvosmg1397034660','ouSirtxehvlRsaD8Ab_2pYreyeGA','1397132863','1','1','5','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjoeJGrKjs_a_Mi_a_83niS4','0','0','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjoeJGrKjs_a_Mi_a_83niS4','1398012851','1','1','1','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjoeJGrKjs_a_Mi_a_83niS4','1398355943','1','1','1','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjoeJGrKjs_a_Mi_a_83niS4','1399800552','1','1','127','0');");
E_D("replace into `tp_member_card_sign` values('0','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','0','0','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','1400575902','1','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','1400636956','1','1','1','0');");
E_D("replace into `tp_member_card_sign` values('0','nepvyy1400393099','oKTN3t7bKqOnOKzXg5lnsS0iWWSA','0','0','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','nepvyy1400393099','oKTN3t7bKqOnOKzXg5lnsS0iWWSA','1400726448','1','1','1','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjrp58_67yMT1YtQFVljtp6o','0','0','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjrp58_67yMT1YtQFVljtp6o','1401026985','1','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjrj-FrGvvFxo9g3EKr7HqAM','0','0','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjrj-FrGvvFxo9g3EKr7HqAM','1401032674','1','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjrp58_67yMT1YtQFVljtp6o','1401038503','1','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','avljgc1397041839','ob2qxjrj-FrGvvFxo9g3EKr7HqAM','1401083581','1','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','0','0','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','1401365578','1','1','2','0');");
E_D("replace into `tp_member_card_sign` values('0','tzqawo1400308953','o1R8Mt7OITX5MYlbL3ruujCii554','0','0','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','tzqawo1400308953','o1R8Mt7OITX5MYlbL3ruujCii554','1401374117','1','1','2','0');");
E_D("replace into `tp_member_card_sign` values('0','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','1401379953','1','1','2','0');");
E_D("replace into `tp_member_card_sign` values('0','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','0','0','1','0','0');");
E_D("replace into `tp_member_card_sign` values('0','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','1401420518','1','1','2','0');");

require("../../inc/footer.php");
?>