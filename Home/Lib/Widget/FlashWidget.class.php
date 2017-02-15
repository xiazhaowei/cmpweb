<?php
class FlashWidget extends Widget{
	public function render($data){
		if(S('flashdata')){
			$data=S('flashdata');
		}else{
			$data['flash']=$this->flash=M('Flash')->field('id,title,sort,link,photo')->order('sort')->select();
			S('flashdata',$data,3600 * 24);
		}
		
		$content=$this->renderFile('flash',$data);
		return $content;
	}

}
?>