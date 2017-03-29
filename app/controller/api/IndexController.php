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
        //Twig Demo
        $this->assign('info',"this is info");
        $this->assign('mvc',"this is mvc");
        $this->display('Api/index');
        //ORM Model Demo
        $article=Article::first();
        dump($article);
    }

}