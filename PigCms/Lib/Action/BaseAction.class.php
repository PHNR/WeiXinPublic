<?php
class BaseAction extends Action{
	public $isAgent;
	public $home_theme;
	public $reg_needCheck;
	public $minGroupid;
	public $reg_validDays;
	public $reg_groupid;
	public $thisAgent;
	public $agentid;
	protected function _initialize(){
		define('RES',THEME_PATH.'common');
		define('STATICS',TMPL_PATH.'static');
		//Input::noGPC();
		$this->assign('action',$this->getActionName());
		//********************/
		$this->isAgent=0;
		if (C('agent_version')){
			$thisAgent=M('agent')->where(array('siteurl'=>'http://'.$_SERVER['HTTP_HOST']))->find();
			if ($thisAgent){
				$this->isAgent=1;
			}
		}
		if (!$this->isAgent){
			$this->agentid=0;
			$f_logo='tpl/Home/pigcms/common/images/logo-pigcms.png';
			$f_siteName=C('SITE_NAME');
			$f_siteTitle=C('SITE_TITLE');
			$f_metaKeyword=C('keyword');
			$f_metaDes=C('content');
			$f_qq=C('site_qq');
			$f_qrcode='tpl/Home/pigcms/common/images/ewm2.jpg';
			$f_siteUrl=C('site_url');
			$this->home_theme=C('DEFAULT_THEME');
			$f_regNeedMp=C('reg_needmp')=='true'?1:0;
			$this->reg_needCheck=C('ischeckuser')=='false'?1:0;
			$this->minGroupid=1;
			$this->reg_validDays=C('reg_validdays');
			$this->reg_groupid=C('reg_groupid');
		}else {
			$this->agentid=$thisAgent['id'];
			$this->thisAgent=$thisAgent;
			$f_logo=$thisAgent['sitelogo'];
			$f_siteName=$thisAgent['sitename'];
			$f_siteTitle=$thisAgent['sitetitle'];
			$f_metaKeyword=$thisAgent['metakeywords'];
			$f_metaDes=$thisAgent['metades'];
			$f_qq=$thisAgent['qq'];
			$f_qrcode=$thisAgent['qrcode'];
			$f_siteUrl=$thisAgent['siteurl'];
			$this->home_theme=C('DEFAULT_THEME');
			if (file_exists($_SERVER['DOCUMENT_ROOT'].'/tpl/Home/'.'agent_'.$thisAgent['id'])){
				$this->home_theme='agent_'.$thisAgent['id'];
			}
			$f_regNeedMp=$thisAgent['regneedmp'];
			$this->reg_needCheck=$thisAgent['needcheckuser'];
			$minGroup=M('User_group')->where(array('agentid'=>$thisAgent['id']))->order('id ASC')->find();
			$this->minGroupid=$minGroup['id'];
			$this->reg_validDays=$thisAgent['regvaliddays'];
			$this->reg_groupid=C('reggid');
		}
		$this->assign('f_logo',$f_logo);
		$this->assign('f_siteName',$f_siteName);
		$this->assign('f_siteTitle',$f_siteTitle);
		$this->assign('f_metaKeyword',$f_metaKeyword);
		$this->assign('f_metaDes',$f_metaDes);
		$this->assign('f_qq',$f_qq);
		$this->assign('f_qrcode',$f_qrcode);
		$this->assign('f_siteUrl',$f_siteUrl);
		$this->assign('f_regNeedMp',$f_regNeedMp);
		//******************/
	}
	
	//添加所有内容,包含关键词
	protected function all_insert($name='',$back='/index'){
		$name=$name?$name:MODULE_NAME;
		$db=D($name);
		if($db->create()===false){
			$this->error($db->getError());
		}else{
			$id=$db->add();
			if($id){
				$m_arr=array('Img','Text','Voiceresponse','Ordering','Lottery','Host','Product','Selfform','Panorama','Wedding','Vote','Estate','Reservation','Greeting_card','Home','Kefu','Wifi');
				if(in_array($name,$m_arr)){
					$data['pid']=$id;
					$data['module']=$name;
					$data['token']=session('token');
					$data['keyword']=$_POST['keyword'];
					M('Keyword')->add($data);
				}
				$this->success('操作成功',U(MODULE_NAME.$back));
			}else{
				$this->error('操作失败',U(MODULE_NAME.$back));
			}
		}
	}
	//单一信息添加
	protected function insert($name='',$back='/index'){
		$name=$name?$name:MODULE_NAME;
		$db=D($name);
		if($db->create()===false){
			$this->error($db->getError());
		}else{
			$id=$db->add();
			if($id==true){
				$this->success('操作成功',U(MODULE_NAME.$back));
			}else{
				$this->error('操作失败',U(MODULE_NAME.$back));
			}
		}
	}
	//单子信息修改
	protected function save($name='',$back='/index'){
		$name=$name?$name:MODULE_NAME;
		$db=D($name);
		if($db->create()===false){
			$this->error($db->getError());
		}else{
			$id=$db->save();
			if($id==true){				
				$this->success('操作成功',U(MODULE_NAME.$back));
			}else{
				$this->error('操作失败',U(MODULE_NAME.$back));
			}
		}
	}
	//修改所有内容,包含关键词
	protected function all_save($name='',$back='/index'){
		$name=$name?$name:MODULE_NAME;
		$db=D($name);
		if($db->create()===false){
			$this->error($db->getError());
		}else{
			$id=$db->save();
			if($id){
				$m_arr=array(
					'Img',
					'Text',
					'Voiceresponse',
					'Ordering','Lottery',
					'Host','Product',
					'Selfform',
					'Panorama',
					'Wedding',
					'Vote',
					'Estate',
					'Reservation',
					'Carowner',
					'Carset',
					'Home',
					'Kefu',
					'Wifi',
				);
				if(in_array($name,$m_arr)){
					$data['pid']=$_POST['id'];
					$data['module']=$name;
					$data['token']=session('token');
					$da['keyword']=$_POST['keyword'];
					M('Keyword')->where($data)->save($da);
					//F('SQLTT',M('Keyword')->getLastSql());
				}
				$this->success('操作成功',U(MODULE_NAME.$back));
			}else{
				$this->error('操作失败',U(MODULE_NAME.$back));
			}
		}
	}
	protected function del_id($name='',$jump=''){
		$name=$name?$name:MODULE_NAME;
		$jump=empty($name)?MODULE_NAME.'/index':$jump;
		$db=D($name);
		$where['id']=$this->_get('id','intval');
		$where['token']=session('token');
		if($db->where($where)->delete()){
			$this->success('操作成功',U($jump));
		}else{
			$this->error('操作失败',U(MODULE_NAME.'/index'));
		}
	}
	protected function all_del($id,$name='',$back='/index'){
		$name=$name?$name:MODULE_NAME;
		$db=D($name);
		if($db->delete($id)){
			$this->ajaxReturn('操作成功',U(MODULE_NAME.$back));
		}else{
			$this->ajaxReturn('操作失败',U(MODULE_NAME.$back));
		}
	}
	protected function ajaxReturn($status=1, $msg='', $data='', $dialog='') {

        parent::ajaxReturn(array(

            'status' => $status,

            'msg' => $msg,

            'data' => $data,

            'dialog' => $dialog,

        ));

    }

	
  // 生成excel
    protected function generate_xls($keynames, $data, $name='office2003', $ext = '2003') {
        $keys = array_keys($keynames);
        $titles = array_values($keynames);
        $xlsx[] = $keynames;
        foreach($data as $rs) {
            $xlsx[] = $rs;
        }
		
        vendor('phpexcel', '', '.class.php');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setCreator("PHPExcel")
                                     ->setLastModifiedBy("PHPExcel")
                                     ->setTitle("PHPExcel reports")
                                     ->setSubject("PHPExcel reports")
                                     ->setDescription("PHPExcel document for Office 2003 XLS, generated at ".date('Y-m-d'))
                                     ->setKeywords("PHPExcel reports")
                                     ->setCategory("PHPExcel");
        foreach($xlsx as $index => $row){
            $i = $index + 1;
            $sheet = $objPHPExcel->setActiveSheetIndex(0);
            foreach($keys as $key => $val){
                $ascii = chr(65+$key);
                $sheet->setCellValue($ascii.$i, $row[$val]);
            }
        }
        $objPHPExcel->getActiveSheet()->setTitle($name);
        $objPHPExcel->setActiveSheetIndex(0);
        if($ext == '2007') {
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');  
            header('Content-Disposition: attachment;filename="'.$name.'.xlsx"');  
            header('Cache-Control: max-age=0');  
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
            $objWriter->save('php://output');  
            exit;  
        } else {
            header('Content-Type: application/vnd.ms-excel');  
            header('Content-Disposition: attachment;filename="'.$name.'.xls"');  
            header('Cache-Control: max-age=0');  
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
            $objWriter->save('php://output');  
            exit;  
        }
    }

    // 解析excel
    protected function parse_xls($keynames,$file) {
        $keys = array_keys($keynames);
        $titles = array_values($keynames);
        vendor('phpexcel', '', '.class.php');
        if(file_exists($file)){
            $objPHPExcel = PHPExcel_IOFactory::load($file);
            $current_sheet =$objPHPExcel->getSheet(0);      
            $all_column =$current_sheet->getHighestColumn();
            $all_row =$current_sheet->getHighestRow();
            $ret = array();  
            
            for($r = 2; $r <= $all_row; $r++) { 
                $rs = array();
                for($c = 'A'; $c <= $all_column; $c++){  
                    $SerialNum = $c.$r;
                    $content = $current_sheet->getCell($SerialNum)->getValue();
                    if(is_object($content)){  
                        $content = $content->__toString();  
                    }
                    $rs[] = $content; 
                }  
                $rs = array_combine($keys,$rs);
                $ret[] = $rs;
            }
        }
        return $ret;
    }
}