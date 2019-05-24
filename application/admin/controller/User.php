<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use think\Db;
class User extends Base{
    //
	public function index(){
	     $user = Db::name('user')->paginate(10);
	     $this->assign('user',$user);
	     return $this->fetch();
	}
}
