<?php 
namespace app\index\model;
use \think\Model;
use think\Db;
use think\Session;
use think\Cookie;


class adminLogin extends Model
{

    public function selectOne($Info)
    {
        $info = Db::table('adminLogin')->where($Info)->find();
        if($info){
            Session::set("userInfo",serialize($info));
            return '1';
        }else{
            return '2';
        }
    }
 
   
}









?>