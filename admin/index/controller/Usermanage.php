<?php
namespace app\index\controller;
header("content-type:text/html;charset=utf-8");
use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;
use app\index\controller\Base;


class Usermanage  extends Base
{


    public function indexadd()
    {
    	$houseInfo = Db::table('housing')->select();
    	return $this->fetch('indexadd',['houseInfo'=>$houseInfo]); 
    }

    public function indexadddo()
    {
    	$userInfo = Session::get("userInfo");
		$NewuserInfo = unserialize($userInfo);
		$userName = $NewuserInfo['adm_userName'];
    	$info = input('post.');
    	$info['hou_id']=implode(',', $info['hou_id']);
    	$info['use_time']=time();
    	$info['use_deal']='0';
    	$info['use_visit']=time();
    	$info['adm_id']= self::userInfo()['adm_id'];
    	$UserInfo = Db::table('userlist')->insert($info);
    	if($UserInfo){
    		  $this->success('添加成功',url('index/Usermanage/show')); 
    	}else{
    		  $this->success('添加失败',url('index/Usermanage/indexadd')); 
    	}
    }

    public function show()
    {
        $HouInfo = Db::table('landlord')->select();

        return $this->fetch('show',['HouInfo'=>$HouInfo]);
    }

    public function hou_name($hou_id)
    {
        $hounam = "";
        $houname = Db::table('housing')->where(['hou_id'=>array('in',$hou_id)])->field('hou_name')->select();
        if(count($houname)==1){
            return $houname[0]['hou_name'];
        }else {
           $hounam = "";
           foreach($houname as $k=>$v){
                $hounam.=$v['hou_name'].",";
           }
            $hounam = trim($hounam,',');
           return $hounam;
        }
    }


    public function uplodeCon()
    {
        $content = input('post.content');
        $use_id = input('post.use_id');
        $PostReturn = Db::table('userlist')->where(['use_id'=>$use_id])->update(['use_content'=>$content,'upd_time'=>time()]);
        if($PostReturn){
            $data['mgs']='1';
            $data['time']=date('Y-m-d H:i:s',time());
        }else{
            $data['time']=date('Y-m-d H:i:s',time());
            $data['mgs']='2';
        }
        echo json_encode($data);
    }

    public function deleteZi()
    {
        $lan_id = input('post.lan_id');
        $PostReturn = Db::table('landlord')->where(['lan_id'=>$lan_id])->delete();
        if($PostReturn){
            $data['mgs']='1';
        }else{
            $data['mgs']='2';
        }
        echo json_encode($data);
    }


    public function HFZI()
    {
       $lan_id = input('post.lan_id');
       $lan_type = input('post.lan_type');
        
       $PostReturn = Db::table('landlord')->where(['lan_id'=>$lan_id])->update(['lan_type'=>$lan_type]);
        if($PostReturn){
            $data['mgs']='1';
        }else{
            $data['mgs']='2';
        }
        echo json_encode($data);
    }


    public function updateZI()
    {
        $use_id = input('get.use_id'); 
        $houseInfo = Db::table('housing')->select();
        $DbFind = Db::table('userlist')->where(['use_id'=>$use_id])->find();
        return $this->fetch('updateZI',['DbFind'=>$DbFind,'houseInfo'=>$houseInfo]);
    }




    public function updateZIdo()
    {
        $use_id = input('get.use_id');

        $userInfo = Session::get("userInfo");
        $NewuserInfo = unserialize($userInfo);
        $userName = $NewuserInfo['adm_userName'];
        $info = input('post.');
        $info['hou_id']=implode(',', $info['hou_id']);
        $info['use_time']=time();
        $info['use_deal']='0';
        $info['use_visit']=time();
        $info['adm_id']= self::userInfo()['adm_id'];
        $UserInfo = Db::table('userlist')->where(['use_id'=>$use_id])->update($info);
        if($UserInfo){
              $this->success('修改成功',url('index/Usermanage/show')); 
        }else{
              $this->success('修改失败',url('index/Usermanage/updateZI')); 
        }
    }  

    public function landlord()
    {
        $HouInfo = Db::table('landlord')->where(['lan_typeOn'=>'1'])->select();
       // var_dump($HouInfo);die;
        return $this->fetch('landlord',['HouInfo'=>$HouInfo]);
    }   



}