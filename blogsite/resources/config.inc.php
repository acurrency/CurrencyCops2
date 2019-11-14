<?php

$config['db_host']  = 'localhost';
$config['db_user']  = 'ms7i273jabfw';
$config['db_pass']  = 'G3t2work!';
$config['db_name']  = 'blog';

foreach($config as $k => $v){
    define(strtoupper($k),$v);
}