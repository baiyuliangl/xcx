<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"/home/www/xcx/public/../application/admin/view/login/index.html";i:1555385669;}*/ ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/static/css/style.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="/static/js/jquery.js"></script>
<script src="/static/js/verificationNumbers.js"></script>
<script src="/static/js/Particleground.js"></script>
</head>
<body>
<dl class="admin_login">
 <dt>
  <strong style="color:white">后台管理系统</strong>
  <em>lampol wechat</em>
 </dt>
 <form method='post' action='/login'>
 <dd class="user_icon">
  <input type="text" name='user'  placeholder="账号" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" name='password'  placeholder="密码" class="login_txtbx"/>
 </dd>
 <dd>
   <input type="submit" value="立即登陆" class="submit_btn"/>
 </dd>
</form>
 <dd>
  <p>© 2015-2019  版权所有</p>
  <p>BMH</p>
 </dd>
</dl>
</body>
</html>
