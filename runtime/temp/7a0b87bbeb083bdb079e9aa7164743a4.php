<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"/home/www/xcx/public/../application/admin/view/pic/add.html";i:1557139599;s:55:"/home/www/xcx/application/admin/view/layout/layout.html";i:1555386459;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>lampol-微信小程序-后台管理系统</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/static/css/style.css">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<script src="/static/js/jquery.js"></script>
<script src="/static/js/jquery.mCustomScrollbar.concat.min.js"></script>

</head>
<body>
<!--header-->
<header>
 <h1><img src="/static/images/admin_logo.png"/></h1>
 <ul class="rt_nav">
  <li><a href="/loginout" class="quit_icon">安全退出</a></li>
 </ul>
</header>
<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <h2><a href="/admin">首页</a></h2>
 <ul>
   <li>
   <dl>
    <dt>图片管理</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="/pic" class="active">图片列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>商品管理</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="/goods" class="active">商品列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>订单信息</dt>
    <dd><a href="/order">订单列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>会员管理</dt>
    <dd><a href="/user">会员列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>基础设置</dt>
    <dd><a href="setting.html">站点基础设置示例</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>配送与支付设置</dt>
    <dd><a href="express_list.html">配送方式</a></dd>
    <dd><a href="pay_list.html">支付方式</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>在线统计</dt>
    <dd><a href="discharge_statistic.html">流量统计</a></dd>
    <dd><a href="sales_volume.html">销售额统计</a></dd>
   </dl>
  </li>
  <li>
   <p class="btm_infor">© DeathGhost.cn 版权所有</p>
  </li>
 </ul>
</aside> 

 <link rel="stylesheet" type="text/css" href="/static/lib/webuploader-0.1.5/webuploader.css">
 <script type="text/javascript" src="/static/lib/webuploader-0.1.5/webuploader.min.js"></script>
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">图片列表</h2>
       <a href="/pic" class="fr top_rt_btn">返回图片列表</a>
      </div>
<form action='/pic' method='post'>
     <section>
      <ul class="ulColumn2">
       <li>
        <span class="item_name" style="width:120px;">图片名称：</span>
        <input type="text" name='img_title' class="textbox textbox_295" placeholder="图片名称..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;">图片顺序：</span>
        <input type="text" name='img_order'  class="textbox" placeholder="图片顺序..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;">是否展示：</span>
        <label class="single_selection"><input type="radio" value='1' name="is_show"/>是</label>
        <label class="single_selection"><input type="radio" value='0' name="is_show"/>否</label>
       </li>
       <li>
        <span class="item_name" style="width:120px;">上传图片：</span>
        <label id="filePicker">选择图片</label>
	<img src='' style='width:200px;height:100pxi' id='img'>
	<input type='hidden' name='img_url' value='' id='img_url'>
       </li>
       <li>
        <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn" value="提交" />
       </li>
      </ul>
     </section>
</form>
 </div>
</section>
<script>

// 初始化Web Uploader
var uploader = WebUploader.create({

    // 选完文件后，是否自动上传。
    auto: true,

    // swf文件路径
    swf: "/static/lib/webuploader-0.1.5/Uploader.swf",

    // 文件接收服务端。
    server: "/up",

    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#filePicker',

    // 只允许选择图片文件。
    accept: {
        title: 'Images',
        extensions: 'gif,jpg,jpeg,bmp,png',
        mimeTypes: 'image/*'
    }
});

// 文件上传成功，给item添加成功class, 用样式标记上传成功。
uploader.on( 'uploadSuccess', function( file ,data) {
     $('#img').attr('src',data.img_url);
     $('#img_url').val(data.img_url);
 });
</script>



<script src="/static/js/serial.js" type="text/javascript"></script>
<script src="/static/js/pie.js" type="text/javascript"></script>
</body>
</html>
