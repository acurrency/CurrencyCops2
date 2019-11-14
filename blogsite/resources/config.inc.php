<?php

$config['db_host']  = 'localhost';
$config['db_user']  = 'cphillips9';
$config['db_pass']  = 'G3t2work!';
$config['db_name']  = 'blog';

foreach($config as $k => $v){
    define(strtoupper($k),$v);
}