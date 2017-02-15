<?php
class NavWidget extends Widget{
	public function render($data){
		$_template=$data['lang'].'_nav';
		if(S('navdata')){
			$data=S('navdata');
		}else{
			$n=M('List');
			$nav=$n->field('id,name,ename,url,pid,type,link,elink')->where('pid=0 and nav=1')->order('sort asc')->select();
			$data['nav']=$nav;
			
			if($nav){
				$snav=$n->field('id,name,ename,url,pid,type,link,elink')->where('pid != 0 and nav=1')->order('sort asc')->select();
				$data['snav']=$snav;
				//S('navdata',$data,3600 * 24);
			}

			//2015-06-23
			$appnav=$nav;
			foreach ($nav as  $k=>$v) {
				foreach ($snav as $sk=>$sv) {
					if ($v["id"] == $sv["pid"]) {
						$appnav[$k]['two'][]=$sv;
					}
				}
			}
			$data['appnav']=$appnav;
			S('navdata',$data,3600 * 24);
		}
		
		$content=$this->renderFile($_template,$data);
		return $content;
	}


}
?>