<?php

namespace app\admin\controller;

use think\Request;
use app\admin\controller\Base;
use think\Db;
class Pic extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
	$res = Db::name('img')->select();
	$this->assign('res',$res);
        return $this->fetch();
    }
    
    public function up(Request $request){
	$file = $request->file('file');
	
	$info = $file->move('upload/img');

	if($info){
	   $path = '/upload/img/'.$info->getSaveName();
	   return json(['img_url'=>$path]);
	}
    }
    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return $this->fetch('add');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->except('file');
	$res = Db::name('img')->insert($data);
	if($res){
	   $this->success('添加成功','/pic');
	}else{
	   $this->error('添加失败','/pic');
	}
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $res = Db::name('img')->where('id',$id)->find();
	$this->assign('res',$res);
	return $this->fetch();
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
	$data = $request->except(['_method','file']);
	$res = Db::name('img')->where('id',$id)->update($data);
	
	if($res){
	    $this->success('修改成功','/pic');
	}else{
	    $this->error('修改失败','/pic');
	}
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
