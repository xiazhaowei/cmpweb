<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>后台管理</title>
</head>

<body style='background: url("../Public/images/blue_2010/head_bg.jpg") repeat-x 0px -144px; overflow: hidden;'>
<DIV class="Head">
<DIV style="width: 1003px; height: 86px; overflow: hidden;">
<DIV class="TopList">
<UL>
  <LI><A title="打开网站首页" class="topbar1" href="__ROOT__/" target="_blank"></A></LI>
  <LI><A title="清空网站缓存" class="topbar2" href="<?php echo U('Deltemp/index');?>" target="main"></A></LI>
  <LI><A title="查看Bunner cms使用帮助" class="topbar3" href="http://www.bunner.cn/" target="_blank"></A></LI>
  <LI><A title="退出后台管理" class="topbar4" href="<?php echo U('Index/loginOut');?>" target="_top"></A></LI></UL></DIV>
<DIV class="Clear"></DIV>
<DIV class="Version">
<DIV class="Namber">
<H1>&nbsp;</H1>
<P class="TopName">&nbsp;</P></DIV>
</DIV></DIV><p class="top_info">欢迎使用[ 邦纳企业网站后台管理系统 ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ 管理员:<?php echo (session('uname')); ?> ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Index/main');?>" target="main">后台首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Index/loginOut');?>" target="_top">退出登录</a></p></DIV>
</body>
</html>