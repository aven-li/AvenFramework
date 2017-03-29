<?php

/**
 * Created by PhpStorm.
 * User: lixiaoyun
 * Date: 29/03/2017
 * Time: 10:15 AM
 */
class IndexController extends BaseController
{
    public function index(){
        $this->assign('info',"this is info");
        $this->assign('mvc',"this is mvc");
        $this->display('Api/index');
//       $article=Article::first();
//        print_r($article);
    }


}