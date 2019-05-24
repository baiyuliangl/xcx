<?php
namespace app\api\controller;

use think\Request;
use think\Db;
class User
{
     public function getSess(Request $request){
	  $code = $request->param('code');
	  $encData = $request->param('encryptedData');
	  $iv = $request->param('iv');
	  $appId = config('xcx.APPID');
	  $secret = config('xcx.SECRET');
	  $url = 'https://api.weixin.qq.com/sns/jscode2session?appid='.$appId.'&secret='.$secret.'&js_code='.$code.'&grant_type=authorization_code';
	  $res = file_get_contents($url);
	  $res = json_decode($res,true);

	  $ret = $this->decryUser($iv,$res['session_key'],$encData,$appId);
	  $ret = json_decode($ret,true);
	  
	  $thr_session = md5($ret['openId'].$res['session_key']); 
	  $data = [
		  'nick_name'=>$ret['nickName'],
		  'avatar_url'=>$ret['avatarUrl'],										      'open_id'  =>$ret['openId'],											  'session_key'=>$res['session_key'],
		  'thr_session' => $thr_session											];

	  $id = Db::name('user')->where(['open_id'=>$ret['openId']])->value('id');
	  		
	  if($id){
		$ins = Db::name('user')->where(['open_id'=>$ret['openId']])->update($data);
	  }else{
		$ins  = Db::name('user')->insert($data);								      }
	  if($ins){
	      return $thr_session;
          }
     }


     private function decryUser($iv,$session_key,$encData,$appId){
     	  import('wxBizDataCrypt',EXTEND_PATH);

	  $pc = new \WXBizDataCrypt($appId, $session_key);
	  $errCode = $pc->decryptData($encData, $iv, $data );
	  return $data;
     }
}
