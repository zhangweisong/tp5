<?php

namespace app\index\controller;

use think\Controller;
use think\Db; 

class Index extends Controller
{
    public function hello($name='world',$city='')
    {
        
        dd(input('name'));
    }
}
