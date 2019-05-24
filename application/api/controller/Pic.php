<?php

namespace app\api\controller;

use think\Controller;
use think\Db;
class Pic extends Controller
{
    public function getImg(){
	//查询显示的图片并排序
	$res = Db::name('img')->field('img_url')->where('is_show',1)->order('img_order')->select();
	return json($res);
    }
}
