<?php

/**
 * Created by PhpStorm.
 * User: lixiaoyun
 * Date: 29/03/2017
 * Time: 10:14 AM
 */
abstract class BaseController
{
    public $assign=[];
    private static $templateSuffix=".html";

    public function __construct()
    {

    }

    /**
     * 模板文件加载
     * @param  [type] $file 模板文件
     * @return [type]       [description]
     */
    public function display($file)
    {
        $loader = new \Twig_Loader_Filesystem(BASE_PATH.'/'.APP_PATH . '/view');
        $twig = new \Twig_Environment($loader, array(
            'debug'=>IS_DEBUG,
            'cache' => BASE_PATH.'/cache',
        ));
        $template=$twig->loadTemplate($file.self::$templateSuffix);
        $template->display($this->assign);
    }
    /**
     * 变量参数绑定
     * @param  [type] $var   变量
     * @param  [type] $value 值
     * @return [type]        [description]
     */
    public function assign($var,$value=null)
    {
        if(is_array($var)) {
            foreach($var as $key => $val) {
                $this->assign[$key] = $val;
            }
        } else {
            $this->assign[$var] = $value;
        }
    }
}