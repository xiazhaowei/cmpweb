<?php if (!defined('THINK_PATH')) exit(); if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,0,$pronum,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-3 col-mm-6 product_img">
        <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'e'));?>">
            <img src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" class="opacity_img" alt="<?php echo ($vo["ename"]); ?>">
        </a>
        <p class="product_title"><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'e'));?>" title="<?php echo ($vo["ename"]); ?>"><?php echo (mb_substr($vo["ename"],0,35,'utf-8')); ?></a></p>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>