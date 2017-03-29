<?php
/**
 * Created by PhpStorm.
 * User: lixiaoyun
 * Date: 29/03/2017
 * Time: 9:43 AM
 */
use \NoahBuscher\Macaw\Macaw;

Macaw::get('/',function (){
    echo "Hello Aven~";
});

Macaw::get('/api','IndexController@index');

Macaw::$error_callback=function (){
    throw new Exception("controller and action not found");
};
Macaw::dispatch();
