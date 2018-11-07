<?php

namespace app\index\controller;

use think\Controller;
use think\Db;

class HelloWorld extends Controller
{
    public function index()
    {
        return 'hello';
    }
}
