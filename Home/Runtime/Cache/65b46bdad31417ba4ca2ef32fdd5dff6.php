<?php if (!defined('THINK_PATH')) exit(); if($links): ?><div class="btn-group dropup" style="margin-bottom:15px;">
                      <button type="button" class="btn btn-default btn-sm" data-toggle="dropdown" aria-expanded="false" style="line-height:13px;">&nbsp;&nbsp;&nbsp;&nbsp;Link&nbsp;&nbsp;&nbsp;&nbsp;</button>
                      <button type="button" class="btn btn-default dropdown-toggle btn-sm"  style="line-height:13px;">
                        <span class="caret"></span>
                        <span class="sr-only">Link</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                      	<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($vo["eurl"]); ?>"><?php echo ($vo["ename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                    </div><?php endif; ?>