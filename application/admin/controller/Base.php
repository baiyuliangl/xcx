<?php

namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
	public function _initialize(){
	    if(session('user')==null){
	    	$this->redirect('/login');
	    }
	}
}
