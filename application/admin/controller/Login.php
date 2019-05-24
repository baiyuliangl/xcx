<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
class Login extends Controller
{
	public function index(Request $request){
	   $post = input('post.');
	   if(!empty($post)){
	   	$user = $post['user'];
		$pwd = $post['password'];
		$res = Db::name('admin')->where(['user_name'=>$user,'password'=>$pwd])->find();
		if($res){
		    session('user',$user);
		    return $this->success('登陆成功','/admin');
		}else{
		    return $this->error('用户名或密码错误','/login');
		}		
	   }else{	
		return $this->fetch();
	   }
	}

	public function loginout(){
	    session('user',null);
	    $this->redirect('/login');
	
	}
}
