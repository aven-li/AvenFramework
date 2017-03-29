<?php
/**
 * Created by PhpStorm.
 * User: lixiaoyun
 * Date: 29/03/2017
 * Time: 10:42 AM
 */
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule=new Capsule();

$capsule->addConnection(require '../config/database.php');
$capsule->bootEloquent();