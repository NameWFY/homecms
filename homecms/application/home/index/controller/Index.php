<?php
namespace app\index\controller;
use think\Controller;
//use app\index\controller\Base;

class Index  extends Controller
{
    public function index()
    {
    	
        return $this->fetch('index');
    }
}

