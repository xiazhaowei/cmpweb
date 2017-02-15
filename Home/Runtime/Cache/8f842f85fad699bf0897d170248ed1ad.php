<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ($article["etitle"]); ?></title>
    <meta name="keywords" content="<?php echo ($article["ekeywords"]); ?>" />
    <meta name="description" content="<?php echo ($article["edescription"]); ?>" />
    <meta name="applicable-device"content="pc,mobile">
<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
<link href="../Public/css/bxslider.css" rel="stylesheet">
<link href="../Public/css/style.css" rel="stylesheet">
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="../Public/js/bxslider.min.js"></script>
<script src="../Public/js/common.js"></script>
<script src="__PUBLIC__/js/bootstrap.js"></script>
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link href="../Public/css/lightbox.css" rel="stylesheet">
    <script src="../Public/js/lightbox.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.showpic_flash').bxSlider({
              pagerCustom: '#pic-page',
               adaptiveHeight: true,
            });

        });
    </script>
  </head>
  <body id="product">
  
 <header>


    <div class="top_menu">
      <div class="container">
        <span class="top_name">Welcome: <?php echo (C("web_ename")); ?></span>
        <div class="language">Language: 
        <a href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>" title="Chinese"><img src="../Public/images/Chinese.gif" alt="Chinese"></a>
       ∷&nbsp;
        <a href="<?php echo W('Index',array('cnen'=>'en','lang'=>'e'));?>" title="English"><img src="../Public/images/English.gif" alt="English"></a>
        </div>
      </div>
    </div>

<div class="container">
  <div class="row">

    <div class="col-xs-12 col-sm-9 col-md-9">
        <a href="<?php echo (C("web_url")); ?>"><img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" class="logo" alt="<?php echo (C("web_ename")); ?>"/></a>
    </div>

    <div id="topsearch" class="col-xs-12 col-sm-3 col-md-3">
        <form id="searchform" method="get" action="<?php echo U('Search/index',array('g'=>'e'));?>">
            <div class="input-group search_group">
                <input type="text" name="name" class="form-control input-sm" placeholder="Product search">
                   <span class="input-group-btn">
                      <a href="javascript:searchform.submit();" class="btn btn-sm mysearch_btn" type="button">Search</a>
                  </span>
            </div>
        </form>
    </div>

  </div>
</div>
  
<?php echo W('Nav',array('lang'=>'e'));?>

<?php echo W('Flash');?>
<script type="text/javascript">
    $('.bxslider').bxSlider({
      adaptiveHeight: true,
      infiniteLoop: true,
      hideControlOnEnd: true,
      auto:true
    });
</script>
</header>
   
    <!-- main -->
    <div class="container">    
        <div class="row">

           <!-- right -->
           <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
                <div class="list_box">
                    <h2 class="left_h1"><?php echo ($articlelist["ename"]); ?></h2>

                    <!-- showpic -->
                    <div class="col-sm-12 col-md-6 showpic_box">
                        <ul class="showpic_flash">
                          <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class="example-image-link" href="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" data-lightbox="example-set" target="_blank"><img class="example-image" src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" alt="<?php echo ($article["ename"]); ?>"/></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>  
                        <div id="pic-page">
                            <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a data-slide-index="<?php echo ($key); ?>" href="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>"><img src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" alt="<?php echo ($article["ename"]); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>  
                               
                    <!-- product_info -->
                    <div class="col-sm-12 col-md-6 proinfo_box">
                	<h1 class="product_h1"><?php echo ($article["ename"]); ?></h1>
                            <ul class="product_info">
                                <li><?php echo ($article["eproperty1"]); ?></li>
                                <li><?php echo ($article["eproperty2"]); ?></li>
                                <li><?php echo ($article["eproperty3"]); ?></li>
                                <li><?php echo ($article["eproperty4"]); ?></li>
                                <li>Product description: <?php echo (mb_substr($article["edescription"],0,200,'utf-8')); ?></li>
                                <li>
                                    <form id="orderform" method="post" action="<?php echo W('Listhref',array('link'=>'/Inquiry/','lang'=>'e'));?>">
                                    <input type="hidden" name="ordername" value="<?php echo ($article["ename"]); ?>" />  
                                    <a href="javascript:orderform.submit();" class="btn btn-primary"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> INQUIRY</a>
                                    </form>
                                </li>
                            </ul>
                    </div>

                    <div class="product_con">
                    <?php echo ($article["econtents"]); ?>
                    </div>

                   <div class="point">
                        <span class="to_prev col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["prev"]); ?></span>
                        <span class="to_next col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["next"]); ?></span>
                    </div>

                </div>
                      
                <div class="list_related"> 
                    <h1 class="left_h1">RELATED PRODUCTS</h1>
                    <div class="product_list related_list">
                        <?php if(is_array($related)): $i = 0; $__LIST__ = array_slice($related,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-3 col-mm-6 product_img">
                                <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'e'));?>">
                                  <img  src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" class="opacity_img" alt="<?php echo ($vo["ename"]); ?>"/>
                                </a>
                                <p class="product_title"><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'e'));?>" title="<?php echo ($vo["ename"]); ?>"><?php echo (mb_substr($vo["ename"],0,20,'utf-8')); ?></a></p>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>

            <!-- left -->
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="left_nav" id="categories">
                  <h1 class="left_h1">CATEGORIES</h1>
                  <?php echo W('Left',array('id'=>$article['bid'],'type'=>'product','lang'=>'e'));?>
                </div>

                <div class="left_news">
                  <h1 class="left_h1">LATEST NEWS</h1>
                  <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>2,'lang'=>'e'));?>
                </div>
               <div class="index_contact">
<h1 class="about_h1">CONTACT US</h1>
    <p style="padding-top:25px;">Contact: <?php echo (C("web_econtacts")); ?></p>
    <p>Phone: <?php echo (C("web_phone")); ?></p>
    <p>Tel: <?php echo (C("web_tel")); ?></p>
    <p>Email: <?php echo (C("web_email")); ?></p>
    <p>Add: <?php echo (C("web_eadd")); ?></p>
</div>
            </div>

        </div>
    </div> 
    
    <nav class="navbar navbar-default navbar-fixed-bottom footer_nav">
    <div class="foot_nav btn-group dropup">
        <a class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <span class="glyphicon glyphicon-share btn-lg" aria-hidden="true"></span>
            Share</a>  
            <div class="dropdown-menu ewebshare">
            <?php echo (C("web_eshare")); ?>
            </div>
    </div>
    <div class="foot_nav"><a href="tel:<?php echo (C("web_phone")); ?>"><span class="glyphicon glyphicon-phone btn-lg" aria-hidden="true"></span>Call</a></div>
    <div class="foot_nav"><a id="gotocate" href="#"><span class="glyphicon glyphicon-th-list btn-lg" aria-hidden="true"></span>Menu</a></div>
    <div class="foot_nav"><a id="gototop" href="#"><span class="glyphicon glyphicon-circle-arrow-up btn-lg" aria-hidden="true"></span>Top</a></div>
</nav>

<footer>
    <div class="copyright">
        <p><?php echo (C("web_ecopyright")); ?>&nbsp;<?php echo (C("web_icp")); ?> <a href="/" target="_blank">Sitemap</a></p>
        <p class="copyright_p">Add: <?php echo (C("web_eadd")); ?> &nbsp;Tel: <?php echo (C("web_tel")); ?> &nbsp;Fax: <?php echo (C("web_fax")); ?>&nbsp;<?php echo (C("web_count")); ?></p>
    </div>
    <?php if(C("is_translate")!= 0): ?><div id="translate">
    <!-- Begin TranslateThis Button -->
    <div id="translate-this"><a style="width:180px;height:18px;display:block;" class="translate-this-button" href="http://www.translatecompany.com/"></a></div>
    <script type="text/javascript" src="http://x.translateth.is/translate-this.js"></script>
    <script type="text/javascript">
    TranslateThis();
    </script>
    <!-- End TranslateThis Button -->
</div><?php endif; ?> 
</footer>

<?php echo W('Online',array('lang'=>'e'));?>


    
  </body>
</html>