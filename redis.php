<?php

$redis = new Redis();  
$redis->connect("192.168.3.126","6379");  // php客户端设置的ip及端口  

/* 存储一个值 */ 

$redis->set("say","Hello World");  
echo $redis->get("say");     //应输出Hello World  

/* 存储多个值 */  

$array = array( 'first_key'  => 'first_val',  
                'second_key' => 'second_val',  
                'third_key'  => 'third_val'); 
$redis->mset($array);  

$array_get = array('first_key', 'second_key', 'third_key'); 
var_dump($redis->mget($array_get)); 

?>