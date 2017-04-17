<?php
require_once 'medoo/Medoo.php';
use Medoo\Medoo;
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => '',
    'server' => '',
    'username' => '',
    'password' => '',
    'charset' => 'utf8'
]);
