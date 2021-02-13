<?php if(!defined('WMBLOG'))exit;?>
<!DOCTYPE HTML>
<html lang="zh">
<html>
<head>
<!-- utf-8 -->
<meta charset="utf-8" />
<!-- Adaptive web page -->
<meta name="applicable-device"content="pc,mobile">
<meta baidu-gxt-verify-token="6d1d24bf426d29c5a65e5955c311d03e">
<!-- Browser optimization -->
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<!-- Head key information -->
<title><?php echo $tit.'_'.$webtitle;?></title>
<meta name="keywords" content="<?php echo $key;?>" />
<meta name="description" content="<?php echo $des;?>" />
<!-- Browser settings -->
<meta name="x5-orientation" content="portrait">
<meta name="screen-orientation" content="portrait">
<meta name="author" content="linlinzzo" />
<meta name="robots" content="index,follow" />
<meta name="applicable-device"content="pc,mobile">
<meta property="article:author" content="linlinzzo">
<!-- og tag -->
<meta property="og:type" content="article"/>
<meta property="og:title" content="<?php echo $tit.'_'.$webtitle;?>">
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="<?php echo $webtitle;?>" />
<meta property="og:description" content="<?php echo $des;?>">
<meta property="og:image" content="http://wiki.linlinzzo.top/SEO.jpg">
<meta property="og:url" content="<?php echo $url;?>"> 
<meta property="article:tag" content="<?php echo $key;?>" />
<!-- QQ Browser optimization -->
<meta itemprop="description" content="<?php echo $des;?>">
<meta itemprop="image" content="http://wiki.linlinzzo.top/SEO.jpg">
<link href="assets/<?php echo TEMPLATE;?>/style.css?v=4.0" rel="stylesheet" type="text/css" />
<?php if($tpl=='post.php'){?>
<link href="assets/js/wangeditor/css/wangEditor.min.css" rel="stylesheet" type="text/css" />
<?php }?>
<?php if($tpl=='view.php'){?>
<link href="assets/js/highlightjs/dark.css" rel="stylesheet" type="text/css" />
<?php }?>
</head>
<body>
<div id="header"> 
<a id="menu_toggle" href="#"><i id="menu" class="iconfont menu"></i></a>  
<div class="navbar-wrap">
  <div class="box-m">
    <div class="logo">
      <h2 id="title"><a href="./"><?php echo $webtitle;?></a></h2>   
    </div>	   
      <ul id="nav" class="collapse"> 
		<?php webmenu();?>
      </ul>   
      </div>
</div>
<div class="other-wrap collapse">
	  <div class="other box-m">
	   <div class="desc"><?php echo $motto;?></div>
<form method="get" class="search-form" action="<?php echo $file;?>"><input class="search-text" name="s" autocomplete="off" placeholder=" " required="required" type="text" value="<?php echo $s;?>"><button class="search-submit" alt="搜索" type="submit">search</button></form>
</div>
</div>
</div>
<div id="wrap"> 
