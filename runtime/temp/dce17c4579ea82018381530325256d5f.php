<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"/home/www/xcx/public/../application/admin/view/pic/index.html";i:1557140849;s:55:"/home/www/xcx/application/admin/view/layout/layout.html";i:1555386459;}*/ ?>
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


<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">图片列表</h2>
       <a href="pic/create" class="fr top_rt_btn add_icon">添加图片</a>
      </div>
      <table class="table">
       <tr>
        <th>缩略图</th>
        <th>图片标题</th>
        <th>图片顺序</th>
        <th>是否展示</th>
        <th>操作</th>
       </tr>
       <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): if( count($res)==0 ) : echo "" ;else: foreach($res as $key=>$vo): ?>
       <tr>
        <td class="center"><img src="<?php echo $vo['img_url']; ?>" width="50" height="50"/></td>
        <td><?php echo $vo['img_title']; ?></td>
        <td class="center"><?php echo $vo['img_order']; ?></td>
        <td class="center">
	<?php if($vo['is_show']==1): ?>
	   <a title="是" class="link_icon">&#89;</a>
	<?php else: ?>
	   <a title="否" class="link_icon">&#88;</a>
	<?php endif; ?>
	</td>
        <td class="center">
         <a href="/pic/<?php echo $vo['id']; ?>/edit" title="编辑" class="link_icon">&#101;</a>
        </td>
       </tr>
       <?php endforeach; endif; else: echo "" ;endif; ?>
      </table>
 </div>
</section>



<script src="/static/js/serial.js" type="text/javascript"></script>
<script src="/static/js/pie.js" type="text/javascript"></script>
</body>
</html>
