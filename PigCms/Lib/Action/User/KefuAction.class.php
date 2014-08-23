<?php
class KefuAction extends UserAction{
	public $token;
	public $kefu_db;
	public function _initialize() {
		parent::_initialize();
		$this->token=$this->_session('token');
		$this->kefu_db=M('kefu');
		
		$this->canUseFunction('Kefu');
	}
	//配置
	public function index(){
		$kefu=$this->kefu_db->where(array('token'=>session('token')))->find();
		if(IS_POST){
			//写入关键字
			
						
				
			if($kefu==false){
						
				if($this->all_insert('Kefu','/index'))
				{
					    $id = $this->kefu_db->add($_POST);
						$keyword_model=M('Keyword');
						$key = array(
							'keyword'=>$_POST['keyword'],
							'pid'=>$id,
							'token'=>$this->token,
							'module'=>'Kefu',
							);
					
					$keyword_model->add($key);};
			}else{
	
				$_POST['id']=$kefu['id'];
				if($this->all_save('Kefu','/index'))
				
				{$check = M('Keyword')->where(array('token'=>$this->token,'module'=>'Kefu'))->find();
					if(empty($check)){
					$keyword_model->where(array('token'=>$this->token,'module'=>'Kefu'))->save(array('keyword'=>$_POST['keyword']));}
					else{
							$keyword_model->where(array('token'=>$this->token,'module'=>'Kefu'))->save(array('keyword'=>$_POST['keyword']));
						}
					
					}	
				
				
				
			}
		}else{
			$this->assign('kefu',$kefu);
			$this->display();
		}
	}}
?>